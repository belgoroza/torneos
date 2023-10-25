<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
{{-- ********************************************************************************************************************************************************************** --}}

                <div class="bg-white bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">

                    <div class="row">{{-- COLUMNA 1 --}}
                        <div class="flex border-b border-teal-500 mr-2 ml-1">{{-- ROW 1 --}}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-teal-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                <h2 class="ml-3 text-xl font-semibold text-teal-500 flex"><a class="btnClick cursor-pointer hover:text-red-600">Torneos</a></h2>
                                <span class="text-xs font-semibold text-teal-500 ml-auto cursor-pointer hover:underline hover:text-red-400" onclick="misTorneos()">
                                    <i class="fas fa-arrow-right"></i> Mis Torneos
                                </span>
                            </svg>
                        </div>
                        <div class="flex w-full px-1 justify-between pb-2" id="row2">{{-- ROW 2 --}}
                            <form class="w-full mr-1">
                              <div class="flex items-center border-b border-teal-500 py-1">
                                <input class="focus:outline-none appearance-none bg-transparent border-none focus:border-none w-full text-xs font-bold text-gray-700 mr-3 py-1 px-2 leading-tight " type="text" placeholder="Buscar..." aria-label="Full name" id="txtSearch">
                                <span class="fas fa-search border border-teal-400 text-teal-400 rounded p-1 cursor-pointer hover:bg-teal-400 hover:text-white mr-2" onclick="searchTorneo('')"></span>
                                <span class="fas fa-plus border border-teal-400 text-teal-400 rounded p-1 cursor-pointer hover:bg-teal-400 hover:text-white" onclick="addTorneo('')"></span>
                              </div>
                            </form>
                        </div>
                        <div class="flex flex-col justify-center" id="row3"> {{--ROW 3--}}
                        </div>
                    </div>

                    <div class="" id="resultado">{{-- COLUMNA 2 --}}
                        <div class="flex items-center" id="textoAclarativo">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                                <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                            <h2 class="ml-3 text-xl font-semibold text-gray-900"><a class="btnClick cursor-pointer hover:text-red-600">Módulo Torneos</a></h2>
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
                    </div>

                </div>

                <script>

                    function searchTorneo()
                    {
                        var search = $("#txtSearch").val();
                        if(search=="")
                        {
                            swal({
                              text: "Ingrese un código para la búsqueda!...",
                              icon: "error"
                            })
                        }
                        else
                        {
                            event.preventDefault();
                            $.ajax(
                            {
                                data: {codigo:search},
                                url: '{{ route('search-torneo') }}',
                                type: 'GET',
                                async: true,
                                beforeSend: function ()
                                {
                                    $("#row3").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
                                },
                                 success: function (respuesta)
                                 {
                                    $('#row3').html(respuesta);
                                    $('#resultado').html('');
                                },
                            });
                        }
                    }

                    function addTorneo()
                    {
                        event.preventDefault();
                        $.ajax(
                        {
                            url: '{{ route('add-torneo') }}',
                            type: 'GET',
                            async: true,
                            beforeSend: function ()
                            {
                                $("#row3").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
                                $("#txtSearch").val("");
                            },
                             success: function (respuesta)
                             {
                                $('#row3').html(respuesta);
                                $('#resultado').html('');
                            },
                        });
                    }

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


                </script>
{{-- ********************************************************************************************************************************************************************** --}}
            </div>
        </div>
    </div>
</x-app-layout>