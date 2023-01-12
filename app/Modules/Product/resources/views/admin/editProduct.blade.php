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
                        <a href="{{ route('admin.product.allProducts') }}" class=" btn btn-primary">Back to all product</a>
                    </div>
                </div>
             
                <div class="widget-content ">
                    <form action="{{ route('admin.product.editProductSubmit', $product->slug) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @include('Product::admin.commonform')
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
        $(function() {
            // Multiple images preview with JavaScript
            var previewImages = function(input, imgPreviewPlaceholder) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            console.log(event.target.result);
                            var appendData = '<div class="image-wrapper">' +
                                '<div class="image-remove"> x </div>' +
                                '<img src="' + event.target.result + '"></div>';
                            $(imgPreviewPlaceholder).append(appendData);
                            // appendData.append(
                            //     imgPreviewPlaceholder);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };

            $(document).on('change', '#images', function() {
                previewImages(this, 'div.images-preview-div');
            });
        });
        
        $(".tagging").select2({
            tags: true
        });

        $(document).on("keyup", "#title", function() {
            var post_title = $(this).val();
            $('#img_title').val(post_title);
            $('#img_alt').val(post_title);
        });

    </script>


    <script>
        function generateRandomInteger() {
            return Math.floor(Math.random() * 90000) + 10000;
        }

        jQuery(document).on('click', '.btn-delete-specifications', function(e) {
            e.preventDefault();
            var $this = $(this);
            $this.closest("tr").remove();
        });

        jQuery(document).on('click', '.btn-add-specifications', function(e) {
            e.preventDefault();
            // console.log('tgd');
            var lastRow = $('table.table-specifications > tbody > tr').last().attr('data-row');
            var counter = lastRow ? parseInt(lastRow) + 1 : 1;
            var randomInteger = generateRandomInteger();
            var newRow = jQuery('<tr data-row="' + counter + '">' +
                '<td>' + counter + '</td>' +
                '<td><textarea name="spec[' + randomInteger +
                '][title]" class="form-control" required></textarea></td>' +
                // '<td><input type="text" name="features[feature][' + randomInteger + ']" class="form-control" required/></td>' +
                '<td>' + '<input type="file" name="spec[' + randomInteger +
                '][image]" class="form-control" required>' +
                '</td>' +
                '<td><button type="button" class="btn btn-primary btn-sm btn-delete-specifications" data-feature="">Delete</button></td>' +
                '</tr>');
            jQuery('table.table-specifications').append(newRow);
        });
    </script>
    <script>
        @if ($product->feature_image)
            var importedBaseImage1 = "{{ getThumbnailUrl($product->feature_image) }}"
        
            var firstUpload = new FileUploadWithPreview('feature_image', {
            images: {
            baseImage: importedBaseImage1,
            },
            })
        @else
            var firstUpload = new FileUploadWithPreview('category_logo');
        @endif



        jQuery('.product-image-element').change(function(e) {
            var files = e.target.files;
            if (files.length <= 0) {
                return;
            }
            var formData = new FormData();
            formData.append('_token', jQuery(e.target).attr('data-token'));
            for (var i = 0, file; file = files[i]; ++i) {
                formData.append('image', file);
            }
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '{{ route('admin.product.image.upload') }}', true);
            xhr.onload = function(e) {
                if (this.status === 200) {
                    jQuery('.product-image-list').append(this.response);
                    if (jQuery('.product-image-list .image-preview').length === 1) {
                        jQuery('.product-image-list .image-preview .is_main_image_button').trigger('click');
                    }
                }
            };
            xhr.send(formData);
            jQuery(".product-image-element").val('');
        });

        jQuery(document).on('click', '.image-remove', function(e) {
            e.preventDefault();
          
            var currentthis = $(this);
            var imageid = $(this).attr('data-id');
            var productid = $(this).attr('data-productid');
            if (imageid == null) {
                $(this).parent().remove();
                return false;
            }
         
                var url =  "{{ route('admin.product.deleteProductImage',':id') }}";
                var deleteurl = url.replace(':id', productid);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "GET",
                    url: deleteurl,
                   data:{
                        'imageid' : imageid
                   },
                    beforeSend: function() {
                       
                    },
                    success: function(data) {
                        toastr.success(data.message);
                        
                        currentthis.parent().remove();
                   

                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        //
                    },
                    complete: function() {
                        
                    }
                });    
               
            




        });
    </script>



@endpush
