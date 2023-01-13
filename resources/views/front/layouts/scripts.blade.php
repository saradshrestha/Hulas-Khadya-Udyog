
    <script src="{{ asset('frontendFiles/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('frontendFiles/assets/js/slick.min.js') }}"></script>
    <!-- Layerslider -->
    <script src="{{ asset('frontendFiles/assets/js/layerslider.utils.js')}}"></script>
    <script src="{{ asset('frontendFiles/assets/js/layerslider.transitions.js')}}"></script>
    <script src="{{ asset('frontendFiles/assets/js/layerslider.kreaturamedia.jquery.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('frontendFiles/assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('frontendFiles/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Datepicker -->
    <script src="{{ asset('frontendFiles/assets/js/jquery.datetimepicker.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('frontendFiles/assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('frontendFiles/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontendFiles/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Main Js File -->
    <script src="{{ asset('frontendFiles/assets/js/main.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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


    {{-- <script>
        var $modal = $('.qoutemodal');
        $(document).on("click", ".quoteModal", function(e) {
            e.preventDefault();
            $this = $(this);
            var id = $this.attr('data-id');
            var tempModalUrl = "{{ route('modal', ':id') }}";
            tempModalUrl = tempModalUrl.replace(':id', id);
            $modal.load(tempModalUrl, function(response) {
                $modal.modal({
                    show: true
                });
            });
        });

        document
            .querySelector("#rating_small")
            .addEventListener("click", function(e) {
                let action = "add";
                for (const span of this.children) {
                    span.classList[action]("active");
                    if (span === e.target) action = "remove";
                }
            });
        document
            .querySelector("#rating_big")
            .addEventListener("click", function(e) {
                let action = "add";
                for (const span of this.children) {
                    span.classList[action]("active");
                    if (span === e.target) action = "remove";
                }
            });

        $(".flip-box-back").hover(function() {
            var $this = $(this);
            $(".flip-box-back").scrollTo($this, 3000);
        }, function() {
            $(".flip-box-back").stop();
            // stop on unhover
        });

        $(document).ready(function() {
            $('.selectetwo').select2();
        });
    </script>
    <script>
        window.scrollTo(0, 0);


        if (document.querySelector('.owl-carousel')) {

            $(".owl-carousel").owlCarousel({
                loop: true,
                nav: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true,
                    },
                    600: {
                        items: 2,
                        nav: true,
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false,
                    },
                },
                navText: [
                    '<i class="fa fa-angle-left"></i>',
                    '<i class="fa fa-angle-right"></i>',
                ],
            });
        }
    </script> --}}

    <!--End of Tawk.to Script-->

@stack('scripts')
