<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comercios extends Model
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
