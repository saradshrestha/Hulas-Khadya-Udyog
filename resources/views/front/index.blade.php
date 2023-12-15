@extends('front.layouts.master')

@section('pageTitle', 'Home | ' . getSiteSetting('site_title'))

@push('styles')
<style>
    /* .ls-wrapper ls-in-out ls-hide-on-phone ls-hide-on-tablet */
    .ls-wrapper .ls-in-out .ls-hide-on-phone .ls-hide-on-tablet{
        width: 600px !important;
        bottom: 75px !important;
        top:  !important;

    
    }
    .ls-text-layer .ls-layer{
        width: 600px !important;
    }
    </style>
 
@endpush

{{-- 
@section('banner')
    @include('front.layouts.banner')
@endsection --}}

@section('content')

 <!--==============================
Hero Area
==============================-->
<div class="d-none d-md-block">
    <div class="ls-wp-container fitvidsignore hero-2 as-hero-carousel" style="width:1920px;height:800px;margin:0 auto;margin-bottom: 0px;">

        <!-- Slide 1-->
        <div class="ls-slide" data-ls="duration:6000; transition2d:5,114; kenburnsscale:1.2;">
            <img width="1920" height="800" src="{{asset('frontendFiles/assets/img/hero/hero_bg_1_1.jpg')}}" class="ls-bg" alt="bg">
            <img width="133" height="168" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_4.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat;" data-ls="offsetyin:-300; durationin:1500; delayin:80; rotatein:40deg; bgcolorin:transparent; colorin:transparent; durationout:5000; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
            <img width="153" height="149" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_5.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:47px; left:811px;" data-ls="offsetxin:100; offsetyin:-300; durationin:1500; delayin:80; rotatein:40deg; bgcolorin:transparent; colorin:transparent; durationout:1500; parallax:true; parallaxlevel:8; parallaxdurationmove:400; position:fixed;">
            <img width="153" height="149" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_6.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:302px; left:160px;" data-ls="offsetxin:-300; offsetyin:100; durationin:1500; delayin:80; rotatein:60; durationout:1500; parallax:true; parallaxlevel:10; parallaxdurationmove:800; position:fixed;">
            <img width="190" height="118" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_7.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:658px; left:28px;" data-ls="offsetyin:200; durationin:1500; delayin:80; rotatein:40deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
            <img width="200" height="173" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_8.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:593px; left:586px;" data-ls="offsetxin:100; offsetyin:300; durationin:1500; delayin:80; rotatein:40deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
            <img width="539" height="456" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_2.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:29px; left:182px;" data-ls="offsetyin:-300; durationin:1500; delayin:80; rotatein:40deg; parallax:true; parallaxlevel:10; parallaxdurationmove:400; position:fixed;">
            <img width="943" height="763" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_3.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:19px; left:0px;" data-ls="offsetxin:-600; durationin:1500; delayin:80; bgcolorin:transparent; colorin:transparent; position:fixed;">
            <img width="291" height="27" src="{{ asset('frontendFiles/assets/img/hero/title_line.png')}}" class="ls-l ls-hide-tablet ls-hide-phone ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:458px; left:485px;" data-ls="durationin:1500; delayin:400; clipin:0 100% 0 0; position:fixed;">
            <img width="291" height="27" src="{{ asset('frontendFiles/assets/img/hero/title_line.png')}}" class="ls-l ls-hide-desktop ls-hide-phone ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:495px; left:308px; width:374px; height:35px;" data-ls="durationin:1500; delayin:400; clipin:0 100% 0 0; position:fixed;">
            <a style="" class="ls-l ls-hide-tablet ls-hide-phone" href="{{ route('products') }}" target="_self" data-ls="offsetxin:500; delayin:180; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#ff9d2d; position:fixed;">
                <ls-layer style="font-size:14px; color:#fff; text-align:center; font-family:Rubik; cursor:pointer; width:162px; left:344px; top:510px; text-transform:capitalize; line-height:14px; padding-bottom:20px; padding-top:22px; font-weight:600; border-radius:999px 999px 999px 999px; background-color:#FF9D2D;" class="ls-button-layer">
                    BROWSE PRODUCTS
                </ls-layer>
            </a>
            
                </ls-layer>
            </a>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:80px; top:222px; left:340px; color:#ffffff; font-size:70px; white-space:normal;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                Experience lightness
            </h1>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:80px; top:301px; left:340px; color:#ffffff; font-size:70px; white-space:normal;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:500; delayin:80; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                and wellness with
            </h1>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:80px; top:380px; left:340px; color:#ffffff; font-size:70px; white-space:normal;" class="ls-l hero-title ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:500; delayin:160; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                Agrim <span class="font-style text-theme2"> Chakki Atta</span>
            </h1>
            <a style="" class="ls-l ls-hide-desktop ls-hide-phone" href="{{ route('products') }}" target="_self" data-ls="offsetxin:500; delayin:180; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#ff9d2d; position:fixed;">
                <ls-layer style="font-size:32px; color:#fff; text-align:center; font-family:Rubik; cursor:pointer; left:78px; top:549px; text-transform:capitalize; padding-bottom:30px; padding-top:30px; font-weight:600; border-radius:999px 999px 999px 999px; background-color:#FF9D2D; line-height:32px; width:270px;" class="ls-button-layer">
                    ORDER NOW
                </ls-layer>
            </a>
            <a style="" class="ls-l ls-hide-desktop ls-hide-phone" href="{{ route('recipes') }}" target="_self" data-ls="offsetxin:500; delayin:200; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#eb0029; position:fixed;">
                <ls-layer style="font-size:32px; color:#fff; text-align:center; font-family:Rubik; cursor:pointer; left:378px; top:549px; text-transform:capitalize; padding-bottom:30px; padding-top:30px; font-weight:600; border-radius:999px 999px 999px 999px; line-height:32px; width:310px; background-color:#eb0029;" class="ls-button-layer">
                    BROWSE MENU
                </ls-layer>
            </a>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:110px; top:160px; left:72px; color:#ffffff; font-size:100px; white-space:normal;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                WE SERVE THE
            </h1>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:110px; top:276px; left:72px; color:#ffffff; font-size:100px; white-space:normal;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:500; delayin:80; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                TASTE, AS YOU
            </h1>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:110px; top:391px; left:72px; color:#ffffff; font-size:100px; white-space:normal;" class="ls-l hero-title ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:500; delayin:160; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                LIKE <span class="font-style text-theme2"> FOODS</span>
            </h1>
            <a style="" class="ls-l ls-hide-desktop ls-hide-tablet" href="{{ route('products') }}" target="_self" data-ls="offsetxin:500; delayin:180; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#ff9d2d; position:fixed;">
                <ls-layer style="font-size:42px; color:#fff; text-align:center; font-family:Rubik; cursor:pointer; left:78px; top:549px; text-transform:capitalize; padding-bottom:40px; font-weight:600; border-radius:999px 999px 999px 999px; background-color:#FF9D2D; line-height:42px; width:340px; padding-top:40px;" class="ls-button-layer">
                    ORDER NOW
                </ls-layer>
            </a>
            <a style="" class="ls-l ls-hide-desktop ls-hide-tablet" href="{{ route('recipes') }}" target="_self" data-ls="offsetxin:500; delayin:200; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#eb0029; position:fixed;">
                <ls-layer style="font-size:42px; color:#fff; text-align:center; font-family:Rubik; cursor:pointer; left:464px; top:549px; text-transform:capitalize; padding-bottom:40px; padding-top:40px; font-weight:600; border-radius:999px 999px 999px 999px; line-height:42px; background-color:#eb0029; width:400px;" class="ls-button-layer">
                    BROWSE MENU
                </ls-layer>
            </a>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:110px; top:149px; left:72px; color:#ffffff; font-size:100px; white-space:normal;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                WE SERVE THE
            </h1>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:110px; top:264px; left:72px; color:#ffffff; font-size:100px; white-space:normal;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:500; delayin:80; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                TASTE, AS YOU
            </h1>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:110px; top:378px; left:72px; color:#ffffff; font-size:100px; white-space:normal;" class="ls-l hero-title ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:500; delayin:160; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                LIKE <span class="font-style text-theme2"> FOODS</span>
            </h1>
            <a style="" class="ls-l ls-hide-tablet ls-hide-phone" href="#1" target="_self" data-ls="static:forever; position:fixed;">
                <ls-layer style='text-align:center; font-weight:700; cursor:pointer; width:30px; height:30px; left:110px; top:345px; line-height:32px; background-size:contain; background-position:50% 50%; color:#eb0029; font-size:12px; background-image:url("{{ asset('FrontendFiles/assets/img/hero/dot_bg_white.png')}}");' class="ls-button-layer">
                    1
                </ls-layer>
            </a>
            <ls-layer style='text-align:center; font-weight:700; cursor:pointer; width:30px; height:30px; left:110px; top:345px; line-height:32px; background-size:contain; background-position:50% 50%; font-size:12px; color:#ffffff; background-image:url("{{ asset('frontendFiles/assets/img/hero/dot_bg.png')}}");' class="ls-l ls-hide-tablet ls-hide-phone ls-button-layer" data-ls="durationin:400; position:fixed;">
                1
            </ls-layer>
            <a style="" class="ls-l ls-hide-tablet ls-hide-phone" href="#2" target="_self" data-ls="static:forever; position:fixed;">
                <ls-layer style='text-align:center; font-weight:700; cursor:pointer; width:30px; height:30px; left:110px; top:386px; line-height:32px; background-size:contain; background-position:50% 50%; color:#eb0029; font-size:12px; background-image:url("{{ asset('FrontendFiles/assets/img/hero/dot_bg_white.png')}}");' class="ls-button-layer">
                    2
                </ls-layer>
            </a>
            <a style="" class="ls-l ls-hide-tablet ls-hide-phone" href="#3" target="_self" data-ls="static:forever; position:fixed;">
                <ls-layer style='text-align:center; font-weight:700; cursor:pointer; width:30px; height:30px; left:110px; top:426px; line-height:32px; background-size:contain; background-position:50% 50%; color:#eb0029; font-size:12px; background-image:url("{{ asset('FrontendFiles/assets/img/hero/dot_bg_white.png')}}");' class="ls-button-layer">
                    3
                </ls-layer>
            </a>
            <img width="2" height="100" src="{{ asset('frontendFiles/assets/img/hero/dot_line.png')}}" class="ls-l ls-hide-tablet ls-hide-phone ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:124px; top:236px;" data-ls="static:forever; position:fixed;">
            <img width="2" height="100" src="{{ asset('frontendFiles/assets/img/hero/dot_line_2.png')}}" class="ls-l ls-hide-tablet ls-hide-phone ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:124px; top:464px;" data-ls="static:forever; position:fixed;">
        </div>


        <!-- Slide 2-->
        <div class="ls-slide" data-ls="duration:6000; transition2d:5,114; kenburnsscale:1.2;">
            <img width="1920" height="800" src="{{ asset('frontendFiles/assets/img/hero/hero_bg_1_2.jpg')}}" class="ls-bg" alt="bg">
            <img width="133" height="168" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_4.png')}}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat;" data-ls="offsetyin:-300; durationin:1500; delayin:80; rotatein:40deg; bgcolorin:transparent; colorin:transparent; durationout:5000; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
            <img width="153" height="149" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_5.png')}}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:47px; left:811px;" data-ls="offsetxin:100; offsetyin:-300; durationin:1500; delayin:80; rotatein:40deg; bgcolorin:transparent; colorin:transparent; durationout:1500; parallax:true; parallaxlevel:8; parallaxdurationmove:400; position:fixed;">
            <img width="153" height="149" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_6.png')}}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:302px; left:160px;" data-ls="offsetxin:-300; offsetyin:100; durationin:1500; delayin:80; rotatein:60; durationout:1500; parallax:true; parallaxlevel:10; parallaxdurationmove:800; position:fixed;">
            <img width="190" height="118" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_7.png')}}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:658px; left:28px;" data-ls="offsetyin:200; durationin:1500; delayin:80; rotatein:40deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
            <img width="200" height="173" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_8.png')}}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:593px; left:586px;" data-ls="offsetxin:100; offsetyin:300; durationin:1500; delayin:80; rotatein:40deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
            <img width="539" height="456" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_2.png')}}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:29px; left:182px;" data-ls="offsetyin:-300; durationin:1500; delayin:80; rotatein:40deg; parallax:true; parallaxlevel:10; parallaxdurationmove:400; position:fixed;">
            <img width="943" height="763" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_3.png')}}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:19px; left:0px;" data-ls="offsetxin:-600; durationin:1500; delayin:80; bgcolorin:transparent; colorin:transparent; position:fixed;">
            <img width="291" height="27" src="{{ asset('frontendFiles/assets/img/hero/title_line.png')}}" class="ls-l ls-hide-tablet ls-hide-phone ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:458px; left:485px;" data-ls="durationin:1500; delayin:400; clipin:0 100% 0 0; position:fixed;">
            <img width="291" height="27" src="{{ asset('frontendFiles/assets/img/hero/title_line.png')}}" class="ls-l ls-hide-desktop ls-hide-phone ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:495px; left:308px; width:374px; height:35px;" data-ls="durationin:1500; delayin:400; clipin:0 100% 0 0; position:fixed;">
            <a style="" class="ls-l ls-hide-tablet ls-hide-phone" href="{{ route('products') }}" target="_self" data-ls="offsetxin:500; delayin:180; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#ff9d2d; position:fixed;">
                <ls-layer style="font-size:14px; color:#fff; text-align:center; font-family:Rubik; cursor:pointer; width:162px; left:344px; top:510px; text-transform:capitalize; line-height:14px; padding-bottom:20px; padding-top:22px; font-weight:600; border-radius:999px 999px 999px 999px; background-color:#FF9D2D;" class="ls-button-layer">
                    BROWSE PRODUCTS
                </ls-layer>
            </a>
            
                </ls-layer>
            </a>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:80px; top:222px; left:340px; color:#ffffff; font-size:70px; white-space:normal;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                Pizza perfection  
            </h1>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:80px; top:301px; left:340px; color:#ffffff; font-size:70px; white-space:normal;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:500; delayin:80; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                with Agrim Maida
            </h1>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:80px; top:380px; left:340px; color:#ffffff; font-size:70px; white-space:normal;" class="ls-l hero-title ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:500; delayin:160; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                Roll, top, <span class="font-style text-theme2"> and bake.</span>
            </h1>
            <a style="" class="ls-l ls-hide-desktop ls-hide-phone" href="{{ route('products') }}" target="_self" data-ls="offsetxin:500; delayin:180; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#ff9d2d; position:fixed;">
                <ls-layer style="font-size:32px; color:#fff; text-align:center; font-family:Rubik; cursor:pointer; left:78px; top:549px; text-transform:capitalize; padding-bottom:30px; padding-top:30px; font-weight:600; border-radius:999px 999px 999px 999px; background-color:#FF9D2D; line-height:32px; width:270px;" class="ls-button-layer">
                    ORDER NOW
                </ls-layer>
            </a>
            <a style="" class="ls-l ls-hide-desktop ls-hide-phone" href="{{ route('recipes') }}" target="_self" data-ls="offsetxin:500; delayin:200; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#eb0029; position:fixed;">
                <ls-layer style="font-size:32px; color:#fff; text-align:center; font-family:Rubik; cursor:pointer; left:378px; top:549px; text-transform:capitalize; padding-bottom:30px; padding-top:30px; font-weight:600; border-radius:999px 999px 999px 999px; line-height:32px; width:310px; background-color:#eb0029;" class="ls-button-layer">
                    BROWSE MENU
                </ls-layer>
            </a>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:110px; top:160px; left:72px; color:#ffffff; font-size:100px; white-space:normal;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                YOU ALWAYS LIKE
            </h1>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:110px; top:276px; left:72px; color:#ffffff; font-size:100px; white-space:normal;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:500; delayin:80; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                TASTE, OF OUR
            </h1>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:110px; top:391px; left:72px; color:#ffffff; font-size:100px; white-space:normal;" class="ls-l hero-title ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:500; delayin:160; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                FAST <span class="font-style text-theme2"> FOODS</span>
            </h1>
            <a style="" class="ls-l ls-hide-tablet ls-hide-phone" href="#2" target="_self" data-ls="durationin:400; position:fixed;">
                <ls-layer style='text-align:center; font-weight:700; cursor:pointer; width:30px; height:30px; left:110px; top:386px; line-height:32px; background-size:contain; background-position:50% 50%; font-size:12px; color:#ffffff; z-index:9999; background-image:url("{{ asset('frontendFiles/assets/img/hero/dot_bg.png')}}");' class="ls-button-layer">
                    2
                </ls-layer>
            </a>
        </div>

        <!-- Slide 3-->
        <div class="ls-slide" data-ls="duration:6000; transition2d:5,114; kenburnsscale:1.2;">
            <img width="1920" height="800" src="{{ asset('frontendFiles/assets/img/hero/hero_bg_1_3.jpg')}}" class="ls-bg" alt="bg">
            <img width="133" height="168" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_4.png')}} class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat;" data-ls="offsetyin:-300; durationin:1500; delayin:80; rotatein:40deg; bgcolorin:transparent; colorin:transparent; durationout:5000; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
            <img width="153" height="149" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_5.png')}} class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:47px; left:811px;" data-ls="offsetxin:100; offsetyin:-300; durationin:1500; delayin:80; rotatein:40deg; bgcolorin:transparent; colorin:transparent; durationout:1500; parallax:true; parallaxlevel:8; parallaxdurationmove:400; position:fixed;">
            <img width="153" height="149" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_6.png')}} class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:302px; left:160px;" data-ls="offsetxin:-300; offsetyin:100; durationin:1500; delayin:80; rotatein:60; durationout:1500; parallax:true; parallaxlevel:10; parallaxdurationmove:800; position:fixed;">
            <img width="190" height="118" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_7.png')}} class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:658px; left:28px;" data-ls="offsetyin:200; durationin:1500; delayin:80; rotatein:40deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
            <img width="200" height="173" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_8.png')}} class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:593px; left:586px;" data-ls="offsetxin:100; offsetyin:300; durationin:1500; delayin:80; rotatein:40deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
            <img width="539" height="456" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_2.png')}} class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:29px; left:182px;" data-ls="offsetyin:-300; durationin:1500; delayin:80; rotatein:40deg; parallax:true; parallaxlevel:10; parallaxdurationmove:400; position:fixed;">
            <img width="943" height="763" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_3.png')}} class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:19px; left:0px;" data-ls="offsetxin:-600; durationin:1500; delayin:80; bgcolorin:transparent; colorin:transparent; position:fixed;">
            <img width="291" height="27" src="{{ asset('frontendFiles/assets/img/hero/title_line.png')}}" class="ls-l ls-hide-tablet ls-hide-phone ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:458px; left:584px;" data-ls="durationin:1500; delayin:400; clipin:0 100% 0 0; position:fixed;">
            <img width="291" height="27" src="{{ asset('frontendFiles/assets/img/hero/title_line.png')}}" class="ls-l ls-hide-desktop ls-hide-phone ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:495px; left:446px; width:374px; height:35px;" data-ls="durationin:1500; delayin:400; clipin:0 100% 0 0; position:fixed;">
            <a style="" class="ls-l ls-hide-tablet ls-hide-phone" href="{{ route('products') }}" target="_self" data-ls="offsetxin:500; delayin:180; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#ff9d2d; position:fixed;">
                <ls-layer style="font-size:14px; color:#fff; text-align:center; font-family:Rubik; cursor:pointer; width:162px; left:344px; top:510px; text-transform:capitalize; line-height:14px; padding-bottom:20px; padding-top:22px; font-weight:600; border-radius:999px 999px 999px 999px; background-color:#FF9D2D;" class="ls-button-layer">
                    BROWSE PRODUCTS
                </ls-layer>
            </a>
            
                </ls-layer>
            </a>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:80px; top:222px; left:340px; color:#ffffff; font-size:70px; white-space:normal;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                Experience
            </h1>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:80px; top:301px; left:340px; color:#ffffff; font-size:70px; white-space:normal;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:500; delayin:80; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                the flavors of Nepal
            </h1>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:80px; top:380px; left:340px; color:#ffffff; font-size:70px; white-space:normal;" class="ls-l hero-title ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:500; delayin:160; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                on every <span class="font-style text-theme2"> Agrim foods.</span>
            </h1>
            <a style="" class="ls-l ls-hide-desktop ls-hide-phone" href="{{ route('products') }}" target="_self" data-ls="offsetxin:500; delayin:180; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#ff9d2d; position:fixed;">
                <ls-layer style="font-size:32px; color:#fff; text-align:center; font-family:Rubik; cursor:pointer; left:78px; top:549px; text-transform:capitalize; padding-bottom:30px; padding-top:30px; font-weight:600; border-radius:999px 999px 999px 999px; background-color:#FF9D2D; line-height:32px; width:270px;" class="ls-button-layer">
                    ORDER NOW
                </ls-layer>
            </a>
            <a style="" class="ls-l ls-hide-desktop ls-hide-phone" href="{{ route('recipes') }}" target="_self" data-ls="offsetxin:500; delayin:200; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#eb0029; position:fixed;">
                <ls-layer style="font-size:32px; color:#fff; text-align:center; font-family:Rubik; cursor:pointer; left:378px; top:549px; text-transform:capitalize; padding-bottom:30px; padding-top:30px; font-weight:600; border-radius:999px 999px 999px 999px; line-height:32px; width:310px; background-color:#eb0029;" class="ls-button-layer">
                    BROWSE MENU
                </ls-layer>
            </a>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:110px; top:160px; left:72px; color:#ffffff; font-size:100px; white-space:normal;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                WE PROVIDE BEST
            </h1>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:110px; top:276px; left:72px; color:#ffffff; font-size:100px; white-space:normal;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:500; delayin:80; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                BEHAVIOUR AND
            </h1>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:110px; top:391px; left:72px; color:#ffffff; font-size:100px; white-space:normal;" class="ls-l hero-title ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:500; delayin:160; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                YUMMY <span class="font-style text-theme2"> FOODS</span>
            </h1>
            <a style="" class="ls-l ls-hide-tablet ls-hide-phone" href="#3" target="_self" data-ls="durationin:400; position:fixed;">
                <ls-layer style='text-align:center; font-weight:700; cursor:pointer; width:30px; height:30px; left:110px; top:426px; line-height:32px; background-size:contain; background-position:50% 50%; font-size:12px; color:#ffffff; z-index:9999; background-image:url("{{ asset('frontendFiles/assets/img/hero/dot_bg.png')}}");' class="ls-button-layer">
                    3
                </ls-layer>
            </a>
        </div>
    </div>
