{{-- <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">
            <img src="{{ getSiteSetting('logo') ? asset(getSiteSetting('logo')) : asset('frontendFiles/assets/images/site-logo.svg') }}"
                alt="site logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#swNavbar">
            <span class="navbar-toggler-icon text-white"></span>
        </button>

        <div class="collapse navbar-collapse" id="swNavbar">
            <ul class="navbar-nav mx-auto">
                @if (Route::currentRouteName() != 'index')
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('index') }}">Home</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link active text-white" href="{{ route('products') }}">products</a>
                    <ul class="sub-nav-items">
                        
                        @if (getCategoriesWithProducts()->count() > 0)
                            @foreach (getCategoriesWithProducts() as $category)
                                <li class="sub-nav-item">
                                    <a href="{{ route('productsByCategory', $category->slug) }}"
                                        class="sub-nav-link">{{ $category->title }}</a>
                                    <ul class="sub-nav-items-l1">
                                        @if (isset($category->children) && count($category->children) > 0)
                                            @foreach ($category->children as $child)
                                                <li class="sub-nav-item-l1">
                                                    <a href="{{ route('productsByCategory', $child->slug) }}"
                                                        class="sub-nav-link-l1">{{ $child->title }}</a>
                                                    <ul class="sub-nav-items-l2">
                                                        @if (isset($child->products) && count($child->products) > 0)
                                                            @foreach ($child->products as $product)
                                                                <li class="sub-nav-item-l2">
                                                                    <a href="{{ route('productSingle', $product->slug) }}"
                                                                        class="sub-nav-link-l2">{{ $product->title }}</a>
                                                                </li>
                                                            @endforeach
                                                        @endif

                                                    </ul>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('aboutus') }}">about us</a>
                </li>
                <li class="nav-item nav-link-sm">
                    <a class="nav-link active text-white ">Our Articles</a>
                    <ul class="sub-nav-items">
                        <li class="sub-nav-item">
                            <a href="{{ route('blogs') }}" class="sub-nav-link">Blogs</a>
                        </li>
                        <li class="sub-nav-item">
                            <a href="{{ route('news') }}" class="sub-nav-link">News</a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item nav-link-sm">
                    <a class="nav-link active text-white">Support</a>
                    <ul class="sub-nav-items">
                        <li class="sub-nav-item">
                            <a href="{{ route('contact') }}" class="sub-nav-link">Contact Us</a>
                        </li>
                        <li class="sub-nav-item">
                            <a href="{{ route('terms.conditions') }}" class="sub-nav-link">Repairs & Warranty</a>
                        </li>
                        <li class="sub-nav-item">
                            <a href="{{ route('productsManuals') }}" class="sub-nav-link">Manuals</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-btns">
                <a type="button" href="{{ getSiteSetting('daraz_site_link') ?? '' }}" target="_blank"
                    class="btn btn-secondary navbar-btn d-flex align-items-center">
                    <lord-icon src="https://cdn.lordicon.com/webtefou.json" trigger="hover" style="width:25px;height:25px"
                        colors="primary: #000" class="lord-icon">
                    </lord-icon>
                    <span class="btn-text fw-6">Shop Now</span>
                </a>
            </div>
        </div>
    </div>
</nav> --}}

<nav class = "sw-navbar d-flex">
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
                    {{-- <img src = "assets/images/new_skyworth_logo.png" alt = "brand logo" > --}}
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
                                    {{-- <ul>
                                        <li><a href = "{{ route('productsManuals')}}">Manuals</a></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>