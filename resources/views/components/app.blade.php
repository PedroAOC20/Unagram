<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Unagram</title>
        @vite('resources/css/app.css')
    </head>
    <body class="font-sans antialiased bg-white" style="min-height: 100vh;">
        <x-header/>
        {{ $slot }}
    </body>
</html>