</div>

<!-- Layer Slider Mobile version start here -->
<div class="d-block d-md-none">
    <div id="slider" class="ls-wp-container fitvidsignore hero-2 as-hero-carousel phone" style="width:500px;height:510px;margin:0 auto;margin-bottom: 0px;">

        <!-- Slide 1-->
        <div class="ls-slide" data-ls="duration:5000; transition2d:5; kenburnsscale:1.2;">
            <img width="500" height="510" src="{{ asset('frontendFiles/assets/img/hero/agrmi-product-mobile-1.jpeg') }}" class="ls-bg" alt="bg">
            <img width="190" height="118" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_7.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:453px; left:15px; width:92px; height:57px;" data-ls="offsetyin:200; durationin:1400; rotatein:60deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; rotation:00deg; position:fixed;">
            <img width="200" height="173" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_8.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:434px; left:181px; width:65px; height:56px;" data-ls="offsetyin:200; durationin:1400; rotatein:-90deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
            <img width="153" height="149" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_4.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:194px; left:19px; width:56px; height:54px;" data-ls="offsetxin:-300; durationin:1400; rotatein:80deg; durationout:1500; parallax:true; parallaxlevel:10; parallaxdurationmove:800; position:fixed;">
            <img width="133" height="168" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_6.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:0px; left:0px; width:65px; height:82px;" data-ls="offsetyin:-300; durationin:1500; delayin:80; rotatein:40deg; bgcolorin:transparent; colorin:transparent; durationout:5000; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
            <img width="153" height="149" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_5.png')}}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:19px; left:300px; width:69px; height:68px;" data-ls="offsetxin:100; offsetyin:-300; durationin:1500; delayin:80; rotatein:40deg; bgcolorin:transparent; colorin:transparent; durationout:1500; parallax:true; parallaxlevel:8; parallaxdurationmove:400; position:fixed;">
            <img width="943" height="763" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_3.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:19px; left:-1px; width:494px; height:430px; z-index:5;" data-ls="offsetxin:-600; durationin:1500; delayin:80; bgcolorin:transparent; colorin:transparent; position:fixed;">
            <img width="291" height="27" src="{{ asset('frontendFiles/assets/img/hero/title_line.png')}}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:281px; left:125px; width:180px; height:16px;" data-ls="durationin:1500; delayin:400; clipin:0 100% 0 0; position:fixed;">
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:54px; top:110px; left:15px; font-weight:800; font-size:44px; color:#ffffff; white-space:normal;" class="ls-l ls-text-layer" data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:-150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; position:fixed;">
                WE SERVE THE
            </h1>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:800; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:54px; top:168px; left:15px; font-size:44px; color:#ffffff; white-space:normal;" class="ls-l hero-title ls-text-layer" data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:-150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; position:fixed;">
                TASTE, AS YOU
            </h1>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:800; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:55px; top:226px; left:15px; font-size:44px; color:#ffffff; white-space:normal;" class="ls-l hero-title ls-text-layer" data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; position:fixed;">
                LIKE <span class="font-style text-theme2"> FOODS</span>
            </h1>
            <a style="" class="ls-l" href="{{ route('products') }}" target="_self" data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                <ls-layer style="font-size:20px; color:#fff; text-align:center; font-family:Rubik; cursor:pointer; width:198px; left:15px; top:326px; text-transform:uppercase; line-height:20px; font-weight:600; border-radius:999px 999px 999px 999px; background-color:#eb0029; padding-bottom:22px; padding-top:22px;" class="ls-button-layer">
                    Order now
                </ls-layer>
            </a>
            <a style="" class="ls-l" href="{{ route('recipes') }}" target="_self" data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                <ls-layer style="font-size:19px; color:#fff; text-align:center; font-family:Rubik; cursor:pointer; width:178px; left:234px; top:326px; text-transform:uppercase; line-height:19px; padding-bottom:22px; padding-top:22px; font-weight:600; border-radius:999px 999px 999px 999px; background-color:#ff9d2d;" class="ls-button-layer">
                    BROWSE MENU
                </ls-layer>
            </a>
        </div>


        <!-- Slide 2-->
        <div class="ls-slide" data-ls="duration:5000; transition2d:5; kenburnsscale:1.2;">
            <img width="500" height="510" src="{{ asset('frontendFiles/assets/img/hero/agrmi-product-mobile-2.jpeg') }}" class="ls-bg" alt="bg">
            <img width="190" height="118" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_7.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:453px; left:15px; width:92px; height:57px;" data-ls="offsetyin:200; durationin:1400; rotatein:60deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; rotation:00deg; position:fixed;">
            <img width="200" height="173" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_8.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:434px; left:181px; width:65px; height:56px;" data-ls="offsetyin:200; durationin:1400; rotatein:-90deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
            <img width="153" height="149" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_6.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:194px; left:19px; width:56px; height:54px;" data-ls="offsetxin:-300; durationin:1400; rotatein:80deg; durationout:1500; parallax:true; parallaxlevel:10; parallaxdurationmove:800; position:fixed;">
            <img width="133" height="168" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_4.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:0px; left:0px; width:65px; height:82px;" data-ls="offsetyin:-300; durationin:1500; delayin:80; rotatein:40deg; bgcolorin:transparent; colorin:transparent; durationout:5000; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
            <img width="153" height="149" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_5.png')}}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:19px; left:300px; width:69px; height:68px;" data-ls="offsetxin:100; offsetyin:-300; durationin:1500; delayin:80; rotatein:40deg; bgcolorin:transparent; colorin:transparent; durationout:1500; parallax:true; parallaxlevel:8; parallaxdurationmove:400; position:fixed;">
            <img width="943" height="763" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_3.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:19px; left:-1px; width:494px; height:430px; z-index:5;" data-ls="offsetxin:-600; durationin:1500; delayin:80; bgcolorin:transparent; colorin:transparent; position:fixed;">
            <img width="291" height="27" src="{{ asset('frontendFiles/assets/img/hero/title_line.png')}}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:281px; left:115px; width:180px; height:16px;" data-ls="durationin:1500; delayin:400; clipin:0 100% 0 0; position:fixed;">
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:54px; top:110px; left:15px; font-weight:800; font-size:44px; color:#ffffff; white-space:normal;" class="ls-l ls-text-layer" data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:-150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; position:fixed;">
                YOU ALWAYS LIKE
            </h1>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:800; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:54px; top:168px; left:15px; font-size:44px; color:#ffffff; white-space:normal;" class="ls-l hero-title ls-text-layer" data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:-150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; position:fixed;">
                TASTE, OF OUR
            </h1>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:800; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:55px; top:226px; left:15px; font-size:44px; color:#ffffff; white-space:normal;" class="ls-l hero-title ls-text-layer" data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; position:fixed;">
                FAST <span class="font-style text-theme2"> FOODS</span>
            </h1>
            <a style="" class="ls-l" href="{{ route('products') }}" target="_self" data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                <ls-layer style="font-size:20px; color:#fff; text-align:center; font-family:Rubik; cursor:pointer; width:198px; left:15px; top:326px; text-transform:uppercase; line-height:20px; font-weight:600; border-radius:999px 999px 999px 999px; background-color:#eb0029; padding-bottom:22px; padding-top:22px;" class="ls-button-layer">
                    Order now
                </ls-layer>
            </a>
            <a style="" class="ls-l" href="{{ route('recipes') }}" target="_self" data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                <ls-layer style="font-size:19px; color:#fff; text-align:center; font-family:Rubik; cursor:pointer; width:178px; left:234px; top:326px; text-transform:uppercase; line-height:19px; padding-bottom:22px; padding-top:22px; font-weight:600; border-radius:999px 999px 999px 999px; background-color:#ff9d2d;" class="ls-button-layer">
                    BROWSE MENU
                </ls-layer>
            </a>
        </div>


        <!-- Slide 3-->
        <div class="ls-slide" data-ls="duration:5000; transition2d:5; kenburnsscale:1.2;">
            <img width="500" height="510" src="{{ asset('frontendFiles/assets/img/hero/agrmi-product-mobile-3.jpeg') }}" class="ls-bg" alt="bg">
            <img width="190" height="118" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_7.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:453px; left:15px; width:92px; height:57px;" data-ls="offsetyin:200; durationin:1400; rotatein:60deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; rotation:00deg; position:fixed;">
            <img width="200" height="173" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_8.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:434px; left:181px; width:65px; height:56px;" data-ls="offsetyin:200; durationin:1400; rotatein:-90deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
            <img width="153" height="149" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_4.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:194px; left:19px; width:56px; height:54px;" data-ls="offsetxin:-300; durationin:1400; rotatein:80deg; durationout:1500; parallax:true; parallaxlevel:10; parallaxdurationmove:800; position:fixed;">
            <img width="133" height="168" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_6.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:0px; left:0px; width:65px; height:82px;" data-ls="offsetyin:-300; durationin:1500; delayin:80; rotatein:40deg; bgcolorin:transparent; colorin:transparent; durationout:5000; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
            <img width="153" height="149" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_5.png')}}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:19px; left:300px; width:69px; height:68px;" data-ls="offsetxin:100; offsetyin:-300; durationin:1500; delayin:80; rotatein:40deg; bgcolorin:transparent; colorin:transparent; durationout:1500; parallax:true; parallaxlevel:8; parallaxdurationmove:400; position:fixed;">
            <img width="943" height="763" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_3.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:19px; left:-1px; width:494px; height:430px; z-index:5;" data-ls="offsetxin:-600; durationin:1500; delayin:80; bgcolorin:transparent; colorin:transparent; position:fixed;">
            <img width="291" height="27" src="{{ asset('frontendFiles/assets/img/hero/title_line.png')}}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:281px; left:175px; width:180px; height:16px;" data-ls="durationin:1500; delayin:400; clipin:0 100% 0 0; position:fixed;">
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:54px; top:110px; left:15px; font-weight:800; font-size:44px; color:#ffffff; white-space:normal;" class="ls-l ls-text-layer" data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:-150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; position:fixed;">
                WE PROVIDE BEST
            </h1>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:800; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:54px; top:168px; left:15px; font-size:44px; color:#ffffff; white-space:normal;" class="ls-l hero-title ls-text-layer" data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:-150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; position:fixed;">
                BEHAVIOUR AND
            </h1>
            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:800; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:55px; top:226px; left:15px; font-size:44px; color:#ffffff; white-space:normal;" class="ls-l hero-title ls-text-layer" data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; position:fixed;">
                YUMMY <span class="font-style text-theme2"> FOODS</span>
            </h1>
            <a style="" class="ls-l" href="{{ route('products') }}" target="_self" data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                <ls-layer style="font-size:20px; color:#fff; text-align:center; font-family:Rubik; cursor:pointer; width:198px; left:15px; top:326px; text-transform:uppercase; line-height:20px; font-weight:600; border-radius:999px 999px 999px 999px; background-color:#eb0029; padding-bottom:22px; padding-top:22px;" class="ls-button-layer">
                    Order now
                </ls-layer>
            </a>
            <a style="" class="ls-l" href="{{ route('recipes') }}" target="_self" data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                <ls-layer style="font-size:19px; color:#fff; text-align:center; font-family:Rubik; cursor:pointer; width:178px; left:234px; top:326px; text-transform:uppercase; line-height:19px; padding-bottom:22px; padding-top:22px; font-weight:600; border-radius:999px 999px 999px 999px; background-color:#ff9d2d;" class="ls-button-layer">
                    BROWSE MENU
                </ls-layer>
            </a>
        </div>
    </div>
