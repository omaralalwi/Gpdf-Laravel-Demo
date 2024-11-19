<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name')) </title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @include('layouts.partials.custom-css')
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">

<nav class="bg-gray-800 p-4">
    {{ app()->getLocale()  }}
<div class="container mx-auto">
    <a href="/" class="text-white text-xl"> {{ config('app.name') }} </a>
</div>
</nav>

<div class="container mx-auto py-6">
@yield('content')
</div>

@include('layouts.partials.footer')

<script src="{{ asset('js/app.js') }}"></script>
@include('layouts.partials.custom-js')
</body>

</html>
