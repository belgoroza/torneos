<div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 sm:w-auto">
    <div class="sm:flex sm:items-start" >
        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
            <svg @click="toggleModal" class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
        </div>
        <div class="mt-3 text-center sm:mt-0 sm:ml-2 w-full sm:text-left">
            <h3 class="text-lg leading-6 font-medium text-gray-900 border-b border-red-300" id="modal-title">{{ $data->nombre }}</h3>
            <div class="mt-2"><p class="text-sm text-gray-500">{{ $data->codigo }}</p></div>

            <div class="grid grid-cols-3 rounded-lg border border-gray-200 my-2 p-2 w-full">
              <div class="text-xs text-gary-400 border-b border-gray-200 mx-2"><span class="">Color Principal </span><br><span class="border-t border-gray-200">{{ $data->color_1 }}</span></div>
              <div class="text-xs text-gary-400 border-b border-gray-200 mx-2"><span class="">Color Secundario </span><br><span class="">{{ $data->color_2 }}</span></div>
              <div class="text-xs text-gary-400 border-b border-gray-200 mx-2"><span class="">Código </span><br><span class="">{{ $data->codigo }}</span></div>

              <div class="text-xs text-gary-400"><span class="">Lema </span><br><span class="">{{ $data->lema }}</span></div>
              {{-- <div class="text-xs text-gary-400"><span class="">Ciudad </span><br><span class="">{{ $data->ciudad }}</span></div>
              <div class="text-xs text-gary-400"><span class="">Dirección </span><br><span class="">{{ $data->direccion }}</span></div>

              <div class="text-xs text-gary-400"><span class="">Status </span><br><span class="uppercase">{{ $data->status }}</span></div>
              <div class="text-xs text-gary-400"><span class="">Dirección </span><br><span class="uppercase">{{ $data->validado }}</span></div> --}}
            </div>

      </div>


  </div>
</div>

<div class="bg-gray-50 p-4 sm:px-6 flex justify-between gap-4">
    <button type="button" class="w-auto sm:w-auto px-2 rounded-md border border-transparent shadow-sm bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" onclick="seleccionarTorneo('{{$data->id}}')"><i class="fas fa-check"></i>   Seleccionar</button>
    <button type="button" class="closeModal w-auto rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500  sm:w-auto sm:text-sm"><i class="fas fa-close"></i>  Cerrar</button>
</div>

<script>
  $('.closeModal').on('click', function(e){$('#interestModal').addClass('invisible');});
  function seleccionarTorneo(id)
  {
    $.ajax(
    {
        data: {identificador:id},
        url: '{{ route('mi-equipo-detalle') }}',
        type: 'GET',
        async: true,
        beforeSend: function ()
        {
            // $("#row2").html( '<div class="flex justify-center p-8"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
            $("#row3").html('<div class="flex justify-center p-8"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
        },
         success: function (respuesta)
         {
            // $("#row2").html(respuesta);
            $("#row3").html(respuesta);
        },
  });

  }

</script>