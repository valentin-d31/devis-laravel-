<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DemandeurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'raison_sociale' => $this->faker->name,
            'adresse' => $this->faker->address,
            'cp_ville' => $this->faker->postcode,
            'TVA_intracom' => $this->faker->ean8(),
            'RCS' => $this->faker->randomDigit(),
            'contact_administratif' => $this->faker->name,
        ];
    }
}
