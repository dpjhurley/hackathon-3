@extends('layouts.layout', [
    'title' => 'List of Pets'
])

@section('content')

    <h1>Pets Index</h1>

    <div class='pet-display'>
        @foreach ($pets as $pet)
        <div class="pet">
            
            <h2>{{ $pet->name }}</h2>
            <p>{{ $pet->breed }}</p>
            <p>{{ $pet->weigh }}</p>
            <p>{{ $pet->age }}</p>
           
            </div>
            @endforeach
@endsection