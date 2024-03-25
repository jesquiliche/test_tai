<div class="bg-gray-50 border-2 border-gray-300 rounded-lg shadow-lg p-2 text-center m-4">
    @if ($title)
        <h2 class="text-lg my-2 italic rounded-md bg-gray-200"><b>{{ $title }}</b></h2>
    @endif

    {{ $slot }}

</div>
