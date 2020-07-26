<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ settingsRepository()->getStoreDescription() }}">
        <meta name="keywords" content="{{ settingsRepository()->getStoreKeywords() }}">

        @hasSection('title')
            <title>@yield('title') - {{ settingsRepository()->getStoreName() }}</title>
        @else
            <title>{{ settingsRepository()->getStoreName() }}</title>
        @endif

        <!-- Favicon -->
        <link rel="icon" href="{{ settingsRepository()->getStoreFavicon() }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Livewire -->
        <livewire:styles/>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Alpine JS -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>

        @yield('styles')
    </head>

    <body>
        @yield('body')

        @include('layouts.partials.notifications')

        @yield('scripts')
        <script src="{{ mix('js/app.js') }}"></script>
        <livewire:scripts/>
    </body>
</html>
