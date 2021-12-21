<?php

namespace Database\Seeders;

use App\Models\Documentos;
use Carbon\Factory;
use Database\Factories\DocumentosFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        /*
        $this->criarDocumento("Artigo seeder 1", 10, "Assinatura seeder 1", 10);
        $this->criarDocumento("Artigo seeder 2", 20, "Assinatura seeder 2", 20);
        $this->criarDocumento("Artigo seeder 3", 30, "Assinatura seeder 3", 30);
        */

        Documentos::factory()->count(600)->create();
    }

    public function criarDocumento($titulo, $qtdAssinantes, $assinatura, $qtdPaginas){
        Documentos::create(
            [
                "titulo" => $titulo,
                "qtdAssinantes" => $qtdAssinantes,
                "assinatura" => $assinatura,
                "qtdPaginas" => $qtdPaginas
            ]
        );
    }
}
