<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoDeUsuarioApiController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('tipoDeUsuarios')->group(function () {
    Route::get('list/{totalPage?}/{currentPage?}', [TipoDeUsuarioApiController::class, 'getListTipoDeUsuario']);
    Route::get('/{id}', [TipoDeUsuarioApiController::class, 'getTipoDeUsuario']);
    Route::delete('/{id}', [TipoDeUsuarioApiController::class, 'deleteTipoDeUsuario']);
    Route::post('/', [TipoDeUsuarioApiController::class, 'createTipoDeUsuario']);
    Route::put('/', [TipoDeUsuarioApiController::class, 'updateTipoDeUsuario']);
});