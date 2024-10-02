<?php

namespace Database\Factories;

use App\Models\Estoques;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstoquesFactory extends Factory
{

    protected $model = Estoques::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lote' => $this->faker->lexify('??????'),
            'fabricacao' => $this->faker->date,
            'validade' => $this->faker->date,
            'cod_barras' => $this->faker->numerify('###########'),
           'fator_embalagem' => $this->faker->numberBetween(1, 999),
            'registro_anvisa' => $this->faker->numberBetween(1, 9999),
            'quantidade' => $this->faker->numberBetween(1, 99999),
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
