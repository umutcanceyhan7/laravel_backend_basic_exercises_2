<?php

namespace Tests\Feature;

use App\Models\Possessor;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PossessorControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_possessor_can_be_added_through_the_form_then_user_is_redirected_to_possessors_page()
    {
        $this->actingAs(User::factory()->create());

        $response = $this->post(route('createPossessorPost'), $this->possessor_post_data());

        $this->assertCount(1, Possessor::all());

        $response->assertRedirect(route('possessors'));
    }

    /**
     * Returns an array of dummy possessor model data.
     * @return array
     */
    private function possessor_post_data()
    {
        return [
            'possessor_guid' => 'f25995ea-1957-4e4a-82f4-41aab26cf8b7',
            'possessor_name' => 'testPokemon',
            'possessor_picture' => 'testPokemonPicture.png',
            'possessor_age' => '999',
            'possessor_score' => '95959595959',
        ];
    }
}
