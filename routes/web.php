<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('inicio');

//Rotas para o ControllerElementos

Route::get('/elementos', [App\Http\Controllers\ControllerElemento::class, 'index'])->name('exibeElemento');
Route::get('/elementos/novo', [App\Http\Controllers\ControllerElemento::class, 'create'])->name('novoElemento');
Route::post('/elementos', [App\Http\Controllers\ControllerElemento::class, 'store'])->name('gravaNovoElemento');
Route::get('/elementos/edita/{id}', [App\Http\Controllers\ControllerElemento::class, 'edit'])->name('editaElemento');
Route::post('/elementos/{id}', [App\Http\Controllers\ControllerElemento::class, 'update'])->name('atualizaElemento');
Route::get('/elementos/apagar/{id}', [App\Http\Controllers\ControllerElemento::class, 'destroy'])->name('deletaElemento');
Route::get('/pesquisaElementos', [App\Http\Controllers\ControllerElemento::class, 'pesquisaElementos'])->name('pesquisaElemento');
Route::get('/procuraElementos', [App\Http\Controllers\ControllerElemento::class, 'procuraElementos'])->name('procuraElemento');

//Rotas para o ControllerPrincesas

Route::get('/princesas', [App\Http\Controllers\ControllerPrincesa::class, 'index'])->name('exibePrincesas');
Route::get('/princesas/novo', [App\Http\Controllers\ControllerPrincesa::class, 'create'])->name('novaPrincesas');
Route::post('/princesas', [App\Http\Controllers\ControllerPrincesa::class, 'store'])->name('gravaNovaPrincesas');
Route::get('/princesas/edita/{id}', [App\Http\Controllers\ControllerPrincesa::class, 'edit'])->name('editaPrincesas');
Route::post('/princesas/{id}', [App\Http\Controllers\ControllerPrincesa::class, 'update'])->name('atualizaPrincesas');
Route::get('/princesas/apagar/{id}', [App\Http\Controllers\ControllerPrincesa::class, 'destroy'])->name('deletaPrincesas');
Route::get('/pesquisaPrincesas', [App\Http\Controllers\ControllerPrincesa::class, 'pesquisaPrincesas'])->name('pesquisaPrincesas');
Route::get('/procuraPrincesas', [App\Http\Controllers\ControllerPrincesa::class, 'procuraPrincesas'])->name('procuraPrincesas');

//Rotas para o ControllerReino

Route::get('/reino', [App\Http\Controllers\ControllerReino::class, 'index'])->name('exibeReino');
Route::get('/reino/novo', [App\Http\Controllers\ControllerReino::class, 'create'])->name('novoReino');
Route::post('/reino', [App\Http\Controllers\ControllerReino::class, 'store'])->name('gravaNovoReino');
Route::get('/reino/edita/{id}', [App\Http\Controllers\ControllerReino::class, 'edit'])->name('editaReino');
Route::post('/reino/{id}', [App\Http\Controllers\ControllerReino::class, 'update'])->name('atualizaReino');
Route::get('/reino/apagar/{id}', [App\Http\Controllers\ControllerReino::class, 'destroy'])->name('deletaReino');
Route::get('/pesquisaReino', [App\Http\Controllers\ControllerReino::class, 'pesquisaReino'])->name('pesquisaReino');
Route::get('/procuraReino', [App\Http\Controllers\ControllerReino::class, 'procuraReino'])->name('procuraReino');


//Rotas para o ControllerTipos
Route::get('/tipo', [App\Http\Controllers\ControllerTipo::class, 'index'])->name('exibeTipo');
Route::get('/tipo/novo', [App\Http\Controllers\ControllerTipo::class, 'create'])->name('novoTipo');
Route::post('/tipo', [App\Http\Controllers\ControllerTipo::class, 'store'])->name('gravaNovoTipo');
Route::get('/tipo/edita/{id}', [App\Http\Controllers\ControllerTipo::class, 'edit'])->name('editaTipo');
Route::post('/tipo/{id}', [App\Http\Controllers\ControllerTipo::class, 'update'])->name('atualizaTipo');
Route::get('/tipo/apagar/{id}', [App\Http\Controllers\ControllerTipo::class, 'destroy'])->name('deletaTipo');
Route::get('/pesquisaTipo', [App\Http\Controllers\ControllerTipo::class, 'pesquisaTipo'])->name('pesquisaTipo');
Route::get('/procuraTipo', [App\Http\Controllers\ControllerTipo::class, 'procuraTipo'])->name('procuraTipo');

