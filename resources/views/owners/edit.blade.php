@extends('layouts.layout', [
    'title' => 'Owner management'
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
    
    @if ($owner->id)
        {{-- edit --}}
        <form action="{{ route('owners.update', [$owner->id]) }}" method="post">
            @method('PUT') 
    @else
        {{-- create --}}
        <form action="{{ route('owners.store') }}" method="post">
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
                <label>First name</label>
                <input type="text" name="name" value="{{ $owner->first_name }}">
            </div>

            <div>
                <label>Surname</label>
                <input type="text" name="name" value="{{ $owner->surname }}">
            </div>

            <button type="submit">Submit information</button>

        </form>

@endsection