@extends('admin.partials.master')

@section('title','All Products')

@push('styles')

<link href="{{ asset('cork/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />

@endpush

@section('contents')
<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div id="card_1" class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="card component-card_1" style="border-radius:15px;">
                    <div class="card-header" style="background: #ffffff;">
                        <form action="{{ route('admin.product.searchProduct') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="mt-3">All Products</h5>
                                </div>
                                
                                <div class="col-md-4 d-flex">
                                    <div class="input-group mb-1">
                                        <input type="text" class="form-control"  name="search" id="search" placeholder="Search..." aria-label="Recipient's username">
                                        <div class="input-group-append">
                                          <button class="btn btn-primary" ><i class="fas fa-search"></i></button>
                                        </div>
                                      </div>
                                </div>
                                
                                <div class="col-md-4 text-md-right">
                                    <a href="{{ route('admin.product.addProduct') }}" class=" btn btn-primary">Add Product</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                           
                            <table class="table mb-4">
                                <thead>
                                    <tr>
                                        <th class="text-center">S.No.</th>
                                        <th>Product Title</th>
                                        <th>Feature Image</th>
                                        <th class="text-center">Product Category</th>

                                        <th>Status</th>
                                        <th>Featured Product</th>
                                        <th width=10%>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($allproducts) > 0 && isset($allproducts))      
                                        @foreach ($allproducts as $product)
                                            <tr data-row="{{ $loop->iteration }}">
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-primary">{{ $product->title }}</td>
                                            
                                                <td>
                                                    <img src="{{ asset($product->feature_url['thumbnail_image']) }}" style="height: 100px" width="100px" alt=" {{ $product->title }}">
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge badge-primary">{{ $product->category->title ?? 'N/A'}}</span>
                                                </td>
                                               
                                                <td>
                                                    <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                                        <label for="">Status</label>
                                                        <label class="switch s-icons s-outline  s-outline-info  mb-4 mr-2">
                                                            <input  data-id="{{ $product->id }}" class="status" type="checkbox" name="status" @if($product->status == "Active") checked=""
                                                            @endif>
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label for="">Click To Change</label>

                                                    <div class="col-lg-12 col-md-12 col-sm-4 col-12 mb-4 ml-4">
                                                        {{-- Click To Change --}}
                                                      <span class=" badge {{ $product->is_featured=="Yes" ? 'badge-success' : 'badge-danger' }} featured" data-id="{{ $product->id }}">{{$product->is_featured}}</span>
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <span>
                                                        <a href="{{ route('admin.product.editProduct',$product->slug) }}" style="color: #28a745!important"  data-toggle="tooltip" data-placement="top" title="Edit"><i data-feather="edit" style="width: 32px;height:32px;"></i></a>
                                                    </span>
                                                    <span>
                                                        <a href="{{ route('admin.product.deleteProduct', $product->id) }}" style="color:#e7515a !important;" class="delete" data-id="{{ $product->id }}" data-toggle="tooltip" data-placement="top" title="Delete"><i data-feather="delete" style="width: 32px;height:32px;"></i></a>
                                                        {{-- <a href="{{ route('admin.product.deleteProduct',$product->slug) }}" style="color:#e7515a !important;" data-toggle="tooltip" data-placement="top" title="Delete"><i data-feather="delete" style="width: 32px;height:32px;"></i></a> --}}
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach

                                    @else
                                        <h4>No Products Found.</h4>
                                    @endif
                                </tbody>
                            </table>
                        </div>  
                        {{ $allproducts->links() }}
                    </div>
                </div>
                
                    
            </div>
        </div>

    </div>

</div>

@endsection

@push('scripts')

<script src="{{ asset('cork/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
<script src="{{ asset('cork/plugins/sweetalerts/custom-sweetalert.js') }}"></script>
   
<script>
 
    $('.status').change(function(e) {
        var product_id = $(this).attr('data-id'); 

        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ route('admin.product.changeStatus') }}',
            data: {
            'product_id' : product_id
            },
            success: function (data) {
                    
                    if(data.status == "success"){
                        toastr.success("Status Changed Successfully");
                        

                    }else{
                        toastr.error(data.message);
                    }
                    
            },
            
        });
    });

    $('.featured').click(function(e) {
  
       var product_id = $(this).attr('data-id'); 
       var currentElement = $(this);
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ route('admin.product.changeFeature') }}',
            data: {
            'product_id' : product_id
            },
            beforeSend:function(data){
                loader();
            },
            success: function (data) {
                
                if(data.status == "success"){
                    toastr.success("Feature Changed Successfully");
                    console.log(data);
                    if(data.data == "Yes"){
                        currentElement.text('Yes');
                        currentElement.addClass('badge-success');
                        currentElement.removeClass('badge-danger');

                    }else{
                        currentElement.text('No');
                        currentElement.addClass('badge-danger');
                        currentElement.removeClass('badge-success');
                    }
                }else{
                    toastr.error(data.message);
                }
                    
            },
            
        });
    });



    $('.delete').on('click', function (event ) {
        $this = $(this);
        event.preventDefault();
        swal({
            title: 'Are you sure to delete?',
            text: "this data will move to trash!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Delete',
            padding: '2em'
        }).then(function(result) {
            if (result.value) {
                window.location.href = $this.attr('href');
            }
        })
    })





//   $('body').on('click','.delete',function(){
//     var id = $(this).attr('data-id');
//     var url = "{{ route("admin.product.deleteProduct",':id') }}";
//     url = url.replace(':id',id);
//     Swal.fire({
//     title: 'Are you sure?',
//     text: "You won't be able to revert this!",
//     icon: 'warning',
//     showCancelButton: true,
//     confirmButtonColor: '#3085d6',
//     cancelButtonColor: '#d33',
//     confirmButtonText: 'Yes, delete it!'
//     }).then((result) => {
//     if (result.isConfirmed) {
//         $.ajax({
//             type: "get",
//             url : url,
//             success:function(e){
//                 Swal.fire(
//                 'Deleted!',
//                 'Your file has been deleted.',
//                 'success'
//                 )
//                 location.reload();


//             },
//             error: function(e){
//                 alert('error');
//             },
//         });
        
    
//     }
//     });


   



//   });
</script>
    

@endpush
