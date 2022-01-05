<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credenciais = $request->all(['email', 'password']);
        $token = auth('api')->attempt($credenciais);

        if(!$token){
            return response()->json(["Credenciais inválidas."], 401);
        }

        return response()->json(["token" => $token], 201);
    }

    public function logout(){
        auth('api')->logout();

        return response()->json(['Mensagem' => "Token deixou de ser válido."], 200);
    }

    public function refresh(){
        $token = auth('api')->refresh();

        return response()->json([
            "token" => $token,
            "aviso" => "Atualizado o token."
        ], 201);
    }
}
