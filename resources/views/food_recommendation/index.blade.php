@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Food Recommendations</h1>
    <div class="row">
        @foreach ($foodRecommendations as $recommendation)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">{{ $recommendation->recipe_name }}</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Ingredients:</h6>
                    <p class="card-text">{{ $recommendation->ingredients }}</p>
                    <h6 class="card-subtitle mb-2 text-muted">Instructions:</h6>
                    <p class="card-text">{{ $recommendation->instructions }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection