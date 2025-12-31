<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Alummni drectory' }}</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/header.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/alumni.css') }}">

        @livewireStyles
    </head>
    <body>
        <x-layouts.header/>
        <!--Page Content-->
        <main style="padding: 20px;">
        {{ $slot }}
        </main>
        @livewireScripts
    <script src="{{ asset('js/header.js') }}"></script>
    </body>
    </html>