@extends('admin.partials.master')

@section('title','Add Team')

@push('styles')
<link href="{{ asset('cork/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
@endpush    

@section('contents')
<div class="layout-px-spacing">
   
    <div class="row mt-4">
        <div class="col-md-6">
            <h1 class="h3">Add Team</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <a href="{{ route('admin.team.index') }}" class=" btn btn-primary">Back To All Teams</a>
        </div>
    </div>
    <div class="row">

        <div id="card_1" class="col-lg-12 layout-spacing layout-top-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header" style="padding: 22px 29px;">
                    <form action="{{ route('admin.team.store') }}" method="POST"
                        enctype="multipart/form-data">
                    @csrf
                    @include('Team::admin.commonform')
                    <div class="col-md-12">
                    <div class="form-group">
                        <button class="btn btn-md btn-primary float-right">Submit</button>
                    </div>
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
        var firstUpload = new FileUploadWithPreview('image');

      

        
         $(".tagging").select2({
            tags: true
        });

       
    </script>
    
@endpush
