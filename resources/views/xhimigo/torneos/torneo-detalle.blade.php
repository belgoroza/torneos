<div class="flex flex-col justify-center mt-4 w-full"> {{--ROW 3--}}
    <div class="row space-x-1 space-y-0 rounded-xl shadow-lg p-3 w-full mx-auto border border-gray-300 bg-white">
        <div class="flex flex-row border-b border-gray-300">
            <div class="w-1/3 bg-white grid place-items-center p-2">
                <img src="{{ $torneo->logo }}" alt="tailwind logo" class="rounded-xl w-18 h-18 md:w-24 md:h-24" />
            </div>
            <div class="w-2/3 bg-white flex flex-col space-y-2 p-2">
                <div class="flex justify-between item-center border-b border-gray-300">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                            fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        <p class="text-gray-600 font-bold text-sm ml-1">4.96<span class="text-gray-500 font-normal">   (76 reviews)</span></p>
                    </div>
                </div>
                <div class="flex justify-between">
                    <input type="hidden" value="{{$torneo->nombre}}" id="torneoNombre">
                     <h3 class="font-black text-gray-500 text-sm text-xs">{{ $torneo->nombre }}</h3>
                    <p class="text-xs font-black text-gray-400">{{ $torneo->codigo }}</p>
                </div>
                <p class="text-sm text-gray-500 text-base">Torneo de la Liga Ecuatoriana de Futbol</p>
                <div class="flex justify-between">
                    <div><span class="text-xs text-gray-500">Inicio : </span class="text-xs text-gray-300 font-semibold"><small>{{ $torneo->fecha_inicio}}</small></div>
                    <div><span class="text-xs text-gray-500">Fin : </span class="text-xs text-gray-300 font-semibold"><small>{{ $torneo->fecha_fin}}</small></div>
                </div>
            </div>
        </div>
        <div class="flex-row">
            <span class="text-sm text-gray-400 font-bold">{{ $torneo->nombre_2 }}</span>
        </div>
        <div class="grid grid-cols-3 gap-2">
            <div class="rounded border border-gray-300 px-2 py-1 text-center">
                <small class="text-xs text-gray-400">Disciplina</small><br>
                <span class="text-sm text-gray-400 font-semibold">{{ $torneo->disciplina }}</span>
            </div>
            <div class="rounded border border-gray-300 px-2 py-1 text-center">
                <small class="text-xs text-gray-400">Modalidad</small><br>
                <span class="text-sm text-gray-400 font-semibold">{{ $torneo->modalidad }}</span>
            </div>
            <div class="rounded border border-gray-300 px-2 py-1 text-center">
                <small class="text-xs text-gray-400">Categoria</small><br>
                <span class="text-sm text-gray-400 font-semibold">{{ $torneo->categoria }}</span>
            </div>
        </div>
    </div>

    <div class="row space-x-1 space-y-0 rounded-xl shadow-lg p-3 w-full mx-auto border border-gray-300 bg-white mt-2">
        {{-- <div class="flex justify-between item-center border-b border-teal-500 mb-2">
            <p class="text-gray-500 font-medium md:block">Equipos</p>
            <span class="p-1 rounded text-xs text-teal-400 hover:text-red-400 cursor-pointer underline pb-2" onclick="equipoBuscarModal('{{ route('equipo-buscar-modal',array('id' => $torneo->id )) }}')">
                <i class="fas fa-plus"></i> Agregar Equipo
            </span>
        </div> --}}

        <div class="overflow-x-auto flex justify-between item-center h-10 border-b border-indigo-300">
            <span class="subtitulo w-auto h-6 m-1 py-1 text-xs font-semibold cursor-pointer text-xs text-indigo-600 font-semibold hover:border-b-2 border-indigo-600" onclick="posiciones()">Posiciones</span>
            <span class="subtitulo w-auto h-6 m-1 py-1 text-xs font-semibold cursor-pointer text-xs text-indigo-600 font-semibold hover:border-b-2 border-indigo-600" onclick="partidos()">Partidos</span>
            <span class="subtitulo w-auto h-6 m-1 py-1 text-xs font-semibold cursor-pointer text-xs text-indigo-600 font-semibold hover:border-b-2 border-indigo-600">Resultados</span>
            <span class="subtitulo w-auto h-6 m-1 py-1 text-xs font-semibold cursor-pointer text-xs text-indigo-600 font-semibold hover:border-b-2 border-indigo-600">Sanciones</span>
            <span class="subtitulo w-auto h-6 m-1 py-1 text-xs font-semibold cursor-pointer text-xs text-indigo-600 font-semibold hover:border-b-2 border-indigo-600" onclick="equipoBuscarModal('{{ route('equipo-buscar-modal',array('id' => $torneo->id )) }}')">+Equipo</span>
        </div>






        <div id="resultadoEquipoAgregarTorneoAjax" class="grid grid-cols-1 md:grid-cols-2 gap-2 mx-2 overflow-y-auto pt-2">
            @forelse($equipos as $key => $equipo)
                @foreach($equipo['equipos'] as $data)
                    {{-- <div class="relative group w-full cursor-pointer mt-2 rounded border border-gray-200" onclick="equipoDetalle('{{ route('equipo-detalle',array('id'=>$data['id'])) }}')"> --}}
                        <div class="relative p-2 rounded border border-gray-300 bg-white leading-none flex items-top justify-start space-x-6 hover:bg-teal-50 cursor-pointer h-16" onclick="equipoDetalle('{{ route('equipo-detalle',array('id'=>$data['id'])) }}')">
                            <img src="{{ $data['logo'] }}" class="w-8 h-8 cursor-pointer" alt="Logo Equipo" >
                            <div class="space-y-2 w-2/3">
                                <span class="text-xs font-semibold text-gary-400 py-0 my-0">{{ $data['nombre'] }}</span><br>
                                <small class="text-xs text-gray-400 py-0 my-0">{{ $data['codigo'] }}</small>
                            </div>
                        </div>
                    {{-- </div> --}}
                @endforeach

            @empty
                <div class="text-red-400 text-sm font-semibold px-2 border border-red-200 rounded bg-red-100 col-span-2 h-6">Aún no tiene equipos resgistrados...</div>
            @endforelse
        </div>
    </div>
