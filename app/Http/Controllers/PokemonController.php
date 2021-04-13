<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonController extends Controller
{
    //
    public function index(){
        $d['pokemons'] = Pokemon::get();
        return view('front/pages/pokemons', $d);
    } 
}
