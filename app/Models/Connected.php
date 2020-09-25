<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connected extends Model
{
    use HasFactory;

    protected $table = 'connected';

    public $timestamps = true;

    protected $fillable = [
        'id_ej',
        'id_ej1',
        'id_ej2',
        'id_ej3',
        'id_ej4',
        'customer_name',
        'customer_gap',
        'customer_information',
        'customer_phone',
        'customer_email',
    ];
}
