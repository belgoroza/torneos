<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <div class="grid grid-cols-1">
                <div class="border-b border-gray-400 pb-2">
                    <img src="{{ asset('ss_imagenes/xhimi-go-165-35.png') }}" alt="Logo XhimiGo">
                </div>
                @if (Route::has('login'))
                    <div class="flex justify-center pt-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ url('/') }}" class="text-sm text-gray-500 underline">Home</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-500 underline">Registrate</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            {{-- <x-authentication-card-logo /> --}}
        </x-slot>



        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">@csrf

            <div class="">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block py-4 border-b border-gray-200">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                </label>
            </div>

            <div class="grid grid-cols-3 pt-4">
                <div class="col-span-2">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Olvidó su contraseña?') }}
                        </a>
                    @endif
                </div>
                <div class="block">
                    <x-button class="w-full text-center">{{ __('Log in') }}</x-button>
                </div>
            </div>
            <div class="flex items-center justify-end mt-4">



            </div>
        </form>

        <div class="border-t border-gray-300 cursor-pointer" onclick="admin()">
            <div class="grid grid-cols-3 pt-4">
                <div class="text-xs font-bold text-gray-600 col-span-2">reencauche.gte@gmail.com</div>
                <div class="text-xs font-bold text-gray-600">admin123</div>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>
<script>
    function admin()
    {
        var email = document.getElementById("email");
        var pass = document.getElementById("password");
        email.value = "reencauche.gte@gmail.com";
        pass.value = "admin123";
    }
    function empleado()
    {
        var email = document.getElementById("email");
        var pass = document.getElementById("pass");
        email.value = "reencauche.gte@gmail.com";
        pass.value = "usuario@demo";
    }
    function usuario()
    {
        var email = document.getElementById("email");
        var pass = document.getElementById("pass");
        email.value = "voryel@outlook.com";
        pass.value = "user123456";
    }
</script>