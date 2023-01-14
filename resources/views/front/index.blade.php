@extends('front.layouts.master')

@section('pageTitle', 'Home | ' . getSiteSetting('site_title'))

{{-- 
@section('banner')
    @include('front.layouts.banner')
@endsection --}}

@section('content')

<div class="d-none d-md-block">
    <div class="ls-wp-container fitvidsignore hero-2 as-hero-carousel" style="width:1920px;height:800px;margin:0 auto;margin-bottom: 0px;">
        @if (isset($banners) && count($banners) > 0)
                @foreach ( $banners as $banner )
                    {{-- @dd($banner) --}}
                    <div class="ls-slide" data-ls="duration:6000; transition2d:5,114; kenburnsscale:1.2;">
                        <img width="1920" height="800" src="{{ $banner->image ?? asset('frontendFiles/assets/img/hero/hero_bg_1_1.jpg') }}" class="ls-bg" alt="bg">
                    
                        {{-- <img width="133" height="168" src="{{ asset('frontendFiles/assets/img/hero/hero_shape_4.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat;" data-ls="offsetyin:-300; durationin:1500; delayin:80; rotatein:40deg; bgcolorin:transparent; colorin:transparent; durationout:5000; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;"> --}}
                        @php
                            $side_banner = getPostFieldData($banner,'sub-banner-image');
                            
                        @endphp
                        <img width="943" height="763" src="{{ ($side_banner) ?? asset('frontendFiles/assets/img/hero/hero_shape_3.png')}}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:19px; left:0px;" data-ls="offsetxin:-600; durationin:1500; delayin:80; bgcolorin:transparent; colorin:transparent; position:fixed;">
                     
                            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; 
                                    font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; 
                                    font-family:Rubik; line-height:80px; top:222px; left:340px; color:#ffffff; font-size:40px; 
                                        white-space:normal; width:500px !important; height:40px !important" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                                {{-- WE SERVE THE TASTE, AS YOU LIKE <span class="font-style text-theme2"> FOODS</span> --}} 
                                {{ $banner->title ?? ''}}
                            </h1>
                            
                            <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; 
                                        letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Rubik;
                                         line-height:110px; top:160px; left:72px; color:#ffffff; font-size:100px; white-space:normal;" 
                                         class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-120; durationout:800; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                                {{-- WE SERVE THE  TASTE, AS YOU LIKE <span class="font-style text-theme2"> FOODS</span> --}}
                                {{ $banner->title ?? ''}}
                            </h1>
                        {{-- <ls-layer style='text-align:center; font-weight:700; cursor:pointer; width:30px; height:30px; left:110px; top:345px; line-height:32px; background-size:contain; background-position:50% 50%; font-size:12px; color:#ffffff; background-image:url("assets/img/hero/dot_bg.png");' class="ls-l ls-hide-tablet ls-hide-phone ls-button-layer" data-ls="durationin:400; position:fixed;">
                            {{ $loop->iteration }}
                        </ls-layer>

                      
                      
                         <img width="2" height="100" src="{{ asset('frontendFiles/assets/img/hero/dot_line.png')}}" class="ls-l ls-hide-tablet ls-hide-phone ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:124px; top:236px;" data-ls="static:forever; position:fixed;">
                        <img width="2" height="100" src="{{ asset('frontendFiles/assets/img/hero/dot_line_2.png') }}" class="ls-l ls-hide-tablet ls-hide-phone ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:124px; top:464px;" data-ls="static:forever; position:fixed;"> --}}
                    </div>
                @endforeach
        @endif
        <!-- Slide 1-->



      
    </div>
