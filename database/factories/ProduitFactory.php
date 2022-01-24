<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reference' => $this->faker->name,
            'name' => $this->faker->name,
            'tarifUnitaire_type' => $this->faker->name,
            'tarifUnitaire_pht' => $this->faker->name,
            'prestationDevisee_qté' => $this->faker->numberBetween($min= 1, $max=200),
            'prestationDevisee_mht' => $this->faker->userName,
            'prestationCompl_qté' => $this->faker->numberBetween($min= 1, $max=200),
            'prestationCompl_mht' => $this->faker->userName,
            'total_ht' => $this->faker->numberBetween($min= 800, $max=7800),
        ];
    }
}
