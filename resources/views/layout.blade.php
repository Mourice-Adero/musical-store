<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('pageTitle')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{'/css/main.css'}}">
</head>

<body class="antialiased">
    <div class="links p-5 m-5">
        <a href="{{route('home.index')}}" class=" link m-2">Home</a>
        <a href="{{route('guitars.index')}}" class=" link m-2">Guitars</a>
        <a href="{{route('home.about')}}" class=" link m-2">About</a>
        <a href="{{route('home.contact')}}" class=" link m-2">Contact</a>
        <a href="/" class=" link m-2"></a>
    </div>
    @yield('content')
    <div class="p-5">
        @yield('scripts')
    </div>
</body>

</html>
