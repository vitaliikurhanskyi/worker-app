<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show a Single Worker</title>
</head>
<body>
    <h1>Show a Single Worker</h1>
    <div>
        <p>Worker name: {{$worker->name}}</p>
        <p>Worker lastname: {{$worker->surname}}</p>
        <p>Worker age: {{ $worker->age }} </p>
        <form action="{{ route('workers.delete', $worker->id) }}" method="POST">
            @csrf
            @method('Delete')
            <input type="submit" value="Delete">
        </form>
        <br>
        <a href="{{ route('workers.index') }}">Back to the Worker List</a>
    </div>
</body>
</html>