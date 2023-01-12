<div class="row">
    <div class="col-md-12">
        <div class="mb-2 mt-2">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Final Product Information</h4>
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
                                <label for="product">Select Main Product</label>
                                <select name="product" id="product" class="form-control " required>
                                    <option selected disabled>Select Main Product</option>
                                    @if (isset($products))
                                        @foreach ($products as $mainProduct)
                                            <option value="{{ $mainProduct->id }}"
                                                {{ (isset($product) && $product->product_id) || old('product') == $mainProduct->id ? 'selected' : '' }}>
                                                {{ $mainProduct->title }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('product'))
                                    <div class="alert alert-danger">{{ $errors->first('product') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">

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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Product Specifications</label>
                                <textarea name="product_specs" class="summernote" id="summernote">
                                    {!! $product->description ?? old('product_specs') !!}
                                </textarea>
                                @error('product_specs')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body mt-2">
                <div class="row">
                    <div class="col-md-6">
                    
                        <div class="col-md-12">
                            <div class="form-group">
                                <p>Image Alt Text</p>
                                <label for="img_alt" class="sr-only">Image Alt Text</label>
                                <input id="img_alt"
                                    value="@isset($product){{ $product->seoable ? $product->seoable->img_alt : '' }} @endisset"
                                    type="text" name="img_alt" placeholder="Image Alt Text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <p>Image Title</p>
                                <label for="img_title" class="sr-only">Image Title</label>
                                <input id="img_title"
                                    value="@isset($product) {{ $product->seoable ? $product->seoable->img_title : '' }}@endisset"
                                    type="text" name="img_title" placeholder="Image Title" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <p>Meta Title</p>
                                <label for="t-text" class="sr-only">Meta Title</label>
                                <input id="post_type_title"
                                    value="@isset($product){{ $product->seoable ? $product->seoable->meta_title : '' }}@endisset"
                                    type="text" name="meta_title" placeholder="Meta Title" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
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
                        </div>
                    </div>
               
                    <div class="col-md-6">
                 
                        <div class="col-md-12">
                            <div class="form-group">
                                <p>Meta Description</p>
                                <textarea name="meta_description">
                                    @isset($product)
                                            {{ $product->seoable ? $product->seoable->meta_description : '' }}
                                    @endisset
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-2 mb-3">
                    <button type="submit " class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
