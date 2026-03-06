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
        Schema::table('visitors', function (Blueprint $table) {
            $table->renameColumn('steakholder_type', 'stakeholder_type');
            $table->renameColumn('companition_adult_count', 'companion_adult_count');
            $table->renameColumn('companition_child_count', 'companion_child_count');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
