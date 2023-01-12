<div class="row">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <p>Title<span class="text-danger">*</span></p>
                    <label for="title" class="sr-only">Title</label>
                    {{ Form::text('title', old('title') ?? ($blog->title ?? ''), ['class' => 'form-control', 'placeholder' => 'Title...', 'required']) }}
                    <small class="text-danger alert-message">{{ $errors->first('title') }}</small>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <p>Description<span class="text-danger">*</span></p>
                    <label for="t-text" class="sr-only">Description</label>
                    <textarea name="description" style="height: 150px;">{!! old('description') ?? ($blog->description ?? '') !!}</textarea>
                    <small class="text-danger alert-message">{{ $errors->first('description') }}</small>
                </div>
            </div>

        </div>

    </div>
    <div class="col-md-4">
        <div class="form-group">
            <p>Status</p>
            <label for="t-text" class="sr-only">Status</label>
            <select class="form-control basic" name="status">
                <option {{ isset($blog->status) ? ($blog->status == 'Active' ? 'selected' : '') : '' }} value="Active">Active
                </option>
                <option {{ isset($blog->status) ? ($blog->status == 'Inactive' ? 'selected' : '') : '' }} value="Inactive">
                    Inactive</option>
            </select>
            <small class="text-danger alert-message">{{ $errors->first('status') }}</small>
        </div>

        <div class="form-group">
            <p>Image</p>
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

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <p>Image Alt Text</p>
            <label for="t-text" class="sr-only">Image Alt Text</label>
            <input id="alt_txt" value="{{ old('img_alt') ?? $blog->seoable->img_alt ?? ''}}" type="text" name="img_alt"
                placeholder="Image Alt Text" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <p>Image Title</p>
            <label for="t-text" class="sr-only">Image Title</label>
            <input id="img_title" value="{{ old('img_title') ?? $blog->seoable->img_title ?? '' }}" type="text" name="img_title"
                placeholder="Image Title" class="form-control">
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group">
            <p>Meta Title</p>
            <label for="t-text" class="sr-only">Meta Title</label>
            <input id="meta_title" value="{{ old('meta_title') ?? ($blog->seoable->meta_title ?? '') }}" type="text"
                name="meta_title" placeholder="Meta Title..." class="form-control">
        </div>
    </div>
    <div class="col-md-6">

        <div class="form-group">
            <p>Meta Keywords Or Tags</p>
            <label for="t-text" class="sr-only">Meta Keywords Or Tags</label>
            <select class="form-control tagging" multiple="multiple" name="meta_keyword[]">
                @foreach ($keywords as $keyword)
                    <option value="{{ $keyword }}" 
                        {{-- @if($blog->seoable->meta_keyword->count() > 0)
                            @foreach ($blog->seoable->meta_keyword as $keyword)
                                {{ $keyword}}
                            @endforeach
                        @endif --}}
                    >{{ $keyword }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <p>Meta Description</p>
            <textarea name="meta_description">{{ old('meta_description') ?? ($blog->seoable->meta_description ?? '') }}</textarea>
        </div>
    </div>
</div>
