<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'rut',
        'nombre',
        'apellido',
        'email',
        'fecha_nac',
        'password'
    ];
}
