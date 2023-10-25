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
                                <h2 class="ml-3 text-xl font-semibold text-teal-500 flex"><a class="btnClick cursor-pointer hover:text-red-600">Equipos</a></h2>
                                <span class="text-xs font-semibold text-teal-500 ml-auto cursor-pointer hover:underline hover:text-red-400" onclick="misTorneos()">
                                    <i class="fas fa-arrow-right"></i> Mis Equipos
                                </span>
                                <span class="text-sm text-teal-500 ml-2 px-2 py-1 border border-teal-300 rounded fas fa-plus cursor-pointer hover:text-white hover:bg-teal-500"></span>
                            </svg>
                        </div>

                        <div class="flex flex-col justify-center" id="row3"> {{--ROW 3--}}

                        	<div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-sm text-muted text-gray-600 pt-4">
								@forelse($data as $equipo)

									<div class="container bg-white rounded-xl shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl">

										<div class="row">
											<img class="w-full h-36 cursor-pointer rounded-lg" src="https://source.unsplash.com/random/300×300/?team" alt="" />
									    	<div class="flex items-center w-full h-12 bg-gray-200 absolute top-32"><span class="text-xs text-teal-600 font-bold mx-auto">{{$equipo['codigo']}}</span></div>
										</div>

									    <div class="flex pt-8 pb-2 justify-between px-2 border-b border-gray-100"><span class="text-gray-500 text-xs"> Código : </span> <span class="px-2 text-teal-600 text-xs font-bold">{{$equipo['nombre']}}</span></div>

									    <div class="flex justify-between p-2 border-t border-gray-100">
									    	<span class="border border-gray-400 rounded px-1 cursor-pointer hover:text-red-500 hover:bg-gray-100 hover:border-red-300 openModal" data-id="{{$equipo['id']}}">
									    		<i class="fas fa-play"></i>
									    	</span>
									    	<span class="border border-gray-400 rounded px-1 cursor-pointer hover:text-red-500 hover:bg-gray-100 hover:border-red-300 openModal">
									    		<i class="fab fa-font-awesome-flag"></i>
									    	</span>
									    </div>

								  	</div>

								@empty
									<div class="col-span-3 bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
                                      <div class="flex">
                                        <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                                        <div>
                                          <p class="font-bold">Our privacy policy has changed</p>
                                          <p class="text-sm">Aún no hay Equipos creados por este usuario....</p>
                                        </div>
                                      </div>
                                    </div>
								@endforelse


								{{-- <button type="button" class="focus:outline-none openModal text-white text-sm rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg">Open Modal</button> --}}
							    <!-- This example requires Tailwind CSS v2.0+ -->
							    <div class="fixed z-10 inset-0 invisible overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="interestModal">
							        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
							            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
							            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>

							            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" id="respModal">

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

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            Módulo para crear Equipos. Desde aquí podrá crear una nueva Organización así como también editar registros ya creados.
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


                <div class="fixed z-10 inset-0 invisible overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="interestModal">
			        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
			            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
			            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>

			            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" id="respModal">

			        	</div>
			    	</div>
			    </div>



                <script>

                    $('.openModal').on('click', function(e)
				   	{
				   		// var id = $(this).data("id");
				   		var ident = $(this).data("id");
				   		event.preventDefault();
				        $.ajax(
				        {
				            data: {codigo:ident},
				            url: '{{ route('mis-torneos-detalle') }}',
				            type: 'GET',
				            async: true,
				            beforeSend: function ()
				            {
				                $("#respModal").html('<div class="flex justify-center p-8"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
				                // $("#txtSearch").val("");
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