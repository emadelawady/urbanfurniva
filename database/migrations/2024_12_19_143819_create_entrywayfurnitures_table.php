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
        Schema::create('entrywayfurnitures', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('weight');
            $table->string('color');
            $table->string('capacity');
            $table->string('material');
            $table->string('upholstery_material');
            $table->string('warranty');
            $table->text('content');
            $table->string('product_image');
            $table->string('model')->nullable();
            $table->integer('furniture_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrywayfurnitures');
    }
};
