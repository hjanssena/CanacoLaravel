<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ganadores extends Model
{
    protected $fillable = [
        'nombre',
        'apellidos',
        'direccion',
        'eMail',
        'monto',
        'fecha_compra',
        'telefono',
        'ticket',
        'comercio_id',
    ];

}
