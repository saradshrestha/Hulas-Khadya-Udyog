@extends('front.layouts.master')
@section('pageTitle', 'Products | ' . getSiteSetting('site_title'))
@push('styles')

@endpush

@section('banner')
    @include('front.product.products.productsbanner')
@endsection

@section('content')
    <section class="category-sc pb-3" id="category-sc">
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
    </section>

@endsection

@push('scripts')
    <script>
        $(document).on("click", ".pagination .page-link", function(e) {
            e.preventDefault();
            var search = $('.productSearch').val();
            var filter = $('.category-btn-active').data('id');
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
