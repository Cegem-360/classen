<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'session_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'message',
    ];

    public function items()
    {
        return $this->hasMany(QuotationItem::class);
    }
}
