<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AssinaturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'qtdCaracteres' => random_int(1,200),
            'AssinaturaPadrao' => $this->faker->text(30),
            'qtdAssinaturas' => random_int(100, 1000)
        ];
    }
}
