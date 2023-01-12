<div class = "product-details-wrapper pt-4">
    <div class = "container px-0">
        <div class = "product-details-content row align-items-center">
            <!-- product details left -->
            {{-- @dd($product); --}}
            <div class = "details-l col-lg-6 ps-lg-0">
                <div class = "product-preview">
                    <div class = "preview-zoom" id = "preview-zoom">
                        <img src = "{{ getOrginalUrl($product->feature_image) }}" alt = "{{ $product->title }}">
                    </div>
                    <div class = "preview-thumbnails-wrapper " style="overflow: hidden">
                        {{-- <div class = "preview-thumbnails d-flex justify-content-center flex-xxl-column align-items-center">
                            <div class = "thumbnail-item" data-thumb-type = "th-img">
                                <img src = "{{ getOrginalUrl($product->feature_image) }}" alt = "{{ $product->title  }}">
                            </div>
                          
                            @if(isset($product) && $product->images->count() > 0)
                                @foreach ($product->images as $image )
                                    <div class = "thumbnail-item" data-thumb-type = "th-img">
                                        <img src = "{{ getOrginalUrl($image->image_id)}}" alt = "{{ $product->title  }}">
                                    </div>
                                @endforeach
                            @endif
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- end of products details left -->
            <!-- product details right -->
            <div class = "details-r col-lg-6 mt-5 ps-lg-4 ps-xxl-5">
                <div class = "details-info text-white">
                    <div class = "pro-name-wrapper d-flex flex-wrap align-items-baseline">
                        <h2 class = "pro-name fw-6 me-3">{{ $product->title}}</h2><span class = "pro-subtext fw-3">{{ $product->sub_title }}</span>
                    </div>
                    
                
                    <div class = "pro-descrp">
                        <p class="sw-card-p">{!! $product->short_desc !!}</p>
                    </div>
                    <div class = "pro-shop-btn">
                        <a href = "#where_to_buy" class = "btn btn-secondary shop-btn">
                            <lord-icon class = "lord-icon"
                            src="https://cdn.lordicon.com/webtefou.json"
                            trigger="hover"
                            colors="primary:#181717"
                            style="width:25px;height:25px">
                            </lord-icon>
                            <span class = "btn-text ms-2 fw-6">Shop</span> 
                        </a>
                    </div>
                </div>
            </div>
            <!-- end of product details right -->
        </div>
    </div>
</div>