<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Date;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;

#[Fillable([
    'id',
    'product_id',
    'price',
    'name',
    'img_url',
    'tag',
    'tag_img_url',
    'tag_category',
])]
final class Door extends Model implements Sitemapable
{
    use HasFactory;

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
            ->setLastModificationDate(Date::create($this->updated_at))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1);
    }
}
