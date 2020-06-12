@extends('layouts.layout', [
    'title' => 'List of Owners'
])

@section('content')

    <h1>Owners List</h1>
    <form action="/owners" method="post" >
        @csrf
        <label for="search_by_owner_name">Search by name</label>
        <input type="text" name="search_by_owner_name" value="{{ old('search_by_owner_name') }}">
        <button type="submit"> SUBMIT </button>
        </form>

    <div class="owners-view">
        @foreach ($owners as $value)
        <div class="owner-row">
        <p>{{$value->first_name}}</p>
        <p>{{$value->surname}}</p>
        <a href="{{route('owner_id', $value->id)}}">Go To {{$value->first_name}} Profile</a>
     </div>

        @endforeach


    </div>

    

@endsection