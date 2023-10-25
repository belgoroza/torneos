

<div class="rounded-lg border border-gray-300 p-2 bg-gray-100">
    <div class="pb-4">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ml-3 text-sm font-semibold text-gray-500">
                <a class="btnClick cursor-pointer hover:text-red-600">Asunto : {{ $data['asunto'] }}</a>

            </h2>
        </div>

        <div class="grid grid-cols-3 gap-2 ">
            <div class="col-span-3 border-t border-gray-400 pt-4"></div>

            <input type="hidden" id="tipo" value="editar">
            <div class="text-gray-500 text-sm text-sm">Asunto : </div>
            <div class="text-gray-600 col-span-2">
                <textarea id="asunto" name="textarea" rows="5" cols="5" class="p-2 w-full rounded border-gray-400 text-sm text-gray-500 font-bold resize-none" placeholder="Escriba su Asunto...">{{ $data['asunto'] }}</textarea>
            </div>

            <div class="text-gray-500 text-sm">Inicio : </div>
            <div class="col-span-2"><input type="datetime-local" id="inicio" class="w-full h-6 rounded border-gray-400 text-sm text-gray-500 font-bold" value="{{ $data['inicio'] }}"></div>

            <div class="text-gray-500 text-sm">Fin : </div>
            <div class="col-span-2"><input type="datetime-local" id="fin" class="w-full h-6 rounded border-gray-400 text-sm text-gray-500 font-bold" value="{{ $data['fin'] }}"></div>

            <div class="text-gray-500 text-sm">Alarma : </div>
            <div class="col-span-2 row flex">


                <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                  <input
                    class="radioAl relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                    type="radio"
                    value="si"
                    name="radioAlarma"
                    id="si" @if($data['alarma']=="si") checked @else @endif/>
                    <label class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer text-sm text-gray-600 text-muted" for="si">Si</label>
                </div>
                <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem] ml-8">
                  <input
                    class="radioAl relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                    type="radio"
                    value="no"
                    name="radioAlarma"
                    id="no"
                     @if($data['alarma']=="no") checked @else @endif/>
                  <label class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer text-sm text-gray-600 text-muted" for="no">No</label>
                </div>
            </div>

            <div class="text-gray-500 text-sm">Notificar a : </div>
            <div class="col-span-2"><input type="text" id="notificar" class="w-full h-6 rounded border-gray-400 text-sm text-gray-500 font-bold" value="{{ $data['notificar'] }}"></div>

            <div class="text-gray-500 text-sm">Teléfono : </div>
            <div class="col-span-2"><input type="number" id="telefono" class="w-full h-6 rounded border-gray-400 text-sm text-gray-500 font-bold" value="{{ $data['telefono'] }}"></div>

            <div class="text-gray-500 text-sm text-sm">Comentario : </div>
            <div class="text-gray-600 col-span-2">
                <textarea id="comentario" name="comentario" rows="5" cols="5" class="p-2 w-full rounded border-gray-400 text-sm text-gray-500 font-bold resize-none" placeholder="Escriba un comentario...">{{ $data['comentario'] }}</textarea>
            </div>

            <div class="text-gray-500 text-sm">Status: </div>
            @if($data['status'] == 0)
                <div class="w-full h-6 rounded border border-gray-400 text-sm text-gray-500 font-bold pl-3 bg-white">CERRADO</div>
                <div class="w-full text-right">
                    <button class="w-18 h-6 rounded-md px-2 border border-gray-400 bg-green-100 text-green-500 text-xs font-bold hover:bg-green-400 hover:text-white btnActivar"><i class="fas fa-plus"></i> | Activar</button>
                </div>
            @else
                <div class="w-full h-6 rounded border border-gray-400 text-sm text-gray-500 font-bold pl-3 bg-white" id="status">PENDIENTE</div>
                <div class="w-full text-right">
                    <button class="w-18 h-6 rounded-md px-2 border border-gray-400 bg-red-100 text-red-500 text-xs font-bold hover:bg-red-400 hover:text-white btnCerrar"
                        data-id="{{ $data['id'] }}" id="btnCerrar">
                        <i class="fas fa-close"></i> | Cerrar
                    </button>
                </div>
            @endif

            {{--************************************  formulario (fin)*******************************--}}

            <div class="col-span-3 border-b border-gray-300 pt-4"></div>

            <div class="text-gray-600 col-span-3 flex justify-between pt-4">
                @if($data['status'] == 0)
                    <button class="w-18 h-6 rounded-md px-2 border border-gray-400 bg-gray-50 text-red-500 text-xs font-bold hover:bg-red-200 btnEliminar"><i class="fas fa-trash"></i> | Eliminar</button>
                @else
                    <button class="w-18 h-6 rounded-md px-2 border border-gray-400 bg-gray-50 text-blue-500 text-xs font-bold hover:bg-red-200 btnEditar" id="btnEditar" data-id="{{ $data['id'] }}">
                        <i class="fas fa-edit"></i> | Editar
                    </button>
                    <button class="w-18 h-6 rounded-md px-2 border border-gray-400 bg-gray-50 text-red-500 text-xs font-bold hover:bg-red-200 btnEliminar"><i class="fas fa-trash"></i> | Eliminar</button>
                @endif
            </div>
        </div>

    </div>
</div>

<script>

    $( ".btnEditar" ).on( "click", function()
    {
        var tipo = $("#tipo").val();
        var id = $(this).data("id");
        var asunto = $("#asunto").val();
        var inicio = $("#inicio").val();
        var fin = $("#fin").val();
        var notificar = $("#notificar").val();
        var telefono = $("#telefono").val();
        var comentario = $("#comentario").val();
        var alarma = $("input[name='radioAlarma']:checked").val();
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
                data: {"tipo":tipo,"id":id, "asunto" : asunto, "inicio" : inicio, "fin" : fin,'alarma':alarma,'notificar':notificar, 'telefono':telefono, 'comentario':comentario},
                url: '{{ route('add-edit-agenda') }}',
                type: 'GET',
                async: true,
                beforeSend: function ()
                {
                    $("#tablaAgenda").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
                },
                 success: function (respuesta)
                 {
                    $('#tablaAgenda').html(respuesta);
                 },
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
    });

    $( ".btnCerrar" ).on( "click", function()
    {
        var id = $(this).data("id");
        swal({
          title: "Está seguro?",
          text: "Se cerrará este evento!",
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
                data: {"id":id},
                url: '{{ route('cerrar-agenda') }}',
                type: 'GET',
                async: true,
                beforeSend: function ()
                {
                    $("#btnEditar").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
                    $('#btnEditar').hide();
                    $('#btnCerrar').hide();
                },
                 success: function (respuesta)
                 {
                    $('#btnEditar').hide();
                    $('#status').html("CERRADO");
                    $('#btnCerrar').hide();
                    $('#tablaAgenda').html(respuesta);
                 },
            });
            /****  AJAX  ************************************************************************/
            swal("Bien! El evento ha sido cerrado exitosamente!", {icon: "success",});
          }
          else
          {
            swal({
              title: "Abortado?",
              text: "El evento no se ha cerrado!...",
              icon: "error"
            })
          }
        });
    } );



</script>

