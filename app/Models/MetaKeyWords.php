<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class MetaKeyWords extends Model
{
    use HasFactory;

    protected $fillable = [
        'collection_name',
        'meta_description',
        'key_words',
    ];
}