</div>

{{-- MODAL --}}
<div class="fixed z-10 inset-0 invisible overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="equipo-buscar-modal">
    <div class="flex items-center justify-center px-4">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
        <div class="mt-16 pt-4 bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all max-w-lg " id="respModal">
        </div>
    </div>
</div>

<script>
    function equipoBuscarModal(ruta)
    {
        $.ajax({
            url:ruta,
            type:'GET',
            async:true,
            beforeSend: function(){$('#respModal').html('<div class="flex justify-center p-8"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>')},
            success: function(resp){$('#respModal').html(resp)}
        });
        $('#equipo-buscar-modal').removeClass('invisible');
    }

    function equipoDetalle(ruta)
    {
        $.ajax({
            url:ruta,
            type:'GET',
            async:true,
            beforeSend: function(){$('#resultado').html('<div class="flex justify-center p-8"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>')},
            success: function(resp){$('#resultado').html(resp);}
        })
    }

    function equipoAgregarTorneoAjax(torneo_id,organizacion_id,equipo_id)
    {
        let torneoNombre = $('#torneoNombre').val();
        swal({
          title: "Está seguro?",
          text: "Procederá a agregar este equipo al torneo : .....!"+torneo_id+" Organizacion: "+organizacion_id+" , Equipo: "+equipo_id,
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete)
          {
            event.preventDefault();
            $.ajax(
            {
                data: {torneo_id:torneo_id,organizacion_id:organizacion_id, equipo_id : equipo_id},
                url: '{{ route('equipo-agregar-torneo-ajax') }}',
                type: 'GET',
                async: true,
                 success: function (respuesta)
                 {
                    if(respuesta=="errores")
                    {
                        swal("Error! Este equipo ya está registrado en este torneo!", {icon: "warning",});
                    }
                    else
                    {
                        $("#resultadoEquipoAgregarTorneoAjax").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
                        $('#resultadoEquipoAgregarTorneoAjax').html(respuesta);
                        swal("Bien! Equipo agregado exitosamente al torneo : "+torneoNombre, {icon: "success",});
                    }
                 },
            });

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
    };

    $('.subtitulo').on('click', function()
    {
        $(".border-b-2").removeClass("border-b-2 border-indigo-600");
        $(this).addClass('border-b-2 border-indigo-600');
    });

    function partidos()
    {
        $.ajax(
        {
            url:'{{ route('partidos') }}',
            type: 'GET',
            beforeSend: function(){$('#resultadoEquipoAgregarTorneoAjax').html('<div class="flex justify-center col-span-2 h-16 place-items-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>')},
            success: function(resp){$('#resultadoEquipoAgregarTorneoAjax').html(resp)}
        });
    }

    function posiciones()
    {
        $.ajax(
        {
            url:'{{ route('posiciones') }}',
            type: 'GET',
            beforeSend: function(){$('#resultadoEquipoAgregarTorneoAjax').html('<div class="flex justify-center col-span-2 h-16 place-items-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>')},
            success: function(resp){$('#resultadoEquipoAgregarTorneoAjax').html(resp)}
        });
    }
</script>




