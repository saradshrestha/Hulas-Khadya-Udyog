@extends('admin.partials.master')

@push('styles')

    <link href="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork/assets/css/forms/switches.css') }}" rel="stylesheet" type="text/css" />


    <style>
        .custom-file-container__image-preview {
            height: 150px !important;
            width: auto !important;
            margin: 10px 0px !important;
        }
    </style>
@endpush

@section('contents')
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">
            <div id="breadcrumbArrowed" class="col-xl-12 col-lg-12 layout-top-spacing mb-3">
                @include('admin.partials.breadcrumbs', [
                    'type' => 'edit',
                    'label' => 'User',
                    'route' => 'user',
                ])
            </div>
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="row">
                        <div class="col-lg-12 col-12 mx-auto">
                            <div class="row">
                                <div class="col-md-8" style="border-right: solid 1px;">
                                    <legend>Change User Details</legend>
                                    {!! Form::open(['url' => route('admin.user.update'), 'enctype' => 'multipart/form-data']) !!}
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Full Name<span class="text-danger">*</span></p>
                                                <label for="title" class="sr-only">First Name</label>
                                                {{ Form::text('name', old('name') ?? ($user->name ?? ''), ['class' => 'form-control', 'placeholder' => 'Name...', 'required']) }}
                                                <small
                                                    class="text-danger alert-message">{{ $errors->first('name') }}</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Email<span class="text-danger">*</span></p>
                                                <label for="t-text" class="sr-only">Email</label>
                                                {{ Form::email('email', old('email') ?? ($user->email ?? ''), ['class' => 'form-control', 'placeholder' => 'Email...']) }}
                                                <small
                                                    class="text-danger alert-message">{{ $errors->first('email') }}</small>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p> Role<span class="text-danger">*</span></p>
                                                <label for="t-text" class="sr-only">Role</label>
                                                <select class="form-control basic" name="role">
                                                    <option
                                                        @if (isset($user->role)) {{ $user->role == 'Admin' ? 'selected' : '' }} @endif
                                                        value="Admin">Admin</option>
                                                    {{-- <option
                                                        @if (isset($user->role)) {{ $user->role == 'Editor' ? 'selected' : '' }} @endif
                                                        value="Editor">Editor</option> --}}
                                                    <option
                                                        @if (isset($user->role)) {{ $user->role == 'User' ? 'selected' : '' }} @endif
                                                        value="User">User</option>
                                                </select>
                                                <small
                                                    class="text-danger alert-message">{{ $errors->first('role') }}</small>
                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <p>Phone</p>
                                                <label for="t-text" class="sr-only">Phone</label>
                                                {{ Form::number('phone', old('phone') ?? ($user->phone ?? ''), ['class' => 'form-control', 'placeholder' => 'Phone...']) }}
                                                <small
                                                    class="text-danger alert-message">{{ $errors->first('phone') }}</small>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control basic" name="status">
                                                 
                                                    <option
                                                        @if (isset($user->status)) {{ $user->status == 'Active' ? 'selected' : '' }} @endif
                                                        value="Active"  >Active</option>
                                                    <option
                                                        @if (isset($user->status)) {{ $user->status == 'Inactive' ? 'selected' : '' }} @endif
                                                        value="Inactive" >Inactive</option>
                                                </select>
                                                <small
                                                    class="text-danger alert-message">{{ $errors->first('role') }}</small>
                                            </div>

                                            <div class="row justify-content-end">
                                                {{ Form::submit('Update', ['class' => 'mt-4 btn btn-primary']) }}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                                    <label class="d-flex justify-content-between">User Image<a
                                                            href="javascript:void(0)" class="custom-file-container__image-clear "
                                                            title="Clear Image"> (Clear Image)</a></label>
                                                    <label class="custom-file-container__custom-file">
                                                        <input type="file"
                                                            class="custom-file-container__custom-file__custom-file-input"
                                                            accept="image/*" name="image" value="{{ $video->image ?? '' }}">
                                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                        <span
                                                            class="custom-file-container__custom-file__custom-file-control"></span>
                                                    </label>
                                                    <div class="custom-file-container__image-preview"></div>
                                                </div>
                                                <small class="text-danger alert-message">{{ $errors->first('image') }}</small>
                                            </div>

                                        </div>

                                       
                                     </div>
                                    {!! Form::close() !!}
                                </div>
                          

                                <div class="col-md-4">
                                    <legend>Change Password</legend>
                                    <form method="post"  action="{{ route('admin.user.passwordChange')}}">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ $user->id }}">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <p>Password<span class="text-danger">*</span></p>
                                                    <label for="t-text" class="sr-only">Password</label>
                                                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password...']) }}
                                                    <small
                                                        class="text-danger alert-message">{{ $errors->first('password') }}</small>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <p>Confirm Password<span class="text-danger">*</span></p>
                                                    <label for="t-text" class="sr-only">Confirm Password</label>
                                                    {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm Password...']) }}
                                                    <small
                                                        class="text-danger alert-message">{{ $errors->first('password_confirmation') }}</small>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row justify-content-end">
                                                    {{ Form::submit('Update', ['class' => 'mt-2 mr-2 btn btn-primary']) }}
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
        //First upload .
        @if (isset($user->image))
            var importedBaseImage = "{{ asset($user->image) }}"
            var firstUpload = new FileUploadWithPreview('myFirstImage', {
                images: {
                    baseImage: importedBaseImage,
                },
            })
        @else
            var firstUpload = new FileUploadWithPreview('myFirstImage')
        @endif
    </script>

@endpush
