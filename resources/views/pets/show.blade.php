
@extends('layouts.layout', [
    'title' => 'Pets_profiles'
])


@section('content')
    
    <div class="container">
        <h1>{{$pet->name}}</h1>
        <img src="{{asset("images/$pet->photo")}}" alt="{{$pet->name}}">
        <p>{{$pet->breed}}</p>
        <a class="btn" href="{{route('owner_id', $owner->id)}}">Back to {{$owner->first_name}} {{$owner->surname}} profile</a>
    </div>
@endsection

