<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quotation extends Model
{
    use HasFactory, SoftDeletes;

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
