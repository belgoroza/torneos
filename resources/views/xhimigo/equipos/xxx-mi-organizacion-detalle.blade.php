
<div class="flex flex-col justify-center mt-4 w-full"> {{--ROW 3--}}
    <div class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-lg border border-gray-400 bg-gray-100">
        <div class="w-full md:w-1/3 grid place-items-start px-2 pt-2">
            <img src="https://source.unsplash.com/random/300×300/?office" alt="tailwind logo" class="mx-auto rounded w-full h-36" />
        </div>
        <div class="w-full md:w-2/3 flex flex-col space-y-2 p-3">
            <div class="flex justify-between item-center border-b border-teal-500 pb-1">
                <p class="text-gray-500 font-medium md:block">{{ $miOrganizacionDetalle->organizacion }}</p>
                <div class="bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 md:block">{{ $miOrganizacionDetalle->codigo }}</div>
            </div>

            <div class="grid grid-cols-2">

                <div class="border-b border-gray-300 mr-2 col-span-2">
                    <small class="text-xs text-gray-400">Nombre de la Organización</small><br>
                    <span class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">{{ $miOrganizacionDetalle->organizacion }}</span>
                </div>

                <div class="border-b border-gray-300 mr-2 pt-2">
                    <small class="text-xs text-gray-400">Tipo de Documento:</small><br>
                    <span class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">{{ $miOrganizacionDetalle->documento_tipo }}</span>
                </div>
                <div class="border-b border-gray-300 pt-2">
                    <small class="text-xs text-gray-400">Documento Número:</small><br>
                    <span class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">{{ $miOrganizacionDetalle->documento_numero }}</span>
                </div>

                <div class="border-b border-gray-300 mr-2 pt-2">
                    <small class="text-xs text-gray-400">País:</small><br>
                    <span class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">{{ $miOrganizacionDetalle->pais }}</span>
                </div>
                <div class="border-b border-gray-300 pt-2">
                    <small class="text-xs text-gray-400">Ciudad:</small><br>
                    <span class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">{{ $miOrganizacionDetalle->ciudad }}</span>
                </div>

                <div class="border-b border-gray-300 mr-2 col-span-2">
                    <small class="text-xs text-gray-400">Dirección:</small><br>
                    <span class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">{{ $miOrganizacionDetalle->direccion }}</span>
                </div>

                <div class="border-b border-gray-300 mr-2 pt-2">
                    <small class="text-xs text-gray-400">Teléfono dela Organización:</small><br>
                    <span class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">{{ $miOrganizacionDetalle->telefono }}</span>
                </div>
                <div class="border-b border-gray-300 pt-2">
                    <small class="text-xs text-gray-400">Representante :</small><br>
                    <span class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">{{ $miOrganizacionDetalle->representante }}</span>
                </div>

                <div class="border-b border-gray-300 mr-2 pt-2">
                    <small class="text-xs text-gray-400">Nombre del Manager:</small><br>
                    <span class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">{{ $miOrganizacionDetalle->manager_nombre }}</span>
                </div>
                <div class="border-b border-gray-300 pt-2">
                    <small class="text-xs text-gray-400">Teléfono del Manager:</small><br>
                    <span class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">{{ $miOrganizacionDetalle->manager_telefono }}</span>
                </div>

            </div>

            {{-- TORNEOS--}}
            <div class="flex justify-between item-center border-b border-teal-500 pb-1 pt-4">
                <p class="text-gray-500 font-medium md:block">Torneos</p>
                <span class="p-1 rounded border border-teal-400 text-xs text-teal-400 hover:bg-teal-400 hover:text-white fas fa-plus cursor-pointer" onclick="buscarTorneo()"></span>
            </div>
            <div class="flex">
                {{-- @forelse($misTorneos as $torneo)
                    <div class="relative group  w-full">

                      <div class="relative p-2 bg-white ring-1 ring-gray-900/5 rounded-lg leading-none flex items-top justify-start space-x-6">
                        <img src="https://source.unsplash.com/random/300×300/?office" class="w-8 h-8" alt="Logo Equipo">
                        <div class="space-y-2">
                            <span class="text-xs font-bold text-gary-400 py-0 my-0">{{ $equipo->nombre }}</span><br>
                            <small class="text-xs text-gray-400 py-0 my-0">{{ $equipo->codigo }}</small>
                        </div>
                      </div>
                    </div>
                @empty
                    no hay equipo aún...
                @endforelse --}}
            </div>

            {{-- EQUIPOS--}}
            <div class="flex justify-between item-center border-b border-teal-500 pb-1 pt-4">
                <p class="text-gray-500 font-medium md:block">Equipos</p>
                <span class="p-1 rounded border border-teal-400 text-xs text-teal-400 hover:bg-teal-400 hover:text-white fas fa-plus cursor-pointer" onclick="agregarEquipo()"></span>
            </div>

                @forelse($misEquipos as $equipo)
                <div class="flex overflow-y-auto">
                    <div class="relative group  w-full">
                      <div class="relative p-2 bg-white ring-1 ring-gray-900/5 rounded-lg leading-none flex items-top justify-start space-x-6">
                        <img src="https://source.unsplash.com/random/300×300/?office" class="w-8 h-8" alt="Logo Equipo">
                        <div class="space-y-2">
                            <span class="text-xs font-bold text-gary-400 py-0 my-0">{{ $equipo->nombre }}</span><br>
                            <small class="text-xs text-gray-400 py-0 my-0">{{ $equipo->codigo }}</small>
                        </div>
                      </div>
                    </div>
                    </div>
                @empty
                    no hay equipo aún...
                @endforelse


            <div class="block pt-4">
                <button id="editarInfo" data-id="{{ $miOrganizacionDetalle->id }}" class="border border-teal-400 rounded px-2 text-sm text-teal-600 font-bold w-full h-8 hover:bg-teal-400 hover:text-white">Editar Información</button>
            </div>







            <div class="pt-4 pb-2 flex justify-end">
                <div>

                </div>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#editarInfo').on('click', function(e)
        {
            e.preventDefault();
            let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var idOrg = $(this).data('id');
            // alert(idOrg);
            $.ajax(
            {
                data: {_token: CSRF_TOKEN,"orgId":idOrg},
                url: '{{ route('editar-organizacion') }}',
                type: 'GET',
                async: true,
                beforeSend: function ()
                {
                    $("#row3").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
                },
                 success: function (respuesta)
                 {
                    $('#row3').html(respuesta);
                 },
            });
        });
    });
</script>