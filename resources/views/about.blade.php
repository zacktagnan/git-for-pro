@php
    $title = "Acerca de";
@endphp

<x-layouts.app :title="$title">
    <h1 class="text-2xl font-bold">{{ $title }}</h1>

    <p class="mt-4">Este proyecto fue implementado con Laravel (v.12.54.1) y Sail, entre otras cosas.</p>

    <p class="mt-4"><small>Licencia MIT.</small></p>
</x-layouts.app>
