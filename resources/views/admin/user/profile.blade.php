@extends('admin.partials.master')

@push('styles')
<link href="{{ asset('cork/plugins/table/datatable/datatables.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('cork/plugins/table/datatable/dt-global_style.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/users/account-setting.css') }}" rel="stylesheet" type="text/css') }}" />
<link href="{{ asset('cork/assets/css/users/user-profile.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('cork/plugins/dropify/dropify.min.css') }}">

@endpush

@section('contents')

    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                <div class="row layout-spacing">

                    <!-- Content -->
                    <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

                        <div class="user-profile layout-spacing">
                            <div class="widget-content widget-content-area">
                                <div class="d-flex justify-content-between">
                                    <h3 class="">Profile</h3>
                                </div>
                                <div class="text-center user-info">
                                    <img src="{{ asset($user->image) }}" alt="{{ $user->first_name }} {{ $user->last_name }}" height="90" width="90">
                                    <p class="">{{ $user->first_name }} {{ $user->last_name }}</p>
                                </div>
                                <div class="user-info-list">

                                    <div class="">
                                        <ul class="contacts-block list-unstyled">
                                            <li class="contacts-block__item">
                                                <a href="mailto:{{ $user->email }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">

                                                        </path>
                                                        <polyline points="22,6 12,13 2,6"></polyline></svg>
                                                    {{ $user->email }}</a>
                                            </li>
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                                </svg> {{ $user->phone }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
                        <div class="user-profile layout-spacing">
                            <div class="widget-content widget-content-area">
                               <form method="POST" enctype="multipart/form-data" action="{{ route('admin.user.profile.update') }}">
                                   {{ csrf_field() }}
                                   <div class="row">
                                       <div class="col-lg-11 mx-auto">
                                           <div class="row">
                                               <div class="col-xl-12 col-lg-12 col-md-12">
                                                   <div class="upload mt-4 pr-md-4">
                                                       <input type="file" name="image" id="input-file-max-fs" class="dropify"  data-max-file-size="1M" />
                                                   </div>
                                               </div>
                                               <div class="col-xl-10 col-lg-12 col-md-8  mt-3">
                                                   <div class="form">
                                                       <div class="row">
                                                           <div class="col-sm-6">
                                                               <div class="form-group">
                                                                   <label for="fname">First Name</label>
                                                                   <input type="text" class="form-control mb-4" name="fname" id="fname" placeholder="First Name" value="{{ $user->first_name }}">
                                                               </div>
                                                           </div>
                                                           <div class="col-sm-6">
                                                               <div class="form-group">
                                                                   <label for="lname">Last Name</label>
                                                                   <input type="text" class="form-control mb-4" name="lname" id="lname" placeholder="Last Name" value="{{ $user->last_name }}">
                                                               </div>
                                                           </div>
                                                           <div class="col-sm-6 mt-3">
                                                               <label class="email">email</label>
                                                               <div class="d-sm-flex d-block">
                                                                   <div class="form-group mr-1">
                                                                       <input type="text" value="{{ $user->email }}" id="email" placeholder="Email" name="email" class="form-control" required>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                           <div class="col-sm-6 mt-3">
                                                               <label for="phone">Phone</label>
                                                               <div class="d-sm-flex d-block">
                                                                   <div class="form-group mr-1">
                                                                       <input type="number" class="form-control mb-4" name="phone" id="phone" placeholder="Phone" value="{{ $user->phone }}" required>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                           {{Form::submit('Update',['class'=>'mt-4 btn btn-primary'])}}
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection

@push('scripts')
<script src="{{ asset('cork/plugins/table/datatable/datatables.js') }}"></script>
<script src="{{ asset('cork/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
<script src="{{ asset('cork/plugins/sweetalerts/custom-sweetalert.js') }}"></script>
<script src="{{ asset('cork/plugins/dropify/dropify.min.js') }}"></script>
<script src="{{ asset('cork/plugins/blockui/jquery.blockUI.min.js') }}"></script>
<script src="{{ asset('cork/assets/js/users/account-settings.js') }}"></script>
<script>
    $('#zero-config').DataTable({
        "oLanguage": {
            "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 7
    });
</script>

<script>


    $('.widget-content .warning.confirm').on('click', function (event ) {
        $this = $(this);
        event.preventDefault();
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
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
