<?php

// app/Models/PointStudent.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointStudent extends Model
{
    use HasFactory;

    protected $table = 'point_students';

    protected $fillable = [
        'id_user',
        'total_poin',
    ];

    // Relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
