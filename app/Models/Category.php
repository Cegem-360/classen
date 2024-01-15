<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Category extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'category_id', 'technical_parameter', 'additional_options', 'door_specification', 'gallery_imgs'];

    public function doors(): HasMany
    {
        return $this->hasMany(Door::class, 'category_id', 'id');
    }

    public function attributes(): BelongsToMany
    {
        return $this->belongsToMany(Attribute::class, 'attribute_category');
    }

    /**
     * Get all of the parameters for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parameters(): HasMany
    {
        return $this->hasMany(Parameter::class);
    }
    protected $casts = [
        'technical_parameter' => 'array',
        'additional_options' => 'array',
        'door_specification' => 'array',
        'gallery_imgs' => 'array',
    ];
}
