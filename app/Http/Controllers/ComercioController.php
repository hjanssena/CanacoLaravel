<?php
namespace App\Http\Controllers;

use App\Models\Comercio;

class ComercioController
{
    public function index_comercios()
    {
        $comercios = Comercio::where('rechazado', false)
            ->orderBy('id')
            ->paginate(10);

        $approvedCount = Comercio::where('rechazado', false)
            ->where('aceptado', true)
            ->count();

        return view('comercios', compact('comercios', 'approvedCount'));
    }
}