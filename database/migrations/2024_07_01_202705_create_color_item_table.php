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
        Schema::create('color_item', function (Blueprint $table) {
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('item_id');
            $table->timestamps();

            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');

            $table->primary(['color_id', 'item_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('color_item');
    }
};
