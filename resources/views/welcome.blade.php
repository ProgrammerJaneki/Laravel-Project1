<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- <link rel="{{ asset('css/app.css') }}" href="stylesheet.css"> -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>

    <body >

        <livewire:counter />

    </body>
</html>