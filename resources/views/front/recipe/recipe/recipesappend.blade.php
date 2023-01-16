
@if (isset($recipes) && count($recipes) > 0)

    @foreach ($recipes as $recipe)

    <div class="as-blog blog-single has-post-thumbnail">
        <div class="blog-img">
            <a href="{{ route('recipeSingle',$recipe->slug)}}">
               <img src="{{ getOrginalUrl($recipe->image_id) }}" alt="{{ $recipe->title}}"></a>
        </div>
        <div class="blog-content">
            <div class="blog-meta">
              
               @if($recipe->products->count() > 0)
                    <i class="fa-regular fa-tag pr-1 text-danger"></i>
                    @foreach ($recipe->products as $product)
                        <a href="{{ route('productSingle',$product->slug) }}" class="ml-2"> {{ $product->title}}</a>
                    @endforeach
               @endif
            </div>
            <h2 class="blog-title"><a href="blog-details.html"> {{ $recipe->title}}</a>
            </h2>
            <p class="blog-text">{{ Strip_tags(Str::limit($recipe->description,150,'...')) }}</p>
            <a href="{{ route('recipeSingle',$recipe->slug) }}" class="as-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
        </div>
    </div>
    @endforeach
@else
<h4><center>No Products Found<center></h4>
@endif

<div class="">
    {{ $recipes->links('vendor.pagination.ajax') }}
</div>

