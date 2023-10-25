
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
    <table class="min-w-full text-left text-xs font-bold">
        <thead class="border-b rounded bg-neutral-200 font-medium dark:border-neutral-500 dark:text-neutral-800">
            <tr>
              <th>Asunto</th>
              <th>Inicio</th>
              <th>Estado</th>
            </tr>
        </thead>

        <tbody>
            @foreach($data as $dato)
               <tr class="cursor-pointer hover:bg-green-200" onclick="verPersona('{{ $dato['id'] }}')">
                    <td class="py-2 border-b border-gray-400 text-gray-500">{{ $dato['nombres'] }}</td>
                    <td class="py-2 border-b border-gray-400 text-gray-500">{{ $dato['apellidos'] }}</td>
                    <td class="py-2 border-b border-gray-400 text-gray-500 flex justify-between">{{ $dato['status'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $function verPersona(id)
    {
        var idPersona = id;
        event.preventDefault();
        $.ajax(
        {
            data: {dataId:idPersona},
            url: '{{ route('ver-persona') }}',
            type: 'GET',
            async: true,
            beforeSend: function (){$("#resultado").html('<div class="flex justify-center"><div style="border-top-color:transparent" class="w-8 h-8 border-4 border-red-400 border-double rounded-full animate-spin"></div></div>');},
             success: function (respuesta){$('#resultado').html(respuesta);},
        });
    }




</script>