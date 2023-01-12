
@extends('front.layouts.master')
@section('pageTitle', $warranty->title ?? ''.' | '.getSiteSetting('site_title'))
@push('styles')

@endpush

@section('banner')
<div class = "about-hero-wrapper d-flex align-items-center "  
        style="background: url('{{asset('frontendFiles/assets/images/pg-about/about-hero-img.png')}}') center/cover no-repeat;
            min-height: 325px;">
    <div class = "container px-0">
        <div class = "contact-hero">
            <div class = "row">
                <div class = "offset-lg-6 col-lg-6">
                    <div class = "contact-hero-title text-center text-lg-start">
                        <h3 class = "fw-3 fs-48 text-uppercase my-0">Products Manuals</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class = "manual py-4">
    <div class = "container">
        <div class = "manual-content row align-items-center">
            <div class = "manual-l col-md-6 mb-5 mb-md-0 pe-lg-5">
                {{-- <form class = "mb-4">
                    <label for = "product_name" class = "mb-2">Enter Product Name</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Product Name" name = "product_name">
                        <button type = "button" class="input-group-text bg-transparent text-white submit-btn">
                            <i class = "fas fa-search"></i>
                        </button>
                    </div>
                </form> --}}
                <form>
                    <div class="col-md-12 mb-3">
                        <label for = "" class = "mb-2">Select by Product Category</label>
                        <select class="form-select mb-3" id="main-category" name="main_category" >
                            <option>Select Main Category</option>
                            @if (isset($categories) && count($categories) > 0)
                                @foreach ($categories as $category )
                                    <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : ''}} >{{ $category->title }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label  for="">Select Sub Category</label>
                        <select class="form-select" id="sub_catgory" name="sub_catgory">
                            <option>Select Category first</option> 
                        </select>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label   for="">Select Product </label>
                        <select class="form-select" id="product" name="product">
                            <option>Select Sub Category first</option>
                        </select>
                    </div>
                </form>
            </div>

            <div class = "manual-r col-md-6">
                <div class = "manual-r-wrapper h-100 d-flex align-items-center justify-content-center flex-column py-5">
                    <img src = "{{asset('frontendFiles/assets/images/pdf-icon.png')}}" class = "mb-3" alt = "">
                    <p class = "fw-2 text-center op-08 generalText">Enter Product Name or Select by <br> Product Category*Required field</p>
                    <div class = "productManual d-flex align-items-center justify-content-center flex-column d-none">
                        <p class = "fw-7 mb-1 productName"></p>
                        <h6></h6>
                        <a type = "button" class = "btn text-uppercase manualDownloadPdf" target="_blanks">click here for product manual</a>
                    </div> 
                </div>
               
            </div> 
        </div>
    </div>
</div>

{{-- <section class = "about-sc pb-3 mt-4" id = "about-sc">
    <div class = "container px-0 ">
        <div class = "about-itms">
            <div class = "row about-itm align-items-center">
                <div class = "col-lg-12 about-itm-l">
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <legend>Filter Product</legend>
                                <div class="col-md-12 mb-3">
                                    <label  for="">Select Main Category </label>
                                    <select class="form-select" id="main-category" name="main_category" >
                                        <option>Select Main Category</option>
                                        @if (isset($categories) && count($categories) > 0)
                                            @foreach ($categories as $category )
                                                <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : ''}} >{{ $category->title }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label  for="">Select Sub Category</label>
                                    <select class="form-select" id="sub_catgory" name="sub_catgory">
                                        <option>Select Category first</option> 
                                    </select>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label   for="">Select Product </label>
                                    <select class="form-select" id="product" name="product">
                                        <option>Select Sub Category first</option>

                                    </select>

                                </div>
                            </form>
                        </div>
                    
                        <div class="col-md-6" style="background: red;">
                           
                            <div class="d-none productManual" id="productManual">
                                <h2 class="productTitle"></h2>
                                
                                <a class="manualDownloadPdf btn btn-success" href="" download target="_blank">Download PDF</a>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                
            </div>
        </div>
    </div>
</section> --}}

