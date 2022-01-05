<?php

namespace App\Http\Controllers;

use App\Models\Documentos;
use App\Models\perfil;
use Illuminate\Http\Request;
use Usuario;

class PerfilController extends Controller
{
    function index(){
        $usuario = perfil::obterInformacoes();
        $documentos = Documentos::all();
        return view('perfilView',compact('usuario','documentos'));
    }
}
