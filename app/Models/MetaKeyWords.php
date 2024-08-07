<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaKeyWords extends Model
{
    use HasFactory;
    protected $fillable = [
        'collection_name',
        'meta_description',
        'key_words'
    ];

}
