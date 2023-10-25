{{-- MODAL CARGA --}}
<div class="fixed z-10 inset-0 invisible overflow-y-auto bg-red-50" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="loadModal">
    <div class="flex items-center justify-center px-4">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
        <div class="mt-16 pt-4 bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all max-w-lg " id="respLoadModal">
        </div>
    </div>
</div>
<div class="flex border-b border-teal-500 mr-2 ml-1 justify-between pb-2" >{{-- ROW 1 --}}
    <h2 class="text-md font-bold text-teal-400 flex"><a class="cursor-pointer ">Formulario Equipos</a></h2>
</div>
<div class="flex flex-col justify-center mt-8 w-full"> {{--ROW 3--}}
    <div class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-lg border border-gray-400 bg-gray-100">
        <div class="w-full md:w-1/3 grid place-items-start px-2 pt-2">
            <img src="https://source.unsplash.com/random/300×300/?office" alt="tailwind logo" class="mx-auto rounded w-full h-36" />
        </div>
        <div class="w-full md:w-2/3 flex flex-col space-y-2 p-3">
            <div class="flex justify-between item-center border-b border-teal-500 pb-1">
                <p class="text-gray-500 font-medium md:block">Nombre del Equipo</p>
                <div class="bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 md:block">Código del Equipo</div>
            </div>
            <form id="formEquipoAddEdit" class="forms-sample"
                @if(empty($equipo['id']))
                  action="{{ url('equipo-add-edit')}}"
                @else
                  action="{{ url('equipo-add-edit/'.$equipo['id'])}}"
                @endif
                method="post"
                enctype="multipart/form-data">@csrf
                <div class="grid grid-cols-2">
                    <input type="hidden" value="{{$orgId}}" name="orgId">
                    <div class="mr-2 col-span-2">


                        <label for="nombre" class="relative block overflow-hidden border-b border-gray-200 bg-transparent pt-3 focus-within:border-blue-600">
                          <input type="text" id="nombre" name="nombre" placeholder="Email" class="peer h-8 w-full text-gray-500 font-semibold uppercase border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 focus:text-blue-500 sm:text-sm" autocomplete="off" @if(!empty($equipo['nombre'])) value="{{ $equipo['nombre'] }}" @else value="{{ old('organizacion') }}" @endif/>
                          <span class="absolute start-0 top-2 -translate-y-1/2 text-xs text-gray-500 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">Nombre del Equipo</span>
                        </label>


                        {{-- <small class="text-xs text-gray-400">Nombre del Equipo</small><br>
                        <input type="text"
                            id="nombre"
                            name="nombre"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($equipo['nombre']))
                              value="{{ $equipo['nombre'] }}"
                            @else
                              value="{{ old('organizacion') }}"
                            @endif> --}}
                    </div>

                    <div class="mr-2 pt-2">
                        <label for="color_1" class="relative block overflow-hidden border-b border-gray-200 bg-transparent pt-3 focus-within:border-blue-600">
                          <input type="text" id="color_1" name="color_1" placeholder="Email" class="peer h-8 w-full text-gray-500 font-semibold uppercase border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 focus:text-blue-500 sm:text-sm" autocomplete="off" @if(!empty($equipo['color_1'])) value="{{ $equipo['color_1'] }}" @else value="{{ old('color_1') }}" @endif/>
                          <span class="absolute start-0 top-2 -translate-y-1/2 text-xs text-gray-500 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">Color Principal</span>
                        </label>

                        {{-- <small class="text-xs text-gray-400">Color Principal:</small><br>
                        <input type="text"
                            id="color_1"
                            name="color_1"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($equipo['color_1']))
                              value="{{ $equipo['color_1'] }}"
                            @else
                              value="{{ old('color_1') }}"
                            @endif> --}}
                    </div>
                    <div class="pt-2">
                        <label for="color_2" class="relative block overflow-hidden border-b border-gray-200 bg-transparent pt-3 focus-within:border-blue-600">
                          <input type="text" id="color_2" name="color_2" placeholder="Email" class="peer h-8 w-full text-gray-500 font-semibold uppercase border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 focus:text-blue-500 sm:text-sm" autocomplete="off" @if(!empty($equipo['color_2'])) value="{{ $equipo['color_2'] }}" @else value="{{ old('color_2') }}" @endif/>
                          <span class="absolute start-0 top-2 -translate-y-1/2 text-xs text-gray-500 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">Color Secundario</span>
                        </label>

                        {{-- <small class="text-xs text-gray-400">Color Secundario:</small><br>
                        <input type="text"
                            id="color_2"
                            name="color_2"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($equipo['color_2']))
                              value="{{ $equipo['color_2'] }}"
                            @else
                              value="{{ old('color_2') }}"
                            @endif> --}}
                    </div>

                    <div class="mr-2 pt-2">
                        <label for="logo" class="relative block overflow-hidden border-b border-gray-200 bg-transparent pt-3 focus-within:border-blue-600">
                          <input type="text" id="logo" name="logo" placeholder="Email" class="peer h-8 w-full text-gray-500 font-semibold uppercase border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 focus:text-blue-500 sm:text-sm" autocomplete="off" @if(!empty($equipo['logo'])) value="{{ $equipo['logo'] }}" @else value="{{ old('logo') }}" @endif/>
                          <span class="absolute start-0 top-2 -translate-y-1/2 text-xs text-gray-500 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">Logo</span>
                        </label>

                        {{-- <small class="text-xs text-gray-400">Logo:</small><br>
                        <input type="text"
                            id="logo"
                            name="logo"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($equipo['logo']))
                              value="{{ $equipo['logo'] }}"
                            @else
                              value="{{ old('logo') }}"
                            @endif> --}}
                    </div>
                    <div class="pt-2">
                        <label for="lema" class="relative block overflow-hidden border-b border-gray-200 bg-transparent pt-3 focus-within:border-blue-600">
                          <input type="text" id="lema" name="lema" placeholder="Email" class="peer h-8 w-full text-gray-500 font-semibold uppercase border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 focus:text-blue-500 sm:text-sm" autocomplete="off" @if(!empty($equipo['lema'])) value="{{ $equipo['lema'] }}" @else value="{{ old('lema') }}" @endif/>
                          <span class="absolute start-0 top-2 -translate-y-1/2 text-xs text-gray-500 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">Lema</span>
                        </label>

                        {{-- <small class="text-xs text-gray-400">Lema:</small><br>
                        <input type="text"
                            id="lema"
                            name="lema"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($equipo['lema']))
                              value="{{ $equipo['lema'] }}"
                            @else
                              value="{{ old('lema') }}"
                            @endif> --}}
                    </div>

                    <div class="mr-2">
                        <label for="representante_id" class="relative block overflow-hidden border-b border-gray-200 bg-transparent pt-3 focus-within:border-blue-600">
                          <input type="text" id="representante_id" name="representante_id" placeholder="Email" class="peer h-8 w-full text-gray-500 font-semibold uppercase border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 focus:text-blue-500 sm:text-sm" autocomplete="off" @if(!empty($equipo['representante_id'])) value="{{ $equipo['representante_id'] }}" @else value="{{ old('representante_id') }}" @endif/>
                          <span class="absolute start-0 top-2 -translate-y-1/2 text-xs text-gray-500 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">Representante Id</span>
                        </label>

                        {{-- <small class="text-xs text-gray-400">Representante Id:</small><br>
                        <input type="text"
                            id="representante_id"
                            name="representante_id"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($equipo['representante_id']))
                              value="{{ $equipo['representante_id'] }}"
                            @else
                              value="{{ old('representante_id') }}"
                            @endif> --}}
                    </div>

                    <div class="">
                        <label for="categoria_id" class="relative block overflow-hidden border-b border-gray-200 bg-transparent pt-3 focus-within:border-blue-600">
                          <input type="text" id="categoria_id" name="categoria_id" placeholder="Email" class="peer h-8 w-full text-gray-500 font-semibold uppercase border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 focus:text-blue-500 sm:text-sm" autocomplete="off" @if(!empty($equipo['categoria_id'])) value="{{ $equipo['categoria_id'] }}" @else value="{{ old('categoria_id') }}" @endif/>
                          <span class="absolute start-0 top-2 -translate-y-1/2 text-xs text-gray-500 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">Categoría Id</span>
                        </label>

                        {{-- <small class="text-xs text-gray-400">Categoria Id :</small><br>
                        <input type="text"
                            id="categoria_id"
                            name="categoria_id"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($equipo['categoria_id']))
                              value="{{ $equipo['categoria_id'] }}"
                            @else
                              value="{{ old('categoria_id') }}"
                            @endif> --}}
                    </div>

                    <div class="mr-2 pt-2 col-span-2">
                        <label for="descripcion" class="relative block overflow-hidden border-b border-gray-200 bg-transparent pt-3 focus-within:border-blue-600">
                          <input type="text" id="descripcion" name="descripcion" placeholder="Email" class="peer h-8 w-full text-gray-500 font-semibold uppercase border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 focus:text-blue-500 sm:text-sm" autocomplete="off" @if(!empty($equipo['descripcion'])) value="{{ $equipo['descripcion'] }}" @else value="{{ old('descripcion') }}" @endif/>
                          <span class="absolute start-0 top-2 -translate-y-1/2 text-xs text-gray-500 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">Descripción</span>
                        </label>

                        {{-- <small class="text-xs text-gray-400">Descripción :</small><br>
                        <input type="text"
                            id="descripcion"
                            name="descripcion"
                            class="w-full appearance-none bg-transparent border-none w-full text-gray-500 text-sm mr-3 py-1 px-2 leading-tight focus:outline-none"
                            @if(!empty($equipo['descripcion']))
                              value="{{ $equipo['descripcion'] }}"
                            @else
                              value="{{ old('descripcion') }}"
                            @endif> --}}
                    </div>


                </div>
                <div class="block pt-4">
                    <button class="alertModal border rounded px-2 text-sm font-bold w-full h-8 hover:text-white {{$clase}}" data-modal="Actualizando Organización. Espere....">{{$boton}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function()
    {
      $("#formEquipoAddEdit").validate(
      {
        rules:
        {
          nombre :{required: true,minlength: 3},
          color_1:{required: true},
          color_2:{required: true},
          logo:{required: true},
          lema:{required: true},
          categoria_id:{required: true},
          representante_id:{required: true},
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
            categoria_id: {required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>"}
            representante_id: {required: "<span class='text-xs text-red-500 font-semibold'>Campo Obligatorio</span>"}
        }
      });
    });

$(document).on('submit', "#formEquipoAddEdit", function(e)
{
    $('#loadModal').removeClass('invisible');
    $("#respLoadModal").html('<div class="row mx-auto text-center justify-center p-2 rounded  h-20"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin mx-auto"></div><div class="text-red-400 text-xs mx-2 pt-2">Cargando .... : {{$boton}}</div></div>');
});
</script>

