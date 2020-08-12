<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ settingsRepository()->getStoreDescription() }}">
        <meta name="keywords" content="{{ settingsRepository()->getStoreKeywords() }}">

        @hasSection('title')
            <title>@yield('title') - {{ settingsRepository()->getStoreName() . ' - ' . settingsRepository()->getStoreDescription() }}</title>
        @else
            <title>{{ settingsRepository()->getStoreName() . ' - ' . settingsRepository()->getStoreDescription() }}</title>
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

        <!-- jQuery -->
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

        @yield('styles')

        <!-- Google Tag Manager -->
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-PRGNZDM');
        </script>
        <!-- End Google Tag Manager -->
    </head>

    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRGNZDM"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml            : true,
                    version          : 'v8.0'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/cs_CZ/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Your Chat Plugin code -->
        <div class="fb-customerchat"
             attribution=setup_tool
             page_id="112907143829486"
             theme_color="#20cef5"
             logged_in_greeting="Jak ti může Magísek pomoci?"
             logged_out_greeting="Jak ti může Magísek pomoci?">
        </div>

        @yield('body')

        @include('layouts.partials.notifications')

        @yield('scripts')
        <script src="{{ mix('js/app.js') }}"></script>
        <livewire:scripts/>
    </body>
</html>
