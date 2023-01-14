
@extends('front.layouts.master')
@section('pageTitle', 'Products | '.getSiteSetting('site_title'))
@push('styles')

   
@endpush

{{-- @section('banner')
    @include('front.product.single.productsinglebanner')
@endsection --}}

@section('content')
<div class="breadcumb-wrapper " data-bg-src="{{ asset('frontendFiles/assets/img/breadcumb/breadcumb-bg.jpg') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Product <span class="font-style text-theme2">Details</span></h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('index')}}">Home</a></li>
                <li>Product Details</li>
            </ul>
        </div>
    </div>
</div>


  <!--==============================
    Product Details
    ==============================-->
    <section class="as-product-wrapper product-details space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="product-thumb-area">
                        <div class="product-thumb-tab" data-asnavfor=".product-big-img">
                            <div class="tab-btn active">
                                <img src="{{ getOrginalUrl($product->feature_image) }}" alt="{{ $product->title}}">
                            </div>
                            @if ($product->images->count() > 0)
                                @foreach ($product->images as $image)
                                    <div class="tab-btn">
                                        <img src="{{  getOrginalUrl($image->image_id)}}" alt = "{{ $product->title  }} ">
                                    </div>  
                                @endforeach
                                                
                            @endif
                        </div>
                    
                        <div class="product-big-img as-carousel" data-slide-show="1" data-md-slide-show="1" data-fade="true">
                            <div class="col-auto">
                                <div class="img">
                                    <img src="{{ getOrginalUrl($product->feature_image) }}" alt="{{ $product->title}}">
                                </div>
                            </div>
                            @if ($product->images->count() > 0)
                                @foreach ($product->images as $image)
                                    <div class="col-auto">
                                        <div class="img"><img src="{{  getOrginalUrl($image->image_id)}}" alt = "{{ $product->title  }} "></div>
                                    </div>  
                                @endforeach
                                                
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="product-about">
                       
                        <h3 class="product-title">{{ $product->title}}</h3>
                       
                        {{-- <p class="text">There are many variations of passages of lorem Ipum available theresu anything embarrassing It’s a long established fact that a reader will be looking at its layout.</p> --}}
                       
                        <div class="product_meta">
                            <span class="sku_wrapper">SKU: <span class="sku">{{ $product->sku}}</span></span>
                            <span class="posted_in">Category: <a href="shop.html" rel="tag">{{ $product->category->title }}</a></span>
                           
                        </div>
                        {{-- <div class="share">
                            <p class="share-title"><i class="fa-solid fa-share"></i> Share</p>
                            <!-- Social Icon Url will be share action -->
                            <div class="as-social">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <ul class="nav product-tab-style1" id="productTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link as-btn active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="false">Product Description</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link as-btn " id="recipe-tab" data-bs-toggle="tab" href="#recipe" role="tab" aria-controls="recipe" aria-selected="true">Product Recipes</a>
                </li>
            </ul>
            <div class="tab-content" id="productTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                   {!! $product->specification !!}
                </div>
                <div class="tab-pane fade " id="recipe" role="tabpanel" aria-labelledby="recipe-tab">
                    <div class="woocommerce-Reviews">
                        <div class="as-comments-wrap ">
                            @if($product->finishedProducts->count() > 0)
                            <ul class="comment-list">
                               
                                    @foreach ( $product->finishedProducts as $recipe)
                                    <li class="review as-comment-item">
                                        <div class="as-post-comment">
                                            <div class="comment-avater">
                                                <img src="assets/img/blog/comment-author-3.jpg" alt="Comment Author">
                                            </div>
                                            <div class="comment-content">
                                                <h4 class="name">Mark Jack</h4>
                                                <span class="commented-on"><i class="fal fa-calendar-alt"></i>22 April, 2022</span>
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                    <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                </div>
                                                <p class="text">Completely build enabled web-readiness and distributed customer service. Proactively customize.</p>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                               

                              
                               
                            </ul>
                            @else
                            <h6 class="text-center">Recipe Not Avaliable Yet. Will Be Avaliable Soon.</h6>
                            @endif
                        </div> <!-- Comment Form -->
                       
                    </div>
                </div>
            </div>

        <!--==============================Related Product=============================-->
            <div class="space-extra-top mb-30">
                <div class="title-area text-center">
                    <h2 class="sec-title">Related Products</h2>
                    {{-- <p class="sec-text ms-auto me-auto">Objectively pontificate quality models before intuitive information. Dramatically recaptiualize multifunctional materials.</p> --}}
                </div>
                @if (isset($relatedProducts) && count($relatedProducts) > 0)
                    <div class="row slider-shadow as-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true">
                        @foreach ($relatedProducts as $relatedProduct)
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="as-product">
                                    <div class="product-img">
                                        <img src="{{ getOrginalUrl($relatedProduct->feature_image) }}" alt="{{ $relatedProduct->title}}">
                                    </div>
                                    <div class="product-content">
                                        <a href="#" class="category mt-1">{{ $relatedProduct->category != null ? $relatedProduct->category->title : 'N/A' }}</a>
                                        
                                        <h3 class="product-title"><a href="{{ route('productSingle',$relatedProduct->slug) }}">{{ $relatedProduct->title}}</a></h3>
                                        
                                        <div class="actions">
                                            <a href="{{ route('productSingle',$relatedProduct->slug) }}" class="icon-btn"><i class="fal fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                <h6 class="text-center">Products Not Avaliable.</h6>
                    
                @endif
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