<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Index Workers Page</h1>
    @if ($workers)
        <ul>
            @foreach ($workers as $worker)
                <li>
                    <p>Worker name: {{$worker->name}}</p>
                    <p>Worker lastname: {{$worker->surname}}</p>
                    <p>Worker age: {{ $worker->age }} </p>
                    <a href="{{ route('workers.show', $worker->id) }}">Show The Worker Info</a>
                </li>
                <hr>
            @endforeach 
        </ul>       
    @endif
</body>
</html>