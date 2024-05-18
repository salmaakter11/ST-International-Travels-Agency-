@extends('frontend.master')

@section('fontend_body')
    <!-- header area end here -->

    <!-- page title area start -->
    <div class="page-title__area pt-110" style="background-image: url({{ asset('fontend') }}/img/about-us/ab-us.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper text-center">
                        <h3 class="pb-100">Qatar</h3>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadccrumb-bg">
            <ul class="breadcrumb justify-content-center pt-20 pb-20">
                <li class="bd-items"><a href="{{ route('frontend.home') }}">Home</a></li>
                <li class="bd-items bdritems">|</li>
                <li class="bd-items"> <a href="{{ route('frontend.qatar') }}">Qatar</a></li>
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
                                    <li><span>Capital City</span>: <span>Doha</span></li>
                                    <li><span>Local Time</span>: <span>UTC/GMT +3</span></li>
                                    <li><span>Telephone Code</span>: <span>+974</span></li>
                                    <li><span>Bank Time</span>: <span>Closed on Friday and Saturday</span></li>
                                    <li><span>Exchange Rate</span>: <span>1 USD is equivalent to 3.65 QAR</span></li>
                                    <li><span>Embassy Address</span>: <span>House No. 1, Road No. 79/81 Gulshan No. 2 Dhaka
                                            1212-Bangladesh.</span></li>
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
                                    <li>
                                        ST International Ltd! Facilitates you with Qatar visa from Bangladesh.  <br>
                                        Qatari Embassy in Dhaka, Bangladesh:<br>
                                        House No. 1, Road No. 79<br>
                                        Gulshan No. 2<br>
                                        Dhaka 1212-Bangladesh.<br>
                                        Telephone: (+88)02 881 9930 / 1,  (+88)02 988 7429<br>
                                        Fax: (+88) 02 989 6071 / 531<br>
                                        E-mail:   dhaka@mofa.gov.q<br>
                                        Consular Time: Sunday to Thursday from 10:30 am to 11:30 am<br>
                                        Qatar Embassy doesn’t provide visa from their office. Bangladeshi nationals can apply for a tourist visa through a list of authorized hotels, which can be seen on the Hukoomi or one can get tourist visa through Qatar Airways.
                                    </li>
                                    <h4 class="necessary__title mb-25">
                                        Tourist Visas
                                    </h4>
                                    <li>People traveling to Qatar are advised to have:</li>
                                    <li><i class="fal fa-check-square"></i> A passport that is valid for at least six months after the date of their arrival in the country.</li>
                                    <li><i class="fal fa-check-square"></i> Two Passport-Style Photographs.</li>
                                    <li><i class="fal fa-check-square"></i> Proof of accommodation and a credit or savings balance of at least around 5,100 QAR. </li>
                                    <li><i class="fal fa-check-square"></i> Photocopy of round trip, airline tickets or itinerary.</li>
                                    <h4 class="necessary__title mb-25">
                                        Business Visas
                                    </h4>
                                    <li>Business visas allow non-Qataris to conduct business and work in the country on a temporary basis. There are two types of business visas:</li>
                                    <li><i class="fal fa-check-square"></i> one that can be issued upon arrival while the other requires application ahead of time.</li>
                                    <li><i class="fal fa-check-square"></i> or Bangladeshi nationals, a sponsor or business partner needed to apply on behalf of the applicant. </li>
                                </ul>

                                <h4 class="necessary__title mb-25">
                                    General Required Documents
                                </h4>
                                <ul class="necessary-link mb-20">
                                    <li><i class="fal fa-check-square"></i> A passport that is valid for at least six months after the date of their arrival in the country.</li>
                                    <li><i class="fal fa-check-square"></i> Two Passport-Style Photographs.</li>
                                    <li><i class="fal fa-check-square"></i> Proof of accommodation and a credit or savings balance. </li>
                                    <li><i class="fal fa-check-square"></i> Proof of accommodation and a credit or savings balance.</li>
                                    <li><i class="fal fa-check-square"></i>Photocopy of round trip, airline tickets or itinerary.</li>
                                    <li><i class="fal fa-check-square"></i> Letter of Invitation from company in Qatar.</li>
                                    <li><i class="fal fa-check-square"></i> Business Letter which includes.</li>
                                    <li><i class="fal fa-check-square"></i>The name of a reference/visiting firm in Qatar.</li>
                                    <li><i class="fal fa-check-square"></i> Detailed explanation of the nature of business to be performed as well as duration of stay.</li>
                                    <li><i class="fal fa-check-square"></i> SCompany guarantee of financial responsibility for all travel expenses incurred by traveler.</li>
                                    <li><i class="fal fa-check-square"></i> Previous SAARC visited country name & year of visit - if any</li>
                                    <li><i class="fal fa-check-square"></i> The letter must be on company letterhead.</li>
                                    <li><i class="fal fa-check-square"></i> he letter must specify the visa validity and number of entries, the applicant is asking for.</li>
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
