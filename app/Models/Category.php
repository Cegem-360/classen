<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Category
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $category_id
 * @property array|null $door_specification
 * @property array|null $technical_parameter
 * @property array|null $additional_options
 * @property string|null $img_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Attribute> $attributes
 * @property-read int|null $attributes_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Door> $doors
 * @property-read int|null $doors_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Parameter> $parameters
 * @property-read int|null $parameters_count
 * @method static \Database\Factories\CategoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereAdditionalOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDoorSpecification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereImgUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereTechnicalParameter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Category extends Model
{

    use HasFactory;


    protected $fillable = ['id', 'name', 'category_id', 'technical_parameter', 'additional_options', 'door_specification'];



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
    ];
}
