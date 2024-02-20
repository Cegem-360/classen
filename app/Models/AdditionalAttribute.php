<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdditionalAttribute extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'primo_finishing',
        '3d_finishing',
        'iridium_finishing',
        'cpl_laminate',
        'hpl_laminate',
        'lacquered',
        'room_door',
        'bathroom_door',
        'interior_entrance_door',
        'technical_doors',
        'fire_door',
        'anti_burglary_door',
        'soundproof_door',
        'sliding_door',
        'modern',
        'classic',
        'loft',
        'retro',
        'rustic',
        'width_60',
        'width_70',
        'width_80',
        'width_90',
        'width_100',
        'width_110',
        'width_120',
        'panel_doors',
        'framed_doors',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    protected $casts = [
        'primo_finishing' => 'boolean',
        '3d_finishing' => 'boolean',
        'iridium_finishing' => 'boolean',
        'cpl_laminate' => 'boolean',
        'hpl_laminate' => 'boolean',
        'lacquered' => 'boolean',
        'room_door' => 'boolean',
        'bathroom_door' => 'boolean',
        'interior_entrance_door' => 'boolean',
        'technical_doors' => 'boolean',
        'fire_door' => 'boolean',
        'anti_burglary_door' => 'boolean',
        'soundproof_door' => 'boolean',
        'sliding_door' => 'boolean',
        'modern' => 'boolean',
        'cpl_laminclassicate' => 'boolean',
        'loft' => 'boolean',
        'retro' => 'boolean',
        'rustic' => 'boolean',
        'width_60' => 'boolean',
        'width_70' => 'boolean',
        'width_80' => 'boolean',
        'width_90' => 'boolean',
        'width_100' => 'boolean',
        'width_110' => 'boolean',
        'width_120' => 'boolean',
        'panel_doors' => 'boolean',
        'framed_doors' => 'boolean',
    ];
}
