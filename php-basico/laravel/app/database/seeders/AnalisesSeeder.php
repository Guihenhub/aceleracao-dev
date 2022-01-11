<?php

namespace Database\Seeders;

use App\Models\Analises;
use Illuminate\Database\Seeder;

class AnalisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Analises::factory()->count(15)->create();
    }
}
