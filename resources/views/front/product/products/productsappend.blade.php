<div class="row gy-40">@if (isset($products) && count($products) > 0)
    @foreach ($products as  $product)
    <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="as-product">
            <div class="product-img">
                <img src="{{ getOrginalUrl($product->feature_image) }}" alt="{{ $product->title}}">
            </div>
            <div class="product-content">
                <a  class="category mt-1">{{ $product->category != null ? $product->category->title : 'N/A' }}</a>
                
                <h3 class="product-title"><a href="{{ route('productSingle',$product->slug) }}">{{ $product->title}}</a></h3>
                
                <div class="actions">
                    <a href="{{ route('productSingle',$product->slug) }}" class="icon-btn"><i class="fal fa-eye"></i></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@else
<h4><center>No Products Found<center></h4>
@endif
</div>
<div class="d-flex justify-content-center mt-4">
    {{ $products->links('vendor.pagination.ajax') }}
</div>

{{-- <div class = "sw-cards row category-grid">
    @if (isset($products) && $products->count() > 0)
        @foreach ($products as $product)
            <div class="col-md-4 col-xl-3" data-aos="fade-up">
                <div class="sw-card bg-nero">
                    <div class="sw-card-img img-cover">
                        <img src="{{ getOrginalUrl($product->feature_image) }}" alt="{{ $product->title }}">
                    </div>
                    <div class="sw-card-body text-white">
                        <h6 class="sw-card-title fw-5 fs-32 text-bright-gray">{{ $product->title }}</h6>
                        <p class="sw-card-p">{{ $product->sub_title ?? ''}}</p>
                        @if( $product->highlight_specs)
                           <div class="highlight-specs">{!! $product->highlight_specs !!}</div>
                        @endif
                        <a href="{{ route('productSingle', $product->slug) }}" class="btn btn-primary sw-card-btn">learn
                            more</a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <h4><center>No Products Found<center></h4>
    @endif
</div>

<div class="d-flex justify-content-center mt-4">
    {{ $products->links('vendor.pagination.ajax') }}
</div> --}}
