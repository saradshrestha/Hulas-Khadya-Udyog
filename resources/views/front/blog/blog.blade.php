@extends('front.layouts.master')
@section('pageTitle', 'Blogs | ' . getSiteSetting('site_title'))
@push('styles')
@endpush

@section('banner')
    <div class="blog-hero-wrapper">
        <div class="container px-0">
            <div class="blog-hero">
                <div class="blog-hero-title px-2 py-2">
                    <h3 class="fw-5 mt-2">Blogs</h3>
                </div>

                @if (isset($blogs) && count($blogs) > 0)

                    @foreach ($blogs->take(1) as $blog)
                        <div class="row align-items-center">
                            <div class="blog-hero-l col-lg-6">
                                <a href="{{ route('blogs.details', $blog->slug) }}">

                                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                                </a>
                            </div>
                            <div class="blog-hero-r col-lg-6 mt-4 mt-lg-0">
                                <div class="bh-itm-date fs-12 fw-5">{{ $blog->created_at->format('jS M, Y') }}</div>
                                <a href="{{ route('blogs.details', $blog->slug) }}">
                                    <h2 class="bh-itm-title fw-5 fs-24 mt-2">{{ $blog->title }}</h2>
                                </a>
                                {{-- <div class="bh-itm-author fs-12">By <span
                                        class="text-blue fw-5">{{ $blog->author->name }}</span></div> --}}
                                <p class="bh-itm-txt fs-16 mt-2">{{ $blog->sub_title }}</p>
                                <p class="bh-itm-txt fs-16 mt-2">
                                    {{-- {!! str_limit(strip_tags($blog->post_content), $limit = 50, $end = '...') !!} --}}
                                    {{ Str::limit(strip_tags($blog->post_content, 350)) }}
                                    <a href="{{ route('blogs.details', $blog->slug) }}" style="color: blue">Read More</a>
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
                @if (isset($blogs) && count($blogs) > 0)
                    @foreach ($blogs->skip(1) as $blog)
                        <div class="col-lg-6 col-xl-4" data-aos="fade-up">
                            <a href="{{ route('blogs.details', $blog->slug) }}">
                                <div class="sw-card bg-nero">
                                    <div class="sw-card-img img-cover ">
                                        <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                                    </div>
                                    <div class="sw-card-body text-white">
                                        <div class="sw-card-date fw-3 fs-12 pt-2">
                                            {{ $blog->created_at->format('jS M, Y') }}
                                        </div>
                                        <h6 class="sw-card-title fw-5 text-bright-gray">{{ $blog->title }}</h6>
                                        {{-- <div class="bh-itm-author fs-12">By 
                                            <span class="text-blue fw-5">{{ $blog->author->name }}</span>
                                        </div> --}}
                                        <p class="bh-itm-txt fs-16 mt-2">{{ Str::limit(strip_tags($blog->post_content, 100  ))  }}
                                            <a href="{{ route('blogs.details', $blog->slug) }}" style="color: blue">Read More</a>
                                            
                                        </p>
                                     </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <h4>
                        <center>No New Blogs Found.</center>
                    </h4>
                @endif

            </div>

            <div class="d-flex justify-content-center">
                {{ $blogs->links() }}
            </div>
        </div>
    </section>

@endsection

@push('scripts')
@endpush
