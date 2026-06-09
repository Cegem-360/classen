<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'door_id',
    'quotation_id',
    'frame',
    'color',
    'quantity',
])]
final class QuotationItem extends Model
{
    use HasFactory;

    public function door()
    {
        return $this->belongsTo(Door::class);
    }

    public function quotation()
    {
        return $this->belongsTo(Quotation::class);
    }
}
