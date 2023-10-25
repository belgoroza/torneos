<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/jpg" href="{{ asset('ss_imagenes/xisrago-32-32-black.ico') }}"/>
        <title>XHIMI GO</title>
        <script src="https://cdn.tailwindcss.com"></script>
        @vite(['resources/css/app.css','resources/js/app.js'])
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="{{ asset('js/jquery.min.js') }}"></script>
    </head>

    <body class="antialiased bg-gray-100">
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-2 sm:pt-0"> --}}
        <div class="relative top-8 sm:items-center py-8 sm:pt-8 ">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center text center pt-2 sm:pt-0">
                    <div class="grid grid-cols-1 w-4/5">
                        <div class="pb-2 mx-auto">
                            <img src="{{ asset('ss_imagenes/xhimi-go-165-35.png') }}" alt="Logo XhimiGo">
                        </div>
                        @if (Route::has('login'))
                            <div class="flex justify-center pt-4">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-500 underline">Iniciar Sesión</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-500 underline">Regístrate</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="my-8 px-4 max-w-xl mx-auto sm:px-6 lg:px-8 rounded-lg border border-gray-300 w-80 h-80 flex bg-white">
                <img alt="Home" src="https://source.unsplash.com/random/300×300/?office" class="w-72 h-72 rounded-lg my-auto mx-auto shadow-lg"/>
            </div>

        </div>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    </body>

</html>
