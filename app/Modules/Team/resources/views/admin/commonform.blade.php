<div class="row layout-spacing">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Name <span class="text-danger">*</span></label>
            {!! Form::text('name', old('name') ?? ($team->name ?? ''), [
                'class' => 'form-control',
                'placeholder' => 'Name...',
                'id' => 'name',
                'required' => 'required',
            ]) !!}
            @if ($errors->has('title'))
                <div class="alert alert-danger">{{ $errors->first('title') }}</div>
            @endif
        </div>

    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="designation">Designation <span class="text-danger">*</span></label>
            {!! Form::text('designation', old('designation') ?? ($team->designation ?? ''), [
                'class' => 'form-control',
                'placeholder' => 'Designation...',
                'id' => 'designation',
                'required' => 'required',
            ]) !!}
            @if ($errors->has('title'))
                <div class="alert alert-danger">{{ $errors->first('title') }}</div>
            @endif
        </div>

    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="status">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control" required>
                        <option value="Active"
                            {{ ($team->status ?? old('status')) == 'Active' ? 'selected' : 'selected' }}>Active</option>
                        <option value="Inactive" {{ ($team->status ?? old('status')) == 'Inactive' ? 'selected' : '' }}>
                            Inactive</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="status">Position <span class="text-danger">*</span></label>
                    <input type="number" min="1" class="form-control"
                        value="{{ $team->position ?? old('position') }}" name="position" placeholder="Position...">

                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="fb_link">Facebook Link <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="{{ $team->fb_link ?? old('fb_link') }}"
                        name="fb_link" placeholder="Facebook link...">

                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="insta_link">Instagram Link <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="{{ $team->insta_link ?? old('insta_link') }}"
                        name="insta_link" placeholder="Instagram Link...">

                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="twitter_link">Twitter Link <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="{{ $team->twitter_link ?? old('twitter_link') }}"
                        name="twitter_link" placeholder="Twitter Link...">

                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="linkedin_link">Linked In Link <span class="text-danger">*</span></label>
                    <input type="text" class="form-control"
                        value="{{ $team->linkedin_link ?? old('linkedin_link') }}" name="linkedin_link"
                        placeholder="Linked In Link...">

                </div>
            </div>
        </div>

    </div>
    <div class="col-md-6">
        <div class="form-group">
            <div class="custom-file-container" data-upload-id="image">
                <label>Image<a href="javascript:void(0)" class="custom-file-container__image-clear"
                        title="Clear Image">x</a></label>
                <label class="custom-file-container__custom-file">
                    <input type="file" class="custom-file-container__custom-file__custom-file-input" name="image"
                        accept="image/*">
                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                </label>
                <div class="custom-file-container__image-preview"></div>
            </div>
        </div>
    </div>
