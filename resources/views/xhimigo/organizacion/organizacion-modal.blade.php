<div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 sm:w-auto">
    <div class="sm:flex sm:items-start" >
        {{-- <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
            <svg @click="toggleModal" class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
        </div> --}}
        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-28 w-28 rounded-full sm:mx-0 sm:h-24 sm:w-24"><img class="p-1 w-full object-cover h-34 w-34" src="{{$data->logo}}" alt="" /></div>
        <div class="mt-3 pt-8 sm:mt-0 sm:ml-2 w-full sm:text-left">
            <h3 class="text-lg leading-6 font-medium text-gray-900 border-b border-red-300 text-center" id="modal-title">{{ $data->organizacion }}</h3>
            <div class="mt-2"><p class="text-sm text-gray-500 text-center">{{ $data->codigo }}</p></div>
        </div>
    </div>
    <div class="grid grid-cols-3 my-2 p-2 w-full gap-2 border-t border-gray-300">
        <div class="text-xs text-gray-500 text-right">Organización : </div><div class="col-span-2">{{$data->organizacion}}</div>
        <div class="text-xs text-gray-500 text-right">Código : </div><div class="col-span-2">{{$data->codigo}}</div>
        <div class="text-xs text-gray-500 text-right">{{ $data->documento_tipo }} :</div><div class="col-span-2">{{$data->documento_numero}}</div>
        <div class="text-xs text-gray-500 text-right">País : </div><div class="col-span-2">{{$data->pais}}</div>
        <div class="text-xs text-gray-500 text-right">Ciudad : </div><div class="col-span-2">{{$data->ciudad}}</div>
        <div class="text-xs text-gray-500 text-right">Dirección : </div><div class="col-span-2">{{$data->direccion}}</div>
        <div class="text-xs text-gray-500 text-right">Status : </div><div class="col-span-2 uppercase">{{$data->status}}</div>
    </div>
</div>
<div class="bg-gray-50 p-4 sm:px-6 flex justify-between gap-4">
    <button type="button"
        class="text-sm text-indigo-400 rounded border border-indigo-400 px-2 hover:bg-green-50 hover:text-green-400 hover:border-green-300"
        onclick="organizacionModal('{{$id}}','{{ route('organizacion-add-edit',array('id' => $id )) }}')"
        data-ruta="organizacion-add-edit">
        <i class="fas fa-edit"></i>  Editar
    </button>
    <button type="button"
        class="text-sm text-blue-400 rounded border border-blue-400 px-2 hover:bg-green-50 hover:text-green-400 hover:border-green-300"
        onclick="organizacionModal('{{$id}}','{{ route('organizacion-detalle',array('id' => $id )) }}')"
        data-ruta="organizacion-detalle">
        <i class="fas fa-eye"></i>  Detalle
    </button>
    <button type="button" class="closeModal text-sm rounded border border-gray-400 px-2 hover:bg-red-50 hover:text-red-400 hover:border-red-300"><i class="fas fa-close"></i>  Cerrar</button>
</div>

<script>
    $('.closeModal').on('click', function(e){$('#interestModal').addClass('invisible');});

    function organizacionModal(id,ruta)
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