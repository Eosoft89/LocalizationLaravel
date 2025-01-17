<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
        @include('partials.lang')
        <h1>{{ __('welcome.hello') }}</h1>  {{-- Traducción de la variable 'hello' en el archivo 'welcome' --}}
        <br/>
        <a href="{{ route('example') }}">{{__('welcome.example')}}</a>
    </body>
</html>
