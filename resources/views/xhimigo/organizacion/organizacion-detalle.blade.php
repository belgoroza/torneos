<div class="flex flex-col justify-center mt-4 w-full"> {{--ROW 3--}}
    <div class="row space-x-1 space-y-0 space-y-0 rounded-xl shadow-lg p-3 max-w-3xl mx-auto border border-gray-300 bg-white">
        <div class="flex flex-row ">
            <div class="w-full w-1/3 bg-white grid place-items-center p-2">
                <img src="{{ $miOrganizacionDetalle->logo }}" alt="tailwind logo" class="rounded-xl w-18 h-18 md:w-24 md:h-24" />
            </div>
            <div class="w-full w-2/3 bg-white flex flex-col space-y-2 p-2">
                <div class="flex justify-between item-center border-b border-gray-300">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                            fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        <p class="text-gray-600 font-bold text-sm ml-1">4.96<span class="text-gray-500 font-normal">   (76 reviews)</span></p>
                    </div>
                </div>
                <h3 class="font-black text-gray-500 text-sm text-xs">{{ $miOrganizacionDetalle->organizacion }}</h3>
                <p class="text-xs font-black text-gray-400">{{ $miOrganizacionDetalle->codigo }}</p>
                <p class="md:text-lg text-gray-500 text-base">The best kept secret of The Bahamas is the country’s sheer</p>
            </div>
        </div>
        <div class="flex-row border-t border-gray-300">
            <small class="text-xs text-gray-400">{{ $miOrganizacionDetalle->documento_tipo }}:</small>
            <span class="text-xs text-gray-400">{{ $miOrganizacionDetalle->documento_numero }}</span>
        </div>
        <div class="flex-row">
            <small class="text-xs text-gray-400">Dirección : </small>
            <span class="text-sm text-gray-400 font-semibold">{{ $miOrganizacionDetalle->pais }}</span>
            <span class="text-sm text-gray-400 font-semibold">| {{ $miOrganizacionDetalle->ciudad }}</span>
            <span class="text-sm text-gray-400 font-semibold">| {{ $miOrganizacionDetalle->direccion }}</span>
        </div>
        <div class="flex-row">
            <small class="text-xs text-gray-400">Representante : </small>
            <span class="text-sm text-gray-400 font-semibold">{{ $miOrganizacionDetalle->representante }}</span>
            <span class="text-sm text-gray-400 font-semibold">| {{ $miOrganizacionDetalle->telefono }}</span>
        </div>
        <div class="flex-row">
            <small class="text-xs text-gray-400">Manager : </small>
            <span class="text-sm text-gray-400 font-semibold">{{ $miOrganizacionDetalle->manager_nombre }}</span>
            <span class="text-sm text-gray-400 font-semibold">| {{ $miOrganizacionDetalle->manager_telefono }}</span>
        </div>
    </div>

    {{-- <div class="my-2 relative  rounded-lg border border-gray-400 bg-gray-100"> --}}
    <div class="row space-x-1 space-y-0 rounded-xl shadow-lg p-3 w-full mx-auto border border-gray-300 bg-white mt-2">
        <div class="flex justify-between item-center border-b border-teal-500 mb-2">
            <p class="text-gray-500 font-medium md:block">Equipos</p>
            <span class="p-1 rounded text-xs text-teal-400 hover:text-red-400 cursor-pointer underline pb-2" onclick="equipoAgregar('{{$miOrganizacionDetalle->id}}')">
                <i class="fas fa-plus"></i> Agregar Equipo
            </span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mx-2 overflow-y-auto h-64 pt-2">
            @forelse($misEquipos as $equipo)
                <div class="relative group w-full cursor-pointer mt-2 rounded border border-gray-200" onclick="equipoDetalle('{{ route('equipo-detalle',array('id'=>$equipo->id)) }}')">
                    <div class="relative p-2 bg-white ring-1 ring-gray-900/5 rounded-lg leading-none flex items-top justify-start space-x-6 hover:bg-teal-50">
                        <img src="{{ $equipo->logo }}" class="w-8 h-8 cursor-pointer" alt="Logo Equipo" >
                        <div class="space-y-2 w-2/3">
                            <span class="text-xs font-semibold text-gary-400 py-0 my-0">{{ $equipo->nombre }}</span><br>
                            <small class="text-xs text-gray-400 py-0 my-0">{{ $equipo->codigo }}</small>
                        </div>
                    </div>
                </div>

            @empty
                <div class="text-red-400 text-sm font-semibold px-2 border border-red-200 rounded bg-red-100">Aún no tiene equipos resgistrados...</div>
            @endforelse
        </div>
            {{-- TORNEOS--}}
           {{--  <div class="flex justify-between item-center border-b border-teal-500 pb-1 pt-4">
                <p class="text-gray-500 font-medium md:block">Torneos</p>
                <span class="p-1 rounded border border-teal-400 text-xs text-teal-400 hover:bg-teal-400 hover:text-white fas fa-plus cursor-pointer" onclick="buscarTorneo()"></span>
            </div> --}}

            {{-- EQUIPOS--}}





    </div>
</div>








<script>

    function equipoAgregar(id)
    {
        $.ajax({
            data:{orgId:id},
            url:'{{ route('equipo-add-edit') }}',
            type:'GET',
            async:true,
            beforeSend: function(){$('#resultado').html('<div class="flex justify-center p-8"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>')},
            success: function(resp){$('#resultado').html(resp)}
        });
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
</script>