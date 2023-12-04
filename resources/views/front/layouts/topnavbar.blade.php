<div class="sidemenu-wrapper d-none d-lg-block ">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        {{-- <div class="widget woocommerce widget_shopping_cart">
            <h3 class="widget_title">Shop</h3>
            <div class="widget_shopping_cart_content">
                <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/menu/menu_thumb_1_1.png" alt="Cart Image">Daria Shevtsova</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>40.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/menu/menu_thumb_1_2.png" alt="Cart Image">Chicken Masala</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>99.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/menu/menu_thumb_1_3.png" alt="Cart Image">Sicilian Pizza</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>56.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/menu/menu_thumb_1_4.png" alt="Cart Image">Beef Masala</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>23.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/menu/menu_thumb_1_5.png" alt="Cart Image">Martin Widenka</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>100.00</span>
                        </span>
                    </li>
                </ul>
                <p class="woocommerce-mini-cart__total total">
                    <strong>Subtotal:</strong>
                    <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">$</span>318.00</span>
                </p>
                <p class="woocommerce-mini-cart__buttons buttons">
                    <a href="cart.html" class="as-btn wc-forward">View cart</a>
                    <a href="checkout.html" class="as-btn checkout wc-forward">Checkout</a>
                </p>
            </div>
        </div> --}}
    </div>
</div>
{{-- <div class="popup-search-box d-none d-lg-block">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#">
        <input type="text" placeholder="What are you looking for?">
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>
</div> --}}
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
                {{-- <li><a href="{{ route('aboutus') }}">About Us</a></li> --}}
               
                <li>
                    <a href="{{ route('products')}}">Products</a>
                    
                </li>
                <li>
                    <a href="{{ route('recipes')}}">Recipes</a>
                </li>
                {{-- <li class="menu-item-has-children mega-menu-wrap">
                    <a href="#">Pages</a>
                    <ul class="mega-menu">
                        <li><a href="shop.html">Pagelist 1</a>
                            <ul>
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="index-2.html">Home Two</a></li>
                                <li><a href="index-3.html">Home Three</a></li>
                                <li><a href="index-4.html">Home Four</a></li>
                                <li><a href="about.html">About Us</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pagelist 2</a>
                            <ul>
                                <li><a href="menu-fast.html">Fast Food Menu</a></li>
                                <li><a href="menu-rest.html">Restaurant Food Menu</a></li>
                                <li><a href="team.html">Our Chef</a></li>
                                <li><a href="team-details.html">Chef Details</a></li>
                                <li><a href="faq.html">Faq Page</a></li>

                            </ul>
                        </li>
                        <li><a href="#">Pagelist 3</a>
                            <ul>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-details.html">Shop Details</a></li>
                                <li><a href="cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pagelist 4</a>
                            <ul>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="testimonial.html">Testimonial</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="error.html">Error Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li> --}}
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
<header class="as-header header-layout1">
    {{-- <div class="header-top">
        <div class="container as-container">
            <div class="header-top-inner">
                <div class="row justify-content-center justify-content-md-between align-items-center gy-2">
                    <div class="col-auto d-none d-md-block">
                        <p class="header-notice">Welcome to {{ returnSiteSetting('site_title') ?? 'Hulas Khadya Khadya Udyog(P) Ltd.' }}</p>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li>
                                    <div class="header-social">
                                        <a href="{{ returnSiteSetting('fb_link') ?? 'https://www.fb.com/'}}"><i class="fab fa-facebook-f"></i></a>
                                        <a href="{{ returnSiteSetting('twitter_link') ?? 'https://www.twitter.com/'}}"><i class="fab fa-twitter"></i></a>
                                        <a href=" {{ returnSiteSetting('youtube_link') ?? 'https://www.linkedin.com/'}}"><i class="fab fa-linkedin-in"></i></a>
                                        <a href=" {{ returnSiteSetting('insta_link') ?? 'https://www.instagram.com/'}}"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Main Menu Area -->
    <div class="menu-area">
        <div class="container as-container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-auto">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="logo-style1">
                            <a href="{{ route('index') }}">
                                <img style="width:180px;height:auto;" src="{{ asset(returnSiteSetting('logo')) ?? asset('frontendFiles/assets/img/logo.svg') }}" alt="LOGO">
                            </a>

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
                                {{-- <li class="menu-item-has-children mega-menu-wrap">
                                    <a href="#">Pages</a>
                                    <ul class="mega-menu">
                                        <li><a href="shop.html">Pagelist 1</a>
                                            <ul>
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index-2.html">Home Two</a></li>
                                                <li><a href="index-3.html">Home Three</a></li>
                                                <li><a href="index-4.html">Home Four</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pagelist 2</a>
                                            <ul>
                                                <li><a href="menu-fast.html">Fast Food Menu</a></li>
                                                <li><a href="menu-rest.html">Restaurant Food Menu</a></li>
                                                <li><a href="team.html">Our Chef</a></li>
                                                <li><a href="team-details.html">Chef Details</a></li>
                                                <li><a href="faq.html">Faq Page</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="#">Pagelist 3</a>
                                            <ul>
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop-details.html">Shop Details</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pagelist 4</a>
                                            <ul>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <li><a href="testimonial.html">Testimonial</a></li>
                                                <li><a href="contact.html">Contact Us</a></li>
                                                <li><a href="error.html">Error Page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> --}}
                                {{-- <li class="menu-item-has-children">
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li> --}}
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