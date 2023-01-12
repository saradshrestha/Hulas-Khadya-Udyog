@extends('admin.partials.master')

@section('title','Edit Category')

@push('styles')
<link href="{{ asset('cork/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />

@endpush
@section('contents')
<div class="layout-px-spacing">

    <div class="row align-items-center mt-3">
        <div class="col-md-6">
            <h1 class="h3">Edit Category</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <a href="{{ route('admin.category.allCategory') }}" class=" btn btn-primary">Back to all category</a>
        </div>
    </div>

    <div class="row">

        <div id="card_1" class="col-lg-12 layout-spacing layout-top-spacing">
            <div class="statbox widget box box-shadow" >
                <div class="widget-header" style="padding: 22px 29px;">
                    <form action="{{ route('admin.category.editCategorySubmit', $category->slug) }}" method="POST"
                        enctype="multipart/form-data">
                        <input type="hidden" value="{{ $category->id }}" name="category_id">
                        @csrf
                        @include('Category::admin.commonform')
                        <div class="form-group">
                            <button class="btn btn-md btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                {{-- <div class="widget-content widget-content-area">
                @include('Files::admin.images');
            </div> --}}
            </div>
        </div>

    </div>
</div>

@endsection

@push('scripts')
  
<script src="{{ asset('cork/plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>

    <script>
     
        @if ($category->banner_url)
            var importedBaseImage2 = "{{ asset($category->banner_url) }}"
            var SecondUpload = new FileUploadWithPreview('category_banner', {
            images: {
            baseImage: importedBaseImage2,
            },
            })
        @else
            var SecondUpload = new FileUploadWithPreview('category_banner');
        @endif

        @if ($category->logo_url)
            var importedBaseImage1 = "{{ asset($category->logo_url) }}"
            var FirstUpload = new FileUploadWithPreview('category_logo', {
            images: {
            baseImage: importedBaseImage1,
            },
            })
        @else
            var FirstUpload = new FileUploadWithPreview('category_logo');
        @endif
        
        
        $(".tagging").select2({
        tags: true
    });
    </script>

    <script>
       $(document).on("keyup", "#title", function() {
            var post_title = $(this).val();
            $('#img_title').val(post_title);
            $('#img_alt').val(post_title);
        });
    </script>
    


@endpush
