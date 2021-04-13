<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pokemon;
use Illuminate\Support\Facades\App;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pokemon_images_path = public_path('img\pokemon_images');
        $pokemons = [[
            'pokemon_guid' => '5537298b-796e-4a15-b036-affd83d42e49',
            'name' => 'Bulbasaur',
            'picture' => $pokemon_images_path.'\balbasaur.png',
            'age' => '1',
            'height' => '2.04',
            'evolves_from' => 'bulbasaur',
            'evolves_to' => 'ivysaur',
            'weakness' => 'fire, psychic, flying, ice',
            'ability' => 'overgrow',
            ],
            [
            'pokemon_guid' => 'b9dcac0b-2078-4b4f-b5b0-6d7082b78e2c',
            'name' => 'Ivysaur',
            'picture' => $pokemon_images_path.'\ivysaur.png',
            'age' => '16',
            'height' => '3.03',
            'evolves_from' => 'ivysaur',
            'evolves_to' => 'venusaur',
            'weakness' => 'fire, psychic, flying, ice',
            'ability' => 'overgrow',
            ],
            [
            'pokemon_guid' => '92ae54b5-d841-4bdf-a49f-8de596c82324',
            'name' => 'Venusaur',
            'picture' => $pokemon_images_path.'\venusaur.png',
            'age' => '32',
            'height' => '6.07',
            'evolves_from' => 'venusaur',
            'evolves_to' => null,
            'weakness' => 'fire, psychic, flying, ice',
            'ability' => 'overgrow',
            ],
            [
            'pokemon_guid' => '4e3db58a-8b9a-4b96-92c0-8b95ee435b55',
            'name' => 'Charmander',
            'picture' => $pokemon_images_path.'\charmander.png',
            'age' => '1',
            'height' => '2.00',
            'evolves_from' => 'charmander',
            'evolves_to' => 'charmeleon',
            'weakness' => 'water, ground, rock',
            'ability' => 'blaze',
            ],
            [
            'pokemon_guid' => 'a27879f8-4f6b-4f75-b2ec-03aedef4e534',
            'name' => 'Charmeleon',
            'picture' => $pokemon_images_path.'\charmeleon.png',
            'age' => '16',
            'height' => '3.07',
            'evolves_from' => 'charmeleon',
            'evolves_to' => 'charizard',
            'weakness' => 'water, ground, rock',
            'ability' => 'blaze',
            ],
            [
            'pokemon_guid' => '69581418-c042-4144-b3d1-13bfbff6d4b3',
            'name' => 'Charizard',
            'picture' => $pokemon_images_path.'\charizard.png',
            'age' => '32',
            'height' => '5.07',
            'evolves_from' => 'charizard',
            'evolves_to' => null,
            'weakness' => 'water, electric, rock',
            'ability' => 'blaze',
            ],
        ];
        // Pokemon attributes assigned to the variables
        foreach($pokemons as $pokemon){
            $pokemon_guid = $pokemon['pokemon_guid'];
            $name = $pokemon['name'];
            $picture = $pokemon['picture'];
            $age = $pokemon['age'];
            $height = $pokemon['height'];
            $evolves_from = $pokemon['evolves_from'];
            $evolves_to = $pokemon['evolves_to'];
            $weakness = $pokemon['weakness'];
            $ability = $pokemon['ability'];
            
            // Custom pokemon values changed with the dummy data.
            Pokemon::factory(App\Model\Pokemon::class)->create([
            'pokemon_guid' => $pokemon_guid,    
            'name' => $name,
            'picture' => $picture,
            'age' => $age,
            'height' => $height,
            'evolves_from' => $evolves_from,
            'evolves_to' => $evolves_to,
            'weakness' => $weakness,
            'ability' => $ability,
            ]);
        }
        
        
    }
}
