<?php

namespace Database\Factories;

use App\Models\Pokemon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PokemonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pokemon::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            //
            'name' => 'Bulbasaur',
            'picture' => '\balbasaur.png',
            'age' => '1',
            'height' => '2,04',
            'evolves_from' => 'bulbasaur',
            'evolves_to' => 'ivysaur',
            'weakness' => 'fire, psychic, flying, ice',
            'ability' => 'overgrow',
        ];
    }
}
