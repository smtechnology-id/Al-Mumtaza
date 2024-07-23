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
        Schema::create('violation_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('category_id');
            $table->text('description');
            $table->text('photo')->nullable();
            $table->integer('point_deduction');
            $table->enum('status_report', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        
            $table->foreign('student_id')->references('id_user')->on('profile_students')->onDelete('cascade');
            $table->foreign('teacher_id')->references('id_user')->on('profile_teachers')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('violation_category')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('violation_reports');
    }
};
