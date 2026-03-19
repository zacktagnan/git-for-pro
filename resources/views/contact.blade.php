@php
    $title = "Contacto";
@endphp

<x-layouts.app :title="$title">
    <h1 class="text-2xl font-bold">{{ $title }}</h1>

    <p class="mt-4">Enviar consultas a <a href="mailto:aloha@gitforpro.es" class="text-blue-500 hover:underline" title="Enviar email">aloha@gitforpro.es</a> para resolver cualquier duda.</p>
</x-layouts.app>
