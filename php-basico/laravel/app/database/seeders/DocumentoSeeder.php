<?php

namespace Database\Seeders;

use App\Models\Documentos;
use Illuminate\Database\Seeder;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Documentos::factory()->count(15)->create();
    }
}
