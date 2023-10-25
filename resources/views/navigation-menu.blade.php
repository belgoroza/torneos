<nav x-data="{ open: false }" class="bg-gray-100 border-b border-white sticky top max-w-7xl mx-auto px-2 sm:px-2 lg:px-2">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    {{-- <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a> --}}
                    <a href="{{ route('dashboard') }}"><img src="{{ asset('ss_imagenes/xhimi-go-165-35.png') }}" alt="Logo XisraGo"></a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Tablero D') }}
                    </x-nav-link>

                    <x-ss_componente.ss_dropdown><!-- Clientes -->
                        <x-slot name="trigger">
                            <a class="leading-5 text-gray-900">Torneos</a>
                            {{-- <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg> --}}
                        </x-slot>
                        <x-slot name="content">
                            <!-- Account Management -->
                            {{-- <div class="block px-4 py-2 text-xs text-gray-400">{{ __('Principal') }}</div>
                            <x-dropdown-link href="{{ route('solicitud', array('ruta' => 'clientes','page' => 'facturas' )) }}">{{ __('Facturas') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('solicitud', array('ruta' => 'clientes','page' => 'pagos' )) }}">{{ __('Pagos') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('solicitud', array('ruta' => 'clientes','page' => 'productos' )) }}">{{ __('Productos') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('solicitud', array('ruta' => 'clientes','page' => 'seguimiento' )) }}">{{ __('Seguimiento') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('solicitud', array('ruta' => 'clientes','page' => 'reportes' )) }}">{{ __('Reportes') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('solicitud', array('ruta' => 'clientes','page' => 'crear_cliente' )) }}">{{ __('Solicitud') }}</x-dropdown-link> --}}

                            <div class="block px-4 py-2 text-xs text-gray-400">{{ __('Torneos') }}</div>
                            <x-dropdown-link href="">{{ __('Torneo') }}</x-dropdown-link>
                            <x-dropdown-link href="">{{ __('Pagos') }}</x-dropdown-link>
                            <x-dropdown-link href="">{{ __('Productos') }}</x-dropdown-link>
                            <x-dropdown-link href="">{{ __('Seguimiento') }}</x-dropdown-link>
                            <x-dropdown-link href="">{{ __('Reportes') }}</x-dropdown-link>
                            <x-dropdown-link href="">{{ __('Solicitud') }}</x-dropdown-link>


                            <div class="border-t border-gray-200"></div>


                        </x-slot>
                    </x-ss_componente.ss_dropdown>

                    <x-ss_componente.ss_dropdown><!-- Proveedores -->
                        <x-slot name="trigger">
                            <a class="leading-5 text-gray-900">Proveedores</a>
                        </x-slot>
                        <x-slot name="content">
                            {{-- <x-dropdown-link href="{{ route('solicitud', array('ruta' => 'proveedores','page' => 'facturas' )) }}">{{ __('Facturas') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('solicitud', array('ruta' => 'proveedores','page' => 'reembolsos' )) }}">{{ __('Reembolsos') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('solicitud', array('ruta' => 'proveedores','page' => 'pagos' )) }}">{{ __('Pagos') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('solicitud', array('ruta' => 'proveedores','page' => 'productos' )) }}">{{ __('Productos') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('solicitud', array('ruta' => 'proveedores','page' => 'seguimiento' )) }}">{{ __('Seguimiento') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('solicitud', array('ruta' => 'proveedores','page' => 'reportes' )) }}">{{ __('Reportes') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('solicitud', array('ruta' => 'proveedores','page' => 'solicitud' )) }}">{{ __('Solicitud') }}</x-dropdown-link> --}}

                            <x-dropdown-link href="">{{ __('Facturas') }}</x-dropdown-link>
                            <x-dropdown-link href="">{{ __('Reembolsos') }}</x-dropdown-link>
                            <x-dropdown-link href="">{{ __('Pagos') }}</x-dropdown-link>
                            <x-dropdown-link href="">{{ __('Productos') }}</x-dropdown-link>
                            <x-dropdown-link href="">{{ __('Seguimiento') }}</x-dropdown-link>
                            <x-dropdown-link href="">{{ __('Reportes') }}</x-dropdown-link>
                            <x-dropdown-link href="">{{ __('Solicitud') }}</x-dropdown-link>


                        </x-slot>
                    </x-ss_componente.ss_dropdown>

                    <x-ss_componente.ss_dropdown><!-- Contabilidad -->
                        <x-slot name="trigger">
                            <a class="leading-5 text-gray-900">Torneos</a>
                        </x-slot>
                        <x-slot name="content">
                            <div class="block px-4 py-1 text-xs text-gray-400 bg-gray-100">{{ __('Resumen Torneos') }}</div>
                            <x-ss_componente.ss_dropdown_link href="{{ route('torneo-buscar') }}">{{ __('Buscar Torneo') }}</x-ss_componente.ss_dropdown_link>
                            <x-ss_componente.ss_dropdown_link href="{{ route('torneos-activos') }}">{{ __('Torneos Activos') }}</x-ss_componente.ss_dropdown_link>
                            <x-ss_componente.ss_dropdown_link href="">{{ __('Torneos Finalizados') }}</x-ss_componente.ss_dropdown_link>
                        </x-slot>
                    </x-ss_componente.ss_dropdown>

                    <x-ss_componente.ss_dropdown><!-- Maestros -->
                        <x-slot name="trigger">
                            <a class="leading-5 text-gray-900">Maestros</a>
                        </x-slot>
                        <x-slot name="content">
                            {{-- <div class="block px-4 py-1 text-xs text-gray-400 bg-gray-100">{{ __('Usuarios') }}</div>
                            <x-ss_componente.ss_dropdown_link href="{{ route('add-edit-personas') }}">{{ __('Personas') }}</x-ss_componente.ss_dropdown_link>
                            <x-ss_componente.ss_dropdown_link href="{{ route('ruta-agregar-clientes') }}">{{ __('Clientes') }}</x-ss_componente.ss_dropdown_link>
                            <x-ss_componente.ss_dropdown_link href="{{ route('ruta-listar-proveedores') }}">{{ __('Proveedores') }}</x-ss_componente.ss_dropdown_link>
                            <div class="border-t border-gray-200"></div>
                            <x-ss_componente.ss_dropdown_link href="{{ route('ruta-lista-producto') }}">{{ __('Productos') }}</x-ss_componente.ss_dropdown_link>
                            <x-ss_componente.ss_dropdown_link href="{{ route('profile.show') }}">{{ __('Empresas') }}</x-ss_componente.ss_dropdown_link>
                            <x-ss_componente.ss_dropdown_link href="{{ url('clientes') }}">{{ __('Usuarios') }}</x-ss_componente.ss_dropdown_link>
                            <div class="block px-4 py-2 text-xs text-gray-400 bg-gray-100">{{ __('Cuentas') }}</div>
                            <x-ss_componente.ss_dropdown_link href="{{ route('profile.show') }}">{{ __('Impuestos') }}</x-ss_componente.ss_dropdown_link>
                            <x-ss_componente.ss_dropdown_link href="{{ route('profile.show') }}">{{ __('Items') }}</x-ss_componente.ss_dropdown_link>
                            <div class="border-t border-gray-200"></div> --}}

                            <div class="block px-4 py-1 text-xs text-gray-400 bg-gray-100">{{ __('Usuarios') }}</div>
                            <x-ss_componente.ss_dropdown_link href="{{ route('index-persona') }}">{{ __('Personas') }}</x-ss_componente.ss_dropdown_link>
                            <x-ss_componente.ss_dropdown_link href="{{ url('my-torneo/1/MKS11180') }}">{{ __('Torneos') }}</x-ss_componente.ss_dropdown_link>
                            <x-ss_componente.ss_dropdown_link href="">{{ __('Clientes') }}</x-ss_componente.ss_dropdown_link>
                            <x-ss_componente.ss_dropdown_link href="">{{ __('Proveedores') }}</x-ss_componente.ss_dropdown_link>
                            <div class="border-t border-gray-200"></div>
                            <x-ss_componente.ss_dropdown_link href="">{{ __('Productos') }}</x-ss_componente.ss_dropdown_link>
                            <x-ss_componente.ss_dropdown_link href="">{{ __('Empresas') }}</x-ss_componente.ss_dropdown_link>
                            <x-ss_componente.ss_dropdown_link href="">{{ __('Usuarios') }}</x-ss_componente.ss_dropdown_link>
                            <div class="block px-4 py-2 text-xs text-gray-400 bg-gray-100">{{ __('Cuentas') }}</div>
                            <x-ss_componente.ss_dropdown_link href="">{{ __('Impuestos') }}</x-ss_componente.ss_dropdown_link>
                            <x-ss_componente.ss_dropdown_link href="">{{ __('Items') }}</x-ss_componente.ss_dropdown_link>
                            <div class="border-t border-gray-200"></div>


                        </x-slot>
                    </x-ss_componente.ss_dropdown>

                    <x-ss_componente.ss_dropdown><!-- Maestros -->
                        <x-slot name="trigger">
                            <a class="leading-5 text-gray-900">Agenda</a>
                        </x-slot>
                        <x-slot name="content">
                            <x-ss_componente.ss_dropdown_link href="{{ route('agenda', array('ruta' => 'agenda','page' => 'index' )) }}">{{ __('Nueva') }}</x-ss_componente.ss_dropdown_link>
                            {{-- <x-ss_componente.ss_dropdown_link href="{{ route('new-agenda', array('ruta' => 'agenda','page' => 'nueva' )) }}">{{ __('New') }}</x-ss_componente.ss_dropdown_link> --}}
                            {{-- <x-ss_componente.ss_dropdown_link href="{{ route('list-agenda', array('ruta' => 'agenda','page' => 'listar' )) }}">{{ __('Listar') }}</x-ss_componente.ss_dropdown_link> --}}
                            <div class="border-t border-gray-200"></div>
                            <x-ss_componente.ss_dropdown_link href="">{{ __('Bitácora') }}</x-ss_componente.ss_dropdown_link>
                        </x-slot>
                    </x-ss_componente.ss_dropdown>


                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-dropdown-link>
                                    @endcan

                                    <div class="border-t border-gray-200"></div>

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Switch Teams') }}
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-switchable-team :team="$team" />
                                    @endforeach
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-ss_componente.ss_dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                {{-- <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition"> --}}
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                {{-- </button> --}}
                            @else
                                <span class="inline-flex rounded-md text-sm text-gray-600">
                                    {{-- <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150"> --}}
                                        {{ Auth::user()->name }}
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">{{ __('Perfil') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ url('my-torneo/1/MKS11180') }}">{{ __('Mis Torneos') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ url('my-organizacion/1/MKS11180') }}">{{ __('Mis Organizaciones') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ url('my-equipo/1/MKS11180') }}">{{ __('Mis Equipos') }}</x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-ss_componente.ss_dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        {{-- <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard M') }}
            </x-responsive-nav-link>
        </div> --}}

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-400">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800"><span class="text-gray-500"> Bienvenido : </span>{{ Auth::user()->name }}</div>
                    {{-- <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div> --}}
                </div>
            </div>

            <div class="mt-3 space-y-1">

                <div class="flex gap-2">
                    <div class="w-full text-xs text-gray-500 font-bold">
                        <a href="{{ url('my-torneo/1/MKS11180') }}" class="w-full h-8 flex bg-slate-100 py-2 justify-center underline">Mis Torneos</a>
                    </div>
                    <div class="w-full text-xs text-gray-500 font-bold rounded border border-gray-400">
                        <a href="{{ url('my-organizacion/1/MKS11180') }}" class="w-full h-8 flex bg-slate-100 py-2 justify-center">Mis Organizaciones</a>
                    </div>
                    <div class="w-full text-xs text-gray-500 font-bold rounded border border-gray-400">
                        <a href="{{ url('my-equipo/1/MKS11180') }}" class="w-full h-8 flex bg-slate-100 py-2 justify-center">Mis Equipos</a>
                    </div>
                </div>
                <div class="h-8"></div>
                <div class="grid grid-cols-3 gap-4 rounded p-1 bg-gray-200">
                    <div class="w-full text-xs text-gray-500 font-bold rounded border border-gray-400">
                        <a href="{{ route('profile.show') }}" class="w-full h-8 flex bg-slate-100 py-2 justify-center">Perfil</a>
                    </div>
                    <div class="w-full text-xs text-gray-500 font-bold rounded border border-gray-400">
                        <a href="{{ route('profile.show') }}" class="w-full h-8 flex bg-slate-100 py-2 justify-center">Config</a>
                    </div>
                    <div class="w-full text-xs text-gray-500 font-bold rounded border border-gray-400">
                        <form method="POST" action="{{ route('logout') }}" x-data>@csrf
                            <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="w-full h-8 flex bg-slate-100 py-2 justify-center">Salir</a>
                        </form>
                    </div>

                </div>



                {{-- <div class="grid grid-cols-3 justify-center">
                    <div class=""><span class="text-gray-500">{{ Auth::user()->name }}</span></div>
                    <div class="text-center">
                        <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">{{ __('Perfil') }}</x-responsive-nav-link>
                    </div>
                    <div class="text-right">
                        <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">{{ __('Salir') }}</x-responsive-nav-link>
                    </div>

                    <div class="text-right">
                        <x-responsive-nav-link href="{{ route('agenda', array('ruta' => 'agenda','page' => 'index' )) }}">{{ __('Agenda') }}</x-responsive-nav-link>
                    </div>


                </div> --}}
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">{{ __('Perfil') }}</x-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>@csrf
                    <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">{{ __('Salir xxx') }}</x-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-responsive-nav-link>
                    @endcan

                    <div class="border-t border-gray-200"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-switchable-team :team="$team" component="responsive-nav-link" />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>

{{-- <script>
function misTorneos()
{
   const id = {{auth()->id()}};
   event.preventDefault();
    $.ajax(
    {
        data: {codigo:id},
        url: '{{ route('mis-torneos') }}',
        type: 'GET',
        async: true,
        beforeSend: function ()
        {
            $('#row2').html('');
            $("#row3").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
            $("#txtSearch").val("");
        },
         success: function (respuesta)
         {
            $('#row2').html('');
            $('#row3').html(respuesta);
            $('#resultado').html('');
        },
    });


}
</script> --}}
