<?php

namespace Database\Seeders;

use App\Models\PossessorsPokemons;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PossessorsPokemonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $possessors_pokemons = [
            [
                'possessors_pokemons_guid' => Str::uuid(),
                'pokemon_guid' => '5537298b-796e-4a15-b036-affd83d42e49',
                'possessor_guid' => 'd40d7eba-a8c4-486c-a6d2-775f75fcbe83',
            ],
            [
                'possessors_pokemons_guid' => Str::uuid(),
                'pokemon_guid' => '4e3db58a-8b9a-4b96-92c0-8b95ee435b55',
                'possessor_guid' => 'd40d7eba-a8c4-486c-a6d2-775f75fcbe83',
            ],
            [
                'possessors_pokemons_guid' => Str::uuid(),
                'pokemon_guid' => '5537298b-796e-4a15-b036-affd83d42e49',
                'possessor_guid' => 'ff2f2f5e-01fc-4658-9f45-4694e28fb0af',
            ],
            [
                'possessors_pokemons_guid' => Str::uuid(),
                'pokemon_guid' => '92ae54b5-d841-4bdf-a49f-8de596c82324',
                'possessor_guid' => 'ff2f2f5e-01fc-4658-9f45-4694e28fb0af',
            ],
            [
                'possessors_pokemons_guid' => Str::uuid(),
                'pokemon_guid' => 'a27879f8-4f6b-4f75-b2ec-03aedef4e534',
                'possessor_guid' => '1e7cf42e-3958-4f33-b1e9-2a0ff4bbcc4b',
            ],
            [
                'possessors_pokemons_guid' => Str::uuid(),
                'pokemon_guid' => '4e3db58a-8b9a-4b96-92c0-8b95ee435b55',
                'possessor_guid' => '1e7cf42e-3958-4f33-b1e9-2a0ff4bbcc4b',
            ],

        ];

        // Possessor attributes assigned to the variables
        foreach ($possessors_pokemons as $pos_pok) {
            $possessors_pokemons_guid = $pos_pok['possessors_pokemons_guid'];
            $pokemon_guid = $pos_pok['pokemon_guid'];
            $possessor_guid = $pos_pok['possessor_guid'];

            // Custom possessor values changed with the dummy data.
            PossessorsPokemons::factory(App\Model\PossessorsPokemons::class)->create([
                'possessors_pokemons_guid' => $possessors_pokemons_guid,
                'pokemon_guid' => $pokemon_guid,
                'possessor_guid' => $possessor_guid,
            ]);
        }
    }
}
