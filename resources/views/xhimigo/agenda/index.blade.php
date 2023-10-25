<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
{{-- ********************************************************************************************************************************************************************** --}}
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif               <div class="bg-white bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                    <div class="pb-4 md:border-r border-gray-400" id="resultado1">
                        <div class="flex justify-between">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                <h2 class="ml-3 text-xl font-semibold text-gray-900 flex"><a class="btnClick cursor-pointer hover:text-red-600">Lista Agenda</a></h2>
                            </svg>
                            <button class="mr-2 border border-green-600 px-2 h-6 rounded hover:bg-green-200 text-xs text-green-600 font-bold items-end listarAgenda">Nueva</button>
                        </div>
                        <div class="border-t border-gray-400 mr-2 pr-2"></div>


                        {{--**************************** SECCION : BUSCAR AGENDA  ( INICIO ) *********************************** --}}
                        <div class="mr-2 my-4 flex justify-between gap-4">
                            <input type="search" id="textBuscar" class="w-2/3 h-6 px-3 rounded-lg border border-gray-400 text-xs text-gray-600 font-bold">
                            <button class="w-1/3 h-6 border border-blue-600 rounded-lg text-xs text-blue-600 font-bold hover:bg-blue-700 hover:text-white" onclick="buscarAgenda()">Buscar</button>
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
                                        <tr>
                                            <td class="py-2 border-b border-gray-400 text-gray-500">{{ substr(strip_tags($dato->asunto), 0, 15) }}...</td>
                                            <td class="py-2 border-b border-gray-400 text-gray-500">{{ \Carbon\Carbon::parse($dato->fin)->diffForHumans()  }}</td>
                                            <td class="py-2 border-b border-gray-400 text-gray-500 flex justify-between">
                                                @if($dato->status == "1") Pendiente @else Cerrado @endif
                                                <span class="p-1 rounded-full text-xs font-bold cursor-pointer hover:bg-red-300 verAgenda" data-id="{{ $dato->id }}"><i class="fa-solid fa-magnifying-glass"></i></span>
                                            </td>
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
                                <h2 class="ml-3 text-xl font-semibold text-gray-900"><a class="btnClick cursor-pointer hover:text-red-600">Módulo Agenda</a></h2>
                            </div>

                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                Módulo para crear agendas. Desde aquí podrá crear una nueva agenda así como también editar eventos pendientes y ver eventos cerrados..
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



                    $( ".listarAgenda" ).on( "click", function()
                    {
                        event.preventDefault();
                        $.ajax(
                        {
                             url: '{{ route('agenda', array('ruta' => 'agenda','page' => 'nueva' )) }}',
                             type: 'GET',
                             async: true,
                             beforeSend: function ()
                            {
                                $("#resultado").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
                            },
                             success: function (respuesta)
                             {
                                  $('#resultado').html(respuesta);
                             },
                        });
                    });


                    $( ".verAgenda" ).on( "click", function()
                    {
                        var id = $(this).data("id");
                        event.preventDefault();
                        $.ajax(
                        {
                            data: {"id":id,"ruta":"agenda","page":"editar"},
                            url: '{{ route('ver-agenda') }}',
                            type: 'GET',
                            async: true,
                            beforeSend: function ()
                            {
                                $("#resultado").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
                            },
                             success: function (respuesta){$('#resultado').html(respuesta);},
                        });
                    });

                    function buscarAgenda()
                    {
                        var search = $("#textBuscar").val();
                        event.preventDefault();
                        $.ajax(
                        {
                            data: {"texto":search},
                            url: '{{ route('buscar-agenda') }}',
                            type: 'GET',
                            async: true,
                            beforeSend: function ()
                            {
                                $("#tablaAgenda").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
                                $("#resultado").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');

                            },
                             success: function (respuesta)
                             {
                                $('#tablaAgenda').html(respuesta);
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