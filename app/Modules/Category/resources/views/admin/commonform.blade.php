<div class="row layout-spacing">
    <div class="col-md-6">
        <div class="form-group">
            <label for="title">Title <span class="text-danger">*</span></label>
            {!! Form::text('title', old('title')??$category->title??'', ['class' => 'form-control', 'placeholder' => 'Title','id' =>'title', 'required' => 'required']) !!}
            @if ($errors->has('title'))
                <div class="alert alert-danger">{{ $errors->first('title') }}</div>
            @endif
        </div>

    </div>

    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('title', 'Sub Title') !!}
            {!! Form::text('sub_title', old('sub_title')??$category->sub_title??'', ['class' => 'form-control', 'placeholder' => 'Sub Title']) !!}
            @if ($errors->has('sub_title'))
                <div class="alert alert-danger">{{ $errors->first('sub_title') }}</div>
            @endif
        </div>

    </div>

    {{-- <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="parent_category">Main Category <span class="text-danger">*</span></label>
                    <select name="parent_category" class="form-control" id="parent_category" required>
                        <option disabled selected></option>

                        <option value="0" {{($category->parent_id ?? old('parent_category'))  == 0 ? 'selected': '' }}>Main Category</option>

                        @if (isset($parentcategories) && count($parentcategories) > 0)
                            @foreach ($parentcategories as $parentcategory)
                                <option value="{{ $parentcategory->id }}"  {{($category->parent_id ?? old('parent_category'))  == $parentcategory->id ? 'selected': '' }}>{{ $parentcategory->title }}</option>
                            @endforeach
                        @else
            
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-md-12">
            
                <div class="form-group">
                    <label for="category_position">Category Display Position<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="category_position" min="1" name="category_position" value="{{ $category->category_position ?? old('category_position') }}" placeholder="Category Display Position - Example: 1">
                </div>
            </div>
           
        </div>
    </div> --}}

 
        <div class="col-md-6">
            
            <div class="form-group">
                <label for="featured">Is Featured <span class="text-danger">*</span></label>
                <select name="featured" class="form-control" required>
                    <option value="Yes" {{($category->featured ?? old('featured'))  == 1 ? 'selected': 'selected' }}>Yes</option>
                    <option value="No"  {{($category->featured ?? old('featured'))  == 0 ? 'selected': '' }}>No</option>

                </select>
              
            </div>

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="status">Status <span class="text-danger">*</span></label>
                <select name="status" class="form-control" required>
                    <option value="Active" {{($category->status ?? old('status'))  == "Active" ? 'selected': 'selected' }}>Active</option>
                    <option value="Inactive"  {{($category->status ?? old('status'))  == "Inactive" ? 'selected': '' }}>Inactive</option>

                </select>
              
            </div>

        </div>
       

     {{-- <div class="col-md-6">
        <div class="form-group">
            <div class="custom-file-container" data-upload-id="category_logo">
                <label>Category Feature Image<a href="javascript:void(0)" class="custom-file-container__image-clear"
                        title="Clear Image">x</a></label>
                <label class="custom-file-container__custom-file">
                    <input type="file" class="custom-file-container__custom-file__custom-file-input"
                        name="category_logo" accept="image/*">
                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                </label>
                <div class="custom-file-container__image-preview"></div>
            </div>
        </div>
     </div>

    <div class="col-md-6">
        <div class="form-group">
            <div class="custom-file-container" data-upload-id="category_banner">
                <label>Category Banner Image<a href="javascript:void(0)" class="custom-file-container__image-clear"
                        title="Clear Image">x</a> <span class="text-danger">*</span></label>
                <label class="custom-file-container__custom-file">
                    <input type="file" class="custom-file-container__custom-file__custom-file-input"
                        name="category_banner" accept="image/*">
                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                </label>
                <div class="custom-file-container__image-preview"></div>
            </div>
        </div>
    </div> --}}





    {{-- <div class="col-md-6">

        
        <div class="form-group">
            <div class="custom-file-container" data-upload-id="category_logo">
                <label>Category Logo <a href="javascript:void(0)" class="custom-file-container__image-clear"
                        title="Clear Image">x</a></label>
                <label class="custom-file-container__custom-file">
                    <input type="file" class="custom-file-container__custom-file__custom-file-input"
                        name="category_logo" accept="image/*">
                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                </label>
                <div class="custom-file-container__image-preview"></div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('short description', 'Short Description') !!}
            {!! Form::textarea('short_desc', old('description')??$category->short_desc??'', ['class' => 'summernote']) !!}
        </div>
    </div> --}}

    <div class="col-md-12">
                    
        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', old('description')??$category->description??'', ['class' => 'summernote']) !!}
        </div>
    </div>
    <hr>
    <div class="col-md-6">
        <div class="form-group">
            <p>Image Alt Text</p>
            <label for="img_alt" class="sr-only">Image Alt Text</label>
            <input id="img_alt" value="@isset($category){{  $category->seoable ? $category->seoable->img_alt : '' }} @endisset"
                type="text" name="img_alt" placeholder="Image Alt Text" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <p>Image Title</p>
            <label for="img_title" class="sr-only">Image Title</label>
            <input id="img_title" value="@isset($category) {{  $category->seoable ? $category->seoable->img_title : '' }}@endisset"
                type="text" name="img_title" placeholder="Image Title" class="form-control">
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group">
            <p>Meta Title</p>
            <label for="meta_title" class="sr-only">Meta Title</label>
            <input id="meta_title" value="@isset($category){{ $category->seoable ? $category->seoable->meta_title : '' }}@endisset"
                type="text" name="meta_title" placeholder="Meta Title" class="form-control">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <p>Meta Keywords Or Tags</p>
            <label for="t-text" class="sr-only">Meta Keywords Or Tags</label>
            <select class="form-control tagging" multiple="multiple" name="meta_keyword[]">
        
                @if(!empty($keywords))
                    @foreach ($keywords as $keyword)
                    <option value="{{ $keyword }}"
                        @if (isset($category->seoable) && $category->seoable->meta_keyword)) 
                        @foreach (unserialize($category->seoable->meta_keyword) as $thiskeyword) {{ $thiskeyword == $keyword ? 'selected' : '' }} 
                        @endforeach @endif>
                        {{ $keyword }}</option>
                @endforeach
                @endif
            </select>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <p>Meta Description</p>
            <textarea name="meta_description">@isset($category) {{ $category->seoable ? $category->seoable->meta_description : '' }}@endisset</textarea>
        </div>
    </div>






