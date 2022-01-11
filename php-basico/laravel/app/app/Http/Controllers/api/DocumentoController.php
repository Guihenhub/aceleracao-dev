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

    function deletar($id){
        $documento = Documentos::find($id);

        if(!$documento){
            return response()->json(['code'=>'500','msg' => "Documento inexistente"]);
        }

        $documento->delete();

        return response()->json(['code'=>'200','msg'=>"Documento deletado com sucesso!"]);
    }

    function atualizar(request $form, $id){
        $documento = Documentos::find($id);

        if(!$documento){
            return response()->json(['code'=>'500','msg' => "Documento inexistente"]);
        }

        $documento->update($form->all());
        
        return response()->json($form->all());
    }

    function inserir(request $form){
        $documento = Documentos::create($form->all());

        if(!$documento){
            return response()->json(['code'=>'500','msg' => "Erro na criação do artigo"]);
        }

        return response()->json($documento);
    }
}
