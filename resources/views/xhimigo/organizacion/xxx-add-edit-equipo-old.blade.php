<div class="flex flex-col justify-center mt-4 w-full"> {{--ROW 3--}}
    <div class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-lg border border-gray-400 bg-gray-100">
        <div class="w-full md:w-1/3 grid place-items-start px-2 pt-2">
            <img src="https://source.unsplash.com/random/300×300/?office" alt="tailwind logo" class="mx-auto rounded w-full h-36" />
        </div>
        <div class="w-full md:w-2/3 flex flex-col space-y-2 p-3">
            <div class="flex justify-between item-center border-b border-teal-500 pb-1">
                <p class="text-gray-500 font-medium md:block">Formulario Organización</p>
                <div class="bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 md:block">Código</div>
            </div>

            <form id="formAddEditOrganizacion" class="forms-sample" id="addEditOrganizacion"
                @if(empty($organizacion['id']))
                  action="{{ url('add-edit-organizacion')}}"
                @else
                  action="{{ url('add-edit-organizacion/'.$organizacion['id'])}}"
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
                            @if(!empty($organizacion['organizacion']))
                              value="{{ $organizacion['organizacion'] }}"
                            @else
                              value="{{ old('organizacion') }}"
                            @endif>
                    </div>

                    <div class="border-b border-gray-300 mr-2 pt-2">
                        <small class="text-xs text-gray-400">Tipo de Documento:</small><br>
                        <input type="text"
                            id="txt_documento_tipo"
                            name="documento_tipo"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($organizacion['documento_tipo']))
                              value="{{ $organizacion['documento_tipo'] }}"
                            @else
                              value="{{ old('documento_tipo') }}"
                            @endif>
                    </div>
                    <div class="border-b border-gray-300 pt-2">
                        <small class="text-xs text-gray-400">Documento Número:</small><br>
                        <input type="text"
                            id="txt_documento_numero"
                            name="documento_numero"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($organizacion['documento_numero']))
                              value="{{ $organizacion['documento_numero'] }}"
                            @else
                              value="{{ old('documento_numero') }}"
                            @endif>
                    </div>

                    <div class="border-b border-gray-300 mr-2 pt-2">
                        <small class="text-xs text-gray-400">País:</small><br>
                        <input type="text"
                            id="txt_pais"
                            name="pais"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($organizacion['pais']))
                              value="{{ $organizacion['pais'] }}"
                            @else
                              value="{{ old('pais') }}"
                            @endif>
                    </div>
                    <div class="border-b border-gray-300 pt-2">
                        <small class="text-xs text-gray-400">Ciudad:</small><br>
                        <input type="text"
                            id="txt_ciudad"
                            name="ciudad"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($organizacion['ciudad']))
                              value="{{ $organizacion['ciudad'] }}"
                            @else
                              value="{{ old('ciudad') }}"
                            @endif>
                    </div>

                    <div class="border-b border-gray-300 mr-2 col-span-2">
                        <small class="text-xs text-gray-400">Dirección:</small><br>
                        <input type="text"
                            id="txt_direccion"
                            name="direccion"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($organizacion['direccion']))
                              value="{{ $organizacion['direccion'] }}"
                            @else
                              value="{{ old('direccion') }}"
                            @endif>
                    </div>

                    <div class="border-b border-gray-300 mr-2 pt-2">
                        <small class="text-xs text-gray-400">Teléfono dela Organización:</small><br>
                        <input type="text"
                            id="txt_telefono"
                            name="telefono"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($organizacion['telefono']))
                              value="{{ $organizacion['telefono'] }}"
                            @else
                              value="{{ old('telefono') }}"
                            @endif>
                    </div>
                    <div class="border-b border-gray-300 pt-2">
                        <small class="text-xs text-gray-400">Representante :</small><br>
                        <input type="text"
                            id="txt_representante"
                            name="representante"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($organizacion['representante']))
                              value="{{ $organizacion['representante'] }}"
                            @else
                              value="{{ old('representante') }}"
                            @endif>
                    </div>

                    <div class="border-b border-gray-300 mr-2 pt-2">
                        <small class="text-xs text-gray-400">Nombre del Manager:</small><br>
                        <input type="text"
                            id="txt_manager_nombre"
                            name="manager_nombre"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($organizacion['manager_nombre']))
                              value="{{ $organizacion['manager_nombre'] }}"
                            @else
                              value="{{ old('manager_nombre') }}"
                            @endif>
                    </div>
                    <div class="border-b border-gray-300 pt-2">
                        <small class="text-xs text-gray-400">Teléfono del Manager:</small><br>
                        <input type="text"
                            id="txt_manager_telefono"
                            name="manager_telefono"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($organizacion['manager_telefono']))
                              value="{{ $organizacion['manager_telefono'] }}"
                            @else
                              value="{{ old('manager_telefono') }}"
                            @endif>
                    </div>{{-- <button type="submit" class="btn btn-primary" id="create-account-button">Crear cuenta</button> --}}
                </div>
                <div class="block pt-4">

                        @if(!empty($boton))
                            <button id="btnAddEditOrganizacion" class="border border-red-400 rounded px-2 text-sm text-red-600 font-bold w-full h-8 hover:bg-red-400 hover:text-white" onclick="addEditOrganizacion()">
                                {{$boton}}
                            </button>
                        @else
                            <button id="btnAddEditOrganizacion" class="border border-teal-400 rounded px-2 text-sm text-teal-600 font-bold w-full h-8 hover:bg-teal-400 hover:text-white" onclick="addEditOrganizacion()">
                                Agregar Organización
                            </button>

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