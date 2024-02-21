<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotationItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'door_id',
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
