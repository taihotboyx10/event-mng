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
        Schema::create('user_select_items', function (Blueprint $table) {
            $table->id();

            $table->string('select_item_name', 50);
            $table->unsignedTinyInteger('sequence');
            $table->string('select_item_dsp_name', 50);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_select_items');
    }
};
