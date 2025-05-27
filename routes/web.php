<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GanadorController;
use App\Http\Controllers\ComercioController;

Route::get('/ganadores', [GanadorController::class, 'index_ganadores'])->name('ganadores');
Route::post('/ganadores/{id}/aprobar', [GanadorController::class, 'aprobar'])->name('ganadores.aprobar');
Route::post('/ganadores/{id}/rechazar', [GanadorController::class, 'rechazar'])->name('ganadores.rechazar');
Route::get('/ganadores/generar', [GanadorController::class, 'gen_ganadores'])->name('ganadores.generar');
Route::get('/ganadores/pdf', [GanadorController::class, 'downloadGanadoresPdf'])->name('ganadores.pdf');

Route::redirect('/', '/comercios');
Route::get('/comercios', [ComercioController::class, 'index_comercios'])->name('comercios');