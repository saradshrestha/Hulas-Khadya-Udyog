
@extends('front.layouts.master')
@section('pageTitle', 'Products | '.getSiteSetting('site_title'))
@push('styles')
<style>
    .sub-nav-item-l1{
        font-size:16px;
        padding:14px 0 !important;
    }
   
    /* body{
        font-family: "Poppins", sans-serif;
    } */
    .sticky-tab-body-wrapper h1,.sticky-tab-body-wrapper h2,.sticky-tab-body-wrapper h3{
        padding:20px 0px;
        letter-spacing: 1.5px;
        font-weight: 400 !important;
        font-size: 24px !important;
        margin-top: 1px;
    }
    .sticky-tab-body-wrapper h3{
        text-transform: none;
    }
    .sticky-tab-body-wrapper h4{
        font-size: 24px !important;
        font-weight: 400 !important;
    }
    .sticky-tab-body-wrapper p{
        /* line-height: 36px; */
        font-size: 18px; 
    }
    .sticky-tab-body-wrapper ul{
        font-size:22px;

    }
    .sticky-tab-body-wrapper table{
        width: 100% !important;
    }
    .sticky-tab-body-wrapper table *{
        border:none;
        color: white;
        font-size: 18px;
    }
     
    .sticky-tab-body-wrapper .table.table-bordered tr{
        border-bottom: solid white 1px;
        display: grid!important;
        grid-template-columns: repeat(4, 1fr)!important;
        column-gap:12px;
    }

    .sticky-tab-body-wrapper .table.table-bordered tr td{
        padding: 8px 0px !important;
        color: white !important;
        text-transform: initial !important
        /* width: 250px; */

    }

    .table.table-bordered tr td{
        padding: 8px 0px !important;
        color: white !important;
        /* width: 250px; */
    }

    

    @media screen and (max-width: 700px){
        .sticky-tab-body-wrapper .table.table-bordered tbody tr{
            display: grid!important;
            grid-template-columns: repeat(2, 1fr)!important;
        }
        .sticky-tab-body-wrapper .table.table-bordered tr{
            border-bottom: none;
        }
        .sticky-tab-body-wrapper .table.table-bordered tbody tr td{
            font-size: 16px !important;
            border-bottom: solid white 1px !important;
            padding: 12px 0px !important;
            position: relative;
        }
        .sticky-tab-body-wrapper .table.table-bordered tbody tr td::after{
            content: "";
            position: absolute;
            left: 0;
            top: 100%;
            width: 100%;
            height: 1px;
            background-color: white;
        }
    }
    
</style>
   
@endpush

@section('banner')
    @include('front.product.single.productsinglebanner')
@endsection

@section('content')

<div class = "sticky-sc-content mt-4">
    <div class = "sticky-tab-heads-wrapper bg-nero d-flex align-items-center justify-content-center mt-5 mt-lg-0" id = "sticky-head">
        <div class = "sticky-tab-heads d-flex justify-content-center flex-column flex-md-row">
            <a href = "#overview" class = "sticky-tab-head py-2 text-white fw-4 fs-22">Overview</a>
            <a href = "#specification" class = "sticky-tab-head py-2 text-white fw-4 fs-22">Specifications</a>
            <a href = "#where_to_buy" class = "sticky-tab-head py-2 text-white fw-4 fs-22">Where to Buy</a>
        </div>
    </div>
    <div class = "sticky-tab-body-wrapper">
        <div class=""  id = "overview">
            @if(isset($product) && $product != null)
                {!! $product->description !!}
            @endif
        </div>
        <div class="container"  id = "specification">
            @if(isset($product) && $product != null)

            {!! $product->product_specs !!}

            @endif
        </div>
       <!--  single item -->
       <div class = "sticky-tab-itm stk-tab-3" id = "where_to_buy">
        <div class = "sticky-tab-title">
            <div class = "container">
                <h4>Where to Buy</h4>
                {{-- <p>Find SKYWORTH Products in electronics store near you or buy in Daraz.</p> --}}
            </div>
        </div>
        <div class = "sticky-tab-body">
            <div class = "container">
                {{-- <div class = "sticky-tab-block mt-5">
                   <div class = "location-map d-flex justify-content-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.3162595058!2d85.29111328809762!3d27.708955944420673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1662637176289!5m2!1sen!2snp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                   </div>
                </div> --}}

                <div class = "sticky-tab-btns d-md-flex justify-content-md-center">
                    {{-- <a class = "sticky-tab-btn d-flex align-items-center justify-content-center mb-3 me-md-4 btn-primary">
                        <span class = "sticky-tab-btn-icon me-2">
                            <img src = "{{ asset('frontendFiles/assets/images/misc-icons/map-icon.svg')}}">
                        </span>
                        <span class = "sticky-tab-btn-txt fw-6 fs-22">View Stores in Google Map</span>
                    </a> --}}

                    <a href = "{{ $product->purchase_link }}" target="_blank" class = "sticky-tab-btn d-flex align-items-center justify-content-center btn-secondary">
                        {{-- <lord-icon
                            src="https://cdn.lordicon.com/webtefou.json"
                            trigger="hover"
                            style="width:25px;height:25px" colors="primary: #000" class = "lord-icon me-2">
                        </lord-icon> --}}
                        <img src="{{ asset('frontendFiles/assets/images/daraz_logo_3.png') }}" alt="daraz_logo" style="width: 33px; margin-right:6px;">
                        <span class = "sticky-tab-btn-txt fw-6 fs-22 text-nero">Buy Now from Daraz</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
           
    </div>
    

</div>



@endsection

@push('scripts')



@endpush