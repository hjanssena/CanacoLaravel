<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ganador extends Model
{
    protected $fillable = [
        'participante_id',
        'aprobado',
        'rechazado',
    ];

    public function participante()
    {
        return $this->belongsTo(\App\Models\Participante::class);
    }
}
