<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePossessorsPokemonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('possessors_pokemons', function (Blueprint $table) {
            $table->id();

            $table->uuid('possessor_pokemon_guid', 36)->default(Str::uuid());
            $table->uuid('possessor_guid', 36)->default(Str::uuid());
            $table->uuid('pokemon_guid', 36)->default(Str::uuid());
            
            $table->foreign('possessor_guid')->references('possessor_guid')->on('possessors')->onDelete('cascade');
            $table->foreign('pokemon_guid')->references('pokemon_guid')->on('pokemons')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('possessors_pokemons');
    }
}
