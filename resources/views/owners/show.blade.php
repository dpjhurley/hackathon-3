@extends('layouts.layout', [
    'title' => 'Owners_profiles'
])

@section('content')
    

<h2>{{$owners->first_name}}</h2>
<h2>{{$owners->surname}}</h2>
'@foreach ($pets as $pet)
    <p> Pet name : {{$pet->name}}</p>
    <a href="{{route('pet_id', $pet->id)}}">Go To {{$pet->name}} Profile</a>
@endforeach'


@endsection
