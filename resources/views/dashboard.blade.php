<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="d-flex flex-column align-items-center bg-white overflow-hidden shadow-xl sm:rounded-lg ">
                <div class="col-10 col-md-8 col-lg-6 my-4">
                <a href="{{ route('createPossessor') }}" class="btn btn-secondary w-100">
                    Create a possessor
                </a>
                </div>
                <div class="col-10 col-md-8 col-lg-6 my-4">
                <a href="{{ route('createPokemon') }}" class="btn btn-primary w-100">
                    Create a pokemon
                </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
