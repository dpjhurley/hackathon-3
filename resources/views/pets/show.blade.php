
@extends('layouts.layout', [
    'title' => 'Pets_profiles'
])


@section('content')
    






<h1>{{$pet->name}}</h1>
<p>{{$pet->breed}}</p>
<img src="{{asset("images/$pet->photo")}}" alt="{{$pet->name}}">
<a href="{{route('owner_id', $owner->id)}}">Back to {{$owner->first_name}} {{$owner->surname}} profile</a>
@endsection