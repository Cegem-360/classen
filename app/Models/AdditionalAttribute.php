<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdditionalAttribute extends Model
{
    use HasFactory;
    public $fillable = [
        'id', 'primo_finishing', '3d_finishing', 'iridium_finishing', 'cpl_laminate', 'hpl_laminate', 'lacquered', 'room_door', 'bathroom_door', 'interior_entrance_door', 'technical_doors', 'fire_door', 'anti_burglary_door', 'soundproof_door', 'sliding_door', 'modern', 'classic', 'loft', 'retro', 'rustic', 'width_60', 'width_70', 'width_80', 'width_90', 'width_100', 'width_110', 'width_120', 'panel_doors', 'framed_doors'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
