{{-- @if($cat->children->isNotEmpty())
    @foreach($cat->children as $child)
        <option value="{{ $child->id }}" @if(isset($product))
            @if ($product->category_id == $child->id)
                selected
            @endif
            @endif>
            &nbsp;&nbsp;{{seperator($loop->depth)}}&nbsp;&nbsp;{{ $child->title }}</option>
    @endforeach
@endif
 --}}



@if(isset($allcategories) && !empty($allcategories))
    @foreach($allcategories as $category)
        <option value="{{ $category->id }}" @if(isset($product))
            @if ($product->category_id == $category->id)
                selected
            @endif
            @endif>
            &nbsp;&nbsp;{{seperator($loop->depth)}}&nbp;&nbsp;{{ $category->title }}</option>
    @endforeach
@endif