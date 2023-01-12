<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="{{ url()->full() }}" />
    <title>
        @hasSection('pageTitle')
            @yield('pageTitle')
        @else
            {{ getSiteSetting('site_title') }}
        @endif
    </title>
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-K4G3RXF');
    </script>
    <!-- End Google Tag Manager -->

    <meta name="facebook-domain-verification" content="se4xovwuvlty1ie4uno7z2vy321dj8" />
    
    @hasSection('metaDescription')
        <meta name="description" content="@yield('metaDescription')">
    @else
        <meta name="description" content=" {{ getSiteSetting('site_Description') }}">
    @endif
    @hasSection('metaKeywords')
        <meta name="keywords" content="@yield('metaKeywords')">
    @else
        <meta name="keywords" content="{{ getSeoKewords(getSiteSetting('site_keyword')) }} ">
    @endif

    <link rel="icon" href="{{ asset(getSiteSetting('favicon')) }}" type="image/gif" sizes="16x16" />

    @include('front.layouts.styles')

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K4G3RXF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    {{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body" style="color: black;">
                    <center><h6>Sorry For The Inconvenience.</h6></center>
                    <center><h6> Site Under Maintenance. Will Be Back Soon.</h6></center>
                </div>
               
            </div>
        </div>
    </div> --}}

    <div
        class="@if (Request::routeIs('index'))sw-pg-index
                    @elseif(Request::routeIs('aboutus'))sw-pg-about
                    @elseif(Request::routeIs('blogs'))sw-pg-blog
                    @elseif(Request::routeIs('contact') || Request::routeIs('career'))sw-pg-contact
                    @elseif(Request::routeIs('blogs.details*'))sw-pg-blog-details
                    @elseif(Request::routeIs('news.details*'))sw-pg-blog-details
                    @elseif(Request::routeIs('productSingle*'))sw-pg-product-details
                    @else sw-pg-product @endif">
        <div class="pg-wrapper">
            <!-- Top Bar -->
            <header class="header">
                @include('front.layouts.topnavbar')
                <!-- End Top Nav Bar -->
                {{-- @include('front.layouts.banner') --}}
                @yield('banner')

            </header>
            <!-- End Top Bar -->
            <main class="main-holder">
                @yield('content')
            </main>
        </div>
    </div>
    <div class="main-holder">
        @include('front.layouts.footer')

    </div>

    @include('front.layouts.scripts')
    {{-- <script>
        var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'))
        myModal.show()
    </script> --}}

</body>

</html>
