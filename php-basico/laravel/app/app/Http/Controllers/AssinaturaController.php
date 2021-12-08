<?php

namespace App\Http\Controllers;

use App\Models\Assinatura;
use Illuminate\Http\Request;

class AssinaturaController extends Controller
{
    function index(){
        $assinaturas = Assinatura::all();
 
        return view('AssinaturaView',compact('assinaturas'));
    }
    
    function exibir($id){
        $assinatura = Assinatura::find($id);

        if(!$assinatura){
            return redirect()->route('assinatura.index');
        }

        return view('exibeAssinaturas',compact('assinatura'));
    }
}
