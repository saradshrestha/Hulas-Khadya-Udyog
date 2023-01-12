@extends('admin.partials.master')

@section('title', 'Site Setting')

@push('styles')
    <link href="{{ asset('cork/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('contents')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div id="breadcrumbArrowed" class="col-xl-12 col-lg-12 layout-top-spacing mb-3">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Site Setting</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area text-center">
                        <div class="row">
                            <div class="col-sm-12">
                                <nav class="breadcrumb-two" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active"><a href="{{ route('admin.site') }}">Site
                                                Setting</a></li>

                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    {!! Form::open(['url' => route('admin.site.update'), 'enctype' => 'multipart/form-data']) !!}

                    <div class="form-group">
                        <p>Site Title<span class="text-danger">*</span></p>
                        <label for="title" class="sr-only">Site Title</label>
                        {{ Form::text('site_title', old('site_title') ?? (getSiteSetting('site_title') ?? ''), ['class' => 'form-control', 'placeholder' => 'Site Title...', 'required']) }}
                        <small class="text-danger alert-message">{{ $errors->first('first_name') }}</small>
                    </div>

                    <div class="form-group">
                        <p>Site Description<span class="text-danger">*</span></p>
                        <label for="title" class="sr-only">Site Description</label>
                        {{ Form::text('site_Description', old('site_Description') ?? (getSiteSetting('site_Description') ?? ''), ['class' => 'form-control', 'placeholder' => 'Site Description...', 'required']) }}
                        <small class="text-danger alert-message">{{ $errors->first('site_Description') }}</small>
                    </div>

                    <div class="form-group">
                        <p>Site Keywords</p>
                        <label for="t-text" class="sr-only">Site Keywords</label>
                        @php
                            $siteKeywords = getSiteSetting('site_keyword');
                            if ($siteKeywords) {
                                $siteKeywords = unserialize($siteKeywords);
                            }
                        @endphp
                        <select class="form-control tagging" multiple="multiple" name="site_keyword[]">
                            @if (is_array($siteKeywords))
                                @foreach ($siteKeywords as $keyword)
                                    <option selected value="{{ $keyword }}">{{ $keyword }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>




                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="title">Primary Phone</label>
                            {{ Form::number('primary_phone', old('primary_phone') ?? (getSiteSetting('primary_phone') ?? ''), ['class' => 'form-control', 'placeholder' => 'Primary Phone...', 'required']) }}
                            <small class="text-danger alert-message">{{ $errors->first('primary_phone') }}</small>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="title">Secondary Phone</label>
                            {{ Form::number('secondary_phone', old('secondary_phone') ?? (getSiteSetting('secondary_phone') ?? ''), ['class' => 'form-control', 'placeholder' => 'Secondary Phone...']) }}
                            <small class="text-danger alert-message">{{ $errors->first('secondary_phone') }}</small>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="title">Primary Email</label>
                            {{ Form::email('primary_email', old('primary_email') ?? (getSiteSetting('primary_email') ?? ''), ['class' => 'form-control', 'placeholder' => 'Primary Email...', 'required']) }}
                            <small class="text-danger alert-message">{{ $errors->first('primary_email') }}</small>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="title">Secondary Email</label>
                            {{ Form::email('secondary_email', old('secondary_email') ?? (getSiteSetting('secondary_email') ?? ''), ['class' => 'form-control', 'placeholder' => 'Secondary Email...']) }}
                            <small class="text-danger alert-message">{{ $errors->first('secondary_email') }}</small>
                        </div>

                        <div class="form-group col-md-6">
                            <p>Address<span class="text-danger">*</span></p>
                            <label for="title" class="sr-only">Address</label>
                            {{ Form::text('address', old('address') ?? (getSiteSetting('address') ?? ''), ['class' => 'form-control', 'placeholder' => 'Address...']) }}
                            <small class="text-danger alert-message">{{ $errors->first('address') }}</small>
                        </div>

                        <div class="form-group col-md-6">
                            <p>Daraz Shop Site Link<span class="text-danger">*</span></p>
                            <label for="daraz_site_link" class="sr-only">Daraz Shop Site Link</label>
                            {{ Form::text('daraz_site_link', old('daraz_site_link') ?? (getSiteSetting('daraz_site_link') ?? ''), ['class' => 'form-control', 'placeholder' => 'https://www...', 'required']) }}
                            <small class="text-danger alert-message">{{ $errors->first('daraz_site_link') }}</small>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="fb_link">Facebook Link</label>
                            {{ Form::text('fb_link', old('fb_link') ?? (getSiteSetting('fb_link') ?? ''), ['class' => 'form-control', 'placeholder' => 'Facebook Link...']) }}
                            <small class="text-danger alert-message">{{ $errors->first('fb_link') }}</small>
                        </div>

                        <div class="form-group col-md-3">

                            <label for="insta_link">Instagram Link</label>
                            {{ Form::text('insta_link', old('insta_link') ?? (getSiteSetting('insta_link') ?? ''), ['class' => 'form-control', 'placeholder' => 'Instagram Link...']) }}
                            <small class="text-danger alert-message">{{ $errors->first('insta_link') }}</small>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="youtube_link">Youtube Link</label>
                            {{ Form::text('youtube_link', old('youtube_link') ?? (getSiteSetting('youtube_link') ?? ''), ['class' => 'form-control', 'placeholder' => 'Youtube Link...']) }}
                            <small class="text-danger alert-message">{{ $errors->first('youtube_link') }}</small>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="title">Twitter Link</label>
                            {{ Form::text('twitter_link', old('twitter_link') ?? (getSiteSetting('twitter_link') ?? ''), ['class' => 'form-control', 'placeholder' => 'Twitter Link...']) }}
                            <small class="text-danger alert-message">{{ $errors->first('twitter_link') }}</small>
                        </div>

                    </div>

                    {{-- <div class="form-group">
                        <p>LinkedIn Link<span class="text-danger">*</span></p>
                        <label for="linkedin_link" class="sr-only">LinkedIn Link</label>
                        {{ Form::text('linkedin_link', old('linkedin_link') ?? (getSiteSetting('linkedin_link') ?? ''), ['class' => 'form-control', 'placeholder' => 'Facebook Link...']) }}
                        <small class="text-danger alert-message">{{ $errors->first('linkedin_link') }}</small>
                    </div> --}}



                    {{-- <div class="form-group">
                        <p>Map Location<span class="text-danger">*</span></p>
                        <label for="title" class="sr-only">Map Location</label>
                        {{ Form::text('map_location', old('map_location') ?? (getSiteSetting('map_location') ?? ''), ['class' => 'form-control', 'placeholder' => 'Map Location...', 'required']) }}
                        <small class="text-danger alert-message">{{ $errors->first('map_location') }}</small>
                    </div> --}}

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title">Message From President<span class="text-danger">*</span></label>
                            {{ Form::textarea('message', old('message') ?? (getSiteSetting('message') ?? '')) }}
                            <small class="text-danger alert-message">{{ $errors->first('message') }}</small>
                        </div>
                        <div class="form-group col-md-6">

                            <label for="title">About Us<span class="text-danger">*</span></label>
                            {{ Form::textarea('about', old('about') ?? (getSiteSetting('about') ?? '')) }}
                            <small class="text-danger alert-message">{{ $errors->first('about') }}</small>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5>Images</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <p>President Image</p>
                                        <div class="custom-file-container" data-upload-id="presidentImage">
                                            <label>Clear <a href="javascript:void(0)"
                                                    class="custom-file-container__image-clear"
                                                    title="Clear Image">x</a></label>
                                            <label class="custom-file-container__custom-file">
                                                <input type="file"
                                                    class="custom-file-container__custom-file__custom-file-input"
                                                    accept="image/*" name="president_image">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                <span
                                                    class="custom-file-container__custom-file__custom-file-control"></span>
                                            </label>
                                            <div class="custom-file-container__image-preview"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <p>About Us Image</p>
                                        <div class="custom-file-container" data-upload-id="myThirdImage">
                                            <label>Clear <a href="javascript:void(0)"
                                                    class="custom-file-container__image-clear"
                                                    title="Clear Image">x</a></label>
                                            <label class="custom-file-container__custom-file">
                                                <input type="file"
                                                    class="custom-file-container__custom-file__custom-file-input"
                                                    accept="image/*" name="about_us_image">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                <span
                                                    class="custom-file-container__custom-file__custom-file-control"></span>
                                            </label>
                                            <div class="custom-file-container__image-preview"></div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-3">
                                    <div class="form-group">
                                        <p>K.L. Dugar About Us Image</p>
                                        <div class="custom-file-container" data-upload-id="myFourthImage">
                                            <label>Clear <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                                    title="Clear Image">x</a></label>
                                            <label class="custom-file-container__custom-file">
                                                <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                                    accept="image/*" name="about_us_kldugar_image">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                                            </label>
                                            <div class="custom-file-container__image-preview"></div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <p>Site Logo</p>
                                        <div class="custom-file-container" data-upload-id="myFirstImage">
                                            <label>Clear <a href="javascript:void(0)"
                                                    class="custom-file-container__image-clear"
                                                    title="Clear Image">x</a></label>
                                            <label class="custom-file-container__custom-file">
                                                <input type="file"
                                                    class="custom-file-container__custom-file__custom-file-input"
                                                    accept="image/*" name="logo">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                <span
                                                    class="custom-file-container__custom-file__custom-file-control"></span>
                                            </label>
                                            <div class="custom-file-container__image-preview"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <p>Site Favicon</p>
                                        <div class="custom-file-container" data-upload-id="mySecondImage">
                                            <label>Clear <a href="javascript:void(0)"
                                                    class="custom-file-container__image-clear"
                                                    title="Clear Image">x</a></label>
                                            <label class="custom-file-container__custom-file">
                                                <input type="file"
                                                    class="custom-file-container__custom-file__custom-file-input"
                                                    accept="image/*" name="favicon">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                <span
                                                    class="custom-file-container__custom-file__custom-file-control"></span>
                                            </label>
                                            <div class="custom-file-container__image-preview"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- <div class="form-group">
                        <p>Footer About<span class="text-danger">*</span></p>
                        <label for="title" class="sr-only">Footer About</label>
                        {{ Form::textarea('footer_about', old('footer_about') ?? (getSiteSetting('footer_about') ?? '')) }}
                        <small class="text-danger alert-message">{{ $errors->first('footer_about') }}</small>
                    </div> --}}



                    {{ Form::submit('Update', ['class' => 'mt-4 btn btn-primary']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>
    <script src="{{ asset('cork/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('cork/plugins/select2/custom-select2.js') }}"></script>
    <script>
        $(".tagging").select2({
            tags: true
        });
        //First upload .
        @if (getSiteSetting('logo'))
            var importedBaseImage = "{{ asset(getSiteSetting('logo')) }}"
            var firstUpload = new FileUploadWithPreview('myFirstImage', {
                images: {
                    baseImage: importedBaseImage,
                },
            })
        @else
            var firstUpload = new FileUploadWithPreview('myFirstImage')
        @endif

        //Second upload .
        @if (getSiteSetting('favicon'))
            var importedBaseImage2 = "{{ asset(getSiteSetting('favicon')) }}"
            var mySecondImage = new FileUploadWithPreview('mySecondImage', {
                images: {
                    baseImage: importedBaseImage2,
                },
            })
        @else
            var firstUpload = new FileUploadWithPreview('mySecondImage')
        @endif

        //Third upload .
        @if (getSiteSetting('about_us_image'))
            var importedBaseImage3 = "{{ asset(getSiteSetting('about_us_image')) }}"
            var myThirdImage = new FileUploadWithPreview('myThirdImage', {
                images: {
                    baseImage: importedBaseImage3,
                },
            })
        @else
            var firstUpload = new FileUploadWithPreview('myThirdImage')
        @endif




        @if (getSiteSetting('president_image'))
            var presidentImageShow = "{{ asset(getSiteSetting('president_image')) }}"
            var ss = new FileUploadWithPreview('presidentImage', {
                images: {
                    baseImage: presidentImageShow,
                },
            })
        @else
            var firstUssspload = new FileUploadWithPreview('presidentImage')
        @endif
    </script>
@endpush
