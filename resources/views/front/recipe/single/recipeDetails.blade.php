
@extends('front.layouts.master')
@section('pageTitle', 'Recipe | '.getSiteSetting('site_title'))
@push('styles')

   
@endpush

@section('content')
<div class="breadcumb-wrapper " data-bg-src="{{ asset('frontendFiles/assets/img/breadcumb/breadcumb-bg.jpg') }}">
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
                            {{-- <a href="blog.html"><i class="fa-regular fa-user"></i>By Pizzer</a> --}}
                            {{-- <a href="blog.html"><i class="fa-light fa-calendar-days"></i>21 June, 2022</a>
                            <a href="blog-details.html"><i class="fa-regular fa-comments"></i>Comments(3)</a> --}}
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
                    {{-- <div class="share-links clearfix ">
                        <div class="row justify-content-between">
                            <div class="col-sm-auto">
                                <span class="share-links-title">Tags:</span>
                                <div class="tagcloud">
                                    <a href="blog.html">Fast Food</a>
                                    <a href="blog.html">Dinner</a>
                                </div>
                            </div>
                            <div class="col-sm-auto text-xl-end">
                                <span class="share-links-title">Share:</span>
                                <ul class="social-links">
                                    <li><a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul><!-- End Social Share -->
                            </div><!-- Share Links Area end -->
                        </div>
                    </div> --}}
                </div>
              
               
            </div>
            <div class="col-xxl-4 col-lg-5">
                <aside class="sidebar-area">
                    {{-- <div class="widget widget_search   ">
                        <form class="search-form">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget widget_categories  ">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            <li>
                                <img class="icon" src="assets/img/icon/category_1_1.svg" alt="icon">
                                <a href="blog.html">Burger</a>
                                <span>10</span>
                            </li>
                            <li>
                                <img class="icon" src="assets/img/icon/category_1_2.svg" alt="icon">
                                <a href="blog.html">Pizza</a>
                                <span>08</span>
                            </li>
                            <li>
                                <img class="icon" src="assets/img/icon/category_1_3.svg" alt="icon">
                                <a href="blog.html">Combo</a>
                                <span>15</span>
                            </li>
                            <li>
                                <img class="icon" src="assets/img/icon/category_1_4.svg" alt="icon">
                                <a href="blog.html">Chicken</a>
                                <span>14</span>
                            </li>
                            <li>
                                <img class="icon" src="assets/img/icon/category_1_5.svg" alt="icon">
                                <a href="blog.html">Drinks</a>
                                <span>12</span>
                            </li>
                        </ul>
                    </div> --}}
                    {{-- <div class="widget  ">
                        <div class="author-widget-wrap">
                            <div class="avater">
                                <img src="assets/img/blog/author_1.jpg" alt="avater">
                            </div>
                            <div class="author-info">
                                <h4 class="name"><a class="text-inherit" href="classes.html">Alone Mask</a></h4>
                            </div>
                            <p class="author-bio">Assertively pontificate high standards in scenarios rather than sustainable.</p>
                            <div class="author-social">
                                <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                                <a href="https://pinterest.com"><i class="fab fa-pinterest-p"></i></a>
                                <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div> --}}
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