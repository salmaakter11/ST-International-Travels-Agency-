@extends('frontend.master')

@section('fontend_body')
    <!-- header area end here -->

    <!-- page title area start -->
    <div class="page-title__area pt-110" style="background-image: url({{ asset('fontend') }}/img/about-us/ab-us.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper text-center">
                        <h3 class="pb-100">China</h3>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadccrumb-bg">
            <ul class="breadcrumb justify-content-center pt-20 pb-20">
                <li class="bd-items"><a href="{{ route('frontend.home') }}">Home</a></li>
                <li class="bd-items bdritems">|</li>
                <li class="bd-items"> <a href="{{ route('frontend.china') }}">China</a></li>
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
                                    <li><span>Capital City</span>: <span>Beijing</span></li>
                                    <li><span>Local Time</span>: <span>GMT + 8</span></li>
                                    <li><span>Telephone Code</span>: <span>+86</span></li>
                                    <li><span>Bank Time</span>: <span>Closed on Saturday and Sunday.</span></li>
                                    <li><span>Exchange Rate</span>: <span>1 USD is equivalent to 6.12072 CNY</span></li>
                                    <li><span>Embassy Address</span>: <span>Plot 2&4, Road No. 3 Block-1, Baridhara</span></li>

                                    <h5> </h5>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xxl-12 col-xl-12">
                            <div class="necessary__box">
                                <h4 class="necessary__title mb-25">
                                    GENERAL DOCUMENTS REQUIRED FOR VISA
                                </h4>
                                <ul class="necessary-link mb-20">
                                    <li><i class="fal fa-check-square"></i> Seven (08) Months Valid Passport with Old Passport if have one.</li>
                                    <li><i class="fal fa-check-square"></i> Visiting Card.</li>
                                    <li><i class="fal fa-check-square"></i> Recent 2 copy photographs taken in the last 3 months (white background only, passport size) </li>
                                    <li><i class="fal fa-check-square"></i> Bank Statements last six months with a bank solvency certificate (last balance 3,00,000)</li>
                                    <li><i class="fal fa-check-square"></i> NID Copy</li>
                                    <li><i class="fal fa-check-square"></i> Vaccine Certificate</li>
                                    <li><i class="fal fa-check-square"></i> Tin Certificate</li>
                                    <h4 class="necessary__title mb-25">
                                        For Business Person
                                    </h4>
                                    <li><i class="fal fa-check-square"></i> Renewal Trade license copy with notary public (English Translated )</li>
                                    <li><i class="fal fa-check-square"></i> Memorandum for Limited Company </li>
                                    <li><i class="fal fa-check-square"></i> The blank page of the office pad.</li>
                                    <h4 class="necessary__title mb-25">
                                        For Job Holder
                                    </h4>
                                    <li><i class="fal fa-check-square"></i> No Objection Certificate (NOC)</li>
                                    <li><i class="fal fa-check-square"></i> BAR Council Certificate for Advocate</li>
                                    <li><i class="fal fa-check-square"></i> BMDC certificate for Doctor </li>
                                    <h4 class="necessary__title mb-25">
                                        For Student
                                    </h4>
                                    <li><i class="fal fa-check-square"></i> Student ID card Photo Copy.</li>
                                    <li><i class="fal fa-check-square"></i> Birth Certificate (Only for Child & Infant).</li>
                                    <h4 class="necessary__title mb-25">
                                        Others
                                    </h4>
                                    <li><i class="fal fa-check-square"></i> Marriage Certificate Copy (For family application only)</li>
                                    <h4 class="necessary__title mb-25">
                                        Visa Fees
                                    </h4>
                                    <li><i class="fal fa-check-square"></i> CHINA 1st time - 3 countries (sticker visa) visited without India/Nepal – BDT: 11,500/- per person.</li>
                                    <li><i class="fal fa-check-square"></i> CHINA 2nd time - BDT: 10,000/- - per person.</li>
                                    <li><i class="fal fa-check-square"></i> CHINA double entry- BDT: 14,000/- - per person.e</li>
                                    <li><i class="fal fa-check-square"></i> CHINA 1 year multiple entries- BDT: 22,500/- - per person.</li>
                                    <h4 class="necessary__title mb-25">
                                        Special Note
                                    </h4>
                                    <li><i class="fal fa-check-square"></i> Delivery Time (5 to 7) working days.</li>
                                    <li><i class="fal fa-check-square"></i>  Visa rate can be changed without prior notice.</li>
                                    <li><i class="fal fa-check-square"></i> The client needs to provide a Fingerprint at the Embassy after informing by Embassy.</li>

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
