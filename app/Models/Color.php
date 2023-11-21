<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\Color
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $small_img
 * @property string|null $big_img
 * @property string|null $material_category
 * @property int $category_id
 * @property int $door_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category $category
 * @property-read \App\Models\Door $door
 * @method static \Database\Factories\ColorFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Color newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Color newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Color query()
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereBigImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereDoorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereMaterialCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereSmallImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Color extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name', 'small_img', 'big_img', 'material_category', 'category_id', 'door_id'
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
