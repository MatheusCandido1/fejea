<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ej extends Model
{
    
    protected $table = 'ej';

    use HasFactory;

    protected $fillable = [
        'id','name'
    ];
}
