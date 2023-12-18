

 <footer class="footer-wrapper footer-layout1">
    {{-- <div class="container">
        <div class="footer-top">
            <div class="row align-items-center">
                <div class="col-xl-3">
                    <div class="footer-logo">
                        <img src="{{ asset('frontendFiles/assets/img/logo-white.svg')}}" alt="Logo">
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="subscribe-box">
                        <div>
                            <h2 class="subscribe-box_title">Subscription News</h2>
                            <p class="subscribe-box_text">Subscribe to the weekly newsletter for latest updates.</p>
                        </div>
                        <form class="newsletter-form">
                            <input class="form-control" type="email" placeholder="Enter Email Address" required="">
                            <button type="submit" class="as-btn style3">SUBCRIBE<i class="fas fa-arrow-right ms-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">About {{ returnSiteSetting('site_title') ?? "Hulas Kadhya"}}</h3>
                        <div class="as-widget-about">
                            <p class="about-text">{{ returnSiteSetting('site_Description') ?? '' }}</p>
                            <div class="as-social">
                                <a href="{{ returnSiteSetting('fb_link') ?? 'https://www.fb.com/'}}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ returnSiteSetting('twitter_link') ?? 'https://www.twitter.com/'}}"><i class="fab fa-twitter"></i></a>
                                <a href="{{ returnSiteSetting('youtube_link') ?? 'https://www.linkedin.com/'}}"><i class="fab fa-linkedin-in"></i></a>
                                <a href="{{ returnSiteSetting('insta_link') ?? 'https://www.instagram.com/'}}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Quick Links</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="{{ route('aboutus') }}">About Us</a></li>
                                <li><a href="{{ route('products') }}">Products</a></li>
                                <li><a href="{{ route('recipes') }}">Recipes</a></li>
                                {{-- <li><a href="{{route('index')}}#testimonial">Testimonial</a></li> --}}
                                <li><a href="{{ route('contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Contact Now</h3>
                        <div class="as-widget-contact">
                            <div class="info-box">
                                <div class="info-box_icon">
                                    <i class="fal fa-location-dot"></i>
                                </div>
                                <p class="info-box_text">{{ returnSiteSetting('address') ?? "Kathmandu,Nepal"}}</p>
                            </div>
                            <div class="info-box">
                                <div class="info-box_icon">
                                    <i class="fal fa-mobile-button"></i>
                                </div>
                                <p class="info-box_text">
                                    <a href="tel:{{ returnSiteSetting('primary_phone')}}" class="info-box_link">{{ returnSiteSetting('primary_phone')}}</a><br>
                                    <a href="tel:{{ returnSiteSetting('secondary_phone')}}" class="info-box_link">{{ returnSiteSetting('secondary_phone')}}</a>
                                </p>
                            </div>
                            <div class="info-box">
                                <div class="info-box_icon">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <p class="info-box_text">
                                    <a href="mailto:{{ returnSiteSetting('primary_email')}}" class="info-box_link">{{ returnSiteSetting('primary_email')}}</a>
                                    <a href="mailto:{{ returnSiteSetting('secondary_email')}}" class="info-box_link">{{ returnSiteSetting('secondary_email')}}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2022 <a href="https://an4soft.com">An4soft</a>. All Rights Reserved.</p>
                </div>
                {{-- <div class="col-lg-6 text-end d-none d-lg-block">
                    <div class="footer-links">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Condition</a></li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</footer>





{{-- <footer class="ftr text-white">
    <div class="container px-0">
        <div class="ftr-content row text-center text-md-start">
            <div class="col-md-6 col-lg-6">
                <div class="ftr-item">
                    <div class="site-name d-flex justify-content-center justify-content-md-start mb-3">
                        <a href="{{ route('index') }}" class="navbar-brand me-0">
                            <img src="{{ getSiteSetting('logo') ? asset(getSiteSetting('logo')) : asset('frontendFiles/assets/images/site-logo.svg') }}"
                                alt="site logo">
                        </a>
                    </div>

                    <div class="contact-info">
                        <h6 class="text-capitalize fw-5">contact us</h6>
                        <ul>
                            <li class="fs-14 fw-3 mb-1">
                                {{ getSitesetting('address') ?? 'Smart Appliances Pvt. Ltd.' }}
                            </li>
                            <li class="fs-14 fw-3 mb-1">Online: {{ getSitesetting('primary_phone') ?? '014543119' }}
                            </li>
                            <li class="fs-14 fw-3 mb-1">Email for Business:
                                {{ getSitesetting('primary_email') ?? 'smart@kldugargroup.com' }}
                            </li>
                            <li class="fs-14 fw-3 mb-1">Email for After-Sale Service:
                                {{ getSitesetting('sales_email') ?? 'service.smart@kldugargroup.com' }}
                            </li>
                        </ul>
                    </div>

                    <div class="social-links mt-4">
                        <h6 class="text-capitalize">social media</h6>

                        <ul class="d-flex align-items-center justify-content-center justify-content-md-start">
                            <li><a href="{{ getSitesetting('fb_link') ?? '#' }}" target="_blank"><img
                                        src="{{ asset('frontendFiles/assets/images/social-icons/fb-icon.svg') }}"></a>
                            </li>
                            <li><a href="{{ getSitesetting('insta_link') ?? '#' }}"  target="_blank"><img
                                        src="{{ asset('frontendFiles/assets/images/social-icons/insta-icon.svg') }}"></a>
                            </li>
                            <li><a href="{{ getSitesetting('youtube_link') ?? '#' }}"  target="_blank"><img
                                        src="{{ asset('frontendFiles/assets/images/social-icons/youtube-icon.svg') }}"></a>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="ftr-item">
                    <div class="nav-links">
                        <h6 class="fw-5">Quick Links</h6>
                        <ul>
                            <li class="mb-1"><a href="{{ route('aboutus') }}" class="fw-3 fs-14">About us</a></li>
                            <li class="mb-1"><a href="{{ route('products') }}" class="fw-3 fs-14">Products</a></li>
                            <li class="mb-1"><a href="{{ route('blogs') }}" class="fw-3 fs-14">Blogs</a></li>
                            <li class="mb-1"><a href="{{ route('news') }}" class="fw-3 fs-14">News</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="ftr-item">
                    <div class="nav-links">
                        <h6 class="text-capitalize fw-5">Supports</h6>
                        <ul>
                            <li class="mb-1"><a href="{{ route('contact') }}" class="fw-3 fs-14">Contact Us
                                </a></li>
                            <li class="mb-1"><a href="{{ route('warranty') }}" class="fw-3 fs-14">Repair & Warranty
                                </a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ftr-text">
        <div class="container d-md-flex justify-content-md-between align-items-md-center text-center text-md-start">
            <p class="mb-0 fw-3 fs-14">Copyright © 2020 SKYWORTH All rights reserved.</p>

            <a href="{{ route('privacy.policy') }}" class="fw-3 fs-14">Privacy Policy</a>

        </div>
    </div>
</footer> --}}
