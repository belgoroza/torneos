<div class="w-80 px-4">
    <div class="sm:flex sm:items-start" >
        {{-- <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
            <svg @click="toggleModal" class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
        </div> --}}
        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-28 w-28 rounded-full sm:mx-0 sm:h-24 sm:w-24"><img class="p-1 w-full object-cover h-34 w-34" src="{{$data['logo']}}" alt="" /></div>
        <div class="mt-3 pt-8 sm:mt-0 sm:ml-2 w-full sm:text-left">
            <h3 class="text-center leading-6 font-medium text-gray-700 border-b border-red-300" id="modal-title">{{ $torneo }}</h3>
            <div class="mt-2"><p class="text-center text-xs text-gray-500">{{ $codigo }}</p></div>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-2 px-2 my-4">
        <div class="col-span-3 my-2 py-2 border-t border-b border-teal-300 text-xs text-gray-600 font-semibold text-center"> {{$data['nombre_2']}}</div>
        <div class="text-xs text-gray-400 text-right">Disciplina :</div><div class="col-span-2 text-sm text-gray-500">{{$data['disciplina']}}</div>
        <div class="text-xs text-gray-400 text-right">Modalidad :</div><div class="col-span-2 text-sm text-gray-500">{{$data['modalidad']}}</div>
        <div class="text-xs text-gray-400 text-right">Categoría :</div><div class="col-span-2 text-sm text-gray-500">{{$data['categoria']}}</div>
        <div class="text-xs text-gray-400 text-right">Inicio :</div><div class="col-span-2 text-sm text-gray-500">{{$data['fecha_inicio']}}</div>
        <div class="text-xs text-gray-400 text-right">Finalización :</div><div class="col-span-2 text-sm text-gray-500">{{$data['fecha_fin']}}</div>
        <div class="text-xs text-gray-400 text-right">Status :</div><div class="col-span-2 text-sm text-gray-500 uppercase">{{$data['status']}}</div>
    </div>
</div>

<div class="bg-gray-50 p-4 sm:px-6 flex justify-between gap-4">
    <button type="button"
        class="text-sm text-indigo-400 rounded border border-indigo-400 px-2 hover:bg-green-50 hover:text-green-400 hover:border-green-300"
        onclick="torneoAjax('{{$id}}','{{ route('torneo-add-edit',array('id' => $id )) }}')">
        <i class="fas fa-edit"></i>  Editar
    </button>
    <button type="button"
        class="text-sm text-blue-400 rounded border border-blue-400 px-2 hover:bg-green-50 hover:text-green-400 hover:border-green-300"
        onclick="torneoAjax('{{$id}}','{{ route('torneo-detalle',array('id' => $id )) }}')">
        <i class="fas fa-eye"></i>  Detalle
    </button>
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

    function torneoAjax(id,ruta)
    {
        $.ajax(
        {
            url: ruta,
            type: 'GET',
            async: true,
            beforeSend: function (){$("#row3").html('<div class="flex justify-center p-8"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');},
             success: function (respuesta){$("#row3").html(respuesta);},
        });
    }



</script>