<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Workers Page</title>
</head>
<body>
    <h1>Index Workers Page</h1>
    <div>
        <hr>
        <a href="{{ route('workers.create') }}">Create New Worker</a>
        <hr>
    </div>
    <div>
        <h2>List of workers:</h2>
        <hr>
    </div>
    @if ($workers)
        <ul>
            @foreach ($workers as $worker)
                <li>
                    <p>Worker name: {{$worker->name}}</p>
                    <p>Worker lastname: {{$worker->surname}}</p>
                    <p>Worker age: {{ $worker->age }} </p>
                    <a href="{{ route('workers.show', $worker->id) }}">Show The Worker Info</a>
                    <br>
                    <a href="{{ route('workers.edit', $worker->id) }}">Edit the Worker Info</a>
                </li>
                <hr>
            @endforeach 
        </ul>       
    @endif
</body>
</html>