@extends('admin.partials.master')

@section('title','All Categories')

@section('contents')
{{-- @dd($allcategories) --}}
<div class="layout-px-spacing">
   
    <div class="row mt-4">
        <div class="col-md-6">
            <h1 class="h3">All Categories</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <a href="{{ route('admin.category.addCategory') }}" class=" btn btn-primary">Add Category</a>
        </div>
    </div>

    <div class="row">

        <div id="card_1" class="col-lg-12 layout-spacing layout-top-spacing">
            <div class="statbox widget box box-shadow" style="padding:22px 19px;">
                <div class="table-responsive">
                    <h5 class="mb-3">List of All Categories</h5>
                    <table class="table mb-4">
                    <thead>
                            <tr>
                                <th class="text-center">S.No.</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Banner</th>
                                <th width="14%">Display Position</th>
                                <th>Featured</th>
                                <th width=16%>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($allcategories) && count($allcategories) > 0)                            
                                @foreach ($allcategories as $category)
                                    <tr data-row="{{ $loop->iteration }}">
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-primary">{{ $category->title }}</td>
                                        <td id="status">
                                            <label class="switch s-icons s-outline s-outline-primary mr-2">
                                                <input data-id="{{$category->id}}" type="checkbox" class="status" @if ($category->status == "Active")
                                                checked
                                                @endif >
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                            
                                        <td>
                                            @if ($category->banner_url)
                                            <img src="{{ asset($category->banner_url) }}" height="100px" width="100px" alt="">
                                            @endif
                                            
                                        </td> 
                                        <td  class="d-flex justify-content-between">
                                            <span class="badge badge-info mr-5 mx-auto my-auto">{{ $category->category_position ?? 0}}</span>
                                            <input type="number" class="form-control ml-4" id="category_position" data-slug="{{ $category->slug }}" name="category_position" value="{{ 0}}">

                                            
                                        </td> 
                                        <td>
                                            <label class="switch s-icons s-outline s-outline-secondary mr-2">
                                                <input data-id="{{ $category->id }}" type="checkbox" class="featured" @if ($category->featured == "1")
                                                checked
                                                @endif >
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td>
                                        <div class="row">
                                        
                                            <div class="col-md-1 ml-2">
                                                <a href="{{ route('admin.category.editCategory',$category->slug) }}" style="color: #28a745!important"  data-toggle="tooltip" data-placement="top" title="Edit"><i data-feather="edit" style="width: 32px;height:32px;"></i></a>

                                            </div>
                                            <div class="col-md-1 ml-2">
                                                <a href="{{ route('admin.category.deleteCategory',$category->slug) }}" style="color:#e7515a !important;" data-toggle="tooltip" data-placement="top" title="Delete"><i data-feather="delete" style="width: 32px;height:32px;"></i></a>

                                            </div>
                                        </div>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <h4>No Categories Avaliable.</h4>
                            @endif
                           

                        </tbody>
                    </table>
                    <div class="justify-content-center d-flex">
                        {{ $allcategories->links() }}
                    </div>
                   
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
   
<script>
    $(function() {
    $('.featured').change(function(e) {
        var category_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ route('admin.category.changeFeatured') }}',
            data: {
            'category_id' : category_id
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

  $(function() {
    $('.status').change(function(e) {
        var category_id = $(this).data('id'); 
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ route('admin.category.changeStatus') }}',
            data: {
            'category_id' : category_id
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

  $(document).on('keypress','#category_position',function(e) {
        if(e.which == 13) {
            var current = $(this);
            var slug = $(this).data('slug');
            var value = $(this).val();
            var url = "{{ route('admin.category.changeCategoryPosition',':slug') }}";
            url = url.replace(':slug',slug);
            $.ajax({
            type: "GET",
            dataType: "json",
            url: url,
            data: {
            'category_position' : value
            },
            success: function (data) {
                if(data.status == "success"){
                    current.siblings('.badge-info').text(data.data);
                    toastr.success(data.message);
                }else{
                    toastr.error(data.message);
                }
            },
            
        });
            
        }
    });
</script>
    

@endpush
