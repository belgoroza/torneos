<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
{{-- ********************************************************************************************************************************************************************** --}}
                <div class="bg-white bg-opacity-25 grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 p-6 lg:p-8">
                    <div class="pb-4 md:border-r border-gray-400">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                                <a class="btnClick cursor-pointer hover:text-red-600">Nueva Agenda</a><button class="ml-4 border border-gray-300 px-2 h-6 rounded hover:bg-red-200 text-xs listarAgenda">Listar</button>
                            </h2>
                        </div>

                        <div class="grid grid-cols-3 gap-2 md:pr-2 pt-1">
                            <div class="col-span-3 border-t border-gray-400 pt-4"></div>


                            <div class="text-gray-500">Asunto : </div>
                            <div class="text-gray-600 col-span-2">
                                <textarea name="textarea" rows="5" cols="5" class="p-2 w-full rounded border-gray-400 text-gray-600 text-muted resize-none" placeholder="Escriba su Asunto..."></textarea>
                            </div>

                            <div class="text-gray-500">Inicio : </div>
                            <div class="text-gray-600 col-span-2"><input type="datetime-local" class="w-full h-6 rounded border-gray-400 text-gray-600 text-muted"></div>

                            <div class="text-gray-500">Fin : </div>
                            <div class="text-gray-600 col-span-2"><input type="datetime-local" class="w-full h-6 rounded border-gray-400 text-gray-600 text-muted"></div>

                            <div class="text-gray-500">Alarma : </div>
                            <div class="text-gray-600 col-span-2 row flex">


                                <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                                  <input
                                    class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                    type="radio"
                                    name="flexRadioDefault"
                                    id="radioDefault01" />
                                    <label class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer" for="radioDefault01">Si</label>
                                </div>
                                <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem] ml-8">
                                  <input
                                    class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                    type="radio"
                                    name="flexRadioDefault"
                                    id="radioDefault02"
                                    checked />
                                  <label class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer" for="radioDefault02">No</label>
                                </div>
                            </div>

                            <div class="text-gray-500">Notificar a : </div>
                            <div class="text-gray-600 col-span-2"><input type="text" class="w-full h-6 rounded border-gray-400 text-gray-600 text-muted"></div>

                            <div class="text-gray-500">Teléfono : </div>
                            <div class="text-gray-600 col-span-2"><input type="number" class="w-full h-6 rounded border-gray-400 text-gray-600 text-muted"></div>

                            <div></div>
                            <div class="text-gray-600 col-span-2">
                                <button class="w-full rounded-lg px-2 bg-blue-200 border-blue-300 text-gray-500 font-bold hover:bg-red-200 btnClick">Agregar</button>
                            </div>


                            <div class="col-span-3 pt-8 border-b border-gray-400"></div>
                        </div>

                    </div>

                    <div class="col-span-2" id="resultado">

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                                <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                            <h2 class="ml-3 text-xl font-semibold text-gray-900"><a class="btnClick cursor-pointer hover:text-red-600">Nueva Agenda</a></h2>


                            <button onclick="getMessage()">Get Message</button>
                        </div>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                        </p>

                        <div id = 'msg' class="bg-gray-200">This message will be replaced using Ajax.Click the button to replace the message.</div>

                        <p class="mt-4 text-sm">
                            <a href="https://laracasts.com" class="inline-flex items-center font-semibold text-indigo-700">
                                Start watching Laracasts

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500">
                                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </p>
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
                            // swal("Los datos no han sido registrados!...");
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
                             url: '{{ route('agenda', array('ruta' => 'agenda','page' => 'listar' )) }}',
                             type: 'GET',
                             async: true,
                             success: function (respuesta)
                             {
                                  alert(respuesta);
                                  $('#resultado').html(respuesta);
                             },
                        });
                    });

                    function getMessage()
                    {
                        $.ajax({
                           type:'POST',
                           url:'getmsg',
                           data:'_token = <?php echo csrf_token() ?>',
                           success:function(data) {
                              $("#msg").html(data.msg);
                           }
                        });
                     }

                </script>
{{-- ********************************************************************************************************************************************************************** --}}
            </div>
        </div>
    </div>
</x-app-layout>