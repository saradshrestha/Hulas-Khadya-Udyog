<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ getSiteSetting('site_title') }} </title>
    @include('admin.partials.styles')

</head>
<body>
<!-- BEGIN LOADER -->
<div id="load_screen"> <div class="loader"> <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div></div></div>
<!--  END LOADER -->

@include('admin.partials.navbar')

@include('admin.partials.topbar')

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

@include('admin.partials.sidebar')

<!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="row alert-message">
            <div class="col-md-8 offset-md-2">
                @if ($errors->any())
                    <div class="alert alert-danger m-2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        @include('admin.partials.succcess')
        @include('admin.partials.errors')
        @yield('contents')
        @include('admin.partials.footer')
    </div>

</div>
<!-- END MAIN CONTAINER -->



    @include('admin.partials.scripts')

</body>
</html>
