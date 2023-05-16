<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog (Laravel+Vue)</title>

    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="container">
        @include('components.header')
        <main class="mt-3">
            @yield('content')
        </main>
    </div>
    @yield('vue')
</body>

</html>
