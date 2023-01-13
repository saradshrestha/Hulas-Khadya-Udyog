@extends('admin.partials.master')

@section('title','Edit Product')


@push('styles')
<link href="{{ asset('cork/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />

    <style>
     
        .images-preview-div img {
            padding: 10px !important;
            max-width: 160px !important;
        }

        .image-wrapper {
            position: relative;
            width: 200px;
            background: #CCC;
            text-align: center;
            margin: 20px;
            float: left;

        }

        .image-remove {
            position: absolute;
            top: 0px;
            right: 0px;
            color: #FFF;
            background: black;
            height: 20px;
            width: 20px;
            border-radius: 100%;
            text-align: center;
            line-height: 20px;
            cursor: pointer;
        }

        .highlight_feature .note-editor.note-frame.card{
            height: 170px;
        }
        .custom-file-container__image-preview{
            margin: 0px !important;
        }
        .table > tbody > tr > td{
            width:auto;
        }
    </style>
@endpush

@section('contents')
    
<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="col-lg-12">
          
                <div class="row  mt-2">
                    <div class="col-xl-6 col-md-6 col-sm-6 col-12">
                        <h4>Edit product</h4>
                    </div>
                    <div class="col-md-6 text-md-right ">
                        <a href="{{ route('admin.finishedProduct.index') }}" class=" btn btn-primary">Back to all product</a>
                    </div>
                </div>
             
                <div class="widget-content ">
                    <form action="{{ route('admin.finishedProduct.update', $product->slug) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @include('Product::admin.finishedProducts.commonform')

                    </form>

                </div>
         
        </div>
    </div>
</div>
@endsection
@push('scripts')

<script src="{{ asset('cork/plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>


     
    <script>
        @if ($product->image_id)
            var importedBaseImage1 = "{{ getThumbnailUrl($product->image_id) }}"
        
            var firstUpload = new FileUploadWithPreview('feature_image', {
            images: {
            baseImage: importedBaseImage1,
            },
            })
        @else
            var firstUpload = new FileUploadWithPreview('feature_image');
        @endif
       
    </script>

<script>
   
    
    $(".tagging").select2({
        tags: true
    });

    $(document).on("keyup", "#title", function() {
        var post_title = $(this).val();
        $('#img_title').val(post_title);
        $('#img_alt').val(post_title);
    });

</script>


@endpush
