@extends('front.layouts.master')
@section('pageTitle', 'About Us | ' . getSiteSetting('site_title'))

@push('styles')
@endpush

@section('banner')  
    @include('front.about.aboutbanner')
@endsection

@section('content')
    
<section class = "about-sc pb-3" id = "about-sc">
    <div class = "container px-0">
        <div class = "about-itms">
            <div class = "row about-itm mt-4">
                <div class = "col-lg-6 about-itm-l">
                    {{-- <div class = "about-itm-title my-4">
                        <h4 class = "fw-5 fs-36">SKYWORTH</h4>
                    </div> --}}
                    {!! getSiteSetting('about') ?? '' !!}
                </div>
                <div class = "col-lg-6 about-itm-r">
                    <img src = "{{ asset(getSiteSetting('about_us_image')) }}" alt="Skyworth">
                </div>
            </div>
            <div class = "row about-itm mt-4 mt-xxl-5">
                <div class = "col-lg-6 about-itm-l">
                    <img src = "{{ asset(getSiteSetting('about_us_kldugar_image')) }}" alt="K.L. Dugar Group">
                </div>
                <div class = "col-lg-6 about-itm-r">
                    <div class = "about-itm-title">
                        <h4 class = "fw-5" style="font-size: 30px;">K.L. Dugar Group</h4>
                    </div>
                    {!! getSiteSetting('kldugar_about') ?? '' !!}
                </div>
                
            </div>

            {{-- @if(isset($brandStrategies) && count($brandStrategies) > 0)
            <div class = "about-itm">
                <div class = "about-itm-title text-center my-4">
                    <h4 class = "fw-5 fs-36 text-capitalize">Brand Strategy</h4>
                </div>
                <div class = "row about-block">
                    <div class = "about-block-l col-lg-8 px-0">
                        <div class = "row">
                           
                            @foreach($brandStrategies->take(2)  as $brandStrategy)
                                @if($brandStrategy->postMetas->count() ==0 )
                                    <div class = "col-12 px-0 col-md-6 col-xxl-12">
                                        <div class = "about-block-itm img-cover">
                                            <img src = "{{ asset($brandStrategy->image)}}">
                                            <div class = "about-block-itm-txt">
                                                <p class = "fw-5 fs-20">{{ $brandStrategy->title }}</p>
                                                <h4 class = "fw-5 fs-32">{{ $brandStrategy->sub_title }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                          
                            
                        </div>
                    </div>
                    <div class = "about-block-r col-lg-4 px-0">
                        <div class = "row">
                            @if(isset($brandStrategies) && count($brandStrategies) > 0)
                                @foreach($brandStrategies->skip(2)->take(1)  as $brandStrategy)
                                @if($brandStrategy->postMetas->count() ==0 )
                                    <div class = "col-12 px-0">
                                        <div class = "about-block-itm img-cover">
                                            <img src = "{{ asset($brandStrategy->image)}}">
                                            <div class = "about-block-itm-txt">
                                                <p class = "fw-5 fs-20">{{ $brandStrategy->title }}</p>
                                                <h4 class = "fw-5 fs-32">{{ $brandStrategy->sub_title }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endif --}}
            
        </div>
    </div>
</section>


@endsection
@push('scripts')
@endpush
