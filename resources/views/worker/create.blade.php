@extends('layout.main')
@section('content')
    <form action="{{ route('workers.store') }}" method="POST">
        @csrf
        <p>
            <label for="name">Worker's Name:</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}">
            @error('name')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label for="surname">Worker's Lastname:</label>
            <input id="surname" type="text" name="surname" value="{{ old('surname') }}">
            @error('surname')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label for="email">Worker's Email:</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}">
            @error('email')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label for="age">Worker's Age:</label>
            <input id="age" type="number" name="age" value="{{ old('age') }}">
        </p>
        <p>
            <label for="description">Worker Description:</label>
            <textarea id="description" name="description" rows="4" cols="50">
                {{ old('description') }}
            </textarea>
        </p>
        <p>
            <label for="is_married">
                Is married:
                <input {{ old('is_married') ? 'checked' : '' }} type="checkbox" id="is_married" name="is_married" value="1">
            </label>
        </p>
        <p>
            <input type="submit" value="Add Worker">
        </p>        
    </form>
@endsection