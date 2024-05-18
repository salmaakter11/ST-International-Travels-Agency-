@extends('frontend.master')

@section('fontend_body')
    <!-- header area end here -->

    <!-- page title area start -->
    <div class="page-title__area pt-110" style="background-image: url({{ asset('fontend') }}/img/about-us/ab-us.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper text-center">
                        <h3 class="pb-100">Dubai</h3>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadccrumb-bg">
            <ul class="breadcrumb justify-content-center pt-20 pb-20">
                <li class="bd-items"><a href="{{ route('frontend.home') }}">Home</a></li>
                <li class="bd-items bdritems">|</li>
                <li class="bd-items"> <a href="{{ route('frontend.dubai') }}">Dubai</a></li>
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
                                    <li><span>Capital City</span>: <span>Abu Dhabi</span></li>
                                    <li><span>Local Time</span>: <span>GMT + 4</span></li>
                                    <li><span>Telephone Code</span>: <span>GMT + 4</span></li>
                                    <li><span>Bank Time</span>: <span>Closed on Friday, open on Saturday and Sunday</span>
                                    </li>
                                    <li><span>Exchange Rate</span>: <span>1 USD is equivalent to 3.67 AED</span></li>
                                    <li><span>Embassy Address</span>: <span>House No 41, Road No 113, Gulshan Dhaka 1212,
                                            Bangladesh</span></li>
                                    <h5></h5>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xxl-12 col-xl-12">
                            <div class="necessary__box">
                                <h4 class="necessary__title mb-25">
                                    Visa Requirements
                                </h4>
                                <ul class="necessary-link mb-20">
                                    <li>ST International Ltd! Facilitates you with a United Arab Emirates visa from Bangladesh.
                                        <br>
                                        Requirements for DUBAI Visa Application <br>
                                        Visa requirements: (Through Emirates Airline) - 30 Days Stay - Single Entry
                                    </li>
                                    <li><i class="fal fa-check-square"></i> New and Old Passport bio page(1st page) color
                                        scan copy</li>
                                    <li><i class="fal fa-check-square"></i> Previous visited visa color scan copies - Any
                                        country </li>
                                    <li><i class="fal fa-check-square"></i> Commitment letter of return</li>
                                    <li><i class="fal fa-check-square"></i> Recent 2 copy photographs taken in the last 3
                                        months (passport size, white background hard copy).</li>
                                    <li><i class="fal fa-check-square"></i> Visiting Card. - hard copy</li>
                                    <li><i class="fal fa-check-square"></i> Birth Certificate Mandatory for Child (below 18
                                        yrs)</li>
                                    <li>*** Security deposit of BDT 1,00,000/- per person is required depending on the
                                        applicant's profile and travel history ***</li>
                                    <h4 class="necessary__title mb-25">
                                        For Business Perso
                                    </h4>
                                    <li><i class="fal fa-check-square"></i> Office Pad / Company Letter Head Pad) </li>
                                    <h4 class="necessary__title mb-25">
                                        For Job Holder
                                    </h4>
                                    <li><i class="fal fa-check-square"></i> No objection certificate (NOC) - Hard Copy</li>
                                    <li><i class="fal fa-check-square"></i> Employee ID card copy - color scan</li>
                                    <li><i class="fal fa-check-square"></i> BMDC certificate for Doctor</li>
                                    <li><i class="fal fa-check-square"></i> BAR council certificate for Advocate</li>
                                    <h4 class="necessary__title mb-25">
                                        For Student
                                    </h4>
                                    <li><i class="fal fa-check-square"></i> Student ID card Photo Copy - color scan (not
                                        with mobile photography) </li>
                                    <li><i class="fal fa-check-square"></i> Birth certificate (Only for Child & infant) -
                                        color scan copy (not with mobile photography)</li>
                                    <h4 class="necessary__title mb-25">
                                        Others
                                    </h4>
                                    <li>Marriage certificate copy ( if spouse's name is not mentioned in the Passport ) <br>

                                        Visa fee + Visa processing fee per person: Male & Female, BDT 11,200/- Child 5,600/-
                                        (Tourist visa fee) - (Non-refundable) - 30 Days Stay - Single Entry<br>

                                        96 hours Transit Visa Requirement:</li>
                                    <li><i class="fal fa-check-square"></i> Passport scan copy (Color)</li>
                                    <li><i class="fal fa-check-square"></i>Recent 1 copy photo (Passport size, background
                                        white)</li>
                                    <li><i class="fal fa-check-square"></i> Valid visa copy of the final destination.</li>
                                    <li><i class="fal fa-check-square"></i> Visiting card hard copy (Confirm Emirates
                                        Airlines Ticket copy)</li>
                                    <li>Visa fee: BDT 7,700 (Non-refundable) - 96 hours Transit visa (Must fly with Emirates
                                        Airlines) <br>
                                        Visa requirements: (Any Airline) - 30 Days Stay - Single Entry</li>
                                    <li><i class="fal fa-check-square"></i>Passport scan copy (Color)</li>
                                    <li><i class="fal fa-check-square"></i> Recent 1 copy photo (Passport Size White
                                        Background Clear Photo, Without Beard, Cap & Optical)</li>
                                    <li><i class="fal fa-check-square"></i> Previous visited visa copies</li>
                                    <li><i class="fal fa-check-square"></i>Visiting card scan copy</li>
                                    <li><i class="fal fa-check-square"></i> Birth Certificate Mandatory for Child (below 18
                                        yrs) </li>
                                    <li>
                                        Visa fee + Visa processing fee per person with travel insurance: BDT 15,200/- (Any
                                        Airlines) (Individual) - (Non-refundable) - MALE - 30 Days Stay - Single <br> Entry
                                        (Individual travel+Family)<br>

                                        Visa fee + Visa processing fee per person with travel insurance: BDT 15,200 (Any
                                        Airlines) (Individual) - (Non-refundable) FEMALE - 30 Days Stay - Single <br> Entry
                                        (Individual travel+Family)<br>

                                        Visa fee + Visa processing fee per person with travel insurance: BDT 4,200 (Any
                                        Airlines) - (Non-refundable) - CHILD (Below 12 years) - 30 Days Stay - Single <br>
                                        Entry (with Family travel)<br>

                                        Visa fee + Visa processing fee per person with travel insurance: BDT 22,700 (Any
                                        Airlines) - (Non-refundable) - MALE - 60 Days Stay - Single Entry<br>

                                        Visa fee + Visa processing fee per person with travel insurance: BDT 22,700 (Any
                                        Airlines) - (Non-refundable) - FEMALE - 60 Days Stay - Single Entry<br>

                                        Visa fee + Visa processing fee per person with travel insurance: BDT 21,200 (Any
                                        Airlines) - (Non-refundable) - CHILD (Below 12 years) - 60 Days Stay - Single
                                        Entry<br>

                                        Fresh Passport Visa fee + Visa processing fee per person with travel insurance: BDT
                                        36,000 (Any Airlines) - (Non-refundable) - 30 Days Stay - Single Entry<br>

                                        Fresh Passport Visa fee + Visa processing fee per person with travel insurance: BDT
                                        40,000 (Any Airlines) - (Non-refundable) - 60 Days Stay - Single Entry<br>

                                        Multiple Entry Visa -<br>
                                        5 years 1,70,000/- with insurance - 5 years [Refundable]<br>

                                        Note: Visa rate can be changed without prior notice<br>
                                        Note: Delivery time (7 to 10) working days<br>
                                        Note: Visa issuance rights reserved by the Embassy<br>

                                        *** Security deposit of BDT 1,00,000 per person is required depending on the
                                        applicant's profile and travel history.
                                    </li>
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
