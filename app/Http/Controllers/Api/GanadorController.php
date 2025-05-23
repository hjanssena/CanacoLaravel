<?php

namespace App\Http\Controllers\Api;
use App\Models\Ganadores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GanadorController extends Controller
{
    public function index()
    {
        return Ganadores::all();
    }

    public function store(Request $request)
    {

    }

    public function show(Ganadores $ganador)
    {
        return $ganador;
    }

    public function update(Request $request, Ganadores $ganador)
    {
        $validated = $request->validate([
            'nombre' => 'sometimes|required|string',
            'apellidos' => 'sometimes|required|string',
            'direccion' => 'sometimes|required|string',
            'eMail' => 'sometimes|required|string',
            'monto' => 'sometimes|required|double',
            'fecha_compra' => 'sometimes|required|date',
            'telefono' => 'sometimes|required|string',
            'ticket' => 'sometimes|required|string',
            'aprobado' => 'sometimes|required|boolean',
        ]);

        $ganador->update($validated);
        return $ganador;
    }

    public function destroy(Ganadores $ganador)
    {

    }
}
