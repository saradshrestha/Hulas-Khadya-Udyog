@extends('front.layouts.master')
@section('pageTitle', $blog->seoable->meta_title ?? $blog->title)

@if (isset($blog->seoable->meta_keyword))
    @section('metaKeywords', getSeoKewords($blog->seoable->meta_keyword))
@endif
@if (isset($blog->seoable->meta_description))
    @section('metaDescription', $blog->seoable->meta_description)
@endif
@push('styles')
    <style>
        td{
            color: #a2a2a2
        }
        h3{
            margin-top: 0 !important; 
            margin-bottom: .5rem !important;
        }
    </style>
@endpush



@section('content')

<section class = "blog-details-sc pb-3" id = "blog-details-sc">
    <div class = "container px-0">
        <div class = "blog-details-breadcrumb">
            <div class = "container">
                <div class = "breadcrumb-itm">
                    <a href = "{{ route('blogs') }}">Our Blogs</a>
                    <span class = "breadcrumb-icon">
                        <i class="fa-sharp fa-solid fa-chevron-right"></i>
                    </span>
                    {{-- <a href = "#" class = "text-blue">The best TV in 2022 ....</a> --}}
                </div>
            </div>
        </div>
        <div class = "blog-details-wrapper row text-white">
            <div class = "blog-details-l col-lg-8">
                <div class = "blog-details-content">
                    <div class = "blog-d-head">
                        <div class = "blog-d-date fw-5 fs-12">{{ $blog->created_at->format('jS M, Y')}}</div>
                        <h3 class = "blog-d-title fw-5 fs-26 ">{{ $blog->title }}</h3>
                        <div class = "blog-d-author fs-12 ">{{ $blog->sub_title }}</div>
                        <p class = "blog-d-p fw-5 text-nobel">
                            @if (isset($blog->postMetas) && $blog->postMetas->count() > 0)
                                @foreach ($blog->postMetas as $meta)
                                    @if ($meta->key == 'sub-title')
                                        <p class = "sw-card-p fw-3 fs-16">{{ $meta->value }}</p>
                                    @endif
                                @endforeach
                            @endif
                        </p>
                    </div>
                    <div class = "blog-d-img">
                        <img src = "{{ asset($blog->image)}}" alt = "{{ $blog->title }}">
                    </div>
                    <div class = "blog-d-body">
                        {!! $blog->post_content !!}
                    </div>
                </div>
            </div>  
            <div class = "blog-details-r col-lg-4">
                <div class = "blog-itms-list text-white">
                    <div class = "nav nav-tabs bg-nero" id = "blogTab" role = "tablist">
                        <button class = "nav-link active" id = "most-read" data-bs-toggle = "tab" data-bs-target = "#mostRead" type = "button" role = "tab" aria-controls="read" aria-selected="true">Most Recents</button>
                    </div>
                    <div class = "tab-content" id = "blogTab">
                        <div class="tab-pane fade show active" id="mostRead" role="tabpanel" aria-labelledby="most-read">
                        @if (isset($blogs) && count($blogs) > 0)
                            @foreach ($blogs as $blog)
                                <a href="{{ route('blogs.details',$blog->slug) }}" class = "d-flex tab-pane-itm">
                                    <span class = "tab-pane-sn">{{ $loop->iteration}}.</span>
                                    <h3 class = "fs-16 fw-4">{{ $blog->title}}</h3>
                                </a>
                            @endforeach
                        @else
                            <a class = "d-flex tab-pane-itm justify-content-center" > 
                                <h5 class = "fs-16 fw-4" >No Blogs Found.</h5>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
@push('scripts')
@endpush
