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
        Schema::create('profile_teachers', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('id_user'); // Kolom foreign key
                $table->string('photo')->nullable();
                $table->string('nama_lengkap')->nullable();
                $table->string('jenis_kelamin')->nullable();
                $table->string('nik')->nullable();
                $table->string('no_kk')->nullable();
                $table->string('npwp')->nullable();
                $table->string('tempat_lahir')->nullable();
                $table->date('tanggal_lahir')->nullable();
                $table->text('alamat_lengkap')->nullable();
                $table->string('desa')->nullable();
                $table->string('rt')->nullable();
                $table->string('rw')->nullable();
                $table->string('kecamatan')->nullable();
                $table->string('kota_kabupaten')->nullable();
                $table->string('kode_pos')->nullable();
                $table->string('email_aktif')->nullable();
                $table->string('no_hp')->nullable();
                $table->string('lulusan_terakhir')->nullable();
                $table->string('tahun_lulus')->nullable();
                $table->string('jurusan')->nullable();
                $table->string('universitas')->nullable();
                $table->date('mulai_mengajar')->nullable();
                $table->string('first_password')->nullable();
                $table->string('status_profile')->nullable();
                $table->timestamps();

                // Menambahkan foreign key constraint
                $table->foreign('id_user')->references('id')->on('users');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_teachers');
    }
};
