<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('cork/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('cork/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('cork/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('cork/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('cork/assets/js/app.js') }}"></script>
<script src="{{ asset('cork/plugins/font-icons/feather/feather.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>

<script>
    function loader() {
       $.blockUI({
           message: '<div class="spinner-border"><span class="sr-only">Loading...</span> </div>',
           fadeIn: 100,
           timeout: 1000, //unblock after 2 seconds
           overlayCSS: {
               backgroundColor: '#1b2024',
               opacity: 0.8,
               zIndex: 1200,
               cursor: 'wait'
           },
           css: {
               border: 0,
               color: '#fff',
               zIndex: 1201,
               padding: 0,
               backgroundColor: 'transparent'
           }
       });
   }
</script>

{!! Toastr::message() !!}
<script>
    $(document).ready(function() {
        App.init();
        $(".alert-message").delay(20000).fadeOut(500);

    });
</script>

<script type="text/javascript">
    feather.replace();
    $(document).ready(function() {
        $('textarea').summernote({
            height: 300
        });
    });
</script>
<script>

</script>
<script src="{{ asset('cork/assets/js/custom.js') }}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@stack('scripts')
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->