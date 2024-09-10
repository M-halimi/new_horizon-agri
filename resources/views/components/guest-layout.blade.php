<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>new horizon agri</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="output.css" rel="stylesheet">
    @vite('resources/css/app.css')
    {{-- <link href="output.css" rel="stylesheet"> --}}
</head>

<body>
    <div class="alert alert-danger">
        <x-navigation/>
        {{ $slot }}
        <x-footer/>
        {{-- <h1>footer</h1> --}}

    </div>
</body>

</html>
