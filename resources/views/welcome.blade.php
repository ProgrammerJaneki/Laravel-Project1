<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>

    <body class="p-1 ">

        <livewire:counter />


        <div class="sample-bg mt-2 bg-green-500 p-4 h-auto">
            <img src="{{ asset('images/delivery.jpg') }}" alt="img" class="bg-cover" width="80" height="80">
        </div>

        <livewire:sample.tutorial/>

        @livewire('users.contacts')

        @livewireScripts
    </body>
</html>
