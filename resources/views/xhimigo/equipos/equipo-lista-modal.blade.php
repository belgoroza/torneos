<div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 sm:w-auto">
    <div class="sm:flex sm:items-start" >
        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
            <svg @click="toggleModal" class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
        </div>
        <div class="mt-3 sm:mt-0 sm:ml-2 w-full sm:text-left">
            <h3 class="text-lg leading-6 font-medium text-gray-900 border-b border-red-300 text-center" id="modal-title">{{ $organizacion }}</h3>
            <div class="mt-2"><p class="text-sm text-gray-500 text-center">{{ $codigo }}</p></div>
        </div>
    </div>
    <div class="my-4 border-t border-b border-teal-300 text-teal-500 font-semibold text-center">Lista de Equipos</div>
        @forelse($data as $equipo)
            <div class="pt-4 row flex overflow-y-auto">
                <div class="relative group w-full">
                    <div class="relative p-2 bg-teal-50 border border-teal-100 rounded-lg flex items-top justify-start space-x-6">
                        <img src="{{ $equipo->logo }}" class="w-8 h-8" alt="Logo Equipo">
                        <div class="space-y-2 w-2/3">
                            <span class="text-xs font-bold text-gary-400 py-0 my-0">{{ $equipo->nombre }}</span><br>
                            <small class="text-xs text-gray-400 py-0 my-0">{{ $equipo->codigo }}</small>
                        </div>
                        <div class="space-y-2 text-right text-teal-400 font-semibold hover:text-red-400 cursor-pointer"
                            onclick="equipoDetalle('{{ route('equipo-detalle',array('id'=>$equipo->id)) }}')">
                            <i class="fas fa-edit"></i>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="pt-4 text-red-400 text-sm font-semibold px-2 border border-red-200 rounded bg-red-100">Aún no tiene equipos resgistrados...</div>
        @endforelse

</div>
<div class="bg-gray-50 p-4 sm:px-6 flex justify-end gap-4">
    <button type="button" class="closeModal text-sm rounded border border-gray-400 px-2 hover:bg-red-50 hover:text-red-400 hover:border-red-300"><i class="fas fa-close"></i>  Cerrar</button>
</div>

<script>
    $('.closeModal').on('click', function(e){$('#interestModal').addClass('invisible');});

    // function organizacionModal(id,ruta)
    // {
    //     $.ajax(
    //     {
    //         url: ruta,
    //         type: 'GET',
    //         async: true,
    //         beforeSend: function (){$("#row3").html('<div class="flex justify-center p-8"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');},
    //          success: function (respuesta){$("#row3").html(respuesta);},
    //     });
    // }

</script>