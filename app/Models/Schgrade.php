<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schgrade extends Model
{
    use HasFactory;
    protected $fillable = [
        'SchGrade',
        'SchClass',
        'SchStatus'];
}
