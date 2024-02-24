<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoDeUsuarioController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('tipoDeUsuarios')->group(function () {
    Route::get('list/{totalPage?}/{currentPage?}', [TipoDeUsuarioController::class, 'getListTipoDeUsuario']);
    Route::get('/{id}', [TipoDeUsuarioController::class, 'getTipoDeUsuario']);
    Route::delete('/{id}', [TipoDeUsuarioController::class, 'deleteTipoDeUsuario']);
    Route::post('/', [TipoDeUsuarioController::class, 'createTipoDeUsuario']);
    Route::put('/', [TipoDeUsuarioController::class, 'updateTipoDeUsuario']);
});