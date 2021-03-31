<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonController extends Controller
{
    //
    public function index(){
        return Pokemon::get();
    }

    public function show($pokemon)
    {
        return Pokemon::where('id', $pokemon)->get();
    }
}
