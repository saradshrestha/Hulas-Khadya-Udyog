<div class="sidemenu-wrapper d-none d-lg-block ">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
      
    </div>
</div>

<!--==============================
Mobile Menu
============================== -->
<div class="as-menu-wrapper">
    <div class="as-menu-area text-center">
        <button class="as-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ route('index') }}"><img src="{{ (returnSiteSetting('logo')) ?? asset('frontendFiles/assets/img/logo.svg') }}" alt="LOGO"></a>
        </div>
        <div class="as-mobile-menu">
            <ul>
                <li>
                    <a href="{{ route('index') }}">Home</a>
                </li>
               
                <li>
                    <a href="{{ route('products')}}">Products</a>
                    
                </li>
                <li>
                    <a href="{{ route('recipes')}}">Recipes</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">Contact Us</a>
                </li>
                <li>
                    <a href="#">Careers</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
Header Area
==============================-->
<header class="as-header header-layout1" style="position: relative">

    <!-- Main Menu Area -->
    <div class="menu-area">
        <div class="container as-container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-auto">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="logo-style1">
                            <a href="{{ route('index') }}"><img style="width:180px;height:auto;" src="{{ asset(returnSiteSetting('logo')) ?? asset('frontendFiles/assets/img/logo.svg') }}" alt="LOGO"></a>

                        </div>
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li>
                                    <a href="{{ route('index')}}">Home</a>
                                   
                                </li>
                                <li><a href="{{ route('aboutus')}}">About Us</a></li>
                              
                                <li>
                                    <a href="{{ route('products')}}">Products</a>
                                    
                                </li>
                                <li>
                                    <a href="{{ route('recipes')}}">Recipes</a>
                                </li>
                               
                                <li>
                                    <a href="{{ route('contact') }}">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#">Careers</a>
                                </li>
                            </ul>
                        </nav>
                        <button type="button" class="as-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                    </div>
                </div>
                    
            </div>
        </div>
    </div>
    <div class="social-media-box" style="position: absolute;top: 36%; right: 24px; z-index: 1;">
        <ul style="list-style: none;">
            <li>
                <div class="header-social">
                    <a href="{{ returnSiteSetting('fb_link') ?? '#'}}"><i class="fab fa-facebook-f" style="font-size: 21px;  margin-right: 15px;"></i></a>
                    <a href="{{ returnSiteSetting('twitter_link') ?? '#'}}"><i class="fab fa-twitter" style="font-size: 21px; margin-right: 15px;"></i></a>
                    <a href="{{ returnSiteSetting('youtube_link') ?? '#'}}"><i class="fab fa-linkedin-in" style="font-size: 21px; margin-right: 15px;"></i></a>
                    <a href="{{ returnSiteSetting('insta_link') ?? '#'}}"><i class="fab fa-instagram" style="font-size: 21px;"></i></a>
                </div>
            </li>
            
        </ul>
    </div>
    
</header>

{{-- old Code delete--}}

{{-- <nav class = "sw-navbar d-flex">
    <div class = "container">
        <div class = "sw-navbar-cnt mx-3">
            <div class = "sw-navbar-l">
                <ul class = "sw-nav-list d-flex align-items-stretch justify-content-start">
                    <li class = "sw-nav-item">
                        @if(getTVCategoriesWithProducts() != Null && getTVCategoriesWithProducts()->children->count() > 0)
                        <a href = "{{ route('productsByCategory',getTVCategoriesWithProducts()->slug)}}" class = "sw-nav-link"><span class = "sw-nav-link-text">TV</span></a>
                        <div class = "sw-subnav">
                            <div class = "container">
                                <div class = "sw-subnav-cnt">
                                  
                                    @foreach (getTVCategoriesWithProducts()->children as $child )
                                        <ul>
                                            <li><a href = "{{ route('productsByCategory',$child->slug) }}">{{ $child->title}}</a></li>
                                            @if ($child->products != null && $child->products->count() > 0)
                                                @foreach ($child->products as $product )
                                                    <li><a href = "{{ route('productSingle',$product->slug) }}">{{$product->title}}</a></li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                        @endif
                    </li>
                    <li class = "sw-nav-item">
                        <a href = "#" class = "sw-nav-link"><span class = "sw-nav-link-text">Home Appliances</span></a>
                        <div class = "sw-subnav">
                            <div class = "container">
                                <div class = "sw-subnav-cnt">

                                    @if(getOtherCategoriesWithProducts() != Null && getOtherCategoriesWithProducts())
                                        @foreach (getOtherCategoriesWithProducts() as $mainCategory )
                                            <ul>
                                                <li><a href = "{{ route('productsByCategory',$mainCategory->slug) }}">{{ $mainCategory->title}}</a></li>
                                                @if ($mainCategory->children != null && $mainCategory->children->count() > 0)
                                                    @foreach ($mainCategory->children as $child )
                                                        <li><a href = "{{ route('productsByCategory',$child->slug) }}">{{$child->title}}</a></li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        @endforeach
                                    @endif
                
                                </div>
                            </div>
                        </div>
                    </li>
                   
                </ul>
            </div>
            <div class = "sw-brand-logo d-flex align-items-center justify-content-center">
                <button type = "button" class = "sw-navbar-show-btn">
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>
                <a href = "{{ route('index')}}" class = "navbar-brand d-flex align-items-center mx-0">
                    <img src="{{ getSiteSetting('logo') ? asset(getSiteSetting('logo')) : asset('frontendFiles/assets/images/site-logo.svg') }}"
                    alt="Skyworth Logo" class = "mx-auto">
                   
                </a>
            </div>
            <div class = "sw-navbar-r">
                <ul class = "sw-nav-list d-flex align-items-stretch justify-content-end">
                    <li class = "sw-nav-item">
                        <a href = "{{ route('aboutus')}}" class = "sw-nav-link"><span class = "sw-nav-link-text">About Us</span></a>
                    </li>
                    <li class = "sw-nav-item">
                        <a href = "#" class = "sw-nav-link"><span class = "sw-nav-link-text">Our Articles</span></a>
                        <div class = "sw-subnav">
                            <div class = "container">
                                <div class = "sw-subnav-cnt text-end articles-sm-2fr" style="direction:rtl;">
                                    <ul>
                                        <li><a href = "{{ route('blogs')}}">Blogs</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href = "{{ route('news') }}">News</a></li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </li>

                    <li class = "sw-nav-item">
                        <a href = "#" class = "sw-nav-link"><span class = "sw-nav-link-text">Supports</span></a>
                        <div class = "sw-subnav">
                            <div class = "container">
                                <div class = "sw-subnav-cnt text-end supports-sm-3fr" style="direction:rtl;">
                                    <ul>
                                        <li><a href = "{{ route('warranty')}}">Repairs & Warranty</a></li>
                                    </ul>

                                    <ul>
                                        <li><a href = "{{ route('contact')}}">Contact Us</a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav> --}}