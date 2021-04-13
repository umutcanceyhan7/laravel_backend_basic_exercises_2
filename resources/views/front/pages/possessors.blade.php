<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Possessors') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="d-flex flex-column align-items-center bg-white overflow-hidden shadow-xl sm:rounded-lg ">
                @foreach ($possessors as $p)
                <div class="col-10 col-md-8 col-lg-6 my-4 text-center">
                    <p>{{ $p->name }}</p>
                </div>    
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
