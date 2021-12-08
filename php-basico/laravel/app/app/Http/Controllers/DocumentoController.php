<?php

namespace App\Http\Controllers;

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

        return view('documentosView',compact('documentos'));
    }
    
    function exibir($id){
        $documento = Documentos::find($id);

        if(!$documento){
            return redirect()->route('documento.index');
        }

        return view('exibedoc',compact('documento'));
    }
}
