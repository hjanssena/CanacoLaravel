<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ComercioController;
use App\Http\Controllers\Api\GanadorController;
use App\Http\Controllers\Api\ParticipanteController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/comercios', ComercioController::class);

Route::apiResource('/ganadores', GanadorController::class);

Route::apiResource('/participantes', ParticipanteController::class);

Route::get('/gen_ganadores', function (Request $request) {
    return $request->user();
});