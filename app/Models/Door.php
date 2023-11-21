<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Door
 *
 * @property int $id
 * @property string $name
 * @property string $img_url
 * @property string $tag
 * @property string $tag_img_url
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Color> $colors
 * @property-read int|null $colors_count
 * @method static \Database\Factories\DoorFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Door newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Door newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Door query()
 * @method static \Illuminate\Database\Eloquent\Builder|Door whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Door whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Door whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Door whereImgUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Door whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Door whereTag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Door whereTagImgUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Door whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Door extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name', 'img_url', 'tag', 'tag_img_url'
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function colors(): HasMany
    {
        return $this->hasMany(Color::class, 'color_door');
    }
}
