<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
        <title>XHIMI GO guest</title>
        <link rel="icon" type="image/jpg" href="{{ asset('ss_imagenes/xhimi-go-16-16.ico') }}"/>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    {{-- <body> --}}
    <body class="antialiased bg-gray-100">
        {{-- <div class="font-sans text-gray-900 antialiased"> --}}
        <div class="relative top-8 sm:items-center py-8 sm:pt-8">
            {{ $slot }}
        </div>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/jquery_validate.min.js') }}"></script>
    </body>
</html>
