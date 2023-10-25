<div class="flex border-b border-teal-500 mx-2 justify-between pb-2" ><h2 class="text-md font-bold text-teal-400 flex"><a class="cursor-pointer ">Buscar Equipo</a></h2></div>

<div class="flex justify-between item-center m-1 border-b border-teal-300">
    <input type="search" class="m-2 px-2 h-6 w-full rounded border border-indigo-300 text-xs text-semibold text-indigo-500" id="txtEquipoBuscar" placeholder="Ingrese un equipo a buscar....">
    <button class="h-6 rounded border border-indigo-300 bg-indigo-50 text-xs text-indigo-500 font-semibold px-2 m-2 hover:bg-indigo-400 hover:text-white" onclick="equipoBuscarBoton('{{ route('equipo-buscar-ajax',array('id' => $id )) }}')">Buscar</button>
</div>
<div class="px-2 overflow-y-auto h-80 pt-2" id="respuestaEquipoBuscar">  </div>



<div class="bg-gray-50 p-4 flex justify-end">
    <button type="button" class="closeModal text-sm text-red-500 rounded border border-red-400 px-2 hover:bg-red-400 hover:text-white hover:border-red-300 h-6"><i class="fas fa-close"></i>  Cerrar</button></div>



<script>
    $('.closeModal').on('click', function(e){$('#equipo-buscar-modal').addClass('invisible');});
    function equipoBuscarBoton(ruta)
    {
        let txtEquipoBuscar = $('#txtEquipoBuscar').val();
        $.ajax(
        {
            data: {txtEquipoBuscar:txtEquipoBuscar},
            url:ruta,
            method:'GET',
            async:true,
            beforeSend: function(){$('#respuestaEquipoBuscar').html('<div class="flex justify-center p-8 text-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');},
            success: function(resp){$('#respuestaEquipoBuscar').html(resp);}
        });
    }

</script>