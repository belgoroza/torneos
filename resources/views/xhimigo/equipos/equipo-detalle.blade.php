{{-- MODAL CARGA --}}
<div class="fixed inset-0 invisible overflow-y-auto bg-red-50" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="loadModal">
    <div class="flex items-center justify-center px-4">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
        <div class="mt-16 pt-4 bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all max-w-lg " id="respLoadModal">
        </div>
    </div>
</div>
<div class="flex border-b border-teal-500 mr-2 ml-1 justify-between pb-2" >{{-- ROW 1 --}}
    <h2 class="text-md font-bold text-teal-400 flex"><a class="cursor-pointer ">Detalle del Equipo xxx</a></h2>
</div>
<div class="flex flex-col justify-center mt-8 w-full"> {{--ROW 3--}}
    <div class="row space-x-1 space-y-0 space-y-0 rounded-xl shadow-lg p-3 w-full mx-auto border border-gray-300 bg-white">
        <div class="flex flex-row">
            <div class="w-full w-1/3 bg-white grid place-items-center p-2">
                <img src="{{ $equipoDetalle->logo }}" alt="tailwind logo" class="rounded-xl w-18 h-18 md:w-24 md:h-24" />
            </div>
            <div class="w-full w-2/3 flex flex-col space-y-2 p-2">
                <div class="flex justify-between item-center border-b border-gray-300">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                            fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        <p class="text-gray-600 font-bold text-sm ml-1">4.96<span class="text-gray-500 font-normal">   (76 reviews)</span></p>
                    </div>
                </div>
                <h3 class="font-black text-gray-500 text-sm text-xs">{{ $equipoDetalle->nombre }}</h3>
                <p class="text-xs font-black text-gray-400">{{ $equipoDetalle->codigo }}</p>
                <p class="text-sm text-gray-500 text-base">{{ $equipoDetalle->lema }}</p>
            </div>
        </div>
        <div class="flex-row border-t border-gray-300">
            <small class="text-xs text-gray-400">Uniforme Principal : </small><span class="text-sm text-gray-400 font-semibold">{{ $equipoDetalle->color_1 }} | </span>
            <small class="text-xs text-gray-400">Uniforme Alterno : </small><span class="text-sm text-gray-400 font-semibold">{{ $equipoDetalle->color_2 }}</span>
        </div>
        <div class="flex-row">
            <small class="text-xs text-gray-400">Representante : </small><span class="text-sm text-gray-400 font-semibold">{{ $equipoDetalle->representante_id }} | </span>
            <small class="text-xs text-gray-400">Categoría : </small><span class="text-sm text-gray-400 font-semibold">{{ $equipoDetalle->categoria_id }}</span>
        </div>
        <div class="flex-row">
            <small class="text-xs text-gray-400">Descripción : </small>
            <span class="text-sm text-gray-400 font-semibold">{{ $equipoDetalle->descripcion }}</span>
        </div>
    </div>
<script></script>