<div class="col-span-2 border-r border-gray-300">
    <div class="border-b border-gray-200 pb-4">
        <a  href="{{ route('ruta-crear-seccion') }}" class="h-6 pl-2 pb-2 text-xs text-gray-700 font-medium underline hover:text-red-700" onclick="pinCarga('Nueva Sección')">Nueva Sección</a><br>
        <a  href="{{ route('ruta-listar-seccion') }}" class="h-6 pl-2 pb-2 text-xs text-gray-700 font-medium underline hover:text-red-700" onclick="pinCarga('Lista de Secciones')">Lista de Secciones</a>
    </div>

    <div class="border-b border-gray-200 pb-4">
        <a  href="{{ route('ruta-crear-categoria') }}" class="h-6 pl-2 pb-2 text-xs text-gray-700 font-medium underline hover:text-red-700" onclick="pinCarga('Nueva Categoría')">Nueva Categoría</a><br>
        <a  href="{{ route('ruta-lista-categoria') }}" class="h-6 pl-2 pb-2 text-xs text-gray-700 font-medium underline hover:text-red-700" onclick="pinCarga('Lista de Categorías')">Lista de Categorías</a>
    </div>

    <div class="border-b border-gray-200 pb-4">
        <a  href="{{ route('ruta-crear-producto') }}" class="h-6 pl-2 pb-2 text-xs text-gray-700 font-medium underline hover:text-red-700" onclick="pinCarga('Nuevo Producto')">Nuevo Producto</a><br>
        <a  href="{{ route('ruta-lista-producto') }}" class="h-6 pl-2 pb-2 text-xs text-gray-700 font-medium underline hover:text-red-700" onclick="pinCarga('Lista de Productos')">Lista de Productos</a>
    </div>
</div>

