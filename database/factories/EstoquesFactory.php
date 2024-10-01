<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EstoquesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique()->randomNumber(), // provide a unique random id
            'lote' => $this->faker->word, // varchar(45)
            'fabricacao' => $this->faker->date, // data
            'validade' => $this->faker->date, // data
            'cod_barras' => $this->faker->ean13, // 13 caracteres
            'fator_embalagem' => $this->faker->randomNumber(3), // inteiro com até 3 digitos
            'registro_anvisa' => implode('', array_map(function () {
                return $this->faker->randomDigitNotNull();
            }, range(1, 20))), // inteiro com até 20 digitos
            'quantidade' => implode('', array_map(function () {
                return $this->faker->randomDigitNotNull();
            }, range(1, 20))), // bigint(20)
        ];
    }
}
