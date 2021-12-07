<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perfil extends Model
{
    use HasFactory;

    public static function obterInformacoes(){
        $usuario = array(
            'Nome' => 'Guilherme Henrique',
            'Sobrenome' => 'Souza Nascimento',
            'Idade' => '24'
        );

        return $usuario;
    }
}
