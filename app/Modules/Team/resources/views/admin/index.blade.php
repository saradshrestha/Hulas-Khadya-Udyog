@extends('admin.partials.master')

@section('title','All Team')

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
                        <h1 class="h3">All Teams</h1>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <a href="{{ route('admin.team.create') }}" class=" btn btn-primary">Add Team Member</a>
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
                                <th width=15% class="text-center">Designation</th>
                                <th width=5% class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($teams) && count($teams) > 0)                            
                                @foreach ($teams as $team)
                                    <tr data-row="{{ $loop->iteration }}">
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $team->name }}</td>
                                        <td id="status" class="text-center">
                                            <label class="switch s-icons s-outline s-outline-primary mr-2">
                                                <input data-id="{{$team->id}}" type="checkbox" class="status" @if ($team->status == "Active")
                                                checked
                                                @endif >
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                            
                                        <td class="text-center">
                                            @if ($team->image)
                                            <img src="{{ getOrginalUrl($team->image) }}" height="80px" width="80px" alt="{{ $team->name }}">
                                            @endif
                    
                                        </td> 
                                        <td class="text-center">
                                            {{ $team->designation ?? ''}}
                                        </td> 
                                      
                                       
                                        <td class="text-center">
                                        <div class="row">
                                        
                                            <div class="col-md-1 ml-2">
                                                <a href="{{ route('admin.team.edit',$team->id) }}" style="color: #28a745!important"  data-toggle="tooltip" data-placement="top" title="Edit"><i data-feather="edit" style="width: 32px;height:32px;"></i></a>

                                            </div>
                                            <div class="col-md-1 ml-2">
                                                <a class="delete" href="{{ route('admin.team.delete',$team->id) }}" style="color:#e7515a !important;" data-toggle="tooltip" data-placement="top" title="Delete"><i data-feather="delete" style="width: 32px;height:32px;"></i></a>

                                            </div>
                                        </div>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                            <tr>
                                <th colspan="5"><h4 class="text-center">No Team Avaliable.</h4></th>
                            </tr>
                            @endif
                           

                        </tbody>
                    </table>
                    <div class="justify-content-center d-flex">
                        {{ $teams->links() }}
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
        var team_id = $(this).data('id'); 
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ route('admin.team.changeStatus') }}',
            data: {
            'team_id' : team_id
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
