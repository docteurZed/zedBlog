<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="bg-white dark:bg-gray-900">
        @include('partials.header')

        <main class="w-full">
            {{ $slot }}
        </main>

        @include('partials.footer')

        @include('partials.script')
    </body>
</html>
