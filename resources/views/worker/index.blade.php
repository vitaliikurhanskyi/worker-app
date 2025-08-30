<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Index Workers Page</title>
</head>
<body>
    <h1>Index Workers Page</h1>
    <div class="filter">
        <form action="{{ route('workers.index') }}" mathod="GET">
            <input type="text" name="name" placeholder="name" value="{{ request()->get('name') }}">
            <input type="text" name="surename" placeholder="surename" value="{{ request()->get('surname') }}">
            <input type="text" name="email" placeholder="email" value="{{ request()->get('email') }}">
            <input type="number" name="from" placeholder="from" value="{{ request()->get('from') }}">
            <input type="number" name="to" placeholder="to" value="{{ request()->get('to') }}">
            <input type="text" name="description" placeholder="description">
            <br>
            <label for="is_married">Is married:</label>            
            <input id="is_married" type="checkbox" name="is_married" value="1" {{ request()->get('is_married') ? 'checked' : '' }}>
            <input type="submit" value="Seach">
            <a href="{{ route('workers.index') }}">Reset Filter</a>
        </form>
    </div>
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
                    <p>Worker description: {{ $worker->description }}</p>
                    <p>Is married: {{ $worker->is_married ? "married" : "not married" }}</p>
                    <a href="{{ route('workers.show', $worker->id) }}">Show The Worker Info</a>
                    <br>
                    <a href="{{ route('workers.edit', $worker->id) }}">Edit the Worker Info</a>
                </li>
                <hr>
            @endforeach 
        </ul>       
    @endif
    <div class="my-nav">
        {{ $workers->links() }}
    </div>
</body>
</html>