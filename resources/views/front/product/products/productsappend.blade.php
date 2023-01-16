<div class="row gy-40">
    @if (isset($products) && count($products) > 0)
        @foreach ($products as $product)
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="as-product">
                <div class="product-img">
                    <img src="{{ getOrginalUrl($product->feature_image) }}" alt="{{ $product->title}}">
                </div>
                <div class="product-content">
                    <a  class="category mt-1">{{ $product->category != null ? $product->category->title : 'N/A' }}</a>
                    
                    <h3 class="product-title"><a href="{{ route('productSingle',$product->slug) }}">{{ $product->title}}</a></h3>
                    <span class="price">Rs. {{ $product->price }}</span>
                    {{-- <div class="actions">
                        
                        <a href="{{ route('productSingle',$product->slug) }}" class="icon-btn"><i class="fal fa-eye"></i></a>
                    </div> --}}

                    <div class="actions">
                        <a href="#" class="icon-btn d-none"><i class="fal fa-cart-plus"></i></a>
                        <a href="{{ route('productSingle',$product->slug) }}" class="icon-btn"><i class="fal fa-eye" style="margin-top:14px;"></i></a>
                        <a href="#" class="icon-btn d-none"><i class="fal fa-heart"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @else
    <h4><center>No Products Found<center></h4>
    @endif
</div>
<div class="mt-4">
    {{ $products->links('vendor.pagination.ajax') }}
</div>
