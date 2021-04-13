<?php

namespace Database\Factories;

use App\Models\PossessorsPokemons;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PossessorsPokemonsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PossessorsPokemons::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'possessors_pokemons_guid' => Str::uuid(),
            'pokemon_guid' => 'deneme',
            'possessor_guid' => 'deneme',
        ];
    }
}