</div>
<!--======== / Hero Section ========-->
<!--==============================Feature Area  ==============================-->
<section class="space">
    <div class="container">
        <div class="row gy-30 justify-content-center">
            <div class="col-md-4 col-sm-6 feature-card-wrap">
                <div class="feature-card">
                    <div class="feature-card_icon">
                        <img src="{{ asset('frontendFiles/assets/img/icon/healthy.png')}}" alt="icon">
                    </div>
                    <div>
                        <h3 class="feature-card_title">स्वस्थ</h3>
                        <p class="feature-card_text">Nourish your body with the goodness of Agrim food.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 feature-card-wrap">
                <div class="feature-card">
                    <div class="feature-card_icon">
                        <img src="{{ asset('frontendFiles/assets/img/icon/full.png')}}" alt="icon">
                    </div>
                    <div>
                        <h3 class="feature-card_title">स्वादिष्ट</h3>
                        <p class="feature-card_text">Savor the taste of freshness in every bite of Agrim food.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 feature-card-wrap">
                <div class="feature-card">
                    <div class="feature-card_icon">
                        <img src="{{ asset('frontendFiles/assets/img/icon/like.png') }}" alt="icon">
                    </div>
                    <div>
                        <h3 class="feature-card_title">सन्तुष्टि</h3>
                        <p class="feature-card_text">Authentic flavor, Agrim foods, the perfect choice for Nepalese.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================About Area  ==============================-->
