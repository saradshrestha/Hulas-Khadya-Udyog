@extends('admin.partials.master')

@push('styles')
<link href="{{ asset('cork/plugins/table/datatable/datatables.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('cork/plugins/table/datatable/dt-global_style.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/elements/custom-pagination.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/elements/search.css') }}" rel="stylesheet" type="text/css" />

@endpush

@section('contents')

    <div class="row">
        <div id="timelineModern" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow mb-3">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Serach</h4>

                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">

                    <div class="row">
                        <div class="col-sm-6">
                            <nav class="breadcrumb-two" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active"><a href="{{ route('admin.search') }}">Search</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <form role="search" method="get" action="{{ route('admin.search') }}">
                    <div class="search-input-group-style input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
                        </div>
                        <input type="text" class="form-control" name="search" placeholder="Search......" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    </form>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="container mt-container">
                                <ul class="modern-timeline pl-0">

                                    @foreach($posts as $post)
                                        @if(isset($post->postType))
                                    <li>
                                        <div class="modern-timeline-badge"></div>
                                        <div class="modern-timeline-panel">
                                            <div class="modern-timeline-preview "><span class="badge badge-info">{{ $post->postType->title??'' }}</span> <a class="" href="{{ route('admin.post', $post->postType->slug) }}">View</a></div>
                                            <div class="modern-timeline-body">
                                                <h4 style=" font-size: 16px; font-weight: bold; line-height: 30px; margin-top: 5px; " class="mb-2">{{ $post->title??'' }}</h4>
                                                <p><a href="{{ route('admin.post.edit',[$post->postType->slug,$post->slug ] ) }}" class="btn btn-sm btn-primary mb-4">Edit</a></p>
                                            </div>
                                        </div>
                                    </li>
                                        <hr>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>


                            <div class="paginating-container ">

                                {{ $posts->links() }}

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


@endpush
