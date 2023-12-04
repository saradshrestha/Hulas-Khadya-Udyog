@extends('admin.partials.master')

@section('title','Edit Testimonial')

@push('styles')
<link href="{{ asset('cork/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />

@endpush
@section('contents')
<div class="layout-px-spacing">

  

    <div class="row">

        <div id="card_1" class="col-lg-12 layout-spacing layout-top-spacing">
            <div class="statbox widget box box-shadow" >
                
                <div class="widget-header p-4">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h1 class="h3">Edit Testimonial</h1>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <a href="{{ route('admin.testimonial.index') }}" class=" btn btn-primary">Back To All Testimonials</a>
                        </div>
                    </div>
                    <hr>
                    <form action="{{ route('admin.testimonial.update', $testimonial->slug) }}" method="POST"
                        enctype="multipart/form-data">
                        <input type="hidden" value="{{ $testimonial->id }}" name="testimonial_id">
                        @csrf
                        @include('Testimonial::admin.commonform')

                        
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button class="btn btn-primary float-right">Submit</button>
                                </div>
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
     
        @if ($testimonial->image_id != null)
            var importedBaseImage2 = "{{ getOrginalUrl($testimonial->image_id) }}"
            var SecondUpload = new FileUploadWithPreview('image', {
            images: {
            baseImage: importedBaseImage2,
            },
            })
        @else
            var SecondUpload = new FileUploadWithPreview('image');
        @endif


        @if ($testimonial->company_logo != null)
            var importedBaseImage2 = "{{ getOrginalUrl($testimonial->company_logo) }}"
            var SecondUpload = new FileUploadWithPreview('company_logo', {
            images: {
            baseImage: importedBaseImage2,
            },
            })
        @else
            var SecondUpload = new FileUploadWithPreview('company_logo');
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
