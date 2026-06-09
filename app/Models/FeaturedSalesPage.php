<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
    'json_schema',
])]
final class FeaturedSalesPage extends Model
{
    use HasFactory;

    /**
     * Render the admin-defined JSON-LD as a safe, script-embeddable string.
     *
     * Returns null when the field is blank or does not contain a valid JSON
     * array/object. The JSON_HEX_TAG flag encodes "<" and ">" so an embedded
     * "</script>" cannot break out of the surrounding script tag.
     */
    public function renderedJsonLd(): ?string
    {
        if (blank($this->json_schema)) {
            return null;
        }

        $decoded = json_decode((string) $this->json_schema, true);

        return is_array($decoded)
            ? json_encode($decoded, JSON_HEX_TAG | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
            : null;
    }
}
