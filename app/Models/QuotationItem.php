<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    /**
     * @return BelongsTo<Door, $this>
     */
    public function door(): BelongsTo
    {
        return $this->belongsTo(Door::class);
    }

    /**
     * @return BelongsTo<Quotation, $this>
     */
    public function quotation(): BelongsTo
    {
        return $this->belongsTo(Quotation::class);
    }
}
