<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;

#[Fillable([
    'title',
    'slug',
    'img_url',
    'content',
])]
final class Blog extends Model implements Sitemapable
{
    use HasFactory;

    public function toSitemapTag(): Url
    {
        return Url::create(route('blog.show', $this->slug))
            ->setLastModificationDate(Date::create($this->updated_at))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            ->setPriority(0.6);
    }
}
