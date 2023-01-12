@extends('admin.partials.master')

@section('title','All Final Products')

@push('styles')

<link href="{{ asset('cork/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />

@endpush

@section('contents')
<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div  class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="card component-card_1" style="border-radius:15px;">
                    <div class="card-header" style="background: #ffffff;">
                        <form action="{{ route('admin.finishedProduct.searchFinalProduct') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="mt-3">All Final Products</h5>
                                </div>
                                
                                <div class="col-md-4 d-flex">
                                    <div class="input-group mb-1">
                                        <input type="text" class="form-control"  name="search" id="search" placeholder="Search..." >
                                        <div class="input-group-append">
                                          <button class="btn btn-primary" ><i class="fas fa-search"></i></button>
                                        </div>
                                      </div>
                                </div>
                                
                                <div class="col-md-4 text-md-right">
                                    <a href="{{ route('admin.finishedProduct.create') }}" class=" btn btn-primary">Add Product</a>
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
                                        <th>Product Image</th>
                                        <th>Main Product</th>
                                        <th width=14%>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($allproducts) > 0 && isset($allproducts))      
                                        @foreach ($allproducts as $product)
                                            <tr data-row="{{ $loop->iteration }}">
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="">{{ $product->title }}</td>
                                                <td class="">
                                                    <img src="{{getOrginalUrl($product->image_id)}}" width="80">
                                                </td>

                                                <td class="">{{ $product->mainProduct->title }}</td>

                                                <td>
                                                    <span>
                                                        <a href="{{ route('admin.finishedProduct.edit',$product->slug) }}" style="color: #28a745!important"  data-toggle="tooltip" data-placement="top" title="Edit"><i data-feather="edit" style="width: 32px;height:32px;"></i></a>
                                                    </span>
                                                    <span>
                                                        <a href="{{ route('admin.finishedProduct.delete', $product->slug) }}" style="color:#e7515a !important;" class="delete" data-id="{{ $product->id }}" data-toggle="tooltip" data-placement="top" title="Delete"><i data-feather="delete" style="width: 32px;height:32px;"></i></a>
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
                            <div class="justify-content-center d-flex">
                            {{ $allproducts->links() }}
                            </div>
                        </div>  
                        
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
