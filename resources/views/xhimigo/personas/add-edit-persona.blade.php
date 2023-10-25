

<div class="bg-white bg-opacity-25">
    <div class="pb-4">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a class="btnClick cursor-pointer hover:text-red-600">{{ $titulo }} Persona</a>

            </h2>
        </div>


        @if(count($errors) > 0)
            <div class="errors">
                <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        {{-- @foreach($getPersona as $data)
            {{ $data['id'] }}
        @endforeach --}}

        <div class="grid grid-cols-3 gap-2 ">
            <div class="col-span-3 border-t border-gray-400 pt-4"></div>

            <input type="hidden" id="tipo" value="nuevo">
            <input type="hidden" id="campoId" name="id" @if($titulo=="Nuevo") value="" @else value="{{ $getPersona['id'] }}" @endif >

            <div class="text-gray-500 text-sm">Documento Nro : </div>
            <div class="text-gray-600 col-span-2">
                <input type="text"
                    id="txt_documento_numero"
                    class="w-full h-6 rounded border-gray-400 text-gray-500 text-muted font-bold"
                    @if($titulo=="Nuevo") value="" @else value="{{ $getPersona['documento_numero'] }}" @endif>
            </div>

            <div class="text-gray-500 text-sm">Nombres : </div>
            <div class="text-gray-600 col-span-2">
                <input type="text"
                    id="txt_nombres"
                    class="w-full h-6 rounded border-gray-400 text-gray-500 text-muted font-bold"
                    @if($titulo=="Nuevo") value="" @else value="{{ $getPersona['nombres'] }}" @endif>
            </div>

            <div class="text-gray-500 text-sm">Apellidos : </div>
            <div class="text-gray-600 col-span-2">
                <input type="text"
                    id="txt_apellidos"
                    class="w-full h-6 rounded border-gray-400 text-gray-500 text-muted font-bold"
                    @if($titulo=="Nuevo") value="" @else value="{{ $getPersona['apellidos'] }}" @endif>
            </div>

            <div class="text-gray-500 text-sm">Teléfono : </div>
            <div class="text-gray-600 col-span-2">
                <input type="number"
                    id="txt_telefono"
                    class="w-full h-6 rounded border-gray-400 text-gray-500 text-muted font-bold"
                    @if($titulo=="Nuevo") value="" @else value="{{ $getPersona['telefono'] }}" @endif>
            </div>

            <div class="text-gray-500 text-sm">Email : </div>
            <div class="text-gray-600 col-span-2">
                <input type="email"
                    id="txt_email"
                    class="w-full h-6 rounded border-gray-400 text-gray-500 text-muted font-bold"
                    @if($titulo=="Nuevo") value="" @else value="{{ $getPersona['email'] }}" @endif>
            </div>

            <div class="text-gray-500 text-sm">País Nacimiento : </div>
            <div class="text-gray-600 col-span-2">
                <input type="text"
                    id="txt_pais_nacimiento"
                    class="w-full h-6 rounded border-gray-400 text-gray-500 text-muted font-bold"
                    @if($titulo=="Nuevo") value="" @else value="{{ $getPersona['pais_nacimiento'] }}" @endif>
            </div>

            <div class="text-gray-500 text-sm">Fecha Nacimiento : </div>
            <div class="text-gray-600 col-span-2">
                <input type="date"
                    id="txt_fecha_nacimiento"
                    class="w-full h-6 rounded border-gray-400 text-gray-500 text-muted font-bold"
                    @if($titulo=="Nuevo") value="" @else value="{{ $getPersona['fecha_nacimiento'] }}" @endif>
            </div>

            <div class="text-gray-500 text-sm">Ciudad Actual : </div>
            <div class="text-gray-600 col-span-2">
                <input type="text"
                    id="txt_ciudad_actual"
                    class="w-full h-6 rounded border-gray-400 text-gray-500 text-muted font-bold"
                    @if($titulo=="Nuevo") value="" @else value="{{ $getPersona['ciudad_actual'] }}" @endif>
            </div>

            <div class="text-gray-500 text-sm">Dirección Actual : </div>
            <div class="text-gray-600 col-span-2">
                <input type="text"
                    id="txt_direccion_actual"
                    class="w-full h-6 rounded border-gray-400 text-gray-500 text-muted font-bold"
                    @if($titulo=="Nuevo") value="" @else value="{{ $getPersona['domicilio_actual'] }}" @endif>
            </div>


            {{--*******************   FIN DEL FORMULARIO    *************************************** --}}


            <div></div>
            <div class="text-gray-600 col-span-2">
                <button class="w-full rounded-lg px-2 bg-blue-200 border-blue-300 text-gray-500 font-bold hover:bg-red-200 btnAgregar" onclick="addEditPersona()">{{ $boton }}</button>
            </div>


            <div class="col-span-3 pt-8 border-b border-gray-400"></div>
        </div>

    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<script>
    $( ".btnAgregar" ).on( "click", function()
    {

    } );


    function addEditPersona()
    {
        // let CSRF_TOKEN = $('#token').val();
        // let idPersona = id;
        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var tipo = "agregar";
        var idPersona = $("#campoId").val();
        var var_numero = $("#txt_documento_numero").val();
        var var_nombres = $("#txt_nombres").val();
        var var_apellidos = $("#txt_apellidos").val();
        var var_telefono = $("#txt_telefono").val();
        var var_email = $("#txt_email").val();
        var var_pais = $("#txt_pais_nacimiento").val();
        var var_fecha = $("#txt_fecha_nacimiento").val();
        var var_ciudad = $("#txt_ciudad_actual").val();
        var var_domicilio = $("#txt_direccion_actual").val();
        swal({
          title: "Está seguro?",
          text: "Procederá a guardar los datos de este formulario!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete)
          {
            /****  AJAX  ************************************************************************/
            event.preventDefault();
            $.ajax(
            {
                data: {
                    _token: CSRF_TOKEN,
                    "dataId":idPersona,
                    "tipo":tipo,
                    "documento_numero":var_numero,
                    "nombres" : var_nombres,
                    "apellidos" : var_apellidos,
                    "telefono" : var_telefono,
                    'email':var_email,
                    'pais_nacimiento':var_pais,
                    'fecha_nacimiento':var_fecha,
                    'ciudad_actual':var_ciudad,
                    'domicilio_actual':var_domicilio
                },
                url: '{{ route('add-edit-persona') }}',
                type: 'POST',
                async: true,
                beforeSend: function ()
                {
                    $("#resultado").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
                },
                success: function (respuesta)
                {
                    console.log(respuesta);
                    $('#resultado').html(respuesta);
                    $('#tabla').html(respuesta);
                },
                error : function(request,error){alert("Request: "+JSON.stringify(request));}
            });

            /****  AJAX  ************************************************************************/
            swal("Bien! Sus datos han sido guardados exitosamente!", {icon: "success",});
          }
          else
          {
            swal({
              title: "Abortado?",
              text: "Los datos no han sido registrados!...",
              icon: "error"
            })
          }
        });
    }

</script>

