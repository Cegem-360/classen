<?php

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
        Schema::create('colors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200)->nullable()->default('');
            $table->string('small_img', 1000)->nullable()->default('resources/img/placeholder.webp');
            $table->string('big_img', 1000)->nullable()->default('resources/img/placeholder.webp');
            $table->string('material_category', 500)->nullable()->default('');
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreignId('door_id')->references('id')->on('doors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colors');
    }
};
