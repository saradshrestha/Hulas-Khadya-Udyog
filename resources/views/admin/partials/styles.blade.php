<link rel="icon" type="image/x-icon" href="{{ asset(getSiteSetting('favicon')) }}"/>
<link href="{{ asset('cork/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('cork/assets/js/loader.js') }}"></script>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
<link href="{{ asset('cork/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/19131c6c4b.js"></script>
<link rel="stylesheet" href="{{ asset('cork/assets/css/elements/alert.css') }}">
<link rel="stylesheet" href="{{ asset('cork/assets/css/elements/breadcrumb.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
@stack('styles')
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->