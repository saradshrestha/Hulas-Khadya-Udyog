@extends('admin.partials.master')

@section('content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

    <div class="col-md-6">
        <h1 class="h3">Add Product</h1>
    </div>
    <div class="col-md-6 text-md-right">
        <a href="{{ route('admin.product.allProducts') }}" class=" btn btn-primary">Back to all product</a>

</div>

<div class="row">

    <div class="col-lg-12 layout-spacing mt-3">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Add {{ $product->title }} Images</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form action="{{ route('admin.product.addProductImagesSubmit',$product->slug) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Add Product Images</label>
                        <input type="file" name="images[]" multiple class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

                
            </div>
            <div class="image">
                @if($product->productimages->isNotEmpty())
                <h1 class="mt-2 mb-5">{{ $product->title }} Images</h1>
                <div class="row">
                    @foreach ($product->productimages as $productimage)
                    <div class="col-md-3 text-center">
                        <img src="{{ asset($productimage->image) }}" height="200px" width="200px" alt="">
                        <a href="{{ route('admin.product.deleteproductimage',$productimage->id) }}" type="button" class="btn btn-danger mt-2">Delete</a>
                    </div>
                    @endforeach
                    @else
                    <h1 class="mt-2 mb-2">No products available</h1>
                    @endif
                </div>
             
                
            </div>
        </div>
        
        
        
    </div>

</div>
    </div></div>

@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
        loadimage();
        function loadimage(){
            $.ajax({

            });
        }
    </script>

    

@endpush
