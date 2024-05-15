<?php

namespace App\Models;

use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sitemap\Contracts\Sitemapable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Door extends Model  implements Sitemapable
{
    use HasFactory;

    protected $fillable = [
        'id',
        'product_id',
        'price',
        'name',
        'img_url',
        'tag',
        'tag_img_url',
        'tag_category',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function colors(): HasMany
    {
        return $this->hasMany(Color::class, 'color_door');
    }
    public function toSitemapTag(): Url
    {
        // Simple return:

        // Return with fine-grained control:
        return Url::create(route('door.show', $this))
            ->setLastModificationDate(Carbon::create($this->updated_at))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1);
    }
}
