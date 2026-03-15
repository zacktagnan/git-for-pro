{{-- @props(['title' => config('app.name', 'Laravel')]) --}}
{{-- Con valor predeterminado simple --}}
{{-- ============================================================== --}}
{{-- Con valor predeterminado más complejo --}}
@props(['title' => null])

@php
    $appName = config('app.name', 'Laravel');
    $fullTitle = $title
        ? "{$title} - {$appName}"
        : $appName;
@endphp

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $fullTitle }}</title>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="p-11">
    <x-header />

    {{ $slot }}

    <x-footer />
</body>
</html>
