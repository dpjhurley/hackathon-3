@extends('layouts.layout', [
    'title' => 'List of Pets'
])

@section('content')

    <h1>Pets Index</h1>
    <form action="/pets" method="post" >
        @csrf
        <label for="search_by_pet_name">Search by name</label>
        <input type="text" name="search_by_pet_name" value="{{ old('search_by_pet_name') }}">
        <button type="submit"> SUBMIT </button>


    </form>
    <div class='pet-display'>
        @foreach ($pets as $pet)
        <div class="pet">
            
            <h2>{{ $pet->name }}</h2>
            <p>{{ $pet->breed }}</p>
            <p>{{ $pet->weigh }}</p>
            <p>{{ $pet->age }}</p>
            <a href="{{route('pet_id', $pet->id)}}">Go To {{$pet->name}} Profile</a>
           
            </div>
            @endforeach
@endsection