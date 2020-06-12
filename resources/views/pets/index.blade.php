@extends('layouts.layout', [
    'title' => 'List of Pets'
])

@section('content')
    <div class="container">
    <h1>Pets List</h1>
    <form action="/pets" method="post" >
        @csrf
        <label for="search_by_pet_name">Search by name</label>
        <input type="text" placeholder="Pet Name HERE" name="search_by_pet_name" value="{{ old('search_by_pet_name') }}">
        <button type="submit"> SUBMIT </button>


    </form>
    <div class='pet-display'>
        @foreach ($pets as $pet)
        <div class="pet">
            
<<<<<<< HEAD
            <div>{{ $pet->name }}</div>
            <div>{{ $pet->breed }}</div>
            <div>{{ $pet->weight }}</div>
            <div>{{ $pet->age }}</div>
           <div> <a href="{{route('pet_id', $pet->id)}}">Go To {{$pet->name}} Profile</a></div>
=======
            <h2>{{ $pet->name }}</h2>
            <p>{{ $pet->breed }}</p>
            <p>{{ $pet->weight }}</p>
            <p>{{ $pet->age }}</p>
            <a href="{{route('pet_id', $pet->id)}}">Go To {{$pet->name}} Profile</a>
>>>>>>> f82e65e5b4e7ecabf13d1f5df938d1fbc35804b7
           
            </div>
            @endforeach
        </div>
@endsection