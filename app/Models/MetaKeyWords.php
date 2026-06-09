<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'collection_name',
    'meta_description',
    'key_words',
])]
final class MetaKeyWords extends Model
{
    use HasFactory;
}
