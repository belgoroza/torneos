
<div class="flex flex-col justify-center mt-4 w-full"> {{--ROW 3--}}
    <div class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-lg border border-gray-400 bg-gray-100">
        <div class="w-full md:w-1/3 grid place-items-start px-2 pt-2">
            <img src="https://images.pexels.com/photos/4381392/pexels-photo-4381392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="tailwind logo" class="mx-auto rounded w-full h-36" />
        </div>
        <div class="w-full md:w-2/3 flex flex-col space-y-2 p-3">
            <div class="flex justify-between item-center border-b border-teal-500 pb-1">
                <p class="text-gray-500 font-medium md:block">Equipos</p>
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
                <div class="bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 md:block">{{ $miTorneoDetalle->codigo }}</div>
            </div>

            <div class="grid grid-cols-2">

                <div class="border-b border-gray-300 mr-2 col-span-2">
                    <small class="text-xs text-gray-400">Nombre del Torneo</small><br>
                    <span class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">{{ $miTorneoDetalle->nombre }}</span>
                </div>

                <div class="border-b border-gray-300 mr-2 col-span-2">
                    <small class="text-xs text-gray-400">Nombre del Torneo (Adicional)</small><br>
                    <span class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">{{ $miTorneoDetalle->nombre_2 }}</span>
                </div>

                <div class="border-b border-gray-300 mr-2 pt-2">
                    <small class="text-xs text-gray-400">Disciplina:</small><br>
                    <span class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">{{ $miTorneoDetalle->disciplina }}</span>
                </div>
                <div class="border-b border-gray-300 pt-2">
                    <small class="text-xs text-gray-400">Modalidad:</small><br>
                    <span class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">{{ $miTorneoDetalle->modalidad }}</span>
                </div>

                <div class="border-b border-gray-300 mr-2 col-span-2">
                    <small class="text-xs text-gray-400">Categoría</small><br>
                    <span class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">{{ $miTorneoDetalle->categoria }}</span>
                </div>

                <div class="border-b border-gray-300 mr-2 pt-2">
                    <small class="text-xs text-gray-400">Fecha de Inicio:</small><br>
                    <span class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">{{ $miTorneoDetalle->fecha_inicio }}</span>
                </div>
                <div class="border-b border-gray-300 pt-2">
                    <small class="text-xs text-gray-400">Fecha de Finalización</small><br>
                    <span class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">{{ $miTorneoDetalle->fecha_fin }}</span>
                </div>

            </div>


            {{-- ORGANIZACIONES--}}
            <div class="flex justify-between item-center border-b border-teal-500 pb-1 pt-4">
                <p class="text-gray-500 font-medium md:block">Organizaciones <span class="rounded border border-teal-500 text-xs text-teal-500 font-bold px-1 py-0">xxx</span></p>
                <span class="p-1 rounded border border-teal-400 text-xs text-teal-400 hover:bg-teal-400 hover:text-white fas fa-plus cursor-pointer" onclick="buscarOrganizacion()"></span>
            </div>
                {{-- @forelse($listaOrganizaciones as $data)
                    @foreach($data['organizaciones'] as $resultado)
                        <div class="flex">
                            <div class="relative group  w-full">
                                <div class="relative p-2 bg-white ring-1 ring-gray-900/5 rounded-lg leading-none flex items-top justify-start space-x-6">
                                    <img src="https://source.unsplash.com/random/300×300/?office" class="w-8 h-8" alt="Logo Equipo">
                                    <div class="space-y-2">
                                        <span class="text-xs font-bold text-gray-500 py-0 my-0">{{ $resultado['organizacion'] }}</span><br>
                                        <small class="text-xs text-teal-500 py-0 my-0"><i class="fas fa-arrow-right"></i> {{ $resultado['codigo'] }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @empty
                    <small class="text-xs text-red-400 font-bold text-center py-4 my-0 px-2  border border-red-200 bg-red-100 rounded-lg">No hay organizaciones registradas para este torneo    ...</small>
                @endforelse --}}

                @forelse($listaOrganizaciones as $data)
                    @foreach($data['equipos'] as $resultado)
                        <div class="flex">
                            <div class="relative group  w-full">
                                <div class="relative p-2 bg-white ring-1 ring-gray-900/5 rounded-lg leading-none flex items-top justify-start space-x-6">
                                    <img src="https://source.unsplash.com/random/300×300/?office" class="w-8 h-8" alt="Logo Equipo">
                                    <div class="space-y-2">
                                        <span class="text-xs font-bold text-gray-500 py-0 my-0">{{ $resultado['nombre'] }}</span><br>
                                        <small class="text-xs text-teal-500 py-0 my-0"><i class="fas fa-arrow-right"></i> {{ $resultado['codigo'] }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @empty
                    <small class="text-xs text-red-400 font-bold text-center py-4 my-0 px-2  border border-red-200 bg-red-100 rounded-lg">No hay organizaciones registradas para este torneo    ...</small>
                @endforelse


            <div class="pt-4 pb-2 flex justify-end">

                <div class="group flex relative">
                    <span class="p-1 rounded border border-teal-400 text-xs text-teal-400 hover:bg-teal-400 hover:text-white cursor-pointer" onclick="agregarTorneo()"><i class="fas fa-plus"></i> Invitar Organización</span>
                    {{-- <span class="group-hover:opacity-100 transition-opacity bg-teal-600 px-1 text-sm text-teal-100 rounded-md absolute left-1/2
                    -translate-x-1/2 translate-y-full opacity-0 m-4 mx-auto">Agregar Organización</span> --}}
                </div>

            </div>

        </div>
    </div>
</div>