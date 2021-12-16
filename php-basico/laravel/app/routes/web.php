<?php

use App\Http\Controllers\AssinaturaController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\PerfilController;
use App\Models\Documentos;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Node\Block\Document;

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

Route::get('/perfil',[PerfilController::class, 'index']); 

Route::get('/documentos',[DocumentoController::class, 'index'])->name('documento.index'); 
Route::get('/documentos/novo',[DocumentoController::class, 'novo'])->name('documento.novo');
Route::get('/documentos/{id}',[DocumentoController::class, 'exibir'])->name('documento.exibir');
Route::post('/documentos',[DocumentoController::class, 'inserir'])->name('documento.inserir');
Route::delete('/documentos/{id}',[DocumentoController::class, 'deletar'])->name('documento.deletar');

Route::get('/assinaturas',[AssinaturaController::class, 'index'])->name('assinaturas.index');
Route::get('/assinaturas/novo',[AssinaturaController::class, 'novo'])->name('assinaturas.novo'); 
Route::get('/assinaturas/{id}',[AssinaturaController::class, 'exibir'])->name('assinaturas.exibir'); 
Route::post('/assinaturas',[AssinaturaController::class, 'inserir'])->name('assinaturas.inserir');
Route::delete('/assinaturas/{id}',[AssinaturaController::class, 'deletar'])->name('assinaturas.deletar');