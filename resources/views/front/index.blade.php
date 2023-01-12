@extends('front.layouts.master')

@section('pageTitle', 'Home | ' . getSiteSetting('site_title'))

@push('styles')
    <style>
    .header-slider{
        width:100%;
        height:100%;
        overflow: hidden;
    }  
    </style>
@endpush

@section('banner')
    @include('front.layouts.banner')
@endsection

@section('content')

    <!-- products section -->
    <section class = "product-sc mt-4" id = "product-sc">
        <div class = "container">
            <div class = "sc-title px-2">
                <h3 class = "text-capitalize text-white">product category</h3>
            </div>
            <div class = "product-sc-content">
                <div class = "sw-cards row gx-0">
                    @if(isset($categories) && $categories->count()> 0)
                        @foreach ($categories as $category )
                            <div class = "col-md-6 col-lg-4" >
                                <a href="{{ route('productsByCategory',$category->slug)}}">

                                <div class = "sw-card bg-nero" data-aos="fade-up">
                                    <div class = "sw-card-img img-cover">
                                        <img src = "{{ getOrginalUrl($category->logo)   }}" alt = "{{ $category->title}}">
                                    </div>
                                    <div class = "sw-card-body text-white">
                                        <h6 class = "sw-card-title fw-5 text-bright-gray">{{ $category->title }}</h6>
                                        
                                        <p class="sw-card-p">{{ $category->sub_title  }}</p>
                                              
                                        {{-- <p class = "sw-card-p">Watch astonishing videos in 4K with SKYWORTH OLED TVs.</p> --}}
                                    </div>
                                </div>
                                </a>

                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </section>
    <!-- end of products section -->

    <!-- promotions and offers section -->
    <section class = "promo-offers-sc " id = "promo-offers-sc">
        {{-- @dd($offers) --}}
        <div class = "container">
            <div class = "sc-title px-2 d-md-flex justify-content-between align-items-center">
                <h3 class = "text-capitalize text-white">promotions and offers</h3>
            </div>
            <div class = "promo-offers-sc-content">
                <div class = "sw-cards ">
                    {{-- @dd($offers) --}}
                  
                    <div class = "col-12">
                        <div class = "sw-card-wide bg-nero align-items-center owl-theme owl-carousel offer-slider">
                            @if (isset($offers) && $offers->count() > 0)
                            @foreach ($offers as $offer)
                            <div class = "col-lg-12" data-aos="fade-right">
                                <div class = "img-cover">
                                    <a href="{{ getPostFieldData($offer,'reference-link') ?? '#'}}">
                                        <img src = "{{ asset($offer->image) }}" alt="{{ $offer->title }}">
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </section>


    <!-- end of promotions and offers section -->

    <!-- explore section -->
    <section class = "explore-sc mt-4" id = "explore-sc">
        <div class = "container">
            <div class = "sc-title px-2">
                <h3 class = "text-capitalize text-white">Featured Products.</h3>
            </div>
            <div class = "explore-sc-content">
                <div class = "sw-cards owl-theme owl-carousel explore-slider side-slider">

                    @if (isset($featured_products) && $featured_products->count() > 0)
                        @foreach ($featured_products as $product)
                           
                            <div class = "sw-card bg-nero" data-aos="fade-up" data-dot="<button class = 'pgi-btn'>{{ $loop->iteration }}</button>">
                                <div class = "sw-card-img img-cover">
                                    <img src="{{ getOrginalUrl($product->feature_image) }}" alt="{{ $product->title }}">
                                </div>
                                <div class = "sw-card-body text-white">
                                    <h6 class = "sw-card-title fw-5 text-bright-gray">{{ $product->title }}</h6>
                                   
                                    <p class="sw-card-p mb-2">{{ $product->sub_title }}</p>
                                    @if($product->highlight_specs != null)
                                        <div class="highlight-specs">{!! $product->highlight_specs !!}</div>
                                    @endif
                                        
                                    <a href="{{ route('productSingle', $product->slug) }}" class="btn btn-primary sw-card-btn mt-2 mb-2">learn
                                        more</a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- end of explore section -->

@endsection

@push('scripts')

@endpush
