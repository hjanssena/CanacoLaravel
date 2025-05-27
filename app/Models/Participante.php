<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
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

    public function comercio()
    {
        return $this->belongsTo(Comercio::class);
    }
}
