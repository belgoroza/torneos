{{-- MODAL --}}
<div class="fixed z-10 inset-0 invisible overflow-y-auto bg-red-50" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="loadModal">
    <div class="flex items-center justify-center px-4">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
        <div class="mt-16 pt-4 bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all max-w-lg " id="respLoadModal">
        </div>
    </div>
</div>
<div class="flex flex-col justify-center mt-4 w-full"> {{--ROW 3--}}
    <div class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-lg border border-gray-400 bg-gray-100">
        <div class="w-full md:w-1/3 grid place-items-start px-2 pt-2">
            <img src="https://source.unsplash.com/random/300×300/?office" alt="tailwind logo" class="mx-auto rounded w-full h-36" />
        </div>
        <div class="w-full md:w-2/3 flex flex-col space-y-2 p-3">
            <div class="flex justify-between item-center border-b border-teal-500 pb-1">
                <p class="text-gray-500 font-medium md:block">{{$equipo['nombre']}}</p>
                <div class="bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 md:block">{{$equipo['codigo']}}</div>
            </div>
            <form id="formequipoAddEdit" class="forms-sample" id="equipoAddEdit"
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
                        <span class="flex justify-between w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none">
                            {{$organizacion->organizacion}}  <small class="text-gray-400 underline">[{{$organizacion->codigo}}]</small>
                        </span>
                    </div>
                    <input type="hidden" name="organizacion_id" value="{{$organizacion->id}}">
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
                    <button
                        id="btnequipoAddEdit"
                        @if($boton=="Agregar")
                            class="border border-teal-400 rounded px-2 text-sm text-teal-600 font-bold w-full h-8 hover:bg-teal-400 hover:text-white"
                        @else
                            class="border border-red-400 rounded px-2 text-sm text-red-600 font-bold w-full h-8 hover:bg-red-400 hover:text-white"
                        @endif
                        onclick="equipoAddEdit()">{{$boton}} Equipo
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $('.alertModal').on('click', function(e)
    {
        $('#loadModal').removeClass('invisible');
        $("#respLoadModal").html('<div class="row mx-auto text-center justify-center p-2 rounded  h-20"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin mx-auto"></div><div class="text-red-400 text-xs mx-2 pt-2">Editando Equipo</div></div>');
    });
    $(document).ready(function()
    {
      $("#formequipoAddEdit").validate({
        rules:
        {
          nombre :{required: true,minlength: 3},
          color_1:{required: true},
          color_2:{required: true},
          logo:{required: true},
          lema:{required: true},
          descripcion:{required: true}
        },
        messages :
        {
            nombre: {
                required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>",
                minlength: "<span class='text-xs text-red-500 font-semibold'>Mínimo 3 caracteres</span>"
            },
            color_1: {required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>"},
            color_2: {
                required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>"
            },
            logo: {required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>"},
            lema: {required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>"},
            descripcion: {required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>"}
        }
      });
    });
</script>