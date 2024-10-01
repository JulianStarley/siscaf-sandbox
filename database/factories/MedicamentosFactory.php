<?php

namespace Database\Factories;

use App\Models\Medicamentos;
use Illuminate\Database\Eloquent\Factories\Factory;


class MedicamentosFactory extends Factory
{
    protected $model = Medicamentos::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'medicamento' => $this->faker->name(),
            'codigo' => $this->faker->word(),
            'ativo' => $this->faker->randomElement(['S', 'N']),
            'observacao' => $this->faker->sentence,
        ];
    }
}
