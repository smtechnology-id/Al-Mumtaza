<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileTeacher extends Model
{
    use HasFactory;
    protected $table = 'profile_teachers';

    protected $fillable = [
        'id_user',
        'photo',
        'nama_lengkap',
        'jenis_kelamin',
        'nik',
        'no_kk',
        'npwp',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat_lengkap',
        'desa',
        'rt',
        'rw',
        'kecamatan',
        'kota_kabupaten',
        'kode_pos',
        'email_aktif',
        'no_hp',
        'lulusan_terakhir',
        'tahun_lulus',
        'universitas',
        'mulai_mengajar',
        'status_profile',
        'first_password',
        'teacher_admin',
        // tambahkan kolom lain yang ingin Anda izinkan untuk diisi secara massal
    ];

    // Jika Anda ingin mendefinisikan relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
