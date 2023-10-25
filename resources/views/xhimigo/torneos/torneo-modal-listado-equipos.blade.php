<div class="w-80 px-4">
    <div class="sm:flex sm:items-start" >
        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
            <svg @click="toggleModal" class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
        </div>

        <div class="mt-3 sm:mt-0 sm:ml-2 w-full sm:text-left">
            <h3 class="text-center leading-6 font-medium text-gray-700 border-b border-red-300" id="modal-title">{{ $torneo }}</h3>
            <div class="mt-2"><p class="text-center text-xs text-gray-500">{{ $codigo }}</p></div>

            @forelse($data as $torneo)
                <div class="row justify-between items-center overflow-y-auto my-2 p-2 rounded border border-gray-300 bg-gray-100">
                    <div class="my-2 border-t border-b border-gray-200 text-xs text-gray-600 font-bold text-center"> {{$torneo->nombre_2}}</div>
                    <div class=""><small class="text-xs text-gray-400">Disciplina :</small><span class="text-sm text-gray-500"> {{$torneo->disciplina}}</span></div>
                    <div class=""><small class="text-xs text-gray-400">Modalidad :</small><span class="text-sm text-gray-500"> {{$torneo->modalidad}}</span></div>
                    <div class=""><small class="text-xs text-gray-400">Categoría :</small><span class="text-sm text-gray-500"> {{$torneo->categoria}}</span></div>
                    <div class=""><small class="text-xs text-gray-400">Fecha de Inicio :</small><span class="text-sm text-gray-500"> {{$torneo->fecha_inicio}}</span></div>
                    <div class=""><small class="text-xs text-gray-400">Fecha de Finalización :</small><span class="text-sm text-gray-500"> {{$torneo->fecha_fin}}</span></div>
                    <div class=""><small class="text-xs text-gray-400">Status :</small><span class="text-sm text-gray-500 uppercase"> {{$torneo->status}}</span></div>
                    <div class="">
                        <small class="text-xs text-gray-400">Publicado ? :</small>
                        <span class="text-sm text-gray-500">
                            @if($cuenta>0) SI
                            @else NO <button class="h-6 text-xs text-indigo-400 rounded underline px-2 float-right hover:text-indigo-500" onclick="publicarTorneo()"><i class="fas fa-plus"></i> Publicar Torneo</button>
                            @endif
                        </span>
                    </div>
                </div>
            @empty
                <div class="row border border-gray-300 text-center text-red-300 font-bold py-2 my-4 rounded bg-gray-100">Aún no hay equipos para la organización</div>
            @endforelse
        </div>

    </div>
</div>

<div class="bg-gray-50 p-4 sm:px-6 flex justify-between gap-4">
    <button type="button" class="text-sm text-indigo-400 rounded border border-indigo-400 px-2 hover:bg-green-50 hover:text-green-400 hover:border-green-300" onclick="torneoAddEdit('{{$id}}')"><i class="fas fa-edit"></i>  Editar</button>
    <button type="button" class="closeModal text-sm rounded border border-gray-400 px-2 hover:bg-red-50 hover:text-red-400 hover:border-red-300"><i class="fas fa-close"></i>  Cerrar</button>
</div>

<script>
    $('.closeModal').on('click', function(e){$('#interestModal').addClass('invisible');});
    function torneoAddEdit(id)
    {
        $.ajax(
        {
            url: '{{ route('torneo-add-edit',array('id' => $id )) }}',
            type: 'GET',
            async: true,
            beforeSend: function (){$("#row3").html('<div class="flex justify-center p-8"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');},
             success: function (respuesta){$("#row3").html(respuesta);},
        });
    }

    $('.equipoEditar').on('click', function(e)
    {
        var idOrg = $(this).data("org");
        var idEqu = $(this).data("equ");
        event.preventDefault();
        $.ajax(
        {
            data:{idOrg:idOrg, idEqu:idEqu},
            url: '{{ route('equipo-editar') }}',
            type: 'GET',
            async: true,
            beforeSend: function ()
            {
                $("#row3").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
                // $("#txtSearch").val("");
            },
             success: function (respuesta)
             {
                $('#row3').html(respuesta);
                $('#resultado').html('');
            },
        });

    });

</script>