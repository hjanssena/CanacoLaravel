<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comercio extends Model
{
    protected $fillable = [
        'nombre_comercio',
        'nombre_contacto',
        'telefono',
        'rfc_comercio',
        'direccion',
        'eMail',
        'aceptado',
        'rechazado',
    ];
}
