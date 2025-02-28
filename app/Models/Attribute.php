<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

final class Attribute extends Model
{
    use HasFactory;

    public $fillable = [
        'id', 'name', 'value', 'slug',
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'attribute_category');
    }
}
