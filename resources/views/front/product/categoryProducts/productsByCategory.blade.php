@extends('front.layouts.master')
@section('pageTitle', 'Products | ' . getSiteSetting('site_title'))
@push('styles')
    <style>
        header {
            min-height: auto !important;
        }
        .header-wrapper{
            display: block !important;           
        }

        /* .sw-card-img img {
                width: auto;
                max-height: 248px;
                margin-right: auto;
                margin-left: auto;
                
            }
            .sw-card-img {
                padding-top: 50px;
                padding-bottom: 90px;
            } */
    </style>
@endpush






@section('content')
<div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title"><span class="font-style text-theme2">{{ $category->title }}</span></h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li> {{ $category->title }}'s Products</li>
               

            </ul>
        </div>
    </div>
</div>
    <section class="category-sc pb-3 mt-4" id="category-sc">
        <div class="container px-0">
            <div class="sc-title px-3 d-md-flex align-items-center justify-content-between">
                <h3 class="text-capitalize text-white mb-4 mb-md-0 no-wrap">{{ $category->title }}</h3>

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
            <div class="category-sc-content mt-4">
                <div class="button-group category-btns filter-button-group px-3">
                    {{-- @dd($category) --}}
                    @if ($category->children->count() > 0)
                        <button class="category-btn filterService category-btn-active" data-id="{{ $category->id }}">All</button>

                        @foreach ($category->children as $child)
                            <button class="category-btn filterService"
                                data-id="{{ $child->id }}">{{ $child->title }}</button>
                        @endforeach
                    @else
                    @endif
                </div>
                <div class="appendProduct">

                    @include('front.product.products.productsappend')

                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        $('.header-wrapper').addClass('d-none');
    </script>
    <script>
        $(document).on("click", ".pagination .page-link", function(e) {
            e.preventDefault();
            var search = $('.productSearch').val();
            var filter = $('.category-btn-active').data('id');
            var currentpage = parseInt($(this).attr('data-page'));
            $.ajax({
                type: "GET",
                url: "{{ route('productsByCategory', $category->slug) }}",
                data: {
                    'search': search,
                    'filter': filter,
                    'page': currentpage
                },
                beforeSend: function(data) {

                },
                success: function(data) {
                    // console.log(data);
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
        $(document).on('keypress', '.productSearch', function(event) {
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if (keycode == '13') {
                var url = "{{ route('productsByCategory', $category->slug) }}";
                var search = $(this).val();
                var filter = $('.category-btn-active').data('id');
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
            }
        })

        $(document).on('click', '.filterService', function(e) {
            e.preventDefault();
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
                    $('.appendProduct').html(data.data.view);
                },
                error: function(err) {

                },
                complete: function() {}
            });
        })
    </script>
@endpush
