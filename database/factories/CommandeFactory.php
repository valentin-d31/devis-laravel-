<?php

namespace Database\Factories;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Commande::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->name,
            'adresse' => $this->faker->name,
            'complement_adresse' => $this->faker->streetAddress,
            'cp_ville' => $this->faker->postcode,
            'TVA_intracom' => $this->faker->ean8(),
            'siret' => $this->faker->postcode,
            'responsable_commercial' => $this->faker->name,
            'responsable_technique' => $this->faker->name,
            'responsable_financier' => $this->faker->name,
        ];
    }
}
