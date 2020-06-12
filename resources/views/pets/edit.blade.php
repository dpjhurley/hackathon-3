@extends('layouts.layout', [
    'title' => 'Pet management'
])

@section('content')

    {{-- success message --}}
    @if (Session::has('success_message'))
    
        <div class="alert alert-success">
            {{ Session::get('success_message') }}
        </div>
    
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="container">
    
        @if ($pet->id)
        {{-- edit --}}
        <form action="{{ route('pets.update', [$pet->id]) }}" method="post">
            @method('PUT') 
    @else
        {{-- create --}}
        <form action="{{ route('pets.store') }}" method="post">
    @endif

        @csrf
            {{-- <div>
                <label>Owner first name</label>
                <input type="text" name="authors" value="{{ $pet->owner_id }}">
            </div>

            <div>
                <label>Owner surname</label>
                <input type="text" name="authors" value="{{ $pet->owner_id }}">
            </div> --}}

            {{-- <div>
                <label>species_id</label>
                <input type="text" name="image" value="{{ $pet->species }}">
            </div> --}}

            <div>
                <label>Name</label>
                <input type="text" name="name" value="{{ $pet->name }}">
            </div>

            <div>
                <label>weight</label>
                <input type="text" name="weight" value="{{ $pet->weight }}">
            </div>

            <div>
                <label>age</label>
                <input type="text" name="age" value="{{ $pet->age }}">
            </div>

            <div>
                <label>breed</label>
                <input type="text" name="breed" value="{{ $pet->breed }}">
            </div>

            <div>
                <label>photo</label>
                <input type="text" name="photo" value="{{ $pet->photo }}">
            </div>

            <button type="submit">Submit information</button>

        </form>

    </div>

@endsection