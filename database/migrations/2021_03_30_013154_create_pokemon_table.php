<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();

            $table->uuid('pokemon_guid', 36)->default(Str::uuid());
            $table->string('name');
            $table->string('picture');
            $table->integer('age');
            $table->float('height');
            $table->string('evolves_from')->nullable();
            $table->string('evolves_to')->nullable();
            $table->string('weakness');
            $table->string('ability');

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
        Schema::dropIfExists('pokemons');
    }
}
