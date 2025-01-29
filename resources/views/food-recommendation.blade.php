<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Food Recommendation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                @foreach($recommendations as $recommendation)
                <div class="row mb-4">
                    <div class="col-md-2">
                        <img src="{{ asset($recommendation->image_url) }}" alt="{{ $recommendation->recipe_name }}" class="img-fluid rounded">
                    </div>
                    <div class="col-md-10">
                        <h5>{{ $recommendation->recipe_name }}</h5>
                        <p><strong>Ingredients:</strong> {{ $recommendation->ingredients }}</p>
                        <p><strong>Instructions:</strong> {{ $recommendation->instructions }}</p>
                        <button class="btn btn-warning">
                            <i class="fas fa-shopping-cart"></i> Find the Nearest Supermarket
                        </button>
                    </div>
                </div>
                <hr>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>