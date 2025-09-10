<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Worker App</title>
</head>
<body>
    <h1 class="title"><a href="/workers">Worker Application</a></h1>
    <nav>
        <ul>
            <li><a href="#">Menu 1</a></li>
            <li><a href="#">Menu 2</a></li>
            <li><a href="#">Menu 3</a></li>
            <li><a href="#">Menu 4</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>