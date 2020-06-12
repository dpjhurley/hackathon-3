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

    <a class="btn" href="{{route("pets.create")}}">Create a pet profile</a>

    <div class='pet-display'>
        @foreach ($pets as $pet)
        <div class="pet">
            
            <div>{{ $pet->name }}</div>
            <div>{{ $pet->breed }}</div>
            <div>{{ $pet->weight }}</div>
            <div>{{ $pet->age }}</div>
           <div> <a href="{{route('pet_id', $pet->id)}}">Go To {{$pet->name}} Profile</a></div>
           
            </div>
            @endforeach
        </div>
@endsection