@endsection

@push('scripts')

<script>
    $(document).on("change","#main-category",function(e) {
        e.preventDefault();
        var old_sub_category = "{{ old('sub_category') ? old('sub_category') : 0 }}";
        var id = $(this).val();
        var url = "{{ route('subCategoryManual')}}";
        $('.generalText').removeClass('d-none');
        $('.productManual').addClass('d-none');
        $.ajax({
            type: "get",
            url: url,
            data: { id : id},
            success: function(response) {
                var length = $('#sub_category').children('option').length;
                if(length > 0) {
                    $('#sub_catgory').find('option').remove();
                }
                $('#sub_catgory').html('<option value="">Select Sub Category</option>');
                $.each(response,function(key,value){
                    $("#sub_catgory").append('<option value="'+value.id+'">'+value.title+'</option>');
                    if(old_sub_category == value.id){
                        $("#sub_catgory option[value="+value.id+"]").prop('selected','selected').change();
                    }
                });
            $('#sub_catgory').trigger('change');
            }

        });
    });
    
    $(document).on("change","#sub_catgory",function(e) {
        e.preventDefault();
        var old_product = "{{ old('product') ? old('product') : 0 }}";
        var id = $(this).val();
        var url = "{{ route('subCategoryProductsManual')}}";
        $.ajax({
            type: "get",
            url: url,
            data: { id : id},
            success: function(response) {
                var length = $('#product').children('option').length;
                if(length > 0) {
                    $('#product').find('option').remove();
                }
                $('#product').html('<option value="">Select Product</option>');
                $.each(response,function(key,value){
                    $("#product").append('<option value="'+value.id+'">'+value.title+'</option>');
                    if(old_product == value.id){
                        $("#product option[value="+value.id+"]").prop('selected','selected').change();
                    }
                });
                // $('#sub_catgory').trigger('change');

            
            }
        });
    });

    $(document).on("change","#product",function(e) {
        e.preventDefault();
        var old_product = "{{ old('product') ? old('product') : 0 }}";
        var id = $(this).val();
        var url = "{{ route('getProductManual')}}";
        $.ajax({
            type: "get",
            url: url,
            data: { id : id},
            success: function(response) {
                console.log(response);
                $('.generalText').addClass('d-none');
                $('.productManual').removeClass('d-none');
               
                console.log(response.newPdf);
                $('.productName').html(response.title);

                if(response.newPdf == false){
                    $('.manualDownloadPdf').addClass('d-none');
                    $(".productManual h6").html("Manual Not Found.");

                }else{
                    $('.manualDownloadPdf').removeClass('d-none');
                    $(".productManual h6").html("");

                    $('.manualDownloadPdf').attr('href', response.newPdf);
                }
        
            }
        });
    });
    
    $('#main-category').trigger('change');
</script>


{{-- Manual Show By Product Name --}}
{{-- <script>
    $(document).on("click",".submit-btn",function(e) {
        e.preventDefault();
        var old_product = "{{ old('product_name') ? old('product_name') : 0 }}";
        var value = $(this).siblings('input').val();
        alert(value);
        var url = "{{ route('getProductManual')}}";
        $.ajax({
            type: "get",
            url: url,
            data: { value : value},
            success: function(response) {
                console.log(response);
                $('.generalText').addClass('d-none');
                $('.productManual').removeClass('d-none');
               
                console.log(response.newPdf);
                $('.productName').html(response.title);

                if(response.newPdf == false){
                    $('.manualDownloadPdf').addClass('d-none');
                    $(".productManual h6").html("Manual Not Found.");

                }else{
                    $('.manualDownloadPdf').removeClass('d-none');
                    $(".productManual h6").html("");

                    $('.manualDownloadPdf').attr('href', response.newPdf);
                }
        
            }
        });
    });
</script> --}}

@endpush