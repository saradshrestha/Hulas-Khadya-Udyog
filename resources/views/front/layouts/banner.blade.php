<div class="header-wrapper">
    <div class="">
        <div class="header-slider owl-theme owl-carousel img-cover">
            @if (isset($banners) && $banners->count() > 0)
                @foreach ($banners as $banner)
                {{-- @dd($banner) --}}
                    @php
                        $video_link = getPostFieldData($banner,'youtube-link');
                        // dd($video_link);
                    @endphp
                    @if( $video_link != null )
                        <video autoplay loop mute id="vid">
                            <source src="{{ asset($video_link) }}" type="video/mp4">
                        </video>
                    @else   
                        <img src="{{ asset($banner->image) }}" alt="banner_image" class="mx-auto"
                        style="max-width: 100% !important;">
                
                    @endif
                    {{-- @if ($banner->postMetas->count() > 0)
                        @foreach ($banner->postMetas as $postMeta)
                            @if ($postMeta->key == 'youtube-link')
                                <video autoplay loop mute id="vid">
                                    <source src="{{ asset($postMeta->value) }}" type="video/mp4">
                                </video>
                            @endif
                        @endforeach
                    @else
                        <img src="{{ asset($banner->image) }}" alt="banner_image" class="mx-auto"
                            style="max-width: 100% !important;">
                    @endif --}}
                @endforeach
            @endif
        </div>
    </div>
</div>
