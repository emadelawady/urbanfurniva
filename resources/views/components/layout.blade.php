<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title ?? config('app.name') }}</title>

        <script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/js/pagedone.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/css/pagedone.css " rel="stylesheet"/>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />




        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>

    {{-- <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" /> --}}


    {{-- {{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }} --}}

    {{-- @dd(app()->getLocale()) --}}


        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

        @livewireStyles

        @filamentStyles


        @if (app()->getLocale() == 'ar')

            @vite(['resources/css/app-rtl.css', 'resources/js/app.js'])

        @endif

        @if (app()->getLocale() == 'en')

            @vite(['resources/css/app-ltr.css', 'resources/js/app.js'])

        @endif



    </head>

    <body dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

            <main class="">




                <x-bottom-nav />

                <x-navbar />

                {{-- <x-nav /> --}}


                {{ $slot }}

            </main>





            @if (Route::is('contact.us'))

                <x-footer-contact />

            @endif

            @if (!Route::is('contact.us'))

                <x-footer />

            @endif




            @livewire('notifications')



            @livewireScripts

            @filamentScripts

    </body>
</html>
