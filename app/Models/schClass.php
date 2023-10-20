<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schClass extends Model
{
    use HasFactory;
    protected $fillable = [
        "SchGrade",
        "SchClass",
        "SchClassStatus",
    ];
}
