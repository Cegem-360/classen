<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up(): void
    {

        Schema::create('additional_attributes', function (Blueprint $table) {
            $columns  = [
                'primo_finishing', '3d_finishing', 'iridium_finishing', 'cpl_laminate', 'hpl_laminate', 'lacquered', 'room_door', 'bathroom_door', 'interior_entrance_door', 'technical_doors', 'fire_door', 'anti_burglary_door', 'soundproof_door', 'sliding_door', 'modern', 'classic', 'loft', 'retro', 'rustic', 'width_60', 'width_70', 'width_80', 'width_90', 'width_100', 'width_110', 'width_120', 'panel_doors', 'framed_doors'
            ];
            $table->id();
            foreach ($columns as $column) {
                $table->string($column)->default('0');
            }
            $table->foreignIdFor(Category::class)->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additional_attributes');
    }
};
