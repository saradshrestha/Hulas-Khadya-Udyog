<div class="row layout-spacing">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Name <span class="text-danger">*</span></label>
            {!! Form::text('name', old('name')??$testimonial->name??'', ['class' => 'form-control', 'placeholder' => 'Name...','id' =>'name', 'required' => 'required']) !!}
            @if ($errors->has('name'))
                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
            @endif
        </div>

    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="address">Address <span class="text-danger">*</span></label>
            {!! Form::text('address', old('address')??$testimonial->address??'', ['class' => 'form-control', 'placeholder' => 'Address...','id' =>'address', 'required' => 'required']) !!}
            @if ($errors->has('address'))
                <div class="alert alert-danger">{{ $errors->first('address') }}</div>
            @endif
        </div>

    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="address">Company Name <span class="text-danger">*</span></label>
            {!! Form::text('company_name', old('company_name')??$testimonial->company_name??'', ['class' => 'form-control', 'placeholder' => 'Company Name...','id' =>'company_name', 'required' => 'required']) !!}
            @if ($errors->has('company_name'))
                <div class="alert alert-danger">{{ $errors->first('company_name') }}</div>
            @endif
        </div>

    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="status">Status <span class="text-danger">*</span></label>
            <select name="status" class="form-control" required>
                <option value="Active" {{($testimonial->status ?? old('status'))  == "Active" ? 'selected': 'selected' }}>Active</option>
                <option value="Inactive"  {{($testimonial->status ?? old('status'))  == "Inactive" ? 'selected': '' }}>Inactive</option>
            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <div class="custom-file-container" data-upload-id="image">
                <label>User Image<a href="javascript:void(0)" class="custom-file-container__image-clear"
                        title="Clear Image">x</a></label>
                <label class="custom-file-container__custom-file">
                    <input type="file" class="custom-file-container__custom-file__custom-file-input"
                        name="image" accept="image/*">
                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                </label>
                <div class="custom-file-container__image-preview"></div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <div class="custom-file-container" data-upload-id="company_logo">
                <label>Company Logo<a href="javascript:void(0)" class="custom-file-container__image-clear"
                        title="Clear Image">x</a></label>
                <label class="custom-file-container__custom-file">
                    <input type="file" class="custom-file-container__custom-file__custom-file-input"
                        name="company_logo" accept="image/*">
                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                </label>
                <div class="custom-file-container__image-preview"></div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>Message</label>
            <textarea class="form-control" name="description">{{ $testimonial->description ?? old('description') }}</textarea>
        </div>
    </div>













