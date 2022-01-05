<?php

use App\Http\Controllers\api\{DocumentoController,LoginController};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [LoginController::class,'login']);
Route::get('/logout', [LoginController::class,'logout']);
Route::get('/refresh',[LoginController::class,'refresh']);



Route::group(['middleware'=>'jwt.auth'],function(){    
    Route::get('/documentos', [DocumentoController::class, 'index'])->name('api.documentos.index'); 
    Route::get('/documentos/{id}', [DocumentoController::class, 'exibir'])->name('api.documentos.exibir'); 
});
