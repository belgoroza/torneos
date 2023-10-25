{{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"> --}}
<div class="max-w-6xl sm:max-w-full mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-2 sm:pt-0">
        <div class="grid grid-cols-1 w-5/6">
            <div class="pb-2 mx-auto">{{ $logo }}</div>
            <div class="w-full lg:w-1/3 mt-6 px-6 py-4 bg-white rounded-lg shadow-md overflow-hidden sm:rounded-lg mx-auto">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
