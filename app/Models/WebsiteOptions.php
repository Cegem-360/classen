<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteOptions extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'img_url', 'text', 'title', 'page', 'link_title'];
}
