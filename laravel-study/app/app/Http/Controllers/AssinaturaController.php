<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssinaturaRequest as RequestsAssinaturaRequest;
use App\Models\Assinatura;
use App\Requests\AssinaturaRequest;
use Illuminate\Http\Request;

class AssinaturaController extends Controller
{
    function index(){
        $assinaturas = Assinatura::all();
 
        return view('assinaturas.AssinaturaView',compact('assinaturas'));
    }
    
    function exibir($id){
        $assinatura = Assinatura::find($id);
        
        if(!$assinatura){
            return redirect()->route('assinaturas.index');
        }

        return view('assinaturas.exibeAssinaturas',compact('assinatura'));
    }

    function novo(){
        return view('assinaturas.novaAssinatura');
    }

    function inserir(RequestsAssinaturaRequest $form){
        $assinatura = Assinatura::create($form->all());

        if(!$assinatura){
            redirect()->route('assinaturas.index')->with('mensagem',"Não foi possível criar a assinatura");
        }

        return redirect()->route('assinaturas.index')->with('mensagem',"Assinatura criado com sucesso!");
    }

    function deletar($id){
        $assinatura = Assinatura::find($id);

        if(!$assinatura){
            redirect()->route('assinaturas.index')->with('mensagem',"Não foi possível criar a assinatura");
        }

        $assinatura->delete();
        
        return redirect()->route('assinaturas.index')->with('mensagem',"Assinatura {$id} foi deletado com sucesso");
    }
}
