@if($cat->children->isNotEmpty())
    @foreach($cat->children as $child)
        <option value="{{ $child->id }}"  @if (isset($category))
            @if ($category->parent_id == $cat->id)
                selected
            @endif
        @endif @if(seperator($loop->depth) == "-") disabled="disabled" @endif>
            &nbsp;&nbsp;{{seperator($loop->depth)}}&nbsp;&nbsp;{{ $child->title }}</option>
    @endforeach
@endif