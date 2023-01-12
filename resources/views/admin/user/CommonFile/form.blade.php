<div class="row">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <p>Full Name<span class="text-danger">*</span></p>
                    <label for="name" class="sr-only">First Name</label>
                    {{ Form::text('name', old('name') ?? ($user->name ?? ''), ['class' => 'form-control', 'placeholder' => 'Name...', 'required']) }}
                    <small class="text-danger alert-message">{{ $errors->first('name') }}</small>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <p>Email<span class="text-danger">*</span></p>
                    <label for="t-text" class="sr-only">Email</label>
                    {{ Form::email('email', old('email') ?? ($user->email ?? ''), ['class' => 'form-control', 'placeholder' => 'Email...']) }}
                    <small class="text-danger alert-message">{{ $errors->first('email') }}</small>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-sm-6">
                <div class="form-group">
                    <p> Role<span class="text-danger">*</span></p>
                    <label for="t-text" class="sr-only">Role</label>
                    <select class="form-control basic" name="role">
                        <option selected>Choose a Role.</option>
                        <option @if (isset($user->role)) {{ $user->role == 'Admin' ? 'selected' : '' }} @endif
                            value="Admin">Admin</option>
                        {{-- <option @if (isset($user->role)) {{ $user->role == 'Editor' ? 'selected' : '' }} @endif
                            value="Editor">Editor</option> --}}
                        <option @if (isset($user->role)) {{ $user->role == 'User' ? 'selected' : '' }} @endif
                            value="User">User</option>
                    </select>
                    <small class="text-danger alert-message">{{ $errors->first('role') }}</small>
                </div>
            </div>

            <div class="col-sm-6">

                <div class="form-group">
                    <p>Phone</p>
                    <label for="t-text" class="sr-only">Phone No.</label>
                    {{ Form::number('phone', old('phone') ?? ($user->phone ?? ''), ['class' => 'form-control', 'placeholder' => 'Phone No...']) }}
                    <small class="text-danger alert-message">{{ $errors->first('phone') }}</small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <p>Password<span class="text-danger">*</span></p>
                    <label for="t-text" class="sr-only">Password</label>
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password...']) }}
                    <small class="text-danger alert-message">{{ $errors->first('password') }}</small>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <p>Confirm Password<span class="text-danger">*</span></p>
                    <label for="t-text" class="sr-only">Confirm Password</label>
                    {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm Password...']) }}
                    <small class="text-danger alert-message">{{ $errors->first('password_confirmation') }}</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">

        <div class="form-group">
            <p>User Image</p>
            <div class="custom-file-container" data-upload-id="myFirstImage">
                <label>Clear <a href="javascript:void(0)" class="custom-file-container__image-clear"
                        title="Clear Image">x</a></label>
                <label class="custom-file-container__custom-file">
                    <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*"
                        name="image" value="{{ $video->image ?? '' }}">
                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                </label>
                <div class="custom-file-container__image-preview"></div>
            </div>
            <small class="text-danger alert-message">{{ $errors->first('image') }}</small>
        </div>

    </div>
</div>
