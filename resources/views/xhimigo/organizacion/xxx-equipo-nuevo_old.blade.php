<div class="flex flex-col justify-center mt-4 w-full"> {{--ROW 3--}}
    <div class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-lg border border-gray-400 bg-gray-100">
        <div class="w-full md:w-1/3 grid place-items-start px-2 pt-2">
            <img src="https://source.unsplash.com/random/300×300/?office" alt="tailwind logo" class="mx-auto rounded w-full h-36" />
        </div>
        <div class="w-full md:w-2/3 flex flex-col space-y-2 p-3">
            <div class="flex justify-between item-center border-b border-teal-500 pb-1">
                <p class="text-gray-500 font-medium md:block">Equipo Nuevo</p>
                <div class="bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 md:block">Código</div>
            </div>

            <form id="formAddEditOrganizacion" class="forms-sample" id="addEditOrganizacion"
                @if(empty($equipo['id']))
                  action="{{ url('equipo-add-edit')}}"
                @else
                  action="{{ url('equipo-add-edit/'.$equipo['id'])}}"
                @endif
                method="post"
                enctype="multipart/form-data">@csrf
                <div class="grid grid-cols-2">
                    <div class="border-b border-gray-300 mr-2 col-span-2">
                        <small class="text-xs text-gray-400">Nombre de la Organización</small><br>
                        <input type="text"
                            id="txt_nombre"
                            name="organizacion"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($equipo['organizacion']))
                              value="{{ $equipo['organizacion'] }}"
                            @else
                              value="{{ old('organizacion') }}"
                            @endif>
                    </div>

                    <div class="border-b border-gray-300 mr-2 pt-2 col-span-2">
                        <small class="text-xs text-gray-400">Nombre del Equipo : </small><br>
                        <input type="text"
                            id="txt_documento_tipo"
                            name="nombre"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($equipo['nombre']))
                              value="{{ $equipo['nombre'] }}"
                            @else
                              value="{{ old('nombre') }}"
                            @endif>
                    </div>
                    <div class="border-b border-gray-300 pt-2">
                        <small class="text-xs text-gray-400">Color Uno:</small><br>
                        <input type="text"
                            id="txt_documento_numero"
                            name="color_1"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($equipo['color_1']))
                              value="{{ $equipo['color_1'] }}"
                            @else
                              value="{{ old('color_1') }}"
                            @endif>
                    </div>

                    <div class="border-b border-gray-300 mr-2 pt-2">
                        <small class="text-xs text-gray-400">Color Dos:</small><br>
                        <input type="text"
                            id="txt_pais"
                            name="color_2"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($equipo['color_2']))
                              value="{{ $equipo['color_2'] }}"
                            @else
                              value="{{ old('color_2') }}"
                            @endif>
                    </div>
                    <div class="border-b border-gray-300 pt-2">
                        <small class="text-xs text-gray-400">Logo:</small><br>
                        <input type="text"
                            id="txt_ciudad"
                            name="logo"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($equipo['logo']))
                              value="{{ $equipo['logo'] }}"
                            @else
                              value="{{ old('logo') }}"
                            @endif>
                    </div>

                    <div class="border-b border-gray-300 mr-2 col-span-2">
                        <small class="text-xs text-gray-400">Lema:</small><br>
                        <input type="text"
                            id="txt_direccion"
                            name="lema"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($equipo['lema']))
                              value="{{ $equipo['lema'] }}"
                            @else
                              value="{{ old('lema') }}"
                            @endif>
                    </div>

                    <div class="border-b border-gray-300 mr-2 pt-2">
                        <small class="text-xs text-gray-400">Representante Id:</small><br>
                        <input type="text"
                            id="txt_telefono"
                            name="representante_id"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($equipo['representante_id']))
                              value="{{ $equipo['representante_id'] }}"
                            @else
                              value="{{ old('representante_id') }}"
                            @endif>
                    </div>
                    <div class="border-b border-gray-300 pt-2">
                        <small class="text-xs text-gray-400">Categoria Id :</small><br>
                        <input type="text"
                            id="txt_representante"
                            name="categoria_id"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($equipo['categoria_id']))
                              value="{{ $equipo['categoria_id'] }}"
                            @else
                              value="{{ old('categoria_id') }}"
                            @endif>
                    </div>

                    <div class="border-b border-gray-300 mr-2 pt-2 col-span-2">
                        <small class="text-xs text-gray-400">Descripción : </small><br>
                        <input type="text"
                            id="txt_manager_nombre"
                            name="descripcion"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($equipo['descripcion']))
                              value="{{ $equipo['descripcion'] }}"
                            @else
                              value="{{ old('descripcion') }}"
                            @endif>
                    </div>

                </div>
                <div class="block pt-4">

                        @if(!empty($boton))
                            <button id="btnAddEditOrganizacion" class="border border-red-400 rounded px-2 text-sm text-red-600 font-bold w-full h-8 hover:bg-red-400 hover:text-white" onclick="addEditOrganizacion()">
                                {{$boton}}
                            </button>
                        @else
                            <button id="btnAddEditOrganizacion" class="border border-teal-400 rounded px-2 text-sm text-teal-600 font-bold w-full h-8 hover:bg-teal-400 hover:text-white" onclick="addEditOrganizacion()">Crear Equipo</button>

                        @endif

                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function()
    {
      $("#formAddEditOrganizacion").validate({
        rules:
        {
          organizacion :{required: true,minlength: 3},
          documento_tipo:{required: true},
          documento_numero:{required: true,number: true},
          pais:{required: true},
          ciudad:{required: true},
          direccion:{required: true},
          telefono:{required: true},
          representante:{required: true},
          manager_nombre:{required: true},
          manager_telefono:{required: true},
        },
        messages :
        {
            organizacion: {
                required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>",
                minlength: "<span class='text-xs text-red-500 font-semibold'>Mínimo 3 caracteres</span>"
            },
            documento_tipo: {required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>"},
            documento_numero: {
                required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>",
                number: "<span class='text-xs text-red-500 font-semibold'>Ingrese un número válido</span>",
            },
            pais: {required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>"},
            ciudad: {required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>"},
            direccion: {required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>"},
            telefono: {required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>"},
            representante: {required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>"},
            manager_nombre: {required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>"},
            manager_telefono: {required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>"},

        }
      });
    });
</script>