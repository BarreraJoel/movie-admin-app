<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
    @livewireStyles
</head>

<body>

    @if (Auth::user())
        <x-navbar />
    @endif

    <main>
        @yield('main-content')
    </main>

    <x-cart />

    @livewireScripts
</body>

</html>