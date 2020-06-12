@extends('layouts.layout', [
    'title' => 'List of Owners'
])

@section('content')
    <div class="container">
    <h1>Owners List</h1>
    <form action="/owners" method="post" >
        @csrf
        <label for="search_by_owner_name">Search by name</label>
        <input type="text" name="search_by_owner_name" placeholder="Owner name HERE" value="{{ old('search_by_owner_name') }}">
        <button type="submit"> SUBMIT </button>
    </form>

    <a class="btn" href="{{route("owners.create")}}">Create a owner profile</a>


    <div class="owners-display">
        @foreach ($owners as $value)
        <div class="owner">

        <div>{{$value->first_name}}</div>
        <div>{{$value->surname}}</div>
        <div><a href="{{route('owner_id', $value->id)}}">Go To {{$value->first_name}} Profile</a></div>
        
     </div>

        @endforeach


    </div>

    </div>

@endsection