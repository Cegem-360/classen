<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class QuotationItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'door_id',
        'quotation_id',
        'frame',
        'color',
        'quantity',
    ];

    public function door()
    {
        return $this->belongsTo(Door::class);
    }

    public function quotation()
    {
        return $this->belongsTo(Quotation::class);
    }
}
