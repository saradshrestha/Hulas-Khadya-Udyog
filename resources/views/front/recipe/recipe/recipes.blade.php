@extends('front.layouts.master')
@section('pageTitle', 'Recipes | ' . getSiteSetting('site_title'))
@push('styles')
<style>
    .page-link {
        color: #000000;
        background-color: #e9ecef;
    }
    .page-item.active .page-link{
        background-color: #eb0029;
        border-color: #eb0029;
    }
    .page-item .page-link:hover{
        background-color: #eb0029;
        border-color: #eb0029;
        color: #e9ecef;
    }

    .page-item.disabled .page-link {
       
        pointer-events: none;
        color: #000000;
        background-color: #e9ecef;
    }

    .page-item .page-link{
        display: inline;
        position: relative;
        z-index: 1;
        margin-right: 10px;
        border-radius: 7px;
        width: 50px;
        height: 50px;
        text-align: center;
   }
   

   
</style>

@endpush

@section('content')

    <!--==============================Breadcumb============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Re<span class="font-style text-theme2">cipes</span></h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Recipes</li>
                </ul>
            </div>
        </div>
    </div>


    <!--==============================Blog Area==============================-->
    <section class="as-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">

                    <div class="appendProduct">
           
                
                        @include('front.recipe.recipe.recipesappend')
    
                    </div>
                  

                   
                    {{-- <div class="as-pagination ">
                        <ul>
                            <li><a href="blog.html">1</a></li>
                            <li><a href="blog.html">2</a></li>
                            <li><a href="blog.html">3</a></li>
                            <li><a href="blog.html"><i class="far fa-arrow-right"></i></a></li>
                        </ul>
                    </div> --}}
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <form class="search-form">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget widget_categories  ">
                            <h3 class="widget_title">Products</h3>
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
                        </div>
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
                        {{-- <div class="widget  ">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Almond Butter Chocolate Chip Zucchini Bars</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fal fa-calendar-days"></i>21 June, 2022</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Burger Butter Chocolate Chip Zucchini Taks</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fal fa-calendar-days"></i>22 June, 2022</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Platter Butter Chocolate Chip Zucchini Gots</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fal fa-calendar-days"></i>23 June, 2022</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    
                    </aside>
                </div>
            </div>
        </div>
    </section>



    <!--==============================Product Area==============================-->
    {{-- <section class="as-product-wrapper space-top space-extra-bottom">
        <div class="container"> --}}
            {{-- <div class="title-area text-center">
                
                <div class="tab-menu1 filter-menu-active">
                    <button  class="active filterService " data-id="All" type="button">All Menus</button>
                    @if (isset($categories) && count($categories) > 0)
                        @foreach ($categories as $category)
                            <button class="filterService" data-id="{{ $category->id }}" type="button">{{ $category->title}}</button>
                        @endforeach
                    @else
                        
                    @endif

                  
                </div>
            </div> --}}
            {{-- <div class="appendProduct">
           
                
                    @include('front.recipe.recipe.recipesappend')

                </div>
           
        </div>
    </section> --}}











    {{-- <section class="category-sc pb-3" id="category-sc">
        <div class="container px-0">
            <div class="sc-title px-3 d-md-flex align-items-center justify-content-between">
                <h3 class="text-capitalize text-white mb-4 mb-md-0 no-wrap">product category</h3>
      
                <div class="input-group ps-lg-3">
                    <span class="input-group-text">
                        <lord-icon src="https://cdn.lordicon.com/pvbutfdk.json" trigger="hover" colors="primary:#eaeaea"
                            style="width:25px;height:25px">
                        </lord-icon>
                    </span>
                    <input type="text" name="search" class="form-control productSearch" value="{{ old('search') }}"
                        placeholder="Search">
                </div>
            
            </div>
            <div class="category-sc-content mt-4 mt-md-0">
                <div class="button-group category-btns filter-button-group px-3">
                    <button class="category-btn filterService category-btn-active" data-id="All">All</button>

                    @if (isset($categories) && $categories->count() > 0)
                        @foreach ($categories as $category)
                            <button class="category-btn filterService"
                                data-id="{{ $category->id }}">{{ $category->title }}</button>
                        @endforeach
                    @else
                    @endif
                </div>
                <div class="appendProduct">

                    @include('front.product.products.productsappend')

                </div>
            </div>
        </div>
    </section> --}}

@endsection

@push('scripts')
    <script>
        $(document).on("click", ".pagination .page-link", function(e) {
            e.preventDefault();
            
            var search = $('.productSearch').val();
            var filter = $('.active').data('id');
            var currentpage = parseInt($(this).attr('data-page'));

            $.ajax({
                type: "GET",
                url: "{{ route('recipes') }}",
                data: {
                    'search': search,
                    'filter': filter,
                    'page': currentpage
                },
                beforeSend: function(data) {

                },
                success: function(data) {
                    console.log(data);
                    $('.appendProduct').html(data.data.view);

                },
                error: function(err) {
                    if (err.status == 422) {
                        $.each(err.responseJSON.errors, function(i, error) {
                            var el = $(document).find('[name="' + i + '"]');
                            el.after($('<span style="color: red;">' + error[0] + '</span>')
                                .fadeOut(15000));
                        });
                    }
                },
                complete: function() {}
            });
        });
    </script>

    <script>
        let keyupTimer;
        $(document).on('keyup', '.productSearch', function(e) {
            e.preventDefault();
            var url = "{{ route('recipes') }}";
            var search = $(this).val();
            var filter = $('.active').data('id');

            clearTimeout(keyupTimer);
            keyupTimer = setTimeout(function() {
                // alert(search);
                $.ajax({
                    type: 'GET',
                    url: url,
                    data: {
                        search: search,
                        filter: filter
                    },
                    beforeSend: function(data) {
                        loader();
                    },
                    success: function(data) {
                        $('.appendProduct').html(data.data.view);
                    },
                    error: function(err) {

                    },
                    complete: function() {}
                });
            }, 500);

        })



        $(document).on('click', '.filterService', function(e) {
            e.preventDefault();
            $('.filterService').removeClass('active');
            $(this).addClass('active');
            var filter = $(this).data('id');
            var search = $('.productSearch').val();
            var url = "{{ route('recipes') }}";
            $.ajax({
                type: 'GET',
                url: url,
                data: {
                    filter: filter,
                    search: search
                },
                beforeSend: function(data) {
                    loader();
                },
                success: function(data) {
                console.log(data);
                    $('.appendProduct').html(data.data.view);
                },
                error: function(err) {

                },
                complete: function() {}
            });
        })
    </script>
@endpush
