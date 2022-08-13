<?php

use App\Http\Controllers\api\{AnalisesController, AssinaturaController, DocumentoController,LoginController, RelatorioDeAnalise};
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
    Route::prefix('documentos')->group(function(){
        Route::get('/all', [DocumentoController::class, 'index'])->name('api.documentos.index'); 
        Route::get('/{id}', [DocumentoController::class, 'exibir'])->name('api.documentos.exibir'); 
        Route::delete('/{id}', [DocumentoController::class, 'deletar'])->name('api.documentos.deletar');
        Route::post('/novo', [DocumentoController::class, 'inserir'])->name('api.documentos.inserir');
        Route::put('/{id}', [DocumentoController::class, 'atualizar'])->name('api.documentos.atualizar');
    });

    Route::apiResource('relatorio',RelatorioDeAnalise::class, ['index']);
    Route::apiResource('analises',AnalisesController::class);
    Route::apiResource('assinaturas',AssinaturaController::class, ['index','show','destroy','update','create']);
});
