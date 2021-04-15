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
        $this->actingAsUser();

        $response = $this->get(route('login'))->assertRedirect(route('dashboard'));

        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function an_authanticated_user_can_visit_pokemons_page()
    {
        $this->actingAsUser();

        $response = $this->get(route('pokemons'));

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function an_authanticated_user_can_visit_possessors_page()
    {
        $this->actingAsUser();

        $response = $this->get(route('possessors'));

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function an_authanticated_user_can_visit_create_possessor_page()
    {
        $this->actingAsUser();

        $response = $this->get(route('createPossessor'));

        $response->assertStatus(200);
    }
    /**
     * @test
     */
    public function an_authanticated_user_can_visit_create_pokemon_page()
    {
        $this->actingAsUser();

        $response = $this->get(route('createPokemon'));

        $response->assertStatus(200);
    }

    /**
     * Acting as user function
     * @return void
     */
    private function actingAsUser()
    {
        $this->actingAs(User::factory()->create());
    }
}
