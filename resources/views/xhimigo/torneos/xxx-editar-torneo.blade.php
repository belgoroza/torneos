<div class="flex flex-col justify-center" id="row3"> {{--ROW 3--}}
    <div class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-lg mr-2 border border-gray-400 bg-gray-100">
        <div class="w-full md:w-1/3 grid place-items-start px-2 pt-2">
            <img src="https://images.pexels.com/photos/4381392/pexels-photo-4381392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="tailwind logo" class="mx-auto rounded w-full h-36" />
        </div>
        <div class="w-full md:w-2/3 flex flex-col space-y-2 p-3">
            <div class="flex justify-between item-center border-b border-teal-500">
                <p class="text-gray-500 font-medium hidden md:block">Equipos</p>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <p class="text-gray-600 font-bold text-sm ml-1">4.96<span class="text-gray-500 font-normal">(76 reviews)</span></p>
                </div>
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 hidden md:block">Código</div>
            </div>

            <div class="grid grid-cols-2">

                <div class="border-b border-gray-300 mr-2 col-span-2">
                    <small class="text-xs text-gray-400">Nombre del Torneo</small><br>
                    <input type="text"
                        id="txt_nombre"
                        class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                        value="{{$searchData->nombre}}">
                </div>

                <div class="border-b border-gray-300 mr-2 col-span-2">
                    <small class="text-xs text-gray-400">Nombre del Torneo (Adicional)</small><br>
                    <input type="text"
                        id="txt_nombre_2"
                        class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                        value="{{$searchData->nombre_2}}">
                </div>

                <div class="border-b border-gray-300 mr-2 pt-2">
                    <small class="text-xs text-gray-400">Disciplina:</small><br>
                    <input type="text"
                        id="txt_disciplina"
                        class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                        value="{{$searchData->disciplina}}">
                </div>
                <div class="border-b border-gray-300 pt-2">
                    <small class="text-xs text-gray-400">Modalidad:</small><br>
                    <select name="sel_modalidad" id="sel_modalidad" class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">
                        <option value="FUTBOL 11">FUTBOL 11</option>
                        <option value="FUTBOL 7">FUTBOL 7</option>
                        <option value="FUTBOL SALA">FUTBOL SALA</option>
                    </select>
                </div>

                <div class="border-b border-gray-300 mr-2 col-span-2">
                    <small class="text-xs text-gray-400">Categoría</small><br>
                    <select name="sel_categoria" id="sel_categoria" class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">
                        <option value="HOMBRES">HOMBRES</option>
                        <option value="MUJERES">MUJERES</option>
                        <option value="HOMBRES & MUJERES">HOMBRES & MUJERES</option>
                    </select>
                </div>

                <div class="border-b border-gray-300 mr-2 pt-2">
                    <small class="text-xs text-gray-400">Fecha de Inicio:</small><br>
                    <input type="date"
                        id="txt_fecha_inicio"
                        class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                        value="{{$searchData->fecha_inicio}}">
                </div>



                <div class="border-b border-gray-300 pt-2">
                    <small class="text-xs text-gray-400">Fecha de Finalización</small><br>
                    <input type="date"
                        id="txt_fecha_fin"
                        class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                        value="{{$searchData->fecha_fin}}">
                </div>

            </div>

            <div class="pt-4 pb-2 flex justify-end">

                <div class="group flex relative">
                    <span class="p-1 rounded border border-teal-400 text-xs text-teal-400 hover:bg-teal-400 hover:text-white fas fa-plus cursor-pointer" onclick="agregarTorneo()"></span>
                    <span class="group-hover:opacity-100 transition-opacity bg-teal-600 px-1 text-sm text-teal-100 rounded-md absolute left-1/2
                    -translate-x-1/2 translate-y-full opacity-0 m-4 mx-auto">Agregar</span>
                </div>

            </div>

        </div>
    </div>
</div>

<script>

    function agregarTorneo()
    {
        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var idTorneo = "";
        var var_nombre = $("#txt_nombre").val();
        var var_nombre_2 = $("#txt_nombre_2").val();
        var var_disciplina = $("#txt_disciplina").val();
        var var_modalidad = $("#sel_modalidad").val();
        var var_categoria = $("#sel_categoria").val();
        var var_fecha_inicio = $("#txt_fecha_inicio").val();
        var var_fecha_fin = $("#txt_fecha_fin").val();
        swal({
          title: "Está seguro?",
          text: "Procederá a guardar los datos de este torneo!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete)
          {
            /****  AJAX  ************************************************************************/
            event.preventDefault();
            $.ajax(
            {
                data: {
                    _token: CSRF_TOKEN,
                    "dataId":idTorneo,
                    "nombre":var_nombre,
                    "nombre_2" : var_nombre_2,
                    "disciplina" : var_disciplina,
                    "modalidad" : var_modalidad,
                    'categoria':var_categoria,
                    'fecha_inicio':var_fecha_inicio,
                    'fecha_fin':var_fecha_fin
                },
                url: '{{ route('add-edit-torneo') }}',
                type: 'POST',
                async: true,
                beforeSend: function ()
                {
                    $("#resultado").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
                },
                success: function (respuesta)
                {
                    console.log(respuesta);
                    $('#resultado').html(respuesta);
                    // $('#tabla').html(respuesta);
                },
                error : function(request,error){alert("Request: "+JSON.stringify(request));}
            });

            /****  AJAX  ************************************************************************/
            swal("Bien! Sus datos han sido guardados exitosamente!", {icon: "success",});
          }
          else
          {
            swal({
              title: "Abortado?",
              text: "Los datos no han sido registrados!...",
              icon: "error"
            })
          }
        });
    }





</script>