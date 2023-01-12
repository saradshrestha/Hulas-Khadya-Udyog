<div class="row">
    <div class="col-md-12">
        <div class="mb-2 mt-2">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Product Information</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                {!! Form::text('title', old('title') ?? ($product->title ?? ''), [
                                    'class' => 'form-control',
                                    'placeholder' => 'Title',
                                    'required' => 'required',
                                    'id' => 'title',
                                ]) !!}
                                @if ($errors->has('title'))
                                    <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('sub_title', 'Sub Title') !!}
                                {!! Form::text('sub_title', old('sub_title') ?? ($product->sub_title ?? ''), [
                                    'class' => 'form-control',
                                    'placeholder' => 'Sub Title',
                                ]) !!}
                                @if ($errors->has('sub_title'))
                                    <div class="alert alert-danger">{{ $errors->first('sub_title') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="product_sku">Product SKU</label>
                                <input type="text" name="product_sku" id="product_sku" value="{{ old('product_sku') ?? $product->sku ?? ''}}" class="form-control" placeholder="Product SKU...">
                                @if ($errors->has('product_sku'))
                                    <div class="alert alert-danger">{{ $errors->first('product_sku') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="is_featured">Is Featured Product ?</label>
                                <select name="is_featured" id="is_featured" class="form-control " required>
                                    <option value="No"
                                        {{ isset($product) && $product->is_featured == 'No' ? 'selected' : 'selected' }}>
                                        No</option>
                                    <option value="Yes"
                                        {{ isset($product) && $product->is_featured == 'Yes' ? 'selected' : '' }}>Yes
                                    </option>
                                </select>
                                @if ($errors->has('is_featured'))
                                    <div class="alert alert-danger">{{ $errors->first('is_featured') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="status">Select Status <span class="text-danger">*</span></label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="Active"
                                        {{ isset($product) && $product->status == 'Active' ? 'selected' : 'selected' }}>
                                        Active</option>
                                    <option value="Inactive"
                                        {{ isset($product) && $product->status == 'Inactive' ? 'selected' : '' }}>
                                        Inactive</option>
                                </select>
                                @if ($errors->has('status'))
                                    <div class="alert alert-danger">{{ $errors->first('status') }}</div>
                                @endif
                            </div>

                        </div>
                       

                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('purchase_link', 'Product Purchase Link (Daraz)') !!}
                                {!! Form::text('purchase_link', old('purchase_link') ?? ($product->purchase_link ?? ''), [
                                    'class' => 'form-control',
                                    'placeholder' => 'https://....',
                                    'required' => 'required',
                                ]) !!}
                                @if ($errors->has('purchase_link'))
                                    <div class="alert alert-danger">{{ $errors->first('purchase_link') }}</div>
                                @endif
                            </div>
                        </div>

                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_manual">Upload Product Manual</label>
                                <input type="file" class="form-control" id="product_manual" accept="application/pdf"
                                         name="product_manual" placeholder="Upload Product Manual" value="{{ $product->manualsPdf->title ?? '' }}">   
                              
                                @if ($errors->has('purchase_link'))
                                    <div class="alert alert-danger">{{ $errors->first('purchase_link') }}</div>
                                @endif
                            </div>
                        </div> --}}

                        <div class="col-md-12">
                            <div class="form-group highlight_feature">
                                <label for="highlight_feature">Highlight Features</label>
                                {{-- <input class="form-control" name="highlight_feature" id="" value="{{old('purchase_link') ??  $product->highlight_feature}}" placeholder="Highlighted Feature"> --}}
                                <textarea name="highlight_feature" class="highlight_feature" id="highlight_feature">
                                    {!! old('highlight_feature') ?? ($product->highlights ?? '') !!}
                                </textarea>
                                @if ($errors->has('highlight_feature')) 
                                    <div class="alert alert-danger">{{ $errors->first('highlight_feature') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="images">Gallery Images <span class="text-danger"></span></label>
                                <div class="form-group">
                                    <div class="col-12 mt-2">
                                        {!! Form::file('image_ids[]', ['multiple' => 'multiple', 'class' => 'images', 'id' => 'images']) !!}
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="custom-file-container" data-upload-id="feature_image">
                                    <label for="feature_image">Featured Image <span class="text-danger">*</span><a
                                            href="javascript:void(0)" class="custom-file-container__image-clear"
                                            title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file">
                                        <input type="file"
                                            class="custom-file-container__custom-file__custom-file-input"
                                            name="feature_image" id="feature_image" accept="image/*">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-2">
            <div class="card-body">
                <div class="form-group">
                    <label class="col-12 col-from-label">Product Specifications <span
                            class="text-danger"></span></label>
                    <div class="col-12 ">
                        <textarea name="product_specs" class="summernote" id="summernote">
                            {!! $product->specification ?? old('product_specs') !!}
                        </textarea>
                        @error('product_specs')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <hr>


        <div class="card">
            <div class="card-body mt-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <p>Image Alt Text</p>
                            <label for="img_alt" class="sr-only">Image Alt Text</label>
                            <input id="img_alt"
                                value="@isset($product){{ $product->seoable ? $product->seoable->img_alt : '' }} @endisset"
                                type="text" name="img_alt" placeholder="Image Alt Text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <p>Image Title</p>
                            <label for="img_title" class="sr-only">Image Title</label>
                            <input id="img_title"
                                value="@isset($product) {{ $product->seoable ? $product->seoable->img_title : '' }}@endisset"
                                type="text" name="img_title" placeholder="Image Title" class="form-control">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <p>Meta Title</p>
                    <label for="t-text" class="sr-only">Meta Title</label>
                    <input id="post_type_title"
                        value="@isset($product){{ $product->seoable ? $product->seoable->meta_title : '' }}@endisset"
                        type="text" name="meta_title" placeholder="Meta Title" class="form-control">
                </div>
                <div class="form-group">
                    <p>Meta Keywords Or Tags</p>
                    <label for="t-text" class="sr-only">Meta Keywords Or Tags</label>
                    <select class="form-control tagging" multiple="multiple" name="meta_keyword[]">

                        @if (!empty($keywords))
                            @foreach ($keywords as $keyword)
                                <option value="{{ $keyword }}"
                                    @if (isset($product) && $product->seoable && $product->seoable->meta_keyword) @foreach (unserialize($product->seoable->meta_keyword) as $thiskeyword) {{ $thiskeyword == $keyword ? 'selected' : '' }} @endforeach @endif>
                                    {{ $keyword }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="form-group">
                    <p>Meta Description</p>
                    <textarea name="meta_description">
                        @isset($product)
                            {{ $product->seoable ? $product->seoable->meta_description : '' }}
                        @endisset
                    </textarea>
                </div>

                <div class="col-md-12 mt-2 mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>

