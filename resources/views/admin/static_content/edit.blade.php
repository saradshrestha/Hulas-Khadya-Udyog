@extends('admin.partials.master')

@section('title','Edit Content')


@push('styles')
<link href="{{ asset('cork/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/forms/switches.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/plugins/editors/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />


@endpush

@section('contents')

    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">
            <div id="breadcrumbArrowed" class="col-xl-12 col-lg-12 layout-top-spacing mb-3">
                @include('admin.partials.breadcrumbs', ['type'=>'edit', 'label'=>'Static Content', 'route'=>'static.content'])
            </div>
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="row">
                        <div class="col-lg-12 col-12 mx-auto">
                            {!! Form::open(['url'=>route('admin.static.content.update'), 'enctype'=>'multipart/form-data']) !!}
                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                            @include('admin.static_content.CommonFile.form')
                            {{Form::submit('Update',['class'=>'mt-4 btn btn-primary'])}}
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
<script src="{{ asset('cork/plugins/editors/quill/custom-quill.js') }}"></script>


<script>
    //First upload .
            @if(isset($blog->image) )
    var importedBaseImage = "{{ asset($blog->image) }}"
    var firstUpload = new FileUploadWithPreview('myFirstImage', {
        images: {
            baseImage: importedBaseImage,
        },
    })
            @else
    var firstUpload = new FileUploadWithPreview('myFirstImage')
    @endif
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
