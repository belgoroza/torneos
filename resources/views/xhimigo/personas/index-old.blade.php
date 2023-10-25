<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
{{-- ********************************************************************************************************************************************************************** --}}
 {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif     --}}

                <div class="bg-white bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                    <div class="pb-4 md:border-r border-gray-400" id="resultado1">
                        <div class="flex justify-between">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                <h2 class="ml-3 text-xl font-semibold text-gray-900 flex"><a class="btnClick cursor-pointer hover:text-red-600">Lista Personas INDEX</a></h2>
                            </svg>
                            <button class="mr-2 border border-green-600 px-2 h-6 rounded hover:bg-green-200 text-xs text-green-600 font-bold items-end listarAgenda" onclick="verPersona('')">Nueva Persona</button>
                        </div>
                        <div class="border-t border-gray-400 mr-2 pr-2"></div>

                        {{--**************************** SECCION : BUSCAR AGENDA  ( INICIO ) *********************************** --}}
                        <div class="mr-2 my-4 flex justify-between gap-4">
                            <input type="search" id="textBuscar" class="w-2/3 h-6 px-3 rounded-lg border border-gray-400 text-xs text-gray-600 font-bold" placeholder="Ingrese número de documento...">
                            <button class="w-1/3 h-6 border border-blue-600 rounded-lg text-xs text-blue-600 font-bold bg-blue-400 hover:bg-blue-700 hover:text-white" onclick="buscarPersona()">Buscar</button>
                        </div>
                        {{--**************************** SECCION : BUSCAR AGENDA  ( FIN ) *********************************** --}}
                        <div class="col-span-3 border-t border-gray-400 pt-4 mr-2" id="tablaAgenda">
                            <table class="min-w-full text-left text-xs font-bold">
                                <thead class="border-b rounded bg-neutral-200 font-medium dark:border-neutral-500 dark:text-neutral-800">
                                    <tr>
                                      <th>Asunto</th>
                                      <th>Inicio</th>
                                      <th>Estado</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($data as $dato)
                                        <tr class="cursor-pointer hover:bg-green-200" onclick="verPersona('{{ $dato['id'] }}')">
                                            <td class="py-2 border-b border-gray-400 text-gray-500">{{ $dato['nombres'] }}</td>
                                            <td class="py-2 border-b border-gray-400 text-gray-500">{{ $dato['apellidos'] }}</td>
                                            <td class="py-2 border-b border-gray-400 text-gray-500 flex justify-between cursor-pointer" >{{ $dato['status'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="" id="resultado">


                        {{-- ******************  TEXTO ACLARATIVO TIPO MANUAL  (INICIO) *******************--}}
                            <div class="flex items-center" id="textoAclarativo">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                                    <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                                <h2 class="ml-3 text-xl font-semibold text-gray-900"><a class="btnClick cursor-pointer hover:text-red-600">Módulo Personas</a></h2>
                            </div>

                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                Módulo para crear personas. Desde aquí podrá crear una nueva persona así como también editar registros ya creados.
                            </p>
                            <p class="mt-4 text-sm">
                                <a href="" class="inline-flex items-center font-semibold text-indigo-700">
                                    Start watching Laracasts
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500">
                                        <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </p>
                        {{-- ******************  TEXTO ACLARATIVO TIPO MANUAL  (INICIO) *******************--}}
                    </div>

                    {{-- TARJETA PERSONAS ( I N I C I O )--}}
                    <!-- component -->
                    <div class="row">
                        <div class="flex border-b border-teal-500 mr-2 ml-1">{{-- ROW 1 --}}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-teal-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                <h2 class="ml-3 text-xl font-semibold text-teal-500 flex"><a class="btnClick cursor-pointer hover:text-red-600">Personas</a></h2>
                            </svg>
                        </div>
                        <div class="flex w-full px-1 justify-between pb-2">{{-- ROW 2 --}}
                            <form class="w-full mr-1">
                              <div class="flex items-center border-b border-teal-500 py-1">
                                <input class="focus:outline-none appearance-none bg-transparent border-none focus:border-none w-full text-xs font-bold text-gray-700 mr-3 py-1 px-2 leading-tight " type="search" placeholder="Buscar..." aria-label="Full name" id="txtSearch">
                                <span class="fas fa-search border border-teal-400 text-teal-400 rounded p-1 cursor-pointer hover:bg-teal-400 hover:text-white mr-2" onclick="searchPersona('')"></span>
                                <span class="fas fa-plus border border-teal-400 text-teal-400 rounded p-1 cursor-pointer hover:bg-teal-400 hover:text-white"></span>
                              </div>
                            </form>
                        </div>
                        <div class="flex flex-col justify-center" id="row3"> {{--ROW 3--}}
                            <div class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-lg mr-2 border border-gray-400 bg-gray-100">
                                <div class="w-full md:w-1/3 grid place-items-start px-2 pt-2">
                                    <img src="https://images.pexels.com/photos/4381392/pexels-photo-4381392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="tailwind logo" class="mx-auto rounded w-full h-36" />
                                </div>
                                <div class="w-full md:w-2/3 flex flex-col space-y-2 p-3">
                                    <div class="flex justify-between item-center border-b border-teal-500">
                                        <p class="text-gray-500 font-medium hidden md:block">Vacations</p>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <p class="text-gray-600 font-bold text-sm ml-1">
                                                4.96
                                                <span class="text-gray-500 font-normal">(76 reviews)</span>
                                            </p>
                                        </div>
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-500" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 hidden md:block">Superhost</div>
                                    </div>

                                    <div class="grid grid-cols-2">
                                        <div class="border-b border-gray-300 mr-2">
                                            <small class="text-xs text-gray-400 ">Nombres</small><br><span class="text-sm text-gray-500 text-muted">Miguel Angel</span>
                                        </div>
                                        <div class="border-b border-gray-300">
                                            <small class="text-xs text-gray-400">Apellidos</small><br><span class="text-sm text-gray-500 text-muted">Gorozabel Quiroz</span>
                                        </div>

                                        <div class="border-b border-gray-300 mr-2 pt-2">
                                            <small class="text-xs text-gray-400">Teléfono</small><br><span class="text-sm text-gray-500 text-muted">+593990325917</span>
                                        </div>
                                        <div class="border-b border-gray-300 pt-2">
                                            <small class="text-xs text-gray-400">Email</small><br><span class="text-sm text-gray-500 text-muted">voryel@gmail.com</span>
                                        </div>

                                        <div class="border-b border-gray-300 mr-2 pt-2">
                                            <small class="text-xs text-gray-400">País de Nacimiento</small><br><span class="text-sm text-gray-500 text-muted">ECUADOR</span>
                                        </div>
                                        <div class="border-b border-gray-300 pt-2">
                                            <small class="text-xs text-gray-400">Fecha de Nacimiento</small><br><span class="text-sm text-gray-500 text-muted">11/11/1980</span>
                                        </div>

                                        <div class="border-b border-gray-300 mr-2 pt-2">
                                            <small class="text-xs text-gray-400">Ciudad Actual</small><br><span class="text-sm text-gray-500 text-muted">STO DGO</span>
                                        </div>
                                        <div class="border-b border-gray-300 pt-2">
                                            <small class="text-xs text-gray-400">Dirección Actual</small><br><span class="text-sm text-gray-500 text-muted">PORTON</span>
                                        </div>


                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- TARJETA PERSONAS ( F I N )--}}
                </div>

                <script>
                    $( ".btnClick" ).on( "click", function()
                    {
                      swal({
                          title: "Está seguro?",
                          text: "Procederá a guardar los datos de este formulario!",
                          icon: "warning",
                          buttons: true,
                          dangerMode: true,
                        })
                        .then((willDelete) => {
                          if (willDelete) {
                            swal("Bien! Sus datos han sido guardados exitosamente!", {
                              icon: "success",
                            });
                          } else {
                            swal({
                              title: "Abortado?",
                              text: "Los datos no han sido registrados!...",
                              icon: "error"
                            })
                          }
                        });
                    } );


                    function verPersona(id)
                    {
                        var idPersona = id;
                        event.preventDefault();
                        $.ajax(
                        {
                            data: {dataId:idPersona},
                            url: '{{ route('ver-persona') }}',
                            type: 'GET',
                            async: true,
                            beforeSend: function ()
                            {
                                // $("#tablaAgenda").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
                                $("#resultado").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');

                            },
                             success: function (respuesta)
                             {
                                if(idPersona==""){$('#tablaAgenda').html('')} else{  };
                                $('#resultado').html(respuesta);
                            },
                        });
                    }

                    function buscarPersona()
                    {
                        var search = $("#textBuscar").val();
                        event.preventDefault();
                        $.ajax(
                        {
                            data: {"texto":search},
                            url: '{{ route('buscar-persona') }}',
                            type: 'GET',
                            async: true,
                            beforeSend: function ()
                            {
                                $("#tablaAgenda").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
                                // $("#resultado").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');

                            },
                             success: function (respuesta)
                             {
                                $('#tablaAgenda').html(respuesta);
                                $('#resultado').html('');
                            },
                        });
                    }

                    function searchPersona()
                    {
                        var search = $("#txtSearch").val();
                        event.preventDefault();
                        $.ajax(
                        {
                            data: {"texto":search},
                            url: '{{ route('search-persona') }}',
                            type: 'GET',
                            async: true,
                            beforeSend: function ()
                            {
                                $("#row3").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
                                // $("#resultado").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');

                            },
                             success: function (respuesta)
                             {
                                $('#row3').html(respuesta);
                                $('#resultado').html('');
                            },
                        });
                    }



                </script>
{{-- ********************************************************************************************************************************************************************** --}}
            </div>
        </div>

    </div>
</x-app-layout>