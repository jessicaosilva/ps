<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/loginRebeca', function () {
    return view('login');
});

Route::get('/cadastro', function () {
    return view('usuario');
})->name('cadastro');

Route::get('/listagem', function () {
    return view('listagem');
});

Route::prefix('tipoDeUsuarios')->group(function () {
    Route::get('/', [App\Http\Controllers\TipoDeUsuarioWebController::class, 'listTipoDeUsuario'])->name('tipoDeUsuario');
    Route::get('/new', [App\Http\Controllers\TipoDeUsuarioWebController::class, 'newTipoDeUsuario'])->name('cadastroTipoDeUsuario');
    Route::post('/', [App\Http\Controllers\TipoDeUsuarioWebController::class, 'createTipoDeUsuario'])->name('criarTipoDeUsuario');
    Route::get('/edit/{id}', [App\Http\Controllers\TipoDeUsuarioWebController::class, 'editTipoDeUsuario'])->name('exibirTipoDeUsuario');
    Route::put('/', [App\Http\Controllers\TipoDeUsuarioWebController::class, 'updateTipoDeUsuario'])->name('editarTipoDeUsuario');
    Route::get('/delete/{id}', [App\Http\Controllers\TipoDeUsuarioWebController::class, 'deleteTipoDeUsuario'])->name('excluirTipoDeUsuario');
});
    

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
