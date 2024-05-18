@extends('frontend.master')

@section('fontend_body')
    <!-- header area end here -->

    <!-- page title area start -->
    <div class="page-title__area pt-110" style="background-image: url({{ asset('fontend') }}/img/about-us/ab-us.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper text-center">
                        <h3 class="pb-100">Schengen Countries</h3>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadccrumb-bg">
            <ul class="breadcrumb justify-content-center pt-20 pb-20">
                <li class="bd-items"><a href="{{ route('frontend.home') }}">Home</a></li>
                <li class="bd-items bdritems">|</li>
                <li class="bd-items"> <a href="{{ route('frontend.schengen') }}">Schengen</a></li>
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
                                    <li><span>Capital City</span>: <span>Madrid</span></li>
                                    <li><span>Local Time</span>: <span>GMT + 1</span></li>
                                    <li><span>Telephone Code</span>: <span>+ 34</span></li>
                                    <li><span>Bank Time</span>: <span>Closed on Saturday and Sunday</span></li>
                                    <li><span>Exchange Rate</span>: <span>1 USD is equivalent to 108 EUR</span></li>
                                    <li><span>Embassy Address</span>: <span>12 Kemal Ataturk Avenue, Gulshan 2, Dhaka 1212
                                        </span></li>
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
                                    <li>ST international Ltd! Facilitates you with a Schengen Countries visa from Bangladesh. <br>

                                        Tourist Visa for Schengen Countries- Information
                                    </li>
                                    <li>TOURISM VISA</li>
                                    <li>Documents required: </li>
                                    <li><i class="fal fa-check-square"></i> Spanish Schengen visa application form, duly
                                        filled in and signed by the applicant.</li>
                                    <li><i class="fal fa-check-square"></i> One recent color passport-size photo with white
                                        background (gents with uncovered heads) has to be glued to the application form.
                                    </li>
                                    <li><i class="fal fa-check-square"></i>Original and photocopy of passport or official
                                        travel document:</li>
                                    <li><i class="fal fa-check-square"></i> Bangladeshi nationals: photocopy of the page
                                        with the personal data (and other relevant pages) and previous visas.</li>
                                    <li><i class="fal fa-check-square"></i> Non- Bangladeshi nationals: photocopy of pages
                                        with the personal data (and other relevant pages), previous visas, and the
                                        Bangladeshi residence visa which has to be valid at least three months after the
                                        expiry date of the Schengen visa.</li>

                                    <li>All passports have to have been issued during the previous 10 years and should be
                                        valid for at least 3 months longer than the validity of the visa applied for. </li>
                                    <li><i class="fal fa-check-square"></i> Visa fee.</li>
                                    <li><i class="fal fa-check-square"></i> Medical insurance (covering 30.000,00 €)
                                        including repatriation from any Schengen State in case of emergency. The medical
                                        insurance has to cover all your stay in all Schengen States.</li>
                                    <li><i class="fal fa-check-square"></i> Photocopy (full page) of your booking of the
                                        return ticket.</li>
                                    <li><i class="fal fa-check-square"></i> Hotel confirmation or hotel voucher for the
                                        whole stay or other documents proving accommodation.</li>
                                    <li><i class="fal fa-check-square"></i> Economic means: Original Bank Statement
                                        (Personal and company) and credit card statements for the last 6 months which should
                                        be updated. The statements should be signed by the bank/branch manager and should be
                                        bear the seal/stamp of the bank/branch manager.</li>
                                    <li><i class="fal fa-check-square"></i> If visiting family or friends, proof of
                                        sponsorship including proof of family/ties with the sponsor, a letter of invitation,
                                        specific countries may request additional supporting documentation</li>
                                    <li><i class="fal fa-check-square"></i> If employed by a company in Bangladesh:
                                        Certificate of employment mentions: <br>
                                        (i) Address, telephone, and fax number of the company; <br>
                                        (ii) Name and position in the company of the countersigning officer; <br>
                                        (iii) Name of applicant, position, salary, and number of years of service; <br>
                                        (iv) Certificate of leave absence.
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
