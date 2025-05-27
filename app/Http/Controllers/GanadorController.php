<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use App\Models\Ganador;

class GanadorController
{

    public function index_ganadores()
    {
        $ganadores = Ganador::with('participante')
            ->where('rechazado', false)
            ->paginate(10);

        return view('ganadores', compact('ganadores'));
    }

    public function gen_ganadores()
    {
        $rand_participantes = Participante::inRandomOrder()->get();
        $count = Ganador::where('rechazado', false)->count();

        $inserted = 0;
        foreach ($rand_participantes as $ganador) {
            if ($inserted + $count >= 130) {
                break;
            }
            $exists = Ganador::where('participante_id', $ganador->id)->exists();
            if (!$exists) {
                Ganador::create([
                    'participante_id' => $ganador->id,
                    'aprobado' => false,
                    'rechazado' => false,
                ]);
                $inserted++;
            }
        }

        return $this->index_ganadores();
    }

    public function aprobar($id)
    {
        $ganador = Ganador::findOrFail($id);
        $ganador->aprobado = true;
        $ganador->rechazado = false;
        $ganador->save();

        return back()->with('success', 'Ganador aprobado.');
    }

    public function rechazar($id)
    {
        $ganador = Ganador::findOrFail($id);
        $ganador->rechazado = true;
        $ganador->aprobado = false;
        $ganador->save();

        return back()->with('error', 'Ganador rechazado.');
    }
}