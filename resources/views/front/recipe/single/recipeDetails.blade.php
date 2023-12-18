
@extends('front.layouts.master')
@section('pageTitle', 'Recipe | '.getSiteSetting('site_title'))
@push('styles')

   
@endpush

@section('content')
<div class="breadcumb-wrapper " data-bg-src="{{ asset('') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Recipe<span class="font-style text-theme2">Details</span></h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('index')}}">Home</a></li>
                <li>Recipe Details</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================Blog Area==============================-->
<section class="as-blog-wrapper blog-details space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-7">
                <div class="as-blog blog-single">
                    <div class="blog-img">
                        <img src="{{ getOrginalUrl($recipe->image_id) ?? asset('frontendFiles/assets/img/blog/blog-s-1-1.jpg')}}" alt="Blog Image">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                          
                            @if($recipe->products->count() > 0)
                                <i class="fa-regular fa-tag pr-1 text-danger"></i>
                                @foreach ($recipe->products as $product)
                                    <a href="{{ route('productSingle',$product->slug) }}" class="ml-2"> {{ $product->title}}</a>
                                @endforeach
                            @endif
                        </div>
                        <h2 class="blog-title">{{ $recipe->title }}</h2>

                        <p>{!! $recipe->description !!}</p>
                        @if ($recipe->video_link != null)
                            <div class="as-video mb-30">
                                <img src="assets/img/blog/blog-s-1-5.jpg" alt="video">
                                <a href="{{ $recipe->video_link }}" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                            </div>
                      
                        @endif
                      
                    </div>
                    
                </div>
              
               
            </div>
            <div class="col-xxl-4 col-lg-5">
                <aside class="sidebar-area">
                  
                    <div class="widget  ">
                        <h3 class="widget_title">Recent Recipes</h3>
                        <div class="recent-post-wrap">
                            @if (isset($recentRecipes) && Count($recentRecipes) > 0)
                                @foreach ($recentRecipes as $recentRecipe )
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ route('recipeSingle',$recentRecipe->slug) }}"><img src="{{ getOrginalUrl($recentRecipe->image_id) }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="{{ route('recipeSingle',$recentRecipe->slug) }}">{{ $recentRecipe->title }}</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="{{ route('recipeSingle',$recentRecipe->slug) }}"><i class="fal fa-calendar-days"></i>{{ $recentRecipe->created_at->format('Y/m/d')}}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            @endif
                          
                          
                        </div>
                    </div>

                    <div class="widget  ">
                        <h3 class="widget_title">Related Recipes</h3>
                        <div class="recent-post-wrap">
                            @if (isset($relatedProducts) && Count($relatedProducts) > 0)
                                @foreach ($relatedProducts as $relatedRecipe )
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ route('recipeSingle',$relatedRecipe->slug) }}"><img src="{{ getOrginalUrl($relatedRecipe->image_id) }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="{{ route('recipeSingle',$relatedRecipe->slug) }}">{{ $relatedRecipe->title }}</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="{{ route('recipeSingle',$relatedRecipe->slug) }}"><i class="fal fa-calendar-days"></i>{{ $relatedRecipe->created_at->format('Y/m/d')}}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            @endif
                          
                          
                        </div>
                    </div>
                   
                </aside>
            </div>
        </div>
    </div>
</section>

{{-- <div class = "sticky-sc-content mt-4">
    <div class = "sticky-tab-heads-wrapper bg-nero d-flex align-items-center justify-content-center mt-5 mt-lg-0" id = "sticky-head">
        <div class = "sticky-tab-heads d-flex justify-content-center flex-column flex-md-row">
            <a href = "#overview" class = "sticky-tab-head py-2 text-white fw-4 fs-22">Overview</a>
            <a href = "#specification" class = "sticky-tab-head py-2 text-white fw-4 fs-22">Specifications</a>
            <a href = "#where_to_buy" class = "sticky-tab-head py-2 text-white fw-4 fs-22">Where to Buy</a>
        </div>
    </div>
    <div class = "sticky-tab-body-wrapper">
        <div class=""  id = "overview">
            @if(isset($product) && $product != null)
                {!! $product->description !!}
            @endif
        </div>
        <div class="container"  id = "specification">
            @if(isset($product) && $product != null)

            {!! $product->product_specs !!}

            @endif
        </div>
       <!--  single item -->
       <div class = "sticky-tab-itm stk-tab-3" id = "where_to_buy">
        <div class = "sticky-tab-title">
            <div class = "container">
                <h4>Where to Buy</h4>
              
            </div>
        </div>
        <div class = "sticky-tab-body">
            <div class = "container">
               

                <div class = "sticky-tab-btns d-md-flex justify-content-md-center">
                  

                    <a href = "{{ $product->purchase_link }}" target="_blank" class = "sticky-tab-btn d-flex align-items-center justify-content-center btn-secondary">
                        
                        <img src="{{ asset('frontendFiles/assets/images/daraz_logo_3.png') }}" alt="daraz_logo" style="width: 33px; margin-right:6px;">
                        <span class = "sticky-tab-btn-txt fw-6 fs-22 text-nero">Buy Now from Daraz</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
           
    </div>
    

</div> --}}



@endsection

@push('scripts')



@endpush