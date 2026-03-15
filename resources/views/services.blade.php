@php
    $title = "Nuestros Servicios";
@endphp

<x-layouts.app :title="$title">
    <h1 class="text-2xl font-bold">{{ $title }}</h1>

    <ul class="mt-4 list-inside list-disc">
        <li>Desarrollo Web</li>
        <li>Diseño de APIs</li>
        <li>Consultorio</li>
    </ul>
</x-layouts.app>
