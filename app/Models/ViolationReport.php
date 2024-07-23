<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViolationReport extends Model
{
    use HasFactory;
    protected $table = 'violation_reports';
    protected $fillable = ['student_id', 'teacher_id', 'category_id', 'description', 'photo', 'point_deduction', 'status_report'];

    public function student()
    {
        return $this->belongsTo(ProfileStudent::class, 'student_id', 'id_user');
    }
    public function teacher()
    {
        return $this->belongsTo(ProfileTeacher::class, 'teacher_id', 'id_user');
    }
    public function category()
    {
        return $this->belongsTo(ViolationCategory::class, 'category_id', 'id');
    }
    public function point()
    {
        return $this->belongsTo(PointStudent::class, 'student_id', 'id_user');
    }
}
