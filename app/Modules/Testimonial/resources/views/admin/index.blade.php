@extends('admin.partials.master')

@section('title','All Testimonials')

@push('styles')

<link href="{{ asset('cork/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />

@endpush

@section('contents')
{{-- @dd($allcategories) --}}
<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div id="card_1" class="col-lg-12">
            <div class="statbox widget box box-shadow p-4" >
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="h3">All Testimonials</h1>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <a href="{{ route('admin.testimonial.create') }}" class=" btn btn-primary">Add Testimonial</a>
                    </div>
                </div>
                <div class="table mt-4">
                    <table class="table mb-4">
                        <thead>
                            <tr>
                                <th class="text-center" width=1%>S.No.</th>
                                <th width=15%>Name</th>
                                <th width=5% class="text-center">Status</th>
                                <th width=10% class="text-center">Image</th>
                                <th width=30% class="text-center">Message</th>
                                <th width=5% class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($testimonials) && count($testimonials) > 0)                            
                                @foreach ($testimonials as $testimonial)
                                    <tr data-row="{{ $loop->iteration }}">
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $testimonial->name }}</td>
                                        <td id="status" class="text-center">
                                            <label class="switch s-icons s-outline s-outline-primary mr-2">
                                                <input data-id="{{$testimonial->id}}" type="checkbox" class="status" @if ($testimonial->status == "Active")
                                                checked
                                                @endif >
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                            
                                        <td class="text-center">
                                            @if ($testimonial->image_id)
                                            <img src="{{ getOrginalUrl($testimonial->image_id) }}" height="80px" width="80px" alt="">
                                            @endif
                                            
                                        </td> 
                                        <td>
                                           
                                                {{strip_tags(Str::limit($testimonial->description,180,'...')) ?? 'N/A'}}
                                            
                                            
                                        </td> 
                                      
                                       
                                        <td class="text-center">
                                        <div class="row">
                                        
                                            <div class="col-md-1 ml-2">
                                                <a href="{{ route('admin.testimonial.edit',$testimonial->slug) }}" style="color: #28a745!important"  data-toggle="tooltip" data-placement="top" title="Edit"><i data-feather="edit" style="width: 32px;height:32px;"></i></a>

                                            </div>
                                            <div class="col-md-1 ml-2">
                                                <a class="delete" href="{{ route('admin.testimonial.delete',$testimonial->slug) }}" style="color:#e7515a !important;" data-toggle="tooltip" data-placement="top" title="Delete"><i data-feather="delete" style="width: 32px;height:32px;"></i></a>

                                            </div>
                                        </div>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                            <tr>
                                <th colspan="5"><h4 class="text-center">No Testimonials Avaliable.</h4></th>
                            </tr>
                            @endif
                           

                        </tbody>
                    </table>
                    <div class="justify-content-center d-flex">
                        {{ $testimonials->links() }}
                    </div>
                   
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="{{ asset('cork/plugins/sweetalerts/sweetalert2.min.js') }}"></script>

   
<script>


  $(function() {
    $('.status').change(function(e) {
        var testimonial_id = $(this).data('id'); 
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ route('admin.testimonial.changeStatus') }}',
            data: {
            'testimonial_id' : testimonial_id
            },
            success: function (data) {
                    if(data.status == "success"){
                        toastr.success(data.message);
                    }else{
                        toastr.error(data.message);
                    }
                    
            },
            
        });
    })
  })

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


</script>
    

@endpush
