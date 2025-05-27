<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use App\Models\Ganador;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GanadorController
{
    public function index_ganadores()
    {
        $ganadores = Ganador::with('participante.comercio')
            ->where('rechazado', false)
            ->orderBy('id')
            ->paginate(10);

        $approvedCount = Ganador::where('rechazado', false)
            ->where('aprobado', true)
            ->count();

        return view('ganadores', compact('ganadores', 'approvedCount'));
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

        try {
            $resp = Http::withHeaders([
                'Authorization' => 'Bearer ' . config('services.supabase.function_key'),
                'Content-Type' => 'application/json',
            ])
                ->post(config('services.supabase.functions_url'), [
                    'record' => [
                        'eMail' => $ganador->participante->eMail,
                        'winner' => true,
                    ],
                ]);

            if ($resp->failed()) {
                Log::error('Resend-email function failed', [
                    'status' => $resp->status(),
                    'body' => $resp->body(),
                ]);
                return back()->with('warning', 'Aprobado, pero fallo el envío de email.');
            }
        } catch (\Exception $e) {
            Log::error('Error calling Supabase function', ['exception' => $e]);
            return back()->with('warning', 'Aprobado, pero ocurrió un error al enviar email.');
        }

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

    public function downloadGanadoresPdf()
    {
        $ganadores = Ganador::with(['participante.comercio'])
            ->where('aprobado', true)
            ->get();

        $pdf = Pdf::loadView('ganadores.pdf', compact('ganadores'));
        return $pdf->download('ganadores_aprobados.pdf');
    }
}