<div class="space-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-xxl-7 pe-xxl-5">
                <div class="text-end">
                    <img src="{{asset('frontendFiles/assets/img/normal/about_1_1.png')}}" alt="About">
                </div>
            </div>
            <div class="col-xl-6 col-xxl-5 col-lg-9 mt-35 mt-xl-0">
                <div class="title-area mb-30">
                    <span class="sub-title">
                        <img class="icon" src="{{ asset('frontendFiles/assets/img/icon/wheat.png')}}" alt="icon">
                        About Us
                    </span>
                    <h2 class="sec-title">Real Delicious Food Straight To <span class="font-style text-theme">Your Table</span></h2>
                </div>
                <p class="mt-n2 mb-4">Hulas Khadya Udyog (P) Ltd., founded in 1962 by the late Shree Ramlal Golchha, is a renowned company in the FMCG market known for its brand Agrim.</p>
                <div class="checklist-wrap">
                    <div class="as-video">
                        <img src="{{asset('frontendFiles/assets/img/normal/about_1_2.jpg')}}" alt="video">
                        <a href="https://youtu.be/ETUVJILZJWM" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="checklist">
                        <ul>
                            <li>Delicious & Healthy Foods</li>
                            <li>Taste of freshness</li>
                            <li>Authentic Nepalese flavor</li>
                            <li>Made By Fresh Ingredients</li>
                            <li>Diverse range of products</li>
                        </ul>
                    </div>
                </div>
                <div class="btn-wrap">
                    <a href="about.html" class="as-btn">DISCOVER MORE</a>
                    <div class="profile-box">
                        <div class="avater">
                        
                        </div>
                        <div class="content">
                            <h6 class="title"></h6>
                            <p class="desig"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup about-shape1" data-top="0%" data-left="0"><img src="{{ asset('frontendFiles/assets/img/shape/bg_shape_1.png') }}" alt="shapes"></div>
