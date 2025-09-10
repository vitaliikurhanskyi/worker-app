@extends('layout.main')
@section('content')
    <h1>Show a Single Worker</h1>
    <div>
        <p>Worker name: {{$worker->name}}</p>
        <p>Worker lastname: {{$worker->surname}}</p>
        <p>Worker age: {{ $worker->age }} </p>
        <p>Worker position: {{ $worker->profile->skill }}</p>
        <form action="{{ route('workers.delete', $worker->id) }}" method="POST">
            @csrf
            @method('Delete')
            <input type="submit" value="Delete">
        </form>
        <br>
        <a href="{{ route('workers.index') }}">Back to the Worker List</a>
    </div>
@endsection