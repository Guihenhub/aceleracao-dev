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
Route::get('/documentos/{id}',[DocumentoController::class, 'exibir'])->name('documento.exibir'); 

Route::get('/assinaturas',[AssinaturaController::class, 'index'])->name('assinatura.index'); 
Route::get('/assinaturas/{id}',[AssinaturaController::class, 'exibir'])->name('assinatura.exibir'); 