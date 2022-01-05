<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "titulo" => $this->faker->name(),
            "qtdAssinantes" => $this->faker->randomNumber(),
            "assinatura" => $this->faker->name(),
            "qtdPaginas" => $this->faker->randomNumber()
        ];
    }
}
