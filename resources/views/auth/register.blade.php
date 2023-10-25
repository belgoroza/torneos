<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            {{-- <x-authentication-card-logo /> --}}
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
                                <a href="{{ route('login') }}" class="ml-4 text-sm text-gray-500 underline">Iniciar Sesión</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="border-b border-gray-300 pb-4 text-center text-indigo-600 font-bold">Formulario de Registro</div>
            <div class="pt-8">
                <x-label for="name" value="{{ __('Nombre') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4 mb-6">
                <x-label for="password_confirmation" value="{{ __('Confirm Contraseña') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="grid grid-cols-2 pt-4 border-t border-gray-300">
                <div>
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 text-left" href="{{ route('login') }}">{{ __('Ya está registrado?') }}
                    </a>
                </div>
                <div><x-button class="ml-4">{{ __('Register') }}</x-button></div>
            </div>

            <div class="flex items-center justify-center mt-4">



            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
