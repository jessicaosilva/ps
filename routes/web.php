<?php

use App\Http\Controllers\TipoDeUsuarioWebController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastro', function () {
    return view('usuario');
})->name('cadastro');

Route::get('/listagem', function () {
    return view('listagem');
});

Route::prefix('tipoDeUsuarios')->group(function () {
    Route::get('/', [TipoDeUsuarioWebController::class, 'listTipoDeUsuario'])->name('tipoDeUsuario');
    Route::get('/new', [TipoDeUsuarioWebController::class, 'newTipoDeUsuario'])->name('cadastroTipoDeUsuario');
    Route::post('/', [TipoDeUsuarioWebController::class, 'createTipoDeUsuario'])->name('criarTipoDeUsuario');
    Route::get('/edit/{id}', [TipoDeUsuarioWebController::class, 'editTipoDeUsuario'])->name('exibirTipoDeUsuario');
    Route::put('/', [TipoDeUsuarioWebController::class, 'updateTipoDeUsuario'])->name('editarTipoDeUsuario');
    Route::get('/delete/{id}', [TipoDeUsuarioWebController::class, 'deleteTipoDeUsuario'])->name('excluirTipoDeUsuario');
});