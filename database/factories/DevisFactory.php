<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DevisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->name,
            'date_ouverture' => $this->faker->dateTime('now'),
            'ref_allianz' => $this->faker->name,
            'ref_commande' => $this->faker->name,
            'fait_partie_projet' => $this->faker->domainWord,
            'exemple_sur' => $this->faker->userName,
            'date_1er_PDF' => $this->faker->dateTime('now'),
            'cost_center' => $this->faker->ean8(),
            'cost_element' => $this->faker->ean8(),
            'repartition_si_2_costs_center' => $this->faker->boolean,
            'impression' => $this->faker->boolean,
            'PDF_dynamique' => $this->faker->boolean,
            'contact' => $this->faker->name,
        ];
    }
}
