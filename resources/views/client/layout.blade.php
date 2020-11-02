@extends('layouts.base')

@section('body')
    @include('client.partials.topbar')

    @include('client.partials.header')

    <div class="px-4 bg-cool-gray-50">
        @section('container')
            <div class="container mx-auto py-6">
                <div class="flex flex-col md:flex-row md:space-x-8 space-y-8 md:space-y-0">
                    <div class="w-full md:w-64 flex-shrink-0">
                        @include('client.partials.sidebar')
                    </div>

                    @yield('content')
                </div>
            </div>
        @show
    </div>

    @yield('subcontent')

    @include('client.partials.footer')
@endsection

@section('metrics')
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
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
         attribution=setup_tool
         page_id="112907143829486"
         theme_color="#3F92A0"
         logged_in_greeting="Jak ti může Magísek pomoci?"
         logged_out_greeting="Jak ti může Magísek pomoci?">
    </div>
@endsection
