<?php

declare(strict_types=1);

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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->bigInteger('category_id')->nullable()->default(1);
            $table->json('door_specification')->nullable()->default(null);
            $table->json('technical_parameter')->nullable()->default(null);
            $table->json('additional_options')->nullable()->default(null);
            $table->json('gallery_imgs')->nullable()->default(null);
            $table->string('breadcrumb')->nullable()->default(null);
            $table->string('img_url')->nullable()->default('resources/img/placeholder.webp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
