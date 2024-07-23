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
        Schema::table('profile_teachers', function (Blueprint $table) {
            $table->string('teacher_admin')->after('status_profile')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profile_teachers', function (Blueprint $table) {
            $table->dropColumn('teacher_admin');
        });
    }
};
