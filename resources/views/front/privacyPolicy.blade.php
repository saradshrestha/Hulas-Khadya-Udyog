
@extends('front.layouts.master')
@section('pageTitle', $policy->title ?? ''.' | '.getSiteSetting('site_title'))
@push('styles')

@endpush

@section('banner')
<div class = "about-hero-wrapper d-flex align-items-center "  
        style="background: url('{{asset('frontendFiles/assets/images/pg-about/about-hero-img.png')}}') center/cover no-repeat;
            min-height: 325px;">
    <div class = "container px-0">
        <div class = "contact-hero">
            <div class = "row">
                <div class = "offset-lg-6 col-lg-6">
                    <div class = "contact-hero-title text-center text-lg-start">
                        <h3 class = "fw-3 fs-48 text-uppercase my-0">{{ $policy->title }}</h3>
                        <p class = "fw-5 fs-20">{{ $policy->sub_title ?? '' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

<section class = "about-sc pb-3 mt-4" id = "about-sc">
        <div class = "container px-0 ">

            <div class = "about-itms">
                <div class = "row about-itm align-items-center">
                    <div class = "col-lg-12 about-itm-l">
                        <div class = "about-itm-title my-4">
                            <h4 class = "fw-5 fs-36">{{ $policy->title }}</h4>
                        </div>
                        {!! $policy->post_content ?? '' !!}
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')

@endpush