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
    
    {{-- <div class="preloader ">
        <button class="as-btn style3 preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div> --}}

   
    @include('front.layouts.topnavbar')

    @yield('banner')

    @yield('content')

    @include('front.layouts.footer')

    @include('front.layouts.scripts')
  
</body>

</html>