</div>
<!--==============================Menu Area  ==============================-->
<section class="space bg-smoke2" data-bg-src="assets/img/bg/menu_bg_1.png">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">
                <img class="icon" src="assets/img/icon/soy_flour.png" alt="icon">
                Our Products
            </span>
            <h2 class="sec-title">Browse Our <span class="font-style text-theme">Products</span></h2>
            <p class="sec-text ms-auto me-auto">Agrim foods is dedicated to building healthy communities through the production of tasty, healthy, and satisfying food that is both accessible and affordable.</p>
        </div>
        <div class="row as-carousel slider-shadow number-dots" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2" data-dots="true" data-xl-dots="true" data-ml-dots="true" data-lg-dots="true" data-md-dots="true">
            @if (isset($products) && count($products)>0)
            @foreach ($products as $product)

            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="menu-card">
                    <div class="menu-card_img">
                        <img src="{{ getOrginalUrl($product->feature_image)}}" alt="{{ $product->title }}">

                    </div>
                    <div class="menu-card_content mt-1">
                        <a href="#" class="category mt-1">{{ $product->category->title ?? ''}}</a>

                        {{-- <h6 class="menu-card_title box-title"><a href="shop-details.html">{{ $product->category->title}}</a></h6> --}}
                        <h3 class="menu-card_title box-title"><a href="shop-details.html">{{ $product->title}}</a></h3>
                        <p class="menu-card_text">Rs. {{ $product->price  ?? ''}}</p>
                        <a href="{{ route('productSingle',$product->slug)}}" class="as-btn">BROWSE MENU</a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            {{-- <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="menu-card">
                    <div class="menu-card_img">
                        <img src="{{ asset('frontendFiles/assets/img/menu/menu_1_2.png')}}" alt="Menu Image">
                    </div>
                    <div class="menu-card_content">
                        <h3 class="menu-card_title box-title"><a href="shop-details.html">Agrim Maida</a></h3>
                        <p class="menu-card_text">Agrim Maida: Essential for making delicious Nepali breads and dishes.</p>
                        <a href="{{ route('recipes') }}" class="as-btn">BROWSE MENU</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="menu-card">
                    <div class="menu-card_img">
                        <img src="{{ asset('frontendFiles/assets/img/menu/menu_1_2.png')}}" alt="Menu Image">
                    </div>
                    <div class="menu-card_content">
                        <h3 class="menu-card_title box-title"><a href="shop-details.html">Agrim Suji</a></h3>
                        <p class="menu-card_text">Agrim Suji is a high-quality semolina flour for cooking that enhances texture and flavor.</p>
                        <a href="{{ route('recipes') }}" class="as-btn">BROWSE MENU</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="menu-card">
                    <div class="menu-card_img">
                        <img src="{{asset('frontendFiles/assets/img/menu/menu_1_2.png')}}" alt="Menu Image">
                    </div>
                    <div class="menu-card_content">
                        <h3 class="menu-card_title box-title"><a href="shop-details.html">Agrim Zeera Masino</a></h3>
                        <p class="menu-card_text">Agrim Zeera Masino Rice is a premium quality rice that adds flavor and nutrition to meals.</p>
                        <a href="{{ route('recipes') }}" class="as-btn">BROWSE MENU</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="menu-card">
                    <div class="menu-card_img">
                        <img src="{{ asset('frontendFiles/assets/img/menu/menu_1_5.png')}}" alt="Menu Image">
                    </div>
                    <div class="menu-card_content">
                        <h3 class="menu-card_title box-title"><a href="shop-details.html">Agrim Sonam Rice</a></h3>
                        <p class="menu-card_text">Agrim Jeera Masino Rice is a special variety of rice grown in Far West Tarai, Nepal.</p>
                        <a href="{{ route('recipes') }}" class="as-btn">BROWSE MENU</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!--==============================Feature Area  ==============================-->
<div class="space bg-title" data-bg-src="{{ asset('frontendFiles/assets/img/bg/why_bg_1.png')}}">
    <div class="container">
        <div class="row flex-row-reverse justify-content-end">
            <div class="col-lg-7 ps-xxl-5">
                <div class="img-box1">
                    <div class="img1">
                        <img src="{{asset('frontendFiles/assets/img/normal/why_1_1.png')}}" alt="About">
                    </div>
                    <div class="shape1">
                        <img src="{{asset('frontendFiles/assets/img/normal/why_1_2.png')}}" alt="About">
                    </div>
                    <div class="discount_style1" data-bg-src="{{ asset('frontendFiles/assets/img/shape/discount_bg_1.svg')}}">
                        <h4 class="percentage">
                            40
                            <span class="small-text">% <br> <span class="text">Off</span></span>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mt-35 mt-lg-0">
                <div class="title-area mb-30">
                    <span class="sub-title">
                        <img class="icon" src="{{asset('frontendFiles/assets/img/icon/flour.png')}}" alt="icon">
                        Why Choose Agrim
                    </span>
                    <h2 class="sec-title text-white">We prioritizes consumer health, taste and <span class="font-style text-theme">preferences.</span></h2>
                </div>
                <p class="mt-n2 mb-25 text-white">At Hulas Khadya Udyog (P) Ltd., our vision is to become the leading provider of premium quality grains and flour products in the region. We are dedicated to consistently producing and delivering the highest quality products to our customers, using only the finest ingredients and modern production techniques. We believe in the importance of sustainable and ethical business practices, and strive to minimize our environmental impact while supporting local communities. Our vision is to be recognized as the go-to brand for consumers seeking healthy and flavorful ingredients for their meals.</p>
                <div class="feature-box-wrap">
                    <div class="feature-box">
                        
                            
                        </div>
                        <div>
                            <h3 class="feature-box_title box-title"></h3>
                            <p class="feature-box_text"></p>
                        </div>
                    </div>
                    <div class="feature-box">
                        
                            
                        </div>
                        <div>
                            <h3 class="feature-box_title box-title"></h3>
                            <p class="feature-box_text"></p>
                        </div>
                    </div>
                </div>
                <div class="btn-wrap">
                    <a href="{{ route('products') }}" class="as-btn style3">BROWSE PRODUCTS</a>
                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="video-btn popup-video">
                        <div class="play-btn"><i class="fas fa-play"></i></div>
                        <span class="btn-text">Watch CSR Project</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================Product Area  ==============================-->
{{-- <section class="space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">
                <img class="icon" src="{{ asset('frontendFiles/assets/img/icon/wheat.png')}}" alt="icon">
                Shop Our Products
            </span>
            <h2 class="sec-title">Our Popular Agrim <span class="font-style text-theme">Brands</span></h2>
            <p class="sec-text ms-auto me-auto">Whether you are looking for breakfast cereals, snacks, or meals, Agrim Foods has a product that will suit your needs and preferences.</p>
          
        </div>
        <div class="row gy-40 filter-active">

            <div class="col-xl-3 col-lg-4 col-sm-6 filter-item cat1 cat3 cat4 cat5">
                <div class="as-product ">
                    <div class="product-img">
                        <img src="{{ asset('frontendFiles/assets/img/menu/menu_1_1.png')}}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <a href="{{ route('products') }}" class="category">Agrim Flour</a>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                <span style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                            </div>
                            (4.00)
                        </div>
                        <h3 class="product-title"><a href="shop-details.html">Agrim Chakki Atta</a></h3>
                        <span class="price">$80.85<del>$99.99</del></span>
                        <div class="actions">
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fal fa-eye"></i></a>
                            <a href="cart.html" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                            <a href="wishlist.html" class="icon-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 filter-item cat3 cat2">
                <div class="as-product ">
                    <div class="product-img">
                        <img src="{{ asset('frontendFiles/assets/img/menu/menu_1_2.png')}}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <a href="{{ route('products') }}" class="category">Agrim Flour</a>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                <span style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                            </div>
                            (4.00)
                        </div>
                        <h3 class="product-title"><a href="shop-details.html">Agrim Maida</a></h3>
                        <span class="price">$90.85</span>
                        <div class="actions">
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fal fa-eye"></i></a>
                            <a href="cart.html" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                            <a href="wishlist.html" class="icon-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 filter-item cat2 cat5">
                <div class="as-product ">
                    <div class="product-img">
                        <img src="{{ asset('frontendFiles/assets/img/menu/menu_1_2.png')}}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <a href="{{ route('products') }}" class="category">Agrim Poha</a>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                <span style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                            </div>
                            (4.00)
                        </div>
                        <h3 class="product-title"><a href="shop-details.html">Agrim Suji</a></h3>
                        <span class="price">$60.85</span>
                        <div class="actions">
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fal fa-eye"></i></a>
                            <a href="cart.html" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                            <a href="wishlist.html" class="icon-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 filter-item cat1 cat2">
                <div class="as-product ">
                    <div class="product-img">
                        <img src="{{ asset('frontendFiles/assets/img/menu/menu_1_2.png')}}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <a href="{{ route('products') }}" class="category">Agrim Rice</a>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                <span style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                            </div>
                            (4.00)
                        </div>
                        <h3 class="product-title"><a href="shop-details.html">Agrim Zeera Masino</a></h3>
                        <span class="price">$70.85</span>
                        <div class="actions">
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fal fa-eye"></i></a>
                            <a href="cart.html" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                            <a href="wishlist.html" class="icon-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 filter-item cat4 cat1">
                <div class="as-product ">
                    <div class="product-img">
                        <img src="{{ asset('frontendFiles/assets/img/menu/menu_1_5.png')}}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <a href="{{ route('products') }}" class="category">Agrim Rice</a>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                <span style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                            </div>
                            (4.00)
                        </div>
                        <h3 class="product-title"><a href="shop-details.html">Sonam Rice 5kg</a></h3>
                        <span class="price">$20.85</span>
                        <div class="actions">
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fal fa-eye"></i></a>
                            <a href="cart.html" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                            <a href="wishlist.html" class="icon-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 filter-item cat2 cat3 cat5">
                <div class="as-product ">
                    <div class="product-img">
                        <img src="{{ asset('frontendFiles/assets/img/menu/menu_1_6.png')}}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <a href="{{ route('products') }}" class="category">Agrim Rice</a>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                <span style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                            </div>
                            (4.00)
                        </div>
                        <h3 class="product-title"><a href="shop-details.html">Sonam Rice 25kg</a></h3>
                        <span class="price">$10.85</span>
                        <div class="actions">
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fal fa-eye"></i></a>
                            <a href="cart.html" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                            <a href="wishlist.html" class="icon-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 filter-item cat3 cat4 cat5">
                <div class="as-product ">
                    <div class="product-img">
                        <img src="{{ asset('frontendFiles/assets/img/menu/menu_1_7.png')}}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <a href="{{ route('products') }}" class="category">Agrim Rice</a>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                <span style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                            </div>
                            (4.00)
                        </div>
                        <h3 class="product-title"><a href="shop-details.html">Zeera Masio 25kg</a></h3>
                        <span class="price">$20.85</span>
                        <div class="actions">
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fal fa-eye"></i></a>
                            <a href="cart.html" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                            <a href="wishlist.html" class="icon-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 filter-item cat1 cat4">
                <div class="as-product ">
                    <div class="product-img">
                        <img src="{{ asset('frontendFiles/assets/img/menu/menu_1_8.png')}}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <a href="{{ route('products') }}" class="category">Agrim Rice</a>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                <span style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                            </div>
                            (4.00)
                        </div>
                        <h3 class="product-title"><a href="shop-details.html">Sonam Rice 10kg</a></h3>
                        <span class="price">$12.85</span>
                        <div class="actions">
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fal fa-eye"></i></a>
                            <a href="cart.html" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                            <a href="wishlist.html" class="icon-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="{{ route('products') }}" class="as-btn">View All Products</a>
        </div>
    </div>
    <div class="shape-mockup chili jump-reverse" data-top="0%" data-right="0"><img src="{{ asset('frontendFiles/assets/img/shape/red_chili.png')}}" alt="shape"></div>
    <div class="shape-mockup leaf jump-reverse" data-top="20%" data-left="0"><img src="{{ asset('frontendFiles/assets/img/shape/leaf_1.png')}}" alt="shape"></div>
    <div class="shape-mockup leaf jump" data-bottom="0%" data-right="0"><img src="{{ asset('frontendFiles/assets/img/shape/leaf_2.png')}}" alt="shape"></div>
</section> --}}

<!--==============================Offer Area ==============================-->
{{-- <section class="space position-relative" data-bg-src="{{ asset('frontendFiles/assets/img/bg/offer_banner_1.jpg')}}">
    <div class="container">
        <div class="row gy-30">
            <div class="col-md-1">
                <ul class="discount_counter1 counter-list" data-offer-date="09/09/2023">
                    <li>
                        <div class="day count-number">00</div>
                        <span class="count-name">Days</span>
                    </li>
                    <li>
                        <div class="hour count-number">00</div>
                        <span class="count-name">Hours</span>
                    </li>
                    <li>
                        <div class="minute count-number">00</div>
                        <span class="count-name">Min</span>
                    </li>
                    <li>
                        <div class="seconds count-number">00</div>
                        <span class="count-name">Sec</span>
                    </li>
                </ul>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-9 ps-md-5 offset-xl-1 space-bottom">
                <h2 class="text-white fw-semibold mt-n2">Make a TikTok recipe video <br> win 50,000 cash prize</h2>
                <p class="text-white mb-4">Create a delicious recipe video featuring Agrim Suji on TikTok for a chance to win 50,000 rupees cash. Showcase your culinary skills and creativity, and you could be the lucky winner of this exciting prize. So, grab your phone, start filming and get ready to share your recipe with the world.</p>
                <div class="btn-wrap">
                    <a href="{{ route('products') }}" class="as-btn style6">Join now</a>
                    <h5 class="price_style1"> - <del></del></h5>
                </div>
            </div>
        </div>
        <div class="discount_style2" data-bg-src="{{ asset('frontendFiles/assets/img/shape/discount_bg_2.svg')}}">
            <p class="small-text1">NOW, WIN</p>
            <h3 class="percentage">50K</h3>
            <p class="small-text2">CASH PRIZE</p>
        </div>
    </div>
</section> --}}
<!--==============================About Area  ==============================-->
<div class="space-top">
    <div class="container">
        <div class="download-area bg-smoke2" data-bg-src="{{ asset('frontendFiles/assets/img/bg/download_bg_1.png') }}">
            <div class="row">
                <div class="col-xl-6 col-xxl-5 col-lg-7 col-md-9">
                    <div class="title-area mb-30">
                        <span class="sub-title">
                            <img class="icon" src="{{ asset('frontendFiles/assets/img/icon/wheat.png')}}" alt="icon">
                            Dealership
                        </span>
                        <h2 class="sec-title">Join Us for <span class="font-style text-theme">Dealership</span></h2>
                    </div>
                    <p class="mt-n2 mb-4">We are committed to giving our dealers the most value by providing easy-to-achieve sales targets, which includes the best offers and incentives.</p>
                    <div class="download-btn-wrap">
                        <a target="_blank" href="{{ route('contact') }}/#contactFormSec" class="download-btn">
                            <i class="fa-brands fa-google-play"></i>
                            <div class="text-group">
                                
                                <h6 class="big-text">Get In Touch</h6>
                            </div>
                        </a>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup leaf jump" data-top="10%" data-right="0"><img src="{{ asset('frontendFiles/assets/img/shape/leaf_1.png')}}" alt="shape"></div>
    <div class="shape-mockup leaf jump-reverse" data-top="30%" data-left="2%"><img src="{{ asset('frontendFiles/assets/img/shape/chips_1.png')}}" alt="shape"></div>
</div>
<!--==============================Team Area  ==============================-->
<section class="space-top">
    <div class="container" data-pos-space="#testiSec1" data-sec-space="margin-bottom" data-margin-bottom="170px">
        <div class="title-area text-center">
            <span class="sub-title">
                <img class="icon" src="{{ asset('frontendFiles/assets/img/icon/chef.png')}}" alt="icon">
                Team Members
            </span>
            <h2 class="sec-title">Meet Our Agrim <span class="font-style text-theme">Team</span></h2>
            <p class="sec-text ms-auto me-auto">A team of experienced professionals manage the factory using computerized systems for efficient and effective operations.</p>
        </div>
        <div class="row slider-shadow number-dots as-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1" data-dots="true" data-xl-dots="true" data-ml-dots="true" data-lg-dots="true" data-md-dots="true">
            <!-- Single Item -->
            @if(isset($teams) && count($teams) > 0)
                @foreach ($teams as $team)
                <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="team-card">
                        <div class="team-img">
                            <img src="{{ getOrginalUrl($team->image) ?? asset('frontendFiles/assets/img/team/team_1_1.jpg')}}" alt="Team">
                        </div>
                        <div class="team-content">
                            <h3 class="team-title box-title">
                                {{ $team->name ?? ''}}
                            </h3>
                            <span class="team-desig">{{ $team->designation }}</span>
                            <div class="as-social">
                                
                                <a target="_blank" href="{{ $team->linkedin_link ?? '#'}}"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
<!--==============================Testimonial Area ==============================-->
<section class="space bg-smoke2" id="testiSec1" data-bg-src="{{ asset('frontendFiles/assets/img/bg/testi_bg_1.png')}}">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-center align-items-end">
            <div class="col-lg-9 mb-n2 mb-lg-0">
                <div class="title-area text-center text-lg-start">
                    <span class="sub-title">
                        <img class="icon" src="{{ asset('frontendFiles/assets/img/icon/speaker.png')}}" alt="icon">
                        Testimonials
                    </span>
                    <h2 class="sec-title">Our Customer <span class="font-style text-theme">Feedbacks</span></h2>
                    <p class="sec-text ms-auto me-auto ms-lg-0">A majority of our customers are satisfied with our products and continue to support us by providing valuable feedback for improvement.</p>
                </div>
            </div>
            <div class="col-auto">
                <div class="sec-btn">
                    <div class="icon-box">
                        <button data-slick-prev="#testiSlide1" class="slick-arrow default"><i class="far fa-arrow-left"></i></button>
                        <button data-slick-next="#testiSlide1" class="slick-arrow default"><i class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div> <!-- / Title row -->
        <div class="row slider-shadow as-carousel" id="testiSlide1" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="1">
            @if (isset($testimonials) && count($testimonials) > 0)
            @foreach ($testimonials as $testimonial )
                <div class="col-xl-4 col-lg-6">
                    <div class="testi-box">
                        <div class="testi-box_icon">
                            <img src="{{ asset('frontendFiles/assets/img/icon/quote_left.svg')}}" alt="quote">
                        </div>
                        <p class="testi-box_text">{!! $testimonial->description !!}</p>
                        <div class="testi-box_review">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="testi-box_profile">
                            <div class="testi-box_avater">
                                <img src="{{ getOrginalUrl($testimonial->image_id)}}" alt="Avater">
                            </div>
                            <div class="media-body">
                                <h3 class="testi-box_name">{{ $testimonial->name }}</h3>
                                <span class="testi-box_desig">{{ $testimonial->address ?? $testimonial->company_name }}</span>
                            </div>
                        </div>
                        <div class="testi-box_img">
                            <img src="{{getOrginalUrl($testimonial->company_logo) ?? asset('frontendFiles/assets/img/testimonial/review_1_1.png') }}" alt="Reveiw Image">
                        </div>
                    </div>
                </div>
            @endforeach

            @endif
        </div>
    </div>
    <div class="shape-mockup chili jump-reverse" data-top="0%" data-right="0"><img src="{{ asset('frontendFiles/assets/img/shape/red_chili.png')}}" alt="shape"></div>
    <div class="shape-mockup leaf jump-reverse" data-top="0%" data-left="0"><img src="{{ asset('frontendFiles/assets/img/shape/leaf_1.png')}}" alt="shape"></div>
    <div class="shape-mockup leaf jump" data-bottom="0%" data-right="0"><img src="{{ asset('frontendFiles/assets/img/shape/leaf_2.png')}}" alt="shape"></div>
    <div class="shape-mockup leaf jump" data-bottom="3%" data-left="2%"><img src="{{ asset('frontendFiles/assets/img/shape/Burger_1.png') }}" alt="shape"></div>
</section>
<!--==============================Blog Area==============================-->
<section class="space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">
                <img class="icon" src="{{ asset('frontendFiles/assets/img/icon/wheat.png')}}" alt="icon">
                Recipes
            </span>
            <h2 class="sec-title">Our Latest Foods <span class="font-style text-theme">Recipes</span></h2>
            <p class="sec-text ms-auto me-auto">Agrim Foods encourages recipe-making, as it allows individuals to share their culinary skills and knowledge, as well as discover new and exciting dishes.</p>
        </div>
        <div class="row slider-shadow as-carousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
            @if (isset($recipes) && count($recipes)>0)
            @foreach ($recipes as $recipe)
            <div class="col-md-6 col-xl-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{ getOrginalUrl($recipe->image_id)}}" alt="{{ $recipe->title }}">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                        
                            <a href="{{ route('recipeSingle',$recipe->slug) }}"><i class="fa-light fa-calendar-days"></i>{{ $recipe->created_at->format('d M Y')}}</a>
                            <br>
                            @if($recipe->products->count() > 0)
                                <i class="fa-regular fa-tag pr-1 text-danger"></i>
                                @foreach ($recipe->products as $product)
                                    <a href="{{ route('recipeSingle',$product->slug) }}" class="ml-2"> {{ $product->title}}</a>
                                @endforeach
                            @endif
                        </div>
                        <h3 class="blog-title"><a href="{{ route('recipeSingle',$recipe->slug) }}">{{ $recipe->title }}</a></h3>
                        <div class="blog-bottom">
                            <a href="{{ route('recipeSingle',$recipe->slug) }}" class="line-btn">Read More</a>
                           
                        </div>
                    </div>
                </div>
            </div>
           
            @endforeach
        @endif
            
            
            {{-- <div class="col-md-6 col-xl-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{ asset('frontendFiles/assets/img/blog/blog_1_1.jpg')}}" alt="blog image">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fa-regular fa-user"></i>By Pizzer</a>
                            <a href="blog.html"><i class="fa-light fa-calendar-days"></i>15 July, 2022</a>
                            <a href="blog.html"><i class="fa-regular fa-tag"></i>Suji recipes</a>
                        </div>
                        <h3 class="blog-title"><a href="blog-details.html">Here is how you make Kesar Pulau from Agrim Suji</a></h3>
                        <div class="blog-bottom">
                            <a href="blog-details.html" class="line-btn">Read More</a>
                            <a href="blog-details.html" class="comment"><i class="fa-regular fa-comments"></i>3 Comments</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{ asset('frontendFiles/assets/img/blog/blog_1_2.jpg')}}" alt="blog image">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fa-regular fa-user"></i>By Pizzer</a>
                            <a href="blog.html"><i class="fa-light fa-calendar-days"></i>16 July, 2022</a>
                            <a href="blog.html"><i class="fa-regular fa-tag"></i>Chiura recipes</a>
                        </div>
                        <h3 class="blog-title"><a href="blog-details.html">Making of button chiura from Agrim chiura</a></h3>
                        <div class="blog-bottom">
                            <a href="blog-details.html" class="line-btn">Read More</a>
                            <a href="blog-details.html" class="comment"><i class="fa-regular fa-comments"></i>3 Comments</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{ asset('frontendFiles/assets/img/blog/blog_1_3.jpg')}}" alt="blog image">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fa-regular fa-user"></i>By Pizzer</a>
                            <a href="blog.html"><i class="fa-light fa-calendar-days"></i>17 July, 2022</a>
                            <a href="blog.html"><i class="fa-regular fa-tag"></i>Maida recipes</a>
                        </div>
                        <h3 class="blog-title"><a href="blog-details.html">Innovative Hot Chessy raw Pasta Make Creator.</a></h3>
                        <div class="blog-bottom">
                            <a href="blog-details.html" class="line-btn">Read More</a>
                            <a href="blog-details.html" class="comment"><i class="fa-regular fa-comments"></i>3 Comments</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{ asset('frontendFiles/assets/img/blog/blog_1_4.jpg')}}" alt="blog image">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fa-regular fa-user"></i>By Pizzer</a>
                            <a href="blog.html"><i class="fa-light fa-calendar-days"></i>21 July, 2022</a>
                            <a href="blog.html"><i class="fa-regular fa-tag"></i>Maida recipes</a>
                        </div>
                        <h3 class="blog-title"><a href="blog-details.html">Best Hot Chessy raw In Pizza Makeing Trick.</a></h3>
                        <div class="blog-bottom">
                            <a href="blog-details.html" class="line-btn">Read More</a>
                            <a href="blog-details.html" class="comment"><i class="fa-regular fa-comments"></i>3 Comments</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="shape-mockup leaf jump-reverse" data-bottom="7%" data-left="0"><img src="{{ asset('frontendFiles/assets/img/shape/leaf_1.png')}}" alt="shape"></div>
    <div class="shape-mockup leaf jump" data-bottom="20%" data-right="0"><img src="{{ asset('frontendFiles/assets/img/shape/chicken_1.png')}}" alt="shape"></div>
</section>











{{-- <div class="d-none d-md-block">
    <div class="ls-wp-container fitvidsignore hero-2 as-hero-carousel" style="width:1920px;height:800px;margin:0 auto;margin-bottom: 0px;">
        @if (isset($banners) && count($banners) > 0)
                @foreach ( $banners as $banner )
                  
                    <div class="ls-slide" data-ls="duration:6000; transition2d:5,114; kenburnsscale:1.2;">
                        <img width="1920" height="800" src="{{ $banner->image ?? asset('frontendFiles/{{asset('frontendFiles/assets/img/hero/hero_bg_1_1.jpg')}}') }}" class="ls-bg" alt="bg">
                    
                      
                        @php
                            $side_banner = getPostFieldData($banner,'sub-banner-image');
                            
                        @endphp
                          


                           
                           
                            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik; line-height:80px; top:222px; left:300px; color:#ffffff; font-size:70px; white-space:normal; width:600px !important; " class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                                {{ $banner->title ?? ''}}  <span class="font-style text-theme2"> {{ $banner->sub_title}}</span>
                            </h1>
                          
                    </div>
                @endforeach
        @endif
        <!-- Slide 1-->



      
    </div>
</div> --}}

    <!--==============================Feature Area=============================-->
    {{-- <section class="space">
        <div class="container">
            <div class="row gy-30 justify-content-center">
                <div class="col-md-4 col-sm-6 feature-card-wrap">
                    <div class="feature-card">
                        <div class="feature-card_icon">
                            <img src="{{ asset('frontendFiles/assets/img/icon/feature_1_1.svg')}}" alt="icon">
                        </div>
                        <div>
                            <h3 class="feature-card_title">स्वस्थ</h3>
                            <p class="feature-card_text">Nourish your body with the goodness of Agrim food.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 feature-card-wrap">
                    <div class="feature-card">
                        <div class="feature-card_icon">
                            <img src="{{ asset('frontendFiles/assets/img/icon/feature_1_2.svg') }}" alt="icon">
                        </div>
                        <div>
                            <h3 class="feature-card_title">स्वादिष्ट</h3>
                            <p class="feature-card_text">Savor the taste of freshness in every bite of Agrim food.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 feature-card-wrap">
                    <div class="feature-card">
                        <div class="feature-card_icon">
                            <img src="{{ asset('frontendFiles/assets/img/icon/feature_1_3.svg') }}" alt="icon">
                        </div>
                        <div>
                            <h3 class="feature-card_title"> सन्तुष्टि</h3>
                            <p class="feature-card_text">Mansikatils orchestrate integrated schema for quickly Harbest.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!--==============================About Area==============================-->
    {{-- <div class="space-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-xxl-7 pe-xxl-5">
                    <div class="text-end">
                        <img src="{{ returnSiteSetting('about_us_image') ?? asset('frontendFiles/assets/img/normal/about_1_1.png')}}" alt="About">
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-5 col-lg-9 mt-35 mt-xl-0">
                    <div class="title-area mb-30">
                        <span class="sub-title">
                          
                            About Us
                        </span>
                        <h2 class="sec-title">Real Delicious Food Straight To <span class="font-style text-theme">Your Table</span></h2>
                    </div>
                    <p class="mt-n2 mb-4">
                        {!! returnSiteSetting('site_Description') !!}
                    </p>
                    <div class="checklist-wrap">
                        <div class="as-video">
                            <img src="{{asset('frontendFiles/assets/img/normal/about_1_2.jpg')}}" alt="video">
                            <a href="https://youtu.be/ETUVJILZJWM" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="checklist">
                            <ul>
                                <li>Delicious & Healthy Foods</li>
                                <li>Taste of freshness</li>
                                <li>Authentic Nepalese flavor</li>
                                <li>Made By Fresh Ingredients</li>
                                <li>Diverse range of products</li>
                            </ul>
                        </div>
                    </div>
                
                
                    <div class="btn-wrap">
                        <a href="{{ route('aboutus') }}" class="as-btn">DISCOVER MORE</a>
                    </div>
                </div>
            </div>
        </div>
      
    </div> --}}

    <!--==============================Product Area ==============================-->
    {{-- <section class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">
                   
                    Popular Products
                </span>
                <h2 class="sec-title">Our Popular Products <span class="font-style text-theme">Foods</span></h2>
                <p class="sec-text ms-auto me-auto">{!! returnSiteSetting('product_description') !!}</p>
               
            </div>
            <div class="row gy-40 filter-active">
                @if (isset($products) && count($products)>0)
                    @foreach ($products as $product)
                        <div class="col-xl-3 col-lg-4 col-sm-6 filter-item cat1 cat3 cat4 cat5">
                            <div class="as-product ">
                                <div class="product-img">
                                    <img src="{{ getOrginalUrl($product->feature_image)}}" alt="{{ $product->title }}">
                                </div>
                                <div class="product-content mt-1">
                                    <a href="#" class="category mt-1">{{ $product->category->title ?? ''}}</a>
                                   
                                    <h6><a href="{{ route('productSingle',$product->slug) }}">{{ $product->title ?? '' }}</a></h6>
                                    <span class="price">Rs. {{ $product->price }}
                                       
                                    </span>
                                    <div class="actions">
                                        <a href="{{ route('productSingle',$product->slug) }}" class="icon-btn "><i class="fal fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            
            <div class="text-center mt-5">
                <a href="{{ route('products') }}" class="as-btn">View All Products</a>
            </div>
        </div>
        
    </section> --}}

    <!--==============================Testimonial Area==============================-->
    {{-- <section class="space bg-smoke2" id="testimonial" >
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-end">
                <div class="col-lg-9 mb-n2 mb-lg-0">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title">
                            Testimonials
                        </span>
                        <h2 class="sec-title">Our Customer <span class="font-style text-theme">Feedbacks</span></h2>
                       
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slick-prev="#testiSlide1" class="slick-arrow default"><i class="far fa-arrow-left"></i></button>
                            <button data-slick-next="#testiSlide1" class="slick-arrow default"><i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row slider-shadow as-carousel" id="testiSlide1" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="1">
               
                @if (isset($testimonials) && count($testimonials) > 0)
                    @foreach ($testimonials as $testimonial )
                    <div class="col-xl-4 col-lg-6">
                        <div class="testi-box">
                            <div class="testi-box_icon">
                                <img src="{{ asset('frontendFiles/{{ asset('frontendFiles/assets/img/icon/quote_left.svg')}}') }}" alt="quote">
                            </div>
                            <p class="testi-box_text">{!! $testimonial->description !!}</p>
                        
                            <div class="testi-box_profile">
                                <div class="testi-box_avater">
                                    <img src="{{ getOrginalUrl($testimonial->image_id)}}" alt="Avater">
                                </div>
                                <div class="media-body">
                                    <h3 class="testi-box_name">{{ $testimonial->name }}</h3>
                                   
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    @endforeach
             
               @endif
               
            </div>
        </div>
       
    </section> --}}

    <!--============================== Recipe Area ==============================-->
    {{-- <section class="space bg-smoke2">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">
                    Our Recipes
                </span>
                <h2 class="sec-title">Browse Our <span class="font-style text-theme">Recipes</span></h2>
                <p class="sec-text ms-auto me-auto">{!! returnSiteSetting('product_description') !!}</p>
            </div>
            <div class="row as-carousel slider-shadow number-dots" data-slide-show="3" data-lg-slide-show="3" data-md-slide-show="3" data-sm-slide-show="2" data-dots="true" data-xl-dots="true" data-ml-dots="true" data-lg-dots="true" data-md-dots="true">

                @if (isset($recpies) && count($recpies)>0)
                    @foreach ($recpies as $recpie)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="menu-card">
                            <div class="menu-card_img">
                                <img src="{{ getOrginalUrl($recpie->image_id)}}" alt="{{ $recpie->title }}">
                            </div>
                            <div class="menu-card_content">
                                <h6><a href="shop-details.html">{{ $recpie->title }}</a></h6>
                                <p class="menu-card_text">{{ $recpie->title}}</p>
                                <a href="{{ route('productSingle',$recpie->slug) }}" class="as-btn">BROWSE RECPIE</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            
            </div>
        </div>
    </section> --}}
@endsection

@push('scripts')

@endpush
