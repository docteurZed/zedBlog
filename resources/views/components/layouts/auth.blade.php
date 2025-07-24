{{-- <x-layouts.auth.simple :title="$title ?? null">
    {{ $slot }}
</x-layouts.auth.simple> --}}


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
        @fluxAppearance
    </head>
    <body class="bg-white dark:bg-gray-900">

        <main class="w-full">
            {{ $slot }}
        </main>

        @include('partials.script')
    </body>
</html>