</div>

    <!--==============================Feature Area=============================-->
    <section class="space">
        <div class="container">
            <div class="row gy-30 justify-content-center">
                <div class="col-md-4 col-sm-6 feature-card-wrap">
                    <div class="feature-card">
                        <div class="feature-card_icon">
                            <img src="assets/img/icon/feature_1_1.svg" alt="icon">
                        </div>
                        <div>
                            <h3 class="feature-card_title">Discount Voucher</h3>
                            <p class="feature-card_text">Competently orchestrate integrated schema for quickly create.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 feature-card-wrap">
                    <div class="feature-card">
                        <div class="feature-card_icon">
                            <img src="assets/img/icon/feature_1_2.svg" alt="icon">
                        </div>
                        <div>
                            <h3 class="feature-card_title">Fresh Healthy Foods</h3>
                            <p class="feature-card_text">Quantimanes orchestrate integrated schema for quickly Taken.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 feature-card-wrap">
                    <div class="feature-card">
                        <div class="feature-card_icon">
                            <img src="assets/img/icon/feature_1_3.svg" alt="icon">
                        </div>
                        <div>
                            <h3 class="feature-card_title">Fast Serve On Table</h3>
                            <p class="feature-card_text">Mansikatils orchestrate integrated schema for quickly Harbest.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================About Area==============================-->
    <div class="space-bottom">
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
                            {{-- <img class="icon" src="{{ asset('frontenFiles/assets/img/icon/title_icon.svg')}}" alt="icon"> --}}
                            About Us
                        </span>
                        <h2 class="sec-title">Real Delicious Food Straight To <span class="font-style text-theme">Your Table</span></h2>
                    </div>
                    <p class="mt-n2 mb-4">
                        {!! returnSiteSetting('site_Description') !!}
                    </p>
                
                
                    <div class="btn-wrap">
                        <a href="{{ route('aboutus') }}" class="as-btn">DISCOVER MORE</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="shape-mockup about-shape1" data-top="0%" data-left="0"><img src="assets/img/shape/bg_shape_1.png" alt="shapes"></div> --}}
    </div>

    <!--==============================Product Area ==============================-->
    <section class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">
                    {{-- <img class="icon" src="assets/img/icon/title_icon.svg" alt="icon"> --}}
                    Popular Products
                </span>
                <h2 class="sec-title">Our Popular Products <span class="font-style text-theme">Foods</span></h2>
                <p class="sec-text ms-auto me-auto">{!! returnSiteSetting('product_description') !!}</p>
                {{-- <div class="tab-menu1 filter-menu-active">
                    <button data-filter="*" class="active" type="button">All Menus</button>
                    <button data-filter=".cat1" type="button">burger</button>
                    <button data-filter=".cat2" type="button">chicken</button>
                    <button data-filter=".cat3" type="button">pizza</button>
                    <button data-filter=".cat4" type="button">sandwich</button>
                    <button data-filter=".cat5" type="button">desserts</button>
                </div> --}}
            </div>
            <div class="row gy-40 filter-active">
                @if (isset($products) && count($products)>0)
                    @foreach ($products as $product)
                        <div class="col-xl-3 col-lg-4 col-sm-6 filter-item cat1 cat3 cat4 cat5">
                            <div class="as-product ">
                                <div class="product-img">
                                    <img src="{{ getOrginalUrl($product->feature_image)}}" alt="{{ $product->title }}">
                                </div>
                                <div class="product-content">
                                    <a href="shop.html" class="category">{{ $product->category->title ?? ''}}</a>
                                
                                    <h6><a href="{{ route('productSingle',$product->slug) }}">{{ $product->title ?? '' }}</a></h6>
                                
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
        {{-- <div class="shape-mockup chili jump-reverse" data-top="0%" data-right="0"><img src="{{ asset('frontendFiles/assets/img/shape/red_chili.png') }}" alt="shape"></div>
        <div class="shape-mockup leaf jump-reverse" data-top="20%" data-left="0"><img src="{{asset('frontendFiles/assets/img/shape/leaf_1.png')}}" alt="shape"></div> --}}
        {{-- <div class="shape-mockup leaf jump" data-bottom="0%" data-right="0"><img src="assets/img/shape/leaf_2.png" alt="shape"></div> --}}
    </section>

    <!--==============================Testimonial Area==============================-->
    <section class="space bg-smoke2" id="testiSec1" >
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-end">
                <div class="col-lg-9 mb-n2 mb-lg-0">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title">
                            Testimonials
                        </span>
                        <h2 class="sec-title">Our Customer <span class="font-style text-theme">Feedbacks</span></h2>
                        {{-- <p class="sec-text ms-auto me-auto ms-lg-0">Objectively pontificate quality models before intuitive information. Dramatically recaptiualize multifunctional materials.</p> --}}
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
                                <img src="{{ asset('frontendFiles/assets/img/icon/quote_left.svg') }}" alt="quote">
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
                            {{-- <div class="testi-box_img">
                                <img src="assets/img/testimonial/review_1_1.png" alt="Reveiw Image">
                            </div> --}}
                        </div>
                    </div>
                    @endforeach
             
               @endif
               
                

                {{-- <div class="col-xl-4 col-lg-6">
                    <div class="testi-box">
                        <div class="testi-box_icon">
                            <img src="assets/img/icon/quote_left.svg" alt="quote">
                        </div>
                        <p class="testi-box_text">“Synergistically strategize interdependent ROI through distinctive markets. Credibly restore one-to-one through.”</p>
                        <div class="testi-box_review">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="testi-box_profile">
                            <div class="testi-box_avater">
                                <img src="assets/img/testimonial/testi_1_2.jpg" alt="Avater">
                            </div>
                            <div class="media-body">
                                <h3 class="testi-box_name">Michel Clark</h3>
                                <span class="testi-box_desig">DYM, USA</span>
                            </div>
                        </div>
                        <div class="testi-box_img">
                            <img src="assets/img/testimonial/review_1_2.png" alt="Reveiw Image">
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6">
                    <div class="testi-box">
                        <div class="testi-box_icon">
                            <img src="assets/img/icon/quote_left.svg" alt="quote">
                        </div>
                        <p class="testi-box_text">“Synergistically strategize interdependent ROI through distinctive markets. Credibly restore one-to-one through.”</p>
                        <div class="testi-box_review">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="testi-box_profile">
                            <div class="testi-box_avater">
                                <img src="assets/img/testimonial/testi_1_3.jpg" alt="Avater">
                            </div>
                            <div class="media-body">
                                <h3 class="testi-box_name">Rosse Mons</h3>
                                <span class="testi-box_desig">DO, USA</span>
                            </div>
                        </div>
                        <div class="testi-box_img">
                            <img src="assets/img/testimonial/review_1_3.png" alt="Reveiw Image">
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6">
                    <div class="testi-box">
                        <div class="testi-box_icon">
                            <img src="assets/img/icon/quote_left.svg" alt="quote">
                        </div>
                        <p class="testi-box_text">“Synergistically strategize interdependent ROI through distinctive markets. Credibly restore one-to-one through.”</p>
                        <div class="testi-box_review">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="testi-box_profile">
                            <div class="testi-box_avater">
                                <img src="assets/img/testimonial/testi_1_4.jpg" alt="Avater">
                            </div>
                            <div class="media-body">
                                <h3 class="testi-box_name">Naisa Carg</h3>
                                <span class="testi-box_desig">TO, USA</span>
                            </div>
                        </div>
                        <div class="testi-box_img">
                            <img src="assets/img/testimonial/review_1_4.png" alt="Reveiw Image">
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
       
    </section>

    <!--============================== Recipe Area ==============================-->
    <section class="space bg-smoke2">
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
    </section>
@endsection

@push('scripts')

@endpush
