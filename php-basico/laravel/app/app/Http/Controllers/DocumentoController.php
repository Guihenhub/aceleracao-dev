<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentoRequest;
use App\Models\Documentos;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DocumentoController extends Controller
{
    function index(){
        $documentos = Documentos::all();
        $momentoConsulta = new DateTime('NOW');
 
        if(!$documentos){ 
            Log::channel('documentos')->info(''+$momentoConsulta->format(DateTime::ISO8601));
        }

        return view('documentos.documentosView',compact('documentos'));
    }
    
    function exibir($id){
        $documento = Documentos::find($id);

        if(!$documento){
            return redirect()->route('documento.index');
        }

        return view('documentos.exibedoc',compact('documento'));
    }

    function novo(){
        return view('documentos.novoDocumento');
    }

    function inserir(DocumentoRequest $form){
        $documento = Documentos::create($form->all());

        if(!$documento){
            redirect()->route('documento.index')->with('mensagem',"Não foi possível criar o documento");
        }

        return redirect()->route('documento.index')->with('mensagem',"Documento criado com sucesso!");
    }

    function deletar($id){
        $documento = Documentos::find($id);

        if(!$documento){
            redirect()->route('documento.index')->with('mensagem',"Não foi possível criar o documento");
        }

        $documento->delete();
        
        return redirect()->route('documento.index')->with('mensagem',"Documento {{$id}} foi deletado com sucesso");
    }

    function listarPaginado(){
        $documentos = Documentos::paginate(25);
        $momentoConsulta = new DateTime('NOW');
 
        if(!$documentos){ 
            Log::channel('documentos')->info(''+$momentoConsulta->format(DateTime::ISO8601));
        }

        return view('documentos.documentosView',compact('documentos'));
    }

    public function login(){
        $usuario = ["id" => rand(30, 200), "name" => "Guilherme"];
        session(["usuario" => $usuario]);
    }

    public function logout(){
        session()->forget('usuario');
    }
}
