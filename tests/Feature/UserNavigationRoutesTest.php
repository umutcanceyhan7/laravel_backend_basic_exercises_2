<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserNavigationRoutesTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function an_unauthanticated_user_redirects_to_login_page()
    {
        $response = $this->get(route('pokemons'))->assertRedirect(route('login'));
    }

    /**
     * @test
     */
    public function an_authanticated_user_redirects_to_dashboard()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('login'))->assertRedirect(route('dashboard'));

        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function an_authanticated_user_can_visit_pokemons_page()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('pokemons'));

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function an_authanticated_user_can_visit_possessors_page()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('possessors'));

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function an_authanticated_user_can_visit_create_possessor_page()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('createPossessor'));

        $response->assertStatus(200);
    }
    /**
     * @test
     */
    public function an_authanticated_user_can_visit_create_pokemon_page()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('createPokemon'));

        $response->assertStatus(200);
    }
}
