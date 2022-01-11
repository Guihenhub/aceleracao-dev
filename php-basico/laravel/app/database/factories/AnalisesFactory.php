<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnalisesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_doc' => random_int(1,15),
            'id_assinatura' => random_int(1,15),
            'status' => $this->faker->text(30),
            'data_analise' => $this->faker->dateTime(),
            'visualizadores' =>  random_int(0,10000)
        ];
    }
}
