<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schclass extends Model
{
    use HasFactory;
    protected $fillable = [
      'id',
      'schGrade',
      'schClass',
      'schStatus'  
    ];
}
