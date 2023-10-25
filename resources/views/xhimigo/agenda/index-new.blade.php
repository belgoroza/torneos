
{{-- <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mb-2" role="alert">
    <div class="flex">
        <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
        <div>
          <p class="font-bold">{{$mensaje}}</p>
          <p class="text-sm">Compruebe los datos actualizados.</p>
        </div>
    </div>
</div> --}}

{{-- @if(Session::has('mensajes'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Exito!</strong> {{ Session::get('mensajes') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif








<div class="col-span-3 text-blue-700 text-xs font-bold">
    <table class="min-w-full text-left">
        <thead class="border-b rounded bg-blue-100 font-medium dark:border-neutral-500 dark:text-neutral-800">
            <tr>
                <th>Asunto</th>
                <th>Inicio</th>
                <th>Estado</th>
            </tr>
        </thead>

        <tbody>
            @foreach($data as $dato)
                <tr class="">
                    <td class="py-2 border-b border-blue-400">{{ substr(strip_tags($dato->asunto), 0, 15) }}...</td>
                    <td class="py-2 border-b border-blue-400">{{ \Carbon\Carbon::parse($dato->fin)->diffForHumans()  }}</td>
                    <td class="py-2 border-b border-blue-400 flex justify-between">
                        @if($dato->status == "1") Pendiente @else Cerrado @endif
                        <span class="p-1 rounded-full text-xs font-bold cursor-pointer hover:bg-red-300 verAgenda" data-id="{{ $dato->id }}"><i class="fa-solid fa-magnifying-glass"></i></span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $( ".btnClick" ).on( "click", function()
    {
      swal({
          title: "Está seguro?",
          text: "Procederá a guardar los datos de este formulario!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            swal("Bien! Sus datos han sido guardados exitosamente!", {
              icon: "success",
            });
          } else {
            swal({
              title: "Abortado?",
              text: "Los datos no han sido registrados!...",
              icon: "error"
            })
          }
        });
    } );



    $( ".listarAgenda" ).on( "click", function()
    {
        event.preventDefault();
        $.ajax(
        {
             url: '{{ route('agenda', array('ruta' => 'agenda','page' => 'nueva' )) }}',
             type: 'GET',
             async: true,
             beforeSend: function ()
            {
                $("#resultado").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
            },
             success: function (respuesta)
             {
                  // alert(respuesta);
                  $('#resultado').html(respuesta);
             },
        });
    });


    $( ".verAgenda" ).on( "click", function()
    {
        var id = $(this).data("id");
        event.preventDefault();
        $.ajax(
        {
            data: {"id":id,"ruta":"agenda","page":"editar"},
            url: '{{ route('ver-agenda') }}',
            type: 'GET',
            async: true,
            beforeSend: function ()
            {
                $("#resultado").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
            },
             success: function (respuesta){$('#resultado').html(respuesta);},
        });
    });
</script>