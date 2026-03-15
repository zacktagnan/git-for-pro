@php
    $title = "Acerca de";
@endphp

<x-layouts.app :title="$title">
    <h1 class="text-2xl font-bold">{{ $title }}</h1>

    <p class="mt-4">Este proyecto fue implementado con Laravel (v.12.54.1) y Sail, entre otras cosas.
        <br><small class="ml-4 px-1 pt-0 pb-0.5 rounded bg-gray-400 text-white">Licencia MIT</small></p>

    <p class="mt-4"></p>

    <p class="mt-4 italic text-sm">"Desarrollando con cariño..." <span class="text-sky-400 font-bold">:)</span></p>
</x-layouts.app>
