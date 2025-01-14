<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViolationCategory extends Model
{
    use HasFactory;
    protected $table = 'violation_category';
    protected $fillable = [
        'nama_kategori',
        'deskripsi',
        'bobot_point',
    ];
}
