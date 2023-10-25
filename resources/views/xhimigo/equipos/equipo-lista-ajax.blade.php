@forelse($equipos as $key => $equipo)
    @foreach($equipo['equipos'] as $data)
        <div class="relative group w-full cursor-pointer mt-2 rounded border border-gray-200" onclick="equipoDetalle('{{ route('equipo-detalle',array('id'=>$data['id'])) }}')">
            <div class="relative p-2 bg-white ring-1 ring-gray-900/5 rounded-lg leading-none flex items-top justify-start space-x-6 hover:bg-teal-50">
                <img src="{{ $data['logo'] }}" class="w-8 h-8 cursor-pointer" alt="Logo Equipo" >
                <div class="space-y-2 w-2/3">
                    <span class="text-xs font-semibold text-gary-400 py-0 my-0">{{ $data['nombre'] }}</span><br>
                    <small class="text-xs text-gray-400 py-0 my-0">{{ $data['codigo'] }}</small>
                </div>
            </div>
        </div>
    @endforeach
@empty
    <div class="py-4 text-red-400 text-sm font-semibold px-2 border border-red-200 rounded bg-red-100 text-center">Aún no tiene equipos resgistrados...</div>
@endforelse