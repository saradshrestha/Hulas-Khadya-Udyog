@extends('front.layouts.master')
@section('pageTitle', 'About Us | ' . getSiteSetting('site_title'))

@push('styles')
@endpush

@section('content')
    <!--==============================Breadcumb============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontendFiles/assets/img/breadcumb/breadcumb-bg.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About <span class="font-style text-theme2">Us</span></h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="space position-relative">
        <div class="about-line" data-bg-src="{{ asset('frontendFiles/assets/img/shape/about_line.png') }}"></div>
        <!--============================== Feature Area==============================-->
        <section class="space-bottom">
            <div class="container">
                <div class="row gy-30 justify-content-center">
                    <div class="col-md-4 col-sm-6 feature-card-wrap">
                        <div class="feature-card">
                            <div class="feature-card_icon">
                                <img src="{{ asset('frontendFiles/assets/img/icon/healthy.png') }}" alt="icon">
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
                                <img src="{{ asset('frontendFiles/assets/img/icon/full.png') }}" alt="icon">
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
                                <p class="feature-card_text">Authentic flavor, Agrim foods, the perfect choice for Nepalese.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="space-lg-top">
            <!--============================== About Area  ==============================-->
            <div class="space-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-xxl-7 pe-xxl-5">
                            <div class="text-end">
                                <img src="{{ asset('frontendFiles/assets/img/normal/about_1_1.png') }}" alt="About">
                            </div>
                        </div>
                        <div class="col-xl-6 col-xxl-5 col-lg-9 mt-35 mt-xl-0">
                            <div class="title-area mb-30">
                                <span class="sub-title">
                                    <img class="icon" src="{{ asset('frontendFiles/assets/img/icon/wheat.png')}}"
                                        alt="icon">
                                    About Us
                                </span>
                                <h2 class="sec-title">Real Delicious Food Straight To <span
                                        class="font-style text-theme">Your Table</span></h2>
                            </div>
                            <p class="mt-n2 mb-4">Hulas Khadya Udyog (P) Ltd. is a renowned FMCG company founded in 1962 by
                                the late Shree Ramlal Golchha. Its brand Agrim has a strong presence in the market due to
                                its wide range of high-quality products, such as beaten rice, Chakki atta, Maida, and
                                various types of rice. The company's state-of-the-art manufacturing plant uses advanced
                                German technology and is staffed by skilled professionals, ensuring products meet
                                international standards. They offer a diverse range of packaging options and are managed by
                                experienced professionals using computerized systems for efficient operations. As the
                                company expands its range of products, it looks forward to a bright future.</p>
                            <div class="">
                                <div class="">
                                    <img src="">
                                    <a href="" class=""><i class=""></i></a>
                                </div>
                                <div class="">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="btn-wrap">

                                <div class="profile-box">
                                    <div class="avater">

                                    </div>
                                    <div class="content">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-mockup about-shape1" data-top="0%" data-left="0"><img
                        src="{{ asset('frontendFiles/assets/img/shape/bg_shape_1.png') }}" alt="shapes"></div>
            </div>
        </div>
        <!--==============================
        About Area
        ==============================-->
        <div class="space-lg-top">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-xl-7 ps-xxl-5">
                        <div class="img-box2 style2">
                            <div class="img1">
                                <img src="{{ asset('frontendFiles/assets/img/normal/about_2_1.png') }}" alt="About">
                            </div>
                            <div class="shape1">
                                <img src="{{ asset('frontendFiles/assets/img/normal/about_2_2.png') }}" alt="About">
                            </div>
                            <div class="discount_style1" data-bg-src="{{ asset('frontendFiles/assets/img/shape/discount_bg_1.svg') }}">
                                <h4 class="percentage">
                                    Agrim
                                    <span class="small-text"><br> <span class="text"></span></span>
                                </h4>
                            </div>
                            <a href="shop.html" class="order-btn"><span class="font-style text-theme">Order</span>Now</a>
                        </div>
                    </div>
                    <div class="col-xl-5 space-top space-xl">
                        <div class="title-area mb-30">
                            <span class="sub-title">
                                <img class="icon" src="{{ asset('frontendFiles/assets/img/icon/wheat.png')}}" alt="icon">
                                Our Vision
                            </span>
                            <h2 class="sec-title">Sustainability and Ethics, <span class="font-style text-theme">at the
                                    heart of our business</span></h2>
                        </div>
                        <p class="mt-n2 mb-20">Hulas Khadya Udyog (P) Ltd. aims to be a leading provider of premium quality
                            grains and flour products in the region. We are committed to producing and delivering
                            high-quality products using finest ingredients and modern techniques. We prioritize sustainable
                            and ethical business practices, minimizing environmental impact and supporting local
                            communities.</p>
                        <p class="mb-4">Our goal is to be the go-to brand for consumers seeking healthy, flavorful
                            ingredients for their meals.</p>
                        <div class="btn-wrap style1">
                            <a href="about.html" class="as-btn">DISCOVER MORE</a>
                            <div class="about-counter1">
                                <h3 class="counter-title"><span class="counter-number">24</span></h3>
                                <div class="media-body">
                                    <p class="counter-info">YEARS OF</p>
                                    <h5 class="counter-text">Experience</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-mockup about-shape3" data-bottom="120px" data-left="0">
                <img src="{{ asset('frontendFiles/assets/img/shape/bg_shape_5.png')}}" alt="shapes"></div>
            <div class="shape-mockup leaf jump" data-top="0%" data-left="5%"><img
                    src="{{ asset('frontendFiles/assets/img/shape/chocolate_1.png')}}" alt="shape"></div>
            <div class="shape-mockup leaf jump-reverse d-none d-xl-block" data-bottom="10%" data-right="5%"><img
                    src="{{ asset('frontendFiles/assets/img/shape/pot_1.png') }}" alt="shape"></div>
        </div>
    </div>

    <!--==============================
        Feature Area
        ==============================-->
    <section class="space bg-title" data-bg-src="{{ asset('frontendFiles/assets/img/bg/feature_bg_2.png')}}">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">
                    <img class="icon" src="{{ asset('frontendFiles/assets/img/icon/wheat.png')}}" alt="icon">
                    Our Brands
                </span>
                <h2 class="sec-title text-white">Our Most Loved <span class="font-style text-theme">Brands</span></h2>
                <p class="sec-text ms-auto me-auto text-white">Agrim Foods is widely regarded as the best brand for tasty,
                    healthy, and preferred foods.</p>
            </div>
            <div class="feature-grid-wrap">
                <div class="feature-grid">
                    <div class="feature-grid_img">
                        <img src="{{ asset('frontendFiles/assets/img/logo.png') }}" alt="Food">
                    </div>
                    <div>
                        <h3 class="feature-grid_title box-title text-white">Agrim Foods</h3>
                        <p class="feature-grid_text text-border">Whether you are looking for breakfast cereals, snacks, or
                            meals, Agrim Foods has a product that will suit your needs and preferences.</p>
                    </div>
                </div>
                <div class="feature-grid">
                    <div class="feature-grid_img">
                        <img src="{{ asset('frontendFiles/assets/img/logo.png') }}" alt="Food">
                    </div>
                    <div>
                        <h3 class="feature-grid_title box-title text-white">Agrim Foods</h3>
                        <p class="feature-grid_text text-border">Whether you are looking for breakfast cereals, snacks, or
                            meals, Agrim Foods has a product that will suit your needs and preferences.</p>
                    </div>
                </div>
                <div class="feature-grid">
                    <div class="feature-grid_img">
                        <img src="{{ asset('frontendFiles/assets/img/logo.png') }}" alt="Food">
                    </div>
                    <div>
                        <h3 class="feature-grid_title box-title text-white">Agrim Foods</h3>
                        <p class="feature-grid_text text-border">Whether you are looking for breakfast cereals, snacks, or
                            meals, Agrim Foods has a product that will suit your needs and preferences.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        Team Area
        ==============================-->
    <section class="z-index-common space-top">
        <div class="container" data-pos-space="#testiSec1" data-sec-space="margin-bottom" data-margin-bottom="170px">
            <div class="title-area text-center">
                <span class="sub-title">
                    <img class="icon" src="{{ asset('frontendFiles/assets/img/icon/chef.png') }}" alt="icon">
                    Team Members
                </span>
                <h2 class="sec-title">Meet Our Agrim <span class="font-style text-theme">Team</span></h2>
                <p class="sec-text ms-auto me-auto">A team of experienced professionals manage the factory using
                    computerized systems for efficient and effective operations.</p>
            </div>
            <div class="row slider-shadow number-dots as-carousel" data-slide-show="4" data-lg-slide-show="3"
                data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1" data-dots="true"
                data-xl-dots="true" data-ml-dots="true" data-lg-dots="true" data-md-dots="true">
                <!-- Single Item -->
                @if(isset($teams) && count($teams) > 0)
                    @foreach ($teams as $team)
                    <div class="col-md-6 col-lg-4 col-xxl-3">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="{{ getOrginalUrl($team->image) ?? asset('frontendFiles/assets/img/team/team_1_1.jpg')}}" alt="Team">
                            </div>
                            <div class="team-content">
                                <h3 class="team-title box-title">{{ $team->name ?? ''}}</h3>
                                <span class="team-desig">{{ $team->designation}}</span>
                                <div class="as-social">
                                    
                                    <a target="_blank" href="{{ $team->linkedin_link}}"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif

            </div>
        </div>
        <div class="shape-mockup chili jump-reverse" data-top="0%" data-right="0"><img
                src="{{ asset('frontendFiles/assets/img/shape/red_chili.png')}}" alt="shape"></div>
    </section>
    <!--==============================
        Testimonial Area
        ==============================-->
    <section class="space bg-smoke2" id="testiSec1" data-bg-src="assets/img/bg/testi_bg_1.png">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-end">
                <div class="col-lg-9 mb-n2 mb-lg-0">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title">
                            <img class="icon" src="{{ asset('frontendFiles/assets/img/icon/speaker.png')}}" alt="icon">
                            Testimonials
                        </span>
                        <h2 class="sec-title">Our Customar <span class="font-style text-theme">Feedbacks</span></h2>
                        <p class="sec-text ms-auto me-auto ms-lg-0">“A majority of our customers are satisfied with Agrim
                            and continue to support us by providing valuable feedback.”</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slick-prev="#testiSlide1" class="slick-arrow default"><i
                                    class="far fa-arrow-left"></i></button>
                            <button data-slick-next="#testiSlide1" class="slick-arrow default"><i
                                    class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div> <!-- / Title row -->
            <div class="row slider-shadow as-carousel" id="testiSlide1" data-slide-show="3" data-lg-slide-show="2"
                data-md-slide-show="1">
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
        <div class="shape-mockup leaf jump-reverse" data-top="0%" data-left="0"><img src="{{ asset('frontendFiles/assets/img/shape/leaf_1.png')}}"
                alt="shape"></div>
        <div class="shape-mockup leaf jump" data-bottom="0%" data-right="0"><img src="{{ asset('frontendFiles/assets/img/shape/leaf_2.png')}}"
                alt="shape"></div>
    </section>
    <!--==============================
        Footer Area
        ==============================-->


@endsection
@push('scripts')
@endpush
