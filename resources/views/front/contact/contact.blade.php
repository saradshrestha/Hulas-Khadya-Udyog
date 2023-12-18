
@extends('front.layouts.master')
@section('pageTitle', 'Contact Us | '.getSiteSetting('site_title'))
@push('styles')

@endpush

@section('content')
 <!--==============================Breadcumb============================== -->
<div class="breadcumb-wrapper ">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Contact <span class="font-style text-theme2">Us</span></h1>
            <ul class="breadcumb-menu">
                <li><a href="{{route('index')}}">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!--==============================Map Area==============================-->
<div class="space">
    <div class="container">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.27689209799!2d85.29111321894536!3d27.709031933488287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1673862174603!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<!--==============================Contact Area==============================-->
<div class="" data-pos-for="#contactFormSec" data-sec-pos="bottom-half">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="contact-info" data-bg-src="assets/img/bg/contact_info_bg.png">
                    <div class="contact-info_icon">
                        <i class="fal fa-phone"></i>
                    </div>
                    <h4 class="contact-info_title box-title">Phone</h4>
                    <span class="contact-info_text">
                        <a href="tel:{{ returnSiteSetting('primary_phone')}}">{{ returnSiteSetting('primary_phone')}}</a>
                        <a href="tel:{{ returnSiteSetting('primary_secondary')}}">{{ returnSiteSetting('primary_secondary')}}</a>
                    </span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info" data-bg-src="assets/img/bg/contact_info_bg.png">
                    <div class="contact-info_icon">
                        <i class="fal fa-envelope"></i>
                    </div>
                    <h4 class="contact-info_title box-title">Email</h4>
                    <span class="contact-info_text">
                        <a href="mailto:{{ returnSiteSetting('primary_email')}}">{{ returnSiteSetting('primary_email')}}</a>
                        <a href="mailto:{{ returnSiteSetting('secondary_email')}}">{{ returnSiteSetting('secondary_email')}}</a>
                    </span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info" data-bg-src="assets/img/bg/contact_info_bg.png">
                    <div class="contact-info_icon">
                        <i class="fal fa-location-dot"></i>
                    </div>
                    <h4 class="contact-info_title box-title">Location</h4>
                    <span class="contact-info_text">{{ returnSiteSetting('address') ?? "Kathmandu,Nepal"}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="space bg-smoke2" id="contactFormSec">
    <div class="container">
        <form action="{{ route('submitContact') }}" method="POST" class="contact-form">
            @csrf
            <h3 class="form-title">Get In Touch</h3>
            <div class="row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" value="{{ old('name')}}" name="name" id="name" placeholder="Your Name" required>
                    <i class="fal fa-user"></i>
                </div>
                <div class="form-group col-md-6">
                    <input type="email" class="form-control" value="{{ old('email')}}" name="email" id="email" placeholder="Email Address" required>
                    <i class="fal fa-envelope"></i>
                </div>
                <div class="form-group col-md-6">
                    <input type="tel" class="form-control" value="{{ old('phone')}}" name="phone" id="phone" placeholder="Phone Number" >
                    <i class="fal fa-phone"></i>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" value="{{ old('subject')}}" name="subject" id="subject" placeholder="Subject" required>
                    {{-- <select name="subject" id="subject" class="form-select">
                        <option value="" disabled selected hidden>Select Service</option>
                        <option value="Reservation For Birthday">Reservation For Birthday</option>
                        <option value="Book A Table">Book A Table</option>
                        <option value="Food Pre-order">Food Pre-order</option>
                        <option value="Request a Quote">Request a Quote</option>
                    </select> --}}
                    {{-- <i class="fal fa-chevron-down"></i> --}}
                    <i class="fal fa-sticky-note"></i>
                </div>
                <div class="form-group col-12">
                    <textarea name="message" id="message" cols="30" rows="3" class="form-control"  placeholder="Your Message" required>{{ old('message')}}</textarea>
                    <i class="fal fa-comment"></i>  
                </div>
                <div class="form-btn text-center col-12">
                    <button class="as-btn">Submit Message</button>
                </div>
            </div>
            <p class="form-messages mb-0 mt-3"></p>
        </form>
    </div>
</section>

@endsection

@push('scripts')

@endpush