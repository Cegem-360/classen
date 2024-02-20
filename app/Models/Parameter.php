<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Parameter
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Database\Factories\ParameterFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter query()
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class Parameter extends Model
{
    use HasFactory;
}
