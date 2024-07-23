<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileStudent extends Model
{
    protected $table = 'profile_students';

    protected $fillable = [
        'id_user',
        'nomor_siswa',
        'photo',
        'nama_lengkap',
        'jenis_kelamin',
        'nisn',
        'nik',
        'no_kk',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat_lengkap',
        'status_profile',
        // tambahkan atribut lain yang ingin Anda izinkan untuk diisi secara massal
    ];

    // Definisikan relasi antara ProfileStudent dan User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}

