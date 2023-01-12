<footer class="ftr text-white">
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
                            {{-- <li class="mb-1"><a href="{{ route('warranty') }}" class="fw-3 fs-14">Manuals
                                </a></li> --}}
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
</footer>
