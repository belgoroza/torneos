<div class="w-80 px-4">
    <div class="sm:flex sm:items-start" >
        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
            <svg @click="toggleModal" class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
        </div>

        <div class="mt-3 sm:mt-0 sm:ml-2 w-full sm:text-left">
            <h3 class="text-center text-lg leading-6 font-medium text-gray-900 border-b border-red-300" id="modal-title">{{ $organizacion }}</h3>
            <div class="mt-2"><p class="text-center text-sm text-gray-500">{{ $codigo }}</p></div>

            <div class="row border-t border-b border-gray-300 text-center text-teal-500 font-bold py-2 my-4">LISTADO DE EQUIPOS</div>

            @forelse($data as $equipo)
                <div class="flex items-center overflow-y-auto rounded border border-gray-300 my-2">
                    <div class="relative group  w-full">
                      <div class="relative p-2 bg-white ring-1 ring-gray-900/5 rounded-lg leading-none flex items-top justify-start space-x-6">
                        <img src="https://source.unsplash.com/random/300×300/?office" class="w-8 h-8" alt="Logo Equipo">
                        <div class="space-y-2">
                            <span class="text-xs font-bold text-gary-400 py-0 my-0">{{ $equipo->nombre }}</span><br>
                            <small class="text-xs text-gray-400 py-0 my-0">{{ $equipo->codigo }}</small>
                        </div>
                        <a href="{{ url('add-edit-equipo') }}" class="flex cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-target items-center text-teal-500 my-auto" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                               <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                               <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                               <path d="M12 12m-5 0a5 5 0 1 0 10 0a5 5 0 1 0 -10 0"></path>
                               <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                            </svg> <small class="my-auto hover:text-teal-600">VER</small>
                        </a>

                      </div>
                    </div>
                </div>
            @empty
                <div class="row border border-gray-300 text-center text-red-300 font-bold py-2 my-4 rounded bg-gray-100">Aún no hay equipos para la organización</div>
            @endforelse
        </div>

    </div>
</div>

<div class="bg-gray-50 p-4 sm:px-6 flex justify-between gap-4">
    <button type="button" class="w-auto sm:w-auto px-2 rounded-md border border-transparent shadow-sm bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" onclick="equipoNuevo('{{$id}}')"><i class="fas fa-check"></i>   Agregar Equipo</button>
    <button type="button" class="closeModal w-auto rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500  sm:w-auto sm:text-sm"><i class="fas fa-close"></i>  Cerrar</button>
</div>

<script>
    $('.closeModal').on('click', function(e){$('#interestModal').addClass('invisible');});
    function equipoNuevo(id)
    {
        $.ajax(
        {
            url: '{{ route('equipo-nuevo',array('id' => $id )) }}',
            type: 'GET',
            async: true,
            beforeSend: function (){$("#row3").html('<div class="flex justify-center p-8"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');},
             success: function (respuesta){$("#row3").html(respuesta);},
        });
    }

</script>