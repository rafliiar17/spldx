<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schconfig extends Model
{
    use HasFactory;
    protected $fillable = ['id','SchCode','SchValue'];
    // public function getRouteKeyName(){
    //     return 'id';
    // }
}

