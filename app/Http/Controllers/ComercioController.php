<?php
namespace App\Http\Controllers;

use App\Models\Comercio;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Barryvdh\DomPDF\Facade\Pdf;

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

        public function aprobar($id)
    {
        $comer = Comercio::findOrFail($id);
        $comer->aceptado = true;
        $comer->rechazado = false;
        $comer->save();

        try {
            $resp = Http::withHeaders([
                'Authorization' => 'Bearer ' . config('services.supabase.function_key'),
                'Content-Type' => 'application/json',
            ])
                ->post(config('services.supabase.functions_url'), [
                    'record' => [
                        'eMail' => $comer->eMail,
                        'aprobado' => true,
                    ],
                ]);

            if ($resp->failed()) {
                Log::error('send-comercio-email function failed', [
                    'status' => $resp->status(),
                    'body' => $resp->body(),
                ]);
                return back()->with('warning', 'Aprobado, pero fallo el envío de email.');
            }
        } catch (\Exception $e) {
            Log::error('Error calling Supabase function', ['exception' => $e]);
            return back()->with('warning', 'Aprobado, pero ocurrió un error al enviar email.');
        }

        return back()->with('success', 'Comercio aprobado.');
    }

    public function rechazar($id)
    {
        $comer = Comercio::findOrFail($id);
        $comer->aceptado = false;
        $comer->rechazado = true;
        $comer->save();

        return back()->with('error', 'Comercio rechazado.');
    }

    public function downloadPdf()
    {

        $comerciosAprobados = Comercio::where('rechazado', false)->get();
        $comerciosRechazados = Comercio::where('rechazado', true)->get();

        $pdf = Pdf::loadView('comercios.pdf', compact('comerciosAprobados', 'comerciosRechazados'));
        return $pdf->download('aprobados-rechazados.pdf');
    }
}