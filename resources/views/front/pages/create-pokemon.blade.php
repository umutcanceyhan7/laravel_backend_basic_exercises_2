<x-app-layout>
    <x-slot name="header"><h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Create a pokemon') }}</h2></x-slot>
    <x-slot name="slot">
        <form data-parsley-validate action="{{route('createPokemon')}}" method="post">
            @csrf
            <div class="container-fluid py-4">
            <div class="container">
                <!-- left column -->
                <div class="col-12">
                <!-- general form elements -->
                <!-- Form Element sizes -->
                <div class="card">
                        <div class="card-body container mx-auto">
                        <div class="form-group">
                            <label for="pokemon_name" class="brown regular">Pokemon Name</label>
                            <input class="form-control" type="text" name="pokemon_name" id="pokemon_name" placeholder="Enter pokemon name" required data-parsley-length="[2,255]">
                            </div>
                        <div class="form-group">
                            <label for="pokemon_picture" class="brown regular">Pokemon Picture</label>
                            <input class="form-control" type="file" placeholder="Upload pokemon picture" name="pokemon_picture" id="pokemon_picture">
                            </div>
                        <div class="form-group">
                            <label for="pokemon_age" class="brown regular">Pokemon Age</label>
                            <input class="form-control" type="text" name="pokemon_age" id="pokemon_age" placeholder="Enter pokemon age" required data-parsley-length="[2,255]">    
                        </div>
                        <div class="form-group">
                            <label for="pokemon_height" class="brown regular">Pokemon Height</label>
                            <input type="text" class="form-control" placeholder="Enter pokemon height" id="pokemon_height" name="pokemon_height" required>
                        </div>
                        <div class="form-group">
                            <label for="pokemon_evolves_from" class="brown regular">Pokemon Evolves From</label>
                            <input type="text" class="form-control" placeholder="Enter the former form of the pokemon" id="pokemon_evolves_from" name="pokemon_evolves_from">
                        </div>
                        <div class="form-group">
                            <label for="pokemon_evolves_to" class="brown regular">Pokemon Evolves To</label>
                            <input type="text" class="form-control" placeholder="Enter future form of the pokemon" id="pokemon_evolves_to" name="pokemon_evolves_to">
                        </div>
                        <div class="form-group">
                            <label for="pokemon_weakness" class="brown regular">Pokemon Weakness</label>
                            <input type="text" class="form-control" placeholder="Enter pokemon weaknesses comma separated" id="pokemon_weakness" name="pokemon_weakness">
                        </div>
                        <div class="form-group">
                            <label for="pokemon_ability" class="brown regular">Pokemon Ability</label>
                            <input type="text" class="form-control" placeholder="Enter pokemon ability comma separated" id="pokemon_ability" name="pokemon_ability">
                        </div>
                        <button class="btn btn-block bg-primary text-white my-3 col-12 col-md-8 offset-md-2 regular" type="submit">Submit</button>
                        <!-- /.card-body -->
                        </div>
                
                    </div>
    
                    </div>
            
            </div><!-- /.container-fluid -->
        </form>
    </x-slot>
    </x-app-layout>