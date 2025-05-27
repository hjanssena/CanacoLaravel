<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GanadorController;

Route::get('/ganadores', [GanadorController::class, 'index_ganadores'])->name('ganadores');
Route::post('/ganadores/{id}/aprobar', [GanadorController::class, 'aprobar'])->name('ganadores.aprobar');
Route::post('/ganadores/{id}/rechazar', [GanadorController::class, 'rechazar'])->name('ganadores.rechazar');
Route::post('/ganadores/generar', [GanadorController::class, 'gen_ganadores'])->name('ganadores.generar');
Route::get('/ganadores/pdf', [GanadorController::class, 'downloadGanadoresPdf'])->name('ganadores.pdf');