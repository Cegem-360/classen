<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Tag
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static Builder|Tag newModelQuery()
 * @method static Builder|Tag newQuery()
 * @method static Builder|Tag query()
 * @method static Builder|Tag whereCreatedAt($value)
 * @method static Builder|Tag whereId($value)
 * @method static Builder|Tag whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
final class Tag extends Model
{
    use HasFactory;
}
