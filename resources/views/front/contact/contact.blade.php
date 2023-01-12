
@extends('front.layouts.master')
@section('pageTitle', 'Contact Us | '.getSiteSetting('site_title'))
@push('styles')

<style>
    .contact-hero-wrapper {
        background: url("{{('frontendFiles/assets/images/pg-contact/contact-hero-img.png')}}") center/cover no-repeat;
        min-height: 325px !important;
    }
</style>

@endpush



@section('content')

    <section class = "contact-sc pb-3" id = "contact-sc">
        <div class = "container px-0 position-relative">
            <div class = "contact-info-itms gy-4 justify-content-center">
                <div class = "contact-info-itm">
                    <div class = "contact-info-itm-icon">
                        <img src = "{{ asset('frontendFiles/assets/images/pg-contact/message-icon.svg') }}" alt = "">
                    </div>
                    <div class = "contact-info-itm-txt">skyworthnepal@gmail.com</div>
                </div>

                <div class = "contact-info-itm">
                    <div class = "contact-info-itm-icon">
                        <img src = "{{ asset('frontendFiles/assets/images/pg-contact/map-icon.svg') }}" alt = "">
                    </div>
                    <div class = "contact-info-itm-txt">Jawalakhel, Lalitpur</div>
                </div>

                <div class = "contact-info-itm">
                    <div class = "contact-info-itm-icon">
                        <img src = "{{ asset('frontendFiles/assets/images/pg-contact/phone-icon.svg') }}" alt = "" style="width:50px;">
                    </div>
                    <div class = "contact-info-itm-txt">+9779812365432</div>
                </div>
            </div>

            <div class = "row contact-form">
                <div class = "contact-form-title">
                    <h3 class = "fw-4 fs-32">Contact form</h3>
                </div>
                <form method="POST" action="{{ route('submitContact') }}">
                    @csrf
                    <div class = "row contact-form-grid">
                        <div class = "contact-form-l col-lg-6">
                            <div class = "form-elem">
                                <label for = "" class = "form-label fs-22">Your Name</label>
                                <div class = "input-group">
                                    <div class = "input-group-text bg-transparent border-0">
                                        <img src = "{{ asset('frontendFiles/assets/images/pg-contact/profile-o-icon.svg') }}" alt = "">
                                    </div>
                                    <input type = "text" name="name" class = "form-control bg-transparent border-0">
                                </div>
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class = "form-elem">
                                <label for = "" class = "form-label fs-22">Email</label>
                                <div class = "input-group">
                                    <div class = "input-group-text bg-transparent border-0">
                                        <img src = "{{ asset('frontendFiles/assets/images/pg-contact/sms-o-icon.svg') }}" alt = "">
                                    </div>
                                    <input type = "email" name="email" class = "form-control bg-transparent border-0">
                                </div>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class = "form-elem">
                                <label for = "" class = "form-label fs-22">Phone No.</label>
                                <div class = "input-group">
                                    <div class = "input-group-text bg-transparent border-0">
                        <img src = "{{ asset('frontendFiles/assets/images/pg-contact/call-o-icon.svg')}}" alt = "">

                                    </div>
                                    <input type = "text" name="phone" class = "form-control bg-transparent border-0">
                                </div>
                               
                            </div>
                        </div>
                        <div class = "contact-form-r col-lg-6">
                            <div class = "form-elem">
                                <label for = "" class = "form-label fs-22">Message</label>
                                <textarea class = "form-control bg-transparent" name="message"></textarea>
                            </div>
                            @error('message')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class = "col-12 contact-form-btn d-flex justify-content-center">
                            <button type = "submit" class = "btn btn-submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection

@push('scripts')

@endpush