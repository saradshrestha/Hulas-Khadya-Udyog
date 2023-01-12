@extends('admin.partials.master')

@push('styles')

<link href="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />

@endpush

@section('contents')

    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">
            <div id="breadcrumbArrowed" class="col-xl-12 col-lg-12 layout-top-spacing mb-3">
                @include('admin.partials.breadcrumbs', ['type'=>'create', 'label'=>'User', 'route'=>'user'])
            </div>
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="row">
                        <div class="col-lg-12 col-12 mx-auto">
                            {!! Form::open(['url'=>route('admin.user.store'), 'enctype'=>'multipart/form-data']) !!}
                            @include('admin.user.CommonFile.form')
                            <div class="row justify-content-center">
                                {{Form::submit('Submit',['class'=>' btn btn-primary'])}}
                            </div>
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>




@endsection

@push('scripts')

<script src="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>


<script>
    var firstUpload = new FileUploadWithPreview('myFirstImage')
</script>





@endpush
