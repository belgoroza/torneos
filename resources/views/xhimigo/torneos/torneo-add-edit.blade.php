<div class="flex flex-col justify-center" id="row3"> {{--ROW 3--}}
    <div class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-lg mr-2 border border-gray-400 bg-gray-100">
        <div class="w-full md:w-1/3 grid place-items-start px-2 pt-2">
            @if($torneo->logo)<img src="{{ $torneo->logo }}" alt="tailwind logo" class="mx-auto rounded w-full h-36 object-contain" />@else<img src="https://source.unsplash.com/random/300×300/?office" alt="tailwind logo" class="mx-auto rounded w-full h-36 object-cover" />@endif
        </div>
        <div class="w-full md:w-2/3 flex flex-col space-y-2 p-3">
            <div class="flex justify-between item-center border-b border-teal-500">
                <p class="text-gray-500 font-medium md:block">Torneos</p>
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
                <div class="bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 md:block">Código</div>
            </div>

            <form id="formTorneoAddEdit" class="forms-sample"
                @if(empty($torneo['id']))
                  action="{{ url('torneo-add-edit/')}}"
                @else
                  action="{{ url('torneo-add-edit/'.$torneo['id'])}}"
                @endif
                method="post"
                enctype="multipart/form-data">@csrf
                <div class="grid grid-cols-2">


                    <div class="mr-2 pt-2 col-span-2">
                        <label for="nombre" class="relative block overflow-hidden border-b border-gray-500 bg-transparent pt-3 focus-within:border-blue-600">
                          <input type="text" id="nombre" name="nombre" placeholder="Email" class="peer h-8 w-full text-gray-500 font-semibold uppercase border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 focus:text-blue-500 sm:text-sm" autocomplete="off" @if(!empty($equipo['nombre'])) value="{{ $equipo['nombre'] }}" @else value="{{ old('organizacion') }}" @endif/>
                          <span class="absolute start-0 top-2 -translate-y-1/2 text-xs text-gray-500 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">Nombre del Equipo</span>
                        </label>
                        {{-- <small class="text-xs text-gray-400">Nombre Principal del Torneo : </small><br>
                        <input type="text"
                            id="txt_documento_tipo"
                            name="nombre"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($torneo['nombre']))
                              value="{{ $torneo['nombre'] }}"
                            @else
                              value="{{ old('nombre') }}"
                            @endif> --}}
                    </div>

                    <div class="border-b border-gray-300 mr-2 pt-2 col-span-2">
                        <small class="text-xs text-gray-400">Nombre Secundario del Torneo : </small><br>
                        <input type="text"
                            id="nombre_2"
                            name="nombre_2"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($torneo['nombre_2']))
                              value="{{ $torneo['nombre_2'] }}"
                            @else
                              value="{{ old('nombre_2') }}"
                            @endif>
                    </div>

                    <div class="border-b border-gray-300 pt-2 mr-2">
                        <small class="text-xs text-gray-400">Disciplina:</small><br>
                        <select name="disciplina" id="" class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">
                        	<option value="">Seleccione...</option>
                        	<option value="FUTBOL 11">FUTBOL 11</option>
                        	<option value="FUTBOL 7">FUTBOL 7</option>
                        	<option value="INDOR">INDOR</option>
                        </select>
                    </div>

                    <div class="border-b border-gray-300 mr-2 pt-2">
                        <small class="text-xs text-gray-400">Modalidad:</small><br>
                        <select name="modalidad" id="" class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">
                        	<option value="">Seleccione...</option>
                        	<option value="CAMPEONATO">CAMPEONATO</option>
                        	<option value="COPA">COPA</option>
                        	<option value="COPA + PLAYOFF">COPA + PLAYOFF</option>
                        	<option value="LIGA">LIGA</option>
                        	<option value="LIGA + PLAYOFF">LIGA + PLAYOFF</option>
                        </select>
                    </div>
                    <div class="border-b border-gray-300 pt-2 mr-2">
                        <small class="text-xs text-gray-400">Categoría:</small><br>
                        <select name="categoria" id="" class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">
                        	<option value="">Seleccione...</option>
                        	<option value="HOMBRES">HOMBRES</option>
                        	<option value="MUJERES">MUJERES</option>
                        	<option value="HOMBRES + MUJERES">HOMBRES + MUJERES</option>
                        	<option value="OTROS">OTROS</option>
                        </select>
                    </div>

                    <div class="border-b border-gray-300 mr-2 pt-2">
                        <small class="text-xs text-gray-400">Logo:</small><br>
                        <input type="text"
                            id="txt_telefono"
                            name="logo"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($torneo['logo']))
                              value="{{ $torneo['logo'] }}"
                            @else
                              value="{{ old('logo') }}"
                            @endif>
                    </div>

                    <div class="border-b border-gray-300 mr-2 pt-2">
                        <small class="text-xs text-gray-400">Fecha de Inicio:</small><br>
                        <input type="date"
                            id="fecha_inicio"
                            name="fecha_inicio"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($torneo['fecha_inicio']))
                              value="{{ $torneo['fecha_inicio'] }}"
                            @else
                              value="{{ old('fecha_inicio') }}"
                            @endif>
                    </div>

                    <div class="border-b border-gray-300 mr-2 pt-2">
                        <small class="text-xs text-gray-400">Fecha de Finalización:</small><br>
                        <input type="date"
                            id="fecha_fin"
                            name="fecha_fin"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($torneo['fecha_fin']))
                              value="{{ $torneo['fecha_fin'] }}"
                            @else
                              value="{{ old('fecha_fin') }}"
                            @endif>
                    </div>



                </div>
                <div class="block pt-4"><button class="border rounded px-2 text-sm font-bold w-full h-8 hover:text-white {{$clase}}">{{$boton}}</button></div>
            </form>

        </div>
    </div>
</div>

<script>

    $(document).ready(function()
    {
      $("#formTorneoAddEdit").validate({
        rules:
        {
          nombre :{required: true,minlength: 3},
          nombre_2:{required: true,minlength: 3},
          disciplina:{required: true},
          modalidad:{required: true},
          categoria:{required: true},
          fecha_inicio:{required: true},
          fecha_fin:{required: true},
          logo:{required: true},
        },
        messages :
        {
            nombre: {
                required: "<small class='text-xs text-red-500 font-semibold'>Campo Obligatorio</small>",
                minlength: "<span class='text-xs text-red-500 font-semibold'>Mínimo 3 caracteres</span>"
            },
            nombre_2: {
            	required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>",
                minlength: "<span class='text-xs text-red-500 font-semibold'>Mínimo 3 caracteres</span>"
            },
            disciplina: {required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>"},
            modalidad: {required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>"},
            categoria: {required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>"},
            fecha_inicio: {required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>"},
            fecha_fin: {required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>"},
            logo: {required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>"}

        }
      });
    });
</script>