<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
<!-- lordicon cdd -->
<script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
<!-- boostrap 5 js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<!-- owl carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- isotopes -->
<script src="{{ asset('frontendFiles/assets/plugins/isotope-docs/js/isotope-docs.min.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('frontendFiles/assets/js/script.js') }}"></script>
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
