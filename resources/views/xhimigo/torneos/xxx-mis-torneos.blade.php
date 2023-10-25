

<div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-sm text-muted text-gray-600 pt-4">
	@forelse($data as $misTorneos)

		<div class="container bg-white border border-gray-200 rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:bg-gray-200 hover:border-gray-300 cursor-pointer openModal" data-id="{{$misTorneos['id']}}">

			<div class="row">
				<img class="w-24 h-24 cursor-pointer rounded-lg mx-auto my-4" src="https://source.unsplash.com/random/300×300/?football" alt="" />
		    	<div class="flex items-center w-full pt-4"><span class="text-xs text-teal-600 font-bold mx-auto">{{$misTorneos['nombre']}}</span></div>
			</div>
			<div class="row pb-2">
		    	<div class="flex items-center w-full"><span class="text-xs text-gray-500 mx-auto border border-gray-300 rounded-lg px-4 hover:bg-white">{{$misTorneos['codigo']}}</span></div>
			</div>


		    {{-- <div class="flex justify-center px-2"><span class="text-gray-500 text-xs"> 18 Equipos | 24 Fechas </span> </div> --}}

	  	</div>

	@empty
		<div class="col-span-3 bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
          <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
            <div>
              <p class="font-bold">Módulo Torneos</p>
              <p class="text-sm">Aún no hay torneos creados por este usuario....</p>
            </div>
          </div>
        </div>
	@endforelse







	{{-- <button type="button" class="focus:outline-none openModal text-white text-sm rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg">Open Modal</button> --}}
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="fixed z-10 inset-0 invisible overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="interestModal">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" id="respModal"></div>
    	</div>
    </div>



</div>

<script>

   	$('.openModal').on('click', function(e)
   	{
   		// var id = $(this).data("id");
   		var ident = $(this).data("id");
   		event.preventDefault();
        $.ajax(
        {
            data: {codigo:ident},
            url: '{{ route('mis-torneos-detalle') }}',
            type: 'GET',
            async: true,
            beforeSend: function ()
            {
                $("#respModal").html('<div class="flex justify-center p-8"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');
                // $("#txtSearch").val("");
            },
             success: function (respuesta)
             {
                $("#respModal").html(respuesta);
            },
    	});
   		$('#interestModal').removeClass('invisible');
   	});

    // $('.closeModal').on('click', function(e){$('#interestModal').addClass('invisible');});
</script>



