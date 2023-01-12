@extends('front.layouts.master')
@section('pageTitle', 'News | ' . getSiteSetting('site_title'))
@push('styles')

@endpush


@section('banner')
    <div class="blog-hero-wrapper">
        <div class="container px-0">
            <div class="blog-hero">
                <div class="blog-hero-title px-2 py-2">
                    <h3 class="fw-5 mt-2">News</h3>
                </div>

                @if (isset($news) && count($news) > 0)

                    @foreach ($news->take(1) as $new)
                        <div class="row align-items-center">
                            <div class="blog-hero-l col-lg-6" style="position: relative">
                                <a href="{{ route('blogs.details', $new->slug) }}">
                                    <img src="{{ asset($new->image) }}" alt="{{ $new->title }}">
                                    @foreach ($new->postMetas as $postMeta ) 
                                        @if ($postMeta->key == "category")
                                            <p class="category sw-card-p fw-3 fs-14 ">{{ $postMeta->value}} News</p>
                                        @endif
                                    @endforeach
                                </a>
                            </div>
                            <div class="blog-hero-r col-lg-6 mt-4 mt-lg-0">

                                <div class="bh-itm-date fs-12 fw-5">{{ $new->created_at->format('jS M, Y') }}</div>
                                <a href="{{ route('news.details', $new->slug) }}">

                                    <h2 class="bh-itm-title fw-5 fs-26 mt-3">{{ $new->title }}</h2>
                                </a>
                                {{-- <div class="bh-itm-author fs-12">By <span
                                        class="text-blue fw-5">{{ $new->author->name }}</span></div> --}}
                                <p class="bh-itm-txt fs-16 mt-2">{{ $new->sub_title }}</p>
                                <p class="bh-itm-txt fs-16 mt-2">{{ Str::limit(strip_tags($new->post_content,350)) }}<a
                                        href="{{ route('news.details', $new->slug) }}" style="color: blue">Read More</a>
                                </p>

                                </a>
                            </div>
                        </div>
                    @endforeach

                @endif
            </div>
        </div>
    </div>
@endsection


@section('content')
    <section class="blog-sc pt-5 pb-3" id="blog-sc">
        <div class="container px-0">
            <div class="sw-cards row">
                @if (isset($news) && count($news) > 0)
                    @foreach ($news->skip(1) as $new)
                        <div class="col-lg-6 col-xl-4" data-aos="fade-up">
                            <a href="{{ route('news.details', $new->slug) }}">
                                <div class="sw-card bg-nero">
                                    <div class="sw-card-img img-cover ">
                                        <img src="{{ asset($new->image) }}" alt="{{ $new->title }}">
                                        @foreach ($new->postMetas as $postMeta ) 
                                            @if ($postMeta->key == "category")
                                                <p class="category sw-card-p fw-3 fs-14">{{ $postMeta->value}} News</p>
                                            @endif
                                        @endforeach
                                           
                                    </div>
                                    <div class="sw-card-body text-white">
                                        <div class="sw-card-date fw-3 fs-12">
                                            {{ $new->created_at->format('jS M, Y') }}
                                        </div>
                                        <h6 class="sw-card-title fw-5 text-bright-gray">{{ $new->title }}</h6>
                                        {{-- <div class="bh-itm-author fs-12">By 
                                            <span class="text-blue fw-5">{{ $new->author->name }}</span>
                                        </div> --}}
                                        <p class="bh-itm-txt fs-16 mt-2">{{ Str::limit(strip_tags($new->post_content, 150 ))  }}
                                            <a href="{{ route('news.details', $new->slug) }}" style="color: blue">Read More</a>
                                        </p>
                                     </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <h4>
                        <center>No News Found.</center>
                    </h4>
                @endif

            </div>

            <div class="d-flex justify-content-center">
                {{ $news->links() }}
            </div>
        </div>
    </section>

@endsection



{{-- @section('banner')
    <div class="blog-hero-wrapper">
        <div class="container px-0">
            <div class="blog-hero">
                <div class="blog-hero-title px-2">
                    <h3 class="fw-5 fs-32">News</h3>
                </div>
                @if (isset($news) && count($news) > 0)

                    @foreach ($news->take(1) as $new)
                        <div class="row align-items-center">
                            <div class="blog-hero-l col-lg-6 position-relative">
                                <a href="{{ route('news.details', $new->slug) }}">
                                <img src="{{ asset($new->image) }}" alt="{{ $new->title }}">
                                    @foreach ($new->postMetas as $postMeta ) 
                                    @if ($postMeta->key == "category")
                                    <p class="category sw-card-p fw-3 fs-14">Category: {{ $postMeta->value}}</p>
                                    @endif
                                    @endforeach
                                </a>
                            </div>
                            <div class="blog-hero-r col-lg-6 mt-4 mt-lg-0">

                                <div class="bh-itm-date fs12 fw-5">{{ $new->created_at->format('jS M, Y') }}</div>
                                <a href="{{ route('news.details', $new->slug) }}">

                                    <h2 class="bh-itm-title fw-5 fs-40 mt-3">{{ $new->title }}</h2>
                                </a>
                                    <div class="bh-itm-author fs-12">By <span
                                            class="text-blue fw-5">{{ $new->author->name }}</span></div>
                                    <p class="bh-itm-txt fs-20 mt-3">{{ $new->sub_title }}</p>
                                    <p class="bh-itm-txt fs-20 mt-3">{!! Str::limit($new->post_content, 220) !!} <a href="{{ route('news.details', $new->slug) }}" style="color: blue">Read More</a></p>
                                    

                                    
                                </a>
                            </div>
                        </div>
                    @endforeach

                @endif
            </div>
        </div>
    </div>
@endsection


@section('content')
    <section class="blog-sc pt-5 pb-3" id="blog-sc">
        <div class="container px-0">
            <div class="sw-cards row">
                @if (isset($news) )
                    @foreach ($news->skip(1) as $new)
                        <div class="col-lg-6 col-xl-4" data-aos="fade-up">
                            <a href="{{ route('news.details', $new->slug) }}">
                                <div class="sw-card bg-nero">
                                    <div class="sw-card-img img-cover">
                                        <img src="{{ asset($new->image) }}" alt="{{ $new->title }}">
                                            @foreach ($new->postMetas as $postMeta ) 
                                            @if ($postMeta->key == "category")
                                            <p class="category sw-card-p fw-3 fs-14">Category: {{ $postMeta->value}}</p>
                                            @endif
                                            @endforeach
                                    </div>
                                    <div class="sw-card-body text-white">
                                        <div class="sw-card-date fw-3 fs-14">{{ $new->created_at->format('jS M, Y') }}
                                        </div>
                                        <h6 class="sw-card-title fw-5 text-bright-gray">{{ $new->title }}</h6>
                                        <div class="bh-itm-author fs-12 ">By <span class="text-blue fw-5">{{ $new->author->name }}</span></div>
                                        <p class="sw-card-p fw-3 fs-14 mt-3">{{ $new->sub_title }}</p>
                                        <p class="bh-itm-txt fs-20 mt-3">{!! Str::limit($new->post_content, 130) !!}  <a href="{{ route('news.details', $new->slug) }}" style="color: blue">Read More</a></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <h4>
                        <center>No New News Found.</center>
                    </h4>
                @endif

            </div>

            <div class="d-flex justify-content-center">
                {{ $news->links() }}
            </div>
        </div>
    </section>

@endsection --}}

@push('scripts')
@endpush
