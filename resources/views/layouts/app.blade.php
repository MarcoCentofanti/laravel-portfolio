<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite(['resources/js/app.js'])
</head>
<body>
    @auth
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="text-white" href="{{route('projects.index')}}">Progetti</a>
                <a class="text-white" href="{{route('projects.create')}}">Aggiungi un progetto</a>
            </div>
        </nav>
    @endauth

    @yield('content')
    
</body>
</html>