<div class = "header-wrapper">
    <div class = "container">
        <!-- header slider -->
{{-- @dd($offers) --}}
        <div class = "header-slider owl-theme owl-carousel">
            @if (isset($offers) && $offers->count() > 0)
                @foreach ($offers as $offer )
                    <div class = "header-content row align-items-center">
                        <div class = "header-l col-xl-6 text-white text-center text-xl-start">
                            <h1 class = "d-flex align-items-center header-title justify-content-center justify-content-xl-start bounce-in-top">
                                {{ $offer->title }}
                            </h1>
                            <p class = "header-p fw-3">{{ $offer->sub_title }}
                            </p>
                        </div>

                        <div class = "header-r mt-1 mt-xl-0 col-xl-6" data-aos = "fade-left">
                            <img src = "{{ asset($offer->image) }}" alt = "{{ $offer->title }}" class = "mx-auto">
                        </div>
                    </div>
                @endforeach
            @endif
            {{-- <div class = "header-content row align-items-center">
                <div class = "header-l col-xl-6 text-white text-center text-xl-start">
                    <h1 class = "d-flex align-items-center header-title justify-content-center justify-content-xl-start bounce-in-top">
                        SKYWORTH SPECIAL OFFERS
                    </h1>
                    <p class = "header-p fw-3">A must have Washing Machine that gives you the powerful clean you love without any hassle.
                    </p>
                </div>

                <div class = "header-r mt-5 mt-xl-0 col-xl-6" data-aos = "fade-left">
                    <img src = "{{ asset('frontendFiles/assets/images/pg-product/product-banner-1.png')}}" alt = "" class = "mx-auto">
                </div>
            </div> --}}
        </div>
        <!-- end of header slider -->
    </div>
</div>