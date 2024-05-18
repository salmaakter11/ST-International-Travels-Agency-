@extends('frontend.master')

@section('fontend_body')
    <!-- header area end here -->

    <!-- page title area start -->
    <div class="page-title__area pt-110" style="background-image: url({{ asset('fontend') }}/img/about-us/ab-us.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper text-center">
                        <h3 class="pb-100">India</h3>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadccrumb-bg">
            <ul class="breadcrumb justify-content-center pt-20 pb-20">
                <li class="bd-items"><a href="{{ route('frontend.home') }}">Home</a></li>
                <li class="bd-items bdritems">|</li>
                <li class="bd-items"> <a href="{{ route('frontend.india') }}">India</a></li>
            </ul>
        </nav>
    </div>
    <!-- page title area end -->

    <main>


        <!-- business area start here -->
        <div class="businnes-area pt-60">
            <div class="container">
                <div class="necessary">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="information-info">
                                <ul>
                                    <li><span>Capital City</span>: <span>Delhi</span></li>
                                    <li><span>Local Time</span>: <span>GMT + 5.30</span></li>
                                    <li><span>Telephone Code</span>: <span>GMT + 5.30</span></li>
                                    <li><span>Bank Time</span>: <span>Closed on Saturday and Sunday</span></li>
                                    <li><span>Exchange Rate</span>: <span>1 BDT is equivalent to 0.79 INR</span></li>
                                    <li><span>Embassy Address</span>: <span>Floor - G1, South Court, Jamuna Future Park, Dhaka 1229</span></li>
                                    <h5></h5>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xxl-12 col-xl-12">
                            <div class="necessary__box">
                                <h4 class="necessary__title mb-25">
                                    GENERAL DOCUMENTS REQUIRED FOR VISA
                                </h4>
                                <ul class="necessary-link mb-20">
                                    <li><i class="fal fa-check-square"></i> Passport copy</li>
                                    <li><i class="fal fa-check-square"></i> Last Indian visa copy (if any)</li>
                                    <li><i class="fal fa-check-square"></i> NID copy </li>
                                    <li><i class="fal fa-check-square"></i> Recent 1 Copy Photo (2"x2", white background, glossy/matte paper)</li>
                                    <li><i class="fal fa-check-square"></i> Latest Utility (Electricity/Gas/Water) bill copy</li>
                                    <li><i class="fal fa-check-square"></i> NOC  from the company - (If doing any job)</li>
                                    <li><i class="fal fa-check-square"></i> Trade License- If Business</li>
                                    <li><i class="fal fa-check-square"></i> Visiting card/Employee ID card</li>
                                    <li><i class="fal fa-check-square"></i>  Bank statement of last 06 months/Dollar endorsement certificate (at least USD $200) </li>
                                    <li><i class="fal fa-check-square"></i> Student ID Card copy and Birth Certificate (If Student)</li>
                                    <li><i class="fal fa-check-square"></i> Previous SAARC visited country name  & year of visit - if any</li>
                                    <li><i class="fal fa-check-square"></i> Previous NON-SAARC visited country name - if any</li><br>
                                    <h4 class="necessary__title mb-25">
                                        Business Visa
                                    </h4>
                                    <li><i class="fal fa-check-square"></i> Profession proof</li>
                                    <li><i class="fal fa-check-square"></i> Tin, Tax certificate</li>
                                    <li><i class="fal fa-check-square"></i> Invitation letter</li>
                                    <li><i class="fal fa-check-square"></i> IRC/ERC</li>
                                    <li><i class="fal fa-check-square"></i> LC / Dual party Agreement</li>
                                    <li><i class="fal fa-check-square"></i> Association certificate</li>
                                    <li><i class="fal fa-check-square"></i> Last passport copy and all old passports</li>
                                    <h4 class="necessary__title mb-25">
                                        Medical /Medical Attendant Visas
                                    </h4>
                                    <li><i class="fal fa-check-square"></i> Medical Invitation letter from India with a specific date</li>
                                    <li><i class="fal fa-check-square"></i>  All Medical original documents</li>
                                    <li><i class="fal fa-check-square"></i> Profession proof</li>
                                    <li><i class="fal fa-check-square"></i> Last passport copy and all old passports</li>
                                    <li><i class="fal fa-check-square"></i> Visa processing & Visa fee: BDT 2500</li>
                                </ul>
                                <a href="{{ route('frontend.contact') }}" class="business-btn">View More Requrements</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- business area end here -->
    </main>
@endsection
