<?php

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\PossessorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcomePage');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/possessors', [PossessorController::class, 'index'])->name('possessors');

Route::middleware(['auth:sanctum', 'verified'])->get('/pokemons', [PokemonController::class, 'index'])->name('pokemons');

Route::middleware(['auth:sanctum', 'verified'])->get('/create-possessor', [PossessorController::class, 'createPossessor'])->name('createPossessor');

Route::middleware(['auth:sanctum', 'verified'])->get('/create-pokemon', [PokemonController::class, 'createPokemon'])->name('createPokemon');

/**
 * Post Routes
 */

Route::middleware(['auth:sanctum', 'verified'])->post('/create-possessor', [PossessorController::class, 'createPossessorPost'])->name('createPossessorPost');

Route::middleware(['auth:sanctum', 'verified'])->post('/create-pokemon', [PokemonController::class, 'createPokemonPost'])->name('createPokemonPost');
