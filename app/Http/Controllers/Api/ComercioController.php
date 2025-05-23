<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comercios;
use Illuminate\Http\Request;

class ComercioController extends Controller
{
    public function index()
    {
        return Comercios::all();
    }

    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'nombre_comercio' => 'required|string',
        //     'nombre_contacto' => 'required|string',
        //     'telefono' => 'required|string',
        //     'rfc_comercio' => 'required|string',
        //     'direccion' => 'required|string',
        //     'eMail' => 'required|email',
        //     'aceptado' => 'required|boolean',
        //     'rechazado' => 'required|boolean',
        // ]);

        // return Comercios::create($validated);
    }

    public function show(Comercios $comercio)
    {
        return $comercio;
    }

    public function update(Request $request, Comercios $comercio)
    {
        $validated = $request->validate([
            'nombre_comercio' => 'sometimes|required|string',
            'nombre_contacto' => 'sometimes|required|string',
            'telefono' => 'sometimes|required|string',
            'rfc_comercio' => 'sometimes|required|string',
            'direccion' => 'sometimes|required|string',
            'eMail' => 'sometimes|required|email',
            'aceptado' => 'sometimes|required|boolean',
            'rechazado' => 'sometimes|required|boolean',
        ]);

        $comercio->update($validated);
        return $comercio;
    }

    public function destroy(Comercios $comercio)
    {
        // $comercio->delete();
        // return response()->noContent();
    }
}
