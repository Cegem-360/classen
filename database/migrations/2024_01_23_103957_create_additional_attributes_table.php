<?php

declare(strict_types=1);

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

        Schema::create('additional_attributes', function (Blueprint $table): void {
            $table->id();
            $table->foreignIdFor(Category::class)->onDelete('cascade');
            $columns = [
                'primo_finishing',
                '3d_finishing',
                'iridium_finishing',
                'cpl_laminate',
                'hpl_laminate',
                'lacquered',
                'room_door',
                'inner_door',
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
                'wood_door',
            ];

            foreach ($columns as $column) {
                $table->boolean($column)->default(false);
            }

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
