<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetPoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'set_point'
    ];
}
