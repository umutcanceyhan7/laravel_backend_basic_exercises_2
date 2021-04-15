<?php

namespace Tests\Feature;

use App\Models\Pokemon;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PokemonControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function a_pokemon_can_be_added_through_the_form_then_user_is_redirected_to_pokemons_page()
    {
        $this->actingAs(User::factory()->create());

        $response = $this->post(route('createPokemonPost'), $this->pokemon_post_data());


        $this->assertCount(1, Pokemon::all());

        $response->assertRedirect(route('pokemons'));
    }

    /**
     * Returns an array of dummy pokemon model data.
     * @return array
     */
    private function pokemon_post_data()
    {
        return [
            'pokemon_guid' => 'f25995ea-1957-4e4a-82f4-41aab26cf8b7',
            'pokemon_name' => 'testPokemon',
            'pokemon_picture' => 'testPokemonPicture.png',
            'pokemon_age' => '999',
            'pokemon_height' => '9.99',
            'pokemon_evolves_from' => 'testEvolvesFromPokemon',
            'pokemon_evolves_to' => 'testEvolvesToPokemon',
            'pokemon_weakness' => 'testWeak,testWeak,testWeak',
            'pokemon_ability' => 'testAbility',
        ];
    }
}
