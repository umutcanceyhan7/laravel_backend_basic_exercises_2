<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;
use Illuminate\Support\Str;

class PokemonController extends Controller
{
    //
    public function index()
    {
        $d['pokemons'] = Pokemon::get();
        return view('front/pages/pokemons', $d);
    }
    public function createPokemon()
    {
        return view('front/pages/create-pokemon');
    }
    public function createPokemonPost(Request $r)
    {
        // Assign form values to variables
        $pokemon_name = $r->pokemon_name;
        $pokemon_picture = $r->pokemon_picture;
        $pokemon_age = $r->pokemon_age;
        $pokemon_height = $r->pokemon_height;
        $pokemon_evolves_from = $r->pokemon_evolves_from;
        $pokemon_evolves_to = $r->pokemon_evolves_to;
        $pokemon_weakness = $r->pokemon_weakness;
        $pokemon_ability = $r->pokemon_ability;
        // Store in database
        $new_pokemon = new Pokemon;
        $new_pokemon->pokemon_guid = Str::uuid();
        $new_pokemon->name = $pokemon_name;
        $new_pokemon->picture = $pokemon_picture;
        $new_pokemon->age = $pokemon_age;
        $new_pokemon->height = $pokemon_height;
        $new_pokemon->evolves_from = $pokemon_evolves_from;
        $new_pokemon->evolves_to = $pokemon_evolves_to;
        $new_pokemon->weakness = $pokemon_weakness;
        $new_pokemon->ability = $pokemon_ability;
        // Save to database
        $new_pokemon->save();
        // Redirect to pokemons page
        return redirect()->route('pokemons');
    }
}
