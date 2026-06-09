<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'id',
    'author',
    'categories',
    'tags',
    'yoast_head',
    'meta',
    'featured_media',
    'comment_status',
    'ping_status',
    'sticky',
    'template',
    'format',
    'status',
    'date',
    'date_gmt',
    'guid',
    'modified',
    'modified_gmt',
    'slug',
    'status',
    'type',
    'link',
    'title',
    'seo_title',
    'content',
    'excerpt',
])]
final class FeaturedSalesPage extends Model {}
