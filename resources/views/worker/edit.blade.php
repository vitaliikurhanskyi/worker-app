<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h1>Create New Woker</h1>
    <form action="{{ route('workers.update', $worker->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <p>
            <label for="name">Worker's Name:</label>
            <input id="name" type="text" name="name" value="{{ old('name') ?? $worker->name }}">
            @error('name')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label for="surname">Worker's Lastname:</label>
            <input id="surname" type="text" name="surname" value="{{ old('surname') ?? $worker->surname }}">
            @error('surname')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label for="email">Worker's Email:</label>
            <input id="email" type="email" name="email" value="{{ old('email') ?? $worker->email }}">
            @error('email')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label for="age">Worker's Age:</label>
            <input id="age" type="number" name="age" value="{{ $worker->age }}">
        </p>
        <p>
            <label for="description">Worker Description:</label>
            <textarea id="description" name="description" rows="4" cols="50">
                {{ $worker->description }}
            </textarea>
        </p>
        <p>
            <label for="is_married">
                Is married:
                <input @checked($worker->is_married) type="checkbox" id="is_married" name="is_married" value="1">
            </label>
        </p>
        <p>
            <input type="submit" value="Save New Info">
        </p>        
    </form>
</body>
</html>