<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Documentos;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    function index(){
        $documentos = Documentos::paginate(25);

        return response()->json($documentos);
    }

    function exibir($id){
        $documento = Documentos::find($id);

        if(!$documento){
            return response()->json(['code'=>'500','msg' => "Documento inexistente"]);
        }

        return response()->json($documento);
    }
}
