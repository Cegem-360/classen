<?php

namespace App\Models;

use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sitemap\Contracts\Sitemapable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model implements Sitemapable
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'category_id', 'technical_parameter', 'additional_options', 'door_specification', 'gallery_imgs', 'breadcrumb'];

    public function doors(): HasMany
    {
        return $this->hasMany(Door::class, 'category_id', 'id');
    }

    public function attributes(): BelongsToMany
    {
        return $this->belongsToMany(Attribute::class, 'attribute_category');
    }

    /**
     * Get all of the parameters for the Category
     */
    public function parameters(): HasMany
    {
        return $this->hasMany(Parameter::class);
    }

    /**
     * Get the AdditionalAttribute associated with the Category
     */
    public function AdditionalAttribute(): HasOne
    {
        return $this->hasOne(AdditionalAttribute::class, 'category_id', 'id');
    }

    protected $casts = [
        'technical_parameter' => 'array',
        'additional_options' => 'array',
        'door_specification' => 'array',
        'gallery_imgs' => 'array',
    ];
    public function toSitemapTag(): Url
    {
        // Simple return:

        // Return with fine-grained control:
        return Url::create(route('category.show', $this))
            ->setLastModificationDate(Carbon::create($this->updated_at))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1);
    }
}
