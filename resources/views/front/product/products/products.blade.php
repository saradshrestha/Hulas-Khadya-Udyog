@extends('front.layouts.master')
@section('pageTitle', 'Products | ' . getSiteSetting('site_title'))
<style>
    .pagination .page-link {
        color: #000000;
        background-color: #e9ecef;
    }
    .pagination .page-item.active .page-link{
        background-color: #eb0029;
        border-color: #eb0029;
    }
    .pagination .page-item .page-link:hover{
        background-color: #eb0029;
        border-color: #eb0029;
        color: #e9ecef;
    }

    .pagination .page-item.disabled .page-link {
    
        pointer-events: none;
        color: #000000;
        background-color: #e9ecef;
    }

    .pagination .page-item .page-link{
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

{{-- @section('banner')
    @include('front.product.products.productsbanner')
@endsection --}}

@section('content')

    <!--==============================Breadcumb============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Pro<span class="font-style text-theme2">ducts</span></h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Products</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================Product Area==============================-->
    <section class="as-product-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="title-area text-center">
                
                <div class="tab-menu1 filter-menu-active">
                    <button  class="active filterService " data-id="All" type="button">All Menus</button>
                    @if (isset($categories) && count($categories) > 0)
                        @foreach ($categories as $category)
                            <button class="filterService" data-id="{{ $category->id }}" type="button">{{ $category->title}}</button>
                        @endforeach
                    @else
                        
                    @endif

                </div>
            </div>
            <div class="appendProduct">
                @include('front.product.products.productsappend')

            </div>
        </div>
    </section>


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
                url: "{{ route('products') }}",
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
            var url = "{{ route('products') }}";
            var search = $(this).val();
            var filter = $('.category-btn-active').data('id');

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
            var url = "{{ route('products') }}";
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
