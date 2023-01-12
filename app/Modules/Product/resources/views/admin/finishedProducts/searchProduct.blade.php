@extends('admin.partials.master')

@section('title','Searched Final Products')

@section('contents')


<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
    <div id="card_1" class="col-lg-12">
        <div class="statbox widget box box-shadow">
            <div class="card component-card_1">
                <div class="card-header" style="background: #ffffff">
                    <form action="{{ route('admin.product.searchProduct') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <h5 class="mt-3">Searched Final Products</h5>
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
                                <a href="{{ route('admin.finishedProduct.index') }}" class=" btn btn-primary">Back To All Products</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-4">
                          <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Product Title</th>
                                   
                                    <th>Main Product</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($searchresults) > 0 && isset($searchresults))                            
                                @foreach ($searchresults as $product)
                            
                                <tr data-row="{{ $loop->iteration }}">
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-primary">{{ $product->title }}</td>
                                    <td class="text-primary">{{ $product->mainProduct->title }}</td>

                                    
                                   
                                    
                                    <td>
                                        <span>
                                            <a href="{{ route('admin.product.editProduct',$product->slug) }}" style="color: #28a745!important"  data-toggle="tooltip" data-placement="top" title="Edit"><i data-feather="edit" style="width: 32px;height:32px;"></i></a>
                                        </span>
                                        <span>
                                            <a href="#" style="color:#e7515a !important;" class="delete" data-id="{{ $product->id }}" data-toggle="tooltip" data-placement="top" title="Delete"><i data-feather="delete" style="width: 32px;height:32px;"></i></a>
                                            {{-- <a href="{{ route('admin.product.deleteProduct',$product->slug) }}" style="color:#e7515a !important;" data-toggle="tooltip" data-placement="top" title="Delete"><i data-feather="delete" style="width: 32px;height:32px;"></i></a> --}}
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        {{ $searchresults->links() }}
                    </div>  
                </div>
            </div>
               
        </div>
    </div>
    </div>

</div>

@endsection

@push('script')
   
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
                        toastr.success(data.message);
                    }else{
                        toastr.error(data.message);
                    }
                    
            },
            
        });
    });

  $('body').on('click','.delete',function(){
    var id = $(this).attr('data-id');
    var url = "{{ route("admin.product.deleteProduct",':id') }}";
    url = url.replace(':id',id);
    Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
    if (result.isConfirmed) {
        $.ajax({
            type: "get",
            url : url,
            success:function(e){
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
                location.reload();


            },
            error: function(e){
                alert('error');
            },
        });
        
    
    }
    });


   



  });
</script>
    

@endpush
