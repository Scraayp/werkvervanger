<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    {{-- Tailwindcss --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Fontawesome --}}
    <script src="https://kit.fontawesome.com/7bcbbd58a8.js" crossorigin="anonymous"></script>

    {{-- Flowbite --}}
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class="">
    @include('components.auth.login')

    {{-- Flowbite --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>

</html>
