<?php

use App\Models\User;
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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class, 'user_id')->constrained()->onDelete('cascade');
            $table->unsignedTinyInteger('visitor_type');
            $table->unsignedTinyInteger('steakholder_type')->nullable();
            $table->unsignedTinyInteger('business_type');
            $table->string('family_name', 20);
            $table->string('given_name', 20);
            $table->string('family_name_kana', 30);
            $table->string('given_name_kana', 30);
            $table->string('company', 100)->nullable();
            $table->unsignedInteger('company_size_type')->nullable();
            $table->string('department', 100)->nullable();
            $table->unsignedTinyInteger('department_type')->nullable();
            $table->unsignedTinyInteger('job_position_type')->nullable();
            $table->string('post_code', 8);
            $table->unsignedTinyInteger('prefecture_id');
            $table->string('city', 30);
            $table->string('street_address', 50)->nullable();
            $table->string('building_info', 50)->nullable();
            $table->string('phone_number', 15);
            $table->string('notes', 200)->nullable();
            $table->string('referral_code', 3)->nullable();
            $table->unsignedTinyInteger('bee_attendance_type')->nullable();
            $table->string('issues', 100)->nullable();
            $table->unsignedTinyInteger('companition_adult_count')->default(0);
            $table->unsignedTinyInteger('companition_child_count')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
