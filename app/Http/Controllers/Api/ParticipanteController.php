<?php

namespace App\Http\Controllers\Api;

use App\Models\Participantes;
use App\Models\Ganadores;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
    public function index()
    {
        return Participantes::all();
    }

    public function store(Request $request)
    {

    }

    public function show(Participantes $ganador)
    {
        return $ganador;
    }

    public function update(Request $request, Participantes $ganador)
    {

    }

    public function destroy(Participantes $ganador)
    {

    }

    public function gen_ganadores()
    {
        $ganadores = Participantes::inRandomOrder()->limit(130)->get();
        foreach ($ganadores as $ganador) {
            $data = $ganador->toArray();
            $data['aprobado'] = false; // Set aprobado to false
            Ganadores::create($data);
        }
        return $ganadores;
    }

}
