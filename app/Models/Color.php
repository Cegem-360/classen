<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Color extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name', 'small_img', 'big_img', 'material_category', 'category_id', 'door_id',
    ];

    public function door(): BelongsTo
    {
        return $this->belongsTo(Door::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
