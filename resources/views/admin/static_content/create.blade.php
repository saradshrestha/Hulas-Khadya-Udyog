@extends('admin.partials.master')

@section('title','Add Content')


@push('styles')
<link href="{{ asset('cork/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/forms/switches.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/components/tabs-accordian/custom-tabs.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/plugins/editors/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />

@endpush

@section('contents')

    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">
            <div id="breadcrumbArrowed" class="col-xl-12 col-lg-12 layout-top-spacing mb-3">
                @include('admin.partials.breadcrumbs', ['type'=>'create', 'label'=>'Static Content', 'route'=>'static.content'])
            </div>
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="row">
                        <div class="col-lg-12 col-12 mx-auto">
                            {!! Form::open(['url'=>route('admin.static.content.store'), 'enctype'=>'multipart/form-data']) !!}
                            @include('admin.static_content.CommonFile.form')
                            {{Form::submit('Submit',['class'=>'mt-4 btn btn-primary'])}}
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>




@endsection

@push('scripts')
<script src="{{ asset('cork/plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('cork/plugins/select2/custom-select2.js') }}"></script>
<script src="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>
<script src="{{ asset('cork/plugins/editors/quill/quill.js') }}"></script>
<script src="{{ asset('cork/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>


<script>
    var firstUpload = new FileUploadWithPreview('myFirstImage')
</script>

<script>
    $("input[type='file']").on("change", function() {

        fileSize = $(this).attr('file-size');
        if (fileSize) {
            if (this.files[0].size > parseInt(fileSize) * 1000000) {
                alert("Please upload file size max  " + fileSize + "MB. Thanks!!");
                $(this).val('');
            }
        }
    });
</script>

<script>
    $(document).ready(function() {
        $(".true_false").click(function() {
            var thisitem = $(this);
            if (thisitem.is(":checked")) {
                thisitem.val(1);
            } else {
                thisitem.val(0);
            }
        });
    });

    $(".tagging").select2({
        tags: true
    });
</script>




@endpush
