@extends('admin.partials.master')

@section('content')

    <div class="layout-px-spacing">

        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">Product By Category</h1>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="{{ route('admin.category.allCategory') }}" class=" btn btn-primary">Back to all Categories</a>
            </div>
        </div>

        <div class="row">

            <div id="card_1" class="col-lg-12 layout-spacing layout-top-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">

                        <h3>Product By Category</h3>
                        <div class="row">

                            @if ($products->isNotEmpty())
                                @foreach ($products as $product)
                                    <div class="col-md-4 mb-2">
                                        <div class="card" style="width: 18rem;">
                                            <img class="card-img-top" src="{{ asset($product->featured_photo) }}"
                                                alt="Card image cap">
                                            <div class="card-body">
                                                <p class="card-text">{{ $product->title }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <hr>
                                <h1 class="mt-3 mb-3">No product of this Category</h1>
                                <hr>
                            @endif
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection

@push('script')
@endpush
