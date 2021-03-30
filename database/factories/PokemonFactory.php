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
        $pokemon_images_path = public_path('img/pokemon_images');
        echo($pokemon_images_path.'/balbasaur.png');
        return [
            //
            [
            'name' => 'Bulbasaur',
            'picture' => $pokemon_images_path.'/balbasaur.png',
            'age' => '1',
            'height' => '2,04',
            'evolves_from' => 'bulbasaur',
            'evolves_to' => 'ivysaur',
            'weakness' => 'fire, psychic, flying, ice',
            'ability' => 'overgrow',
            ],
            [
            'name' => 'Ivysaur',
            'picture' => $pokemon_images_path.'/ivysaur.png',
            'age' => '16',
            'height' => '3,03',
            'evolves_from' => 'ivysaur',
            'evolves_to' => 'venusaur',
            'weakness' => 'fire, psychic, flying, ice',
            'ability' => 'overgrow',
            ],
            [
            'name' => 'Venusaur',
            'picture' => $pokemon_images_path.'/venusaur.png',
            'age' => '32',
            'height' => '6,07',
            'evolves_from' => 'venusaur',
            'evolves_to' => null,
            'weakness' => 'fire, psychic, flying, ice',
            'ability' => 'overgrow',
            ],
            [
            'name' => 'Charmander',
            'picture' => $pokemon_images_path.'/charmander.png',
            'age' => '1',
            'height' => '2,00',
            'evolves_from' => 'charmander',
            'evolves_to' => 'charmeleon',
            'weakness' => 'water, ground, rock',
            'ability' => 'blaze',
            ],
            [
            'name' => 'Charmeleon',
            'picture' => $pokemon_images_path.'/charmeleon.png',
            'age' => '16',
            'height' => '3,07',
            'evolves_from' => 'charmeleon',
            'evolves_to' => 'charizard',
            'weakness' => 'water, ground, rock',
            'ability' => 'blaze',
            ],
            [
            'name' => 'Charizard',
            'picture' => $pokemon_images_path.'/charizard.png',
            'age' => '32',
            'height' => '5,07',
            'evolves_from' => 'charizard',
            'evolves_to' => null,
            'weakness' => 'water, electric, rock',
            'ability' => 'blaze',
            ],
            
        ];
    }
}
