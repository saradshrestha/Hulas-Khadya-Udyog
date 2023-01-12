<div class="row layout-spacing">
    <div class="col-md-9">
        <div class="form-group">
            <label for="name">Name <span class="text-danger">*</span></label>
            {!! Form::text('name', old('name')??$testimonial->name??'', ['class' => 'form-control', 'placeholder' => 'Name...','id' =>'name', 'required' => 'required']) !!}
            @if ($errors->has('title'))
                <div class="alert alert-danger">{{ $errors->first('title') }}</div>
            @endif
        </div>

    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="status">Status <span class="text-danger">*</span></label>
            <select name="status" class="form-control" required>
                <option value="Active" {{($testimonial->status ?? old('status'))  == "Active" ? 'selected': 'selected' }}>Active</option>
                <option value="Inactive"  {{($testimonial->status ?? old('status'))  == "Inactive" ? 'selected': '' }}>Inactive</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
        <div class="custom-file-container" data-upload-id="image">
            <label>Image<a href="javascript:void(0)" class="custom-file-container__image-clear"
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

    <div class="col-md-6">
        <div class="form-group">
            <label>Message</label>
            <textarea class="form-control" name="description">{{ $testimonial->description ?? old('description') }}</textarea>
        </div>
    </div>













