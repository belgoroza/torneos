
@forelse($getEquipo as $equipo)
	<div class="relative group w-full cursor-pointer mt-2 rounded border border-indigo-300" onclick="equipoAgregarTorneoAjax('{{$torneo_id}}','{{$equipo->organizacion_id}}','{{$equipo->id}}')">
        <div class="relative p-2 bg-white ring-1 ring-indigo-900/5 rounded-lg leading-none flex items-top justify-start space-x-6 hover:bg-teal-50">
            <img src="{{ $equipo->logo }}" class="w-8 h-8 cursor-pointer" alt="Logo Equipo" >
            <div class="space-y-2 w-2/3">
                <span class="text-xs font-semibold text-gray-600 py-0 my-0">{{ $equipo->nombre }}</span><br>
                <small class="text-xs text-indigo-400 py-0 my-0">{{ $equipo->codigo }}</small>
            </div>
        </div>
    </div>
@empty
    <div class="text-red-400 text-sm font-semibold px-2 border border-red-200 rounded bg-red-100">Aún no tiene equipos resgistrados...</div>
@endforelse

