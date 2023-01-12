@extends('admin.partials.master')

@section('title','Add Category')

@push('styles')
<link href="{{ asset('cork/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
@endpush    

@section('contents')
<div class="layout-px-spacing">
   
    <div class="row mt-4">
        <div class="col-md-6">
            <h1 class="h3">Add Category</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <a href="{{ route('admin.category.allCategory') }}" class=" btn btn-primary">Back to all categories</a>
        </div>
    </div>
    <div class="row">

        <div id="card_1" class="col-lg-12 layout-spacing layout-top-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header" style="padding: 22px 29px;">
                    {!! Form::open(['route' => 'admin.category.categorySubmit', 'method' => 'post', 'files' => true]) !!}
                    @csrf
                    @include('Category::admin.commonform')
                    <div class="form-group">
                        <button class="btn btn-md btn-primary">Submit</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

@push('scripts')
  
<script src="{{ asset('cork/plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>

    <script>
        var firstUpload = new FileUploadWithPreview('category_banner');

        var secondUpload = new FileUploadWithPreview('category_logo');
        // var SecondUpload = new FileUploadWithPreview('category_banner');
        
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
