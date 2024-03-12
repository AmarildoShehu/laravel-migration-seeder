<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainFactory extends Factory
{
    protected $model = Train::class;

    public function definition()
    {
        return [
            'azienda' => $this->faker->company,
            'stazione_partenza' => $this->faker->city,
            'stazione_arrivo' => $this->faker->city,
            'orario_partenza' => $this->faker->time(),
            'orario_arrivo' => $this->faker->time(),
            'codice_treno' => $this->faker->unique()->word,
            'numero_carrozze' => $this->faker->numberBetween(1, 10),
            'in_orario' => $this->faker->boolean,
            'cancellato' => $this->faker->boolean,
            'note' => $this->faker->sentence,
            'prezzo' => $this->faker->randomFloat(2, 10, 100),
            'data_partenza' => $this->faker->date(),
            'data_arrivo' => $this->faker->date(),
            'passeggeri_massimi' => $this->faker->numberBetween(50, 200),
        ];
    }
}
