@php
    $title = "FAQ";
@endphp

<x-layouts.app :title="$title">
    <h1 class="text-2xl font-bold">{{ $title }}</h1>

    <h3 class="mt-3 text-lg font-bold">¿Qué es Git?</h3>
    <p class="mt-2">Git is un sistema de control de versiones distribuido.</p>

    <h3 class="mt-3 text-lg font-bold">¿Qué es GitHub?</h3>
    <p class="mt-2">GitHub is una platforma para alojar repositorios de Git.</p>
</x-layouts.app>
