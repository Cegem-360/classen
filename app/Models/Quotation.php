<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable([
    'id',
    'session_id',
    'first_name',
    'last_name',
    'email',
    'phone',
    'message',
])]
final class Quotation extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function items()
    {
        return $this->hasMany(QuotationItem::class);
    }
}
