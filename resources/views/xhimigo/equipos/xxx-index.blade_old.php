<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
{{-- ********************************************************************************************************************************************************************** --}}
                {{-- MODAL --}}
                <div class="fixed z-10 inset-0 invisible overflow-y-auto bg-red-50" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="loadModal">
                    <div class="flex items-center justify-center px-4">
                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
                        <div class="mt-16 pt-4 bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all max-w-lg " id="respLoadModal">
                        </div>
                    </div>
                </div>                <div class="bg-white bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">

                    <div class="row">{{-- COLUMNA 1 --}}
                        <div>
                            <div class="flex border-b border-teal-500 mr-2 ml-1 justify-between pb-2" >{{-- ROW 1 --}}
                                <h2 class="text-md font-bold text-teal-400 flex"><a class="cursor-pointer ">Mis Equipos</a></h2>
                                <x-ss_componente.ss_menu>
                                    <x-slot name="trigger">
                                        <span class="rounded-md shadow-sm">
                                            <button class="inline-flex justify-center w-full text-xs font-bold text-teal-500 transition duration-150 ease-in-out bg-white rounded hover:bg-teal-500 hover:text-white focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800" type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                            </button>
                                        </span>
                                    </x-slot>
                                    <x-slot name="content">
                                        <x-ss_componente.link href="{{ url('my-equipo/1/MKS11180') }}" id="listaEquipo">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                               <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                               <path d="M9 6l11 0"></path>
                                               <path d="M9 12l11 0"></path>
                                               <path d="M9 18l11 0"></path>
                                               <path d="M5 6l0 .01"></path>
                                               <path d="M5 12l0 .01"></path>
                                               <path d="M5 18l0 .01"></path>
                                            </svg><span class="pl-2 ">Lista de Equipos</span>
                                        </x-ss_componente.link>
                                    </x-slot>
                                </x-ss_componente.ss_menu>

                            </div>

                        </div>

                        <div class="flex flex-col justify-center pt-4" id="row3"> {{--ROW 3--}}

                            {{--****** MENSAJES ******--}}
                            @if(Session::has('error_message'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                  <strong>Error!</strong> {{ Session::get('error_message') }}
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                            @endif
                            @if(Session::has('success_message'))
                                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                                  <div class="flex">
                                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg><span aria-hidden="true">&times;</span></div>
                                    <div>
                                      <p class="font-bold">{{ Session::get('success_message') }}</p>
                                      <p class="text-sm">Emporio comunicacional....</p>
                                    </div>
                                  </div>
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                  <strong class="font-bold">Holy smokes!</strong>
                                  <span class="block sm:inline">Something seriously bad happened.</span>
                                  <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                  </span>
                                    <ul class="border-t border-red-600">
                                        @foreach ($errors->all() as $error)
                                            <li class="pl-2 text-xs font-semibold">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                              {{--****** FIN MENSAJES ******--}}
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-sm text-muted text-gray-600 pt-4">
                                @forelse($data as $equipo)
                                    <div class="container bg-white rounded-xl shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                                        <div class="row absolute top-2 right-2">
                                            <x-ss_componente.ss_menu_card>
                                                <x-slot name="trigger">
                                                    <span class="rounded-md shadow-sm">
                                                        <button class="inline-flex justify-center w-full text-xs font-bold text-teal-500 transition duration-150 ease-in-out bg-white rounded hover:bg-teal-500 hover:text-white focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800" type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </button>
                                                    </span>
                                                </x-slot>
                                                <x-slot name="content">
                                                    <x-ss_componente.link-modal
                                                        data-ruta="{{ route('info-equipo-modal') }}"
                                                        data-id="{{$equipo['id']}}"
                                                        data-org="{{$equipo['nombre']}}"
                                                        data-codigo="{{$equipo['codigo']}}">
                                                        {{-- <div class="openModal flex items-center cursor-pointer" data-id="{{$equipo['id']}}"> --}}
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-info-circle" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                               <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                               <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                                               <path d="M12 9h.01"></path>
                                                               <path d="M11 12h1v4h1"></path>
                                                            </svg><span class="pl-2">Información</span>
                                                        {{-- </div> --}}
                                                    </x-ss_componente.link-modal>
                                                    <x-ss_componente.link-modal>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trophy" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                           <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                           <path d="M8 21l8 0"></path>
                                                           <path d="M12 17l0 4"></path>
                                                           <path d="M7 4l10 0"></path>
                                                           <path d="M17 4v8a5 5 0 0 1 -10 0v-8"></path>
                                                           <path d="M5 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                           <path d="M19 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        </svg><span class="pl-2 ">Jugadores</span>
                                                    </x-ss_componente.link-modal>
                                                    <x-ss_componente.link-modal
                                                        data-ruta="{{ route('equipos-modal') }}"
                                                        data-id="{{$equipo['id']}}"
                                                        data-org="{{$equipo['nombre']}}"
                                                        data-codigo="{{$equipo['codigo']}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shirt-sport" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                           <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                           <path d="M15 4l6 2v5h-3v8a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1v-8h-3v-5l6 -2a3 3 0 0 0 6 0"></path>
                                                           <path d="M10.5 11h2.5l-1.5 5"></path>
                                                        </svg><span class="pl-2 ">Torneos</span>
                                                    </x-ss_componente.link-modal>
                                                </x-slot>
                                            </x-ss_componente.ss_menu_card>
                                        </div>
                                        <div class="row">
                                            <img class="w-full h-36 cursor-pointer rounded-lg" src="https://source.unsplash.com/random/300×300/?football" alt="" />
                                            <div class="flex items-center w-full h-12 bg-gray-200 absolute top-32">
                                                <span class="text-xs text-teal-600 font-bold mx-auto">{{$equipo['nombre']}}</span>
                                            </div>
                                        </div>
                                        <div class="flex pt-6 justify-center px-2 border-b border-gray-100">
                                            <span class="p-2 text-gray-400 text-xs font-bold">{{$equipo['codigo']}}</span>
                                        </div>

                                    </div>
                                @empty
                                    <div class="col-span-3 bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
                                      <div class="flex">
                                        <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                                        <div>
                                          <p class="font-bold">Módulo Equipos</p>
                                          <p class="text-sm">Aún no hay Equipos creados por este usuario....</p>
                                        </div>
                                      </div>
                                    </div>
                                @endforelse

                                {{-- MODAL --}}
                                <div class="fixed z-10 inset-0 invisible overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="interestModal">
                                    <div class="flex items-center justify-center px-4">
                                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
                                        <div class="mt-16 pt-4 bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all max-w-lg " id="respModal">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="" id="resultado">{{-- COLUMNA 2 --}}
                        <div class="flex items-center" id="textoAclarativo">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                                <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                            <h2 class="ml-3 text-xl font-semibold text-gray-900"><a class="btnClick cursor-pointer hover:text-red-600">Módulo Equipos</a></h2>
                        </div>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">Módulo para crear Equipos. Desde aquí podrá crear un nuevo Equipo así como también editar registros ya creados.</p>
                        <p class="mt-4 text-sm">
                            <p class="inline-flex items-center font-semibold text-indigo-700">Conoce más detalles...
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500">
                                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                                </svg>
                            </p>
                        </p>
                    </div>

                </div>



                <script>
                    $('.alertModal').on('click', function(e)
                    {
                        $('#loadModal').removeClass('invisible');
                        $("#respLoadModal").html('<div class="row mx-auto text-center justify-center p-2 rounded  h-20"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin mx-auto"></div><div class="text-red-400 text-xs mx-2 pt-2">Cargando lista de Equipos</div></div>');
                    });
                    $('.modal').on('click', function(e)
                    {
                        var equId = $(this).data("id");
                        var organizacion = $(this).data("org");
                        var codigo = $(this).data("codigo");
                        var ruta = $(this).data("ruta");
                        event.preventDefault();
                        $.ajax(
                        {
                            data: {equId:equId, organizacion:organizacion, codigo:codigo},
                            url: ruta,
                            type: 'GET',
                            async: true,
                            beforeSend: function ()
                            {
                                $("#respModal").html('<div class="flex justify-center p-8"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
                            },
                             success: function (respuesta)
                             {
                                $("#respModal").html(respuesta);
                            },
                        });
                        $('#interestModal').removeClass('invisible');
                    });

                </script>


{{-- ********************************************************************************************************************************************************************** --}}
            </div>
        </div>
    </div>
</x-app-layout>