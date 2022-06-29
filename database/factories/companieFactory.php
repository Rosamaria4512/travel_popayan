<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class companieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' =>$this->faker->userAgent(),
            'direccion' =>$this->faker->address(),
            'telefono'=>  $this->faker->phoneNumber(),
        ];
    }
}
