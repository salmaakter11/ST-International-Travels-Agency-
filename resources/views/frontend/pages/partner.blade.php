@extends('frontend.master')

@section('fontend_body')
    <!-- page title area start -->
    <div class="page-title__area pt-110" style="background-image: url({{ asset('fontend') }}/img/about-us/ab-us.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper text-center">
                        <h3 class="pb-100">Our Partners</h3>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadccrumb-bg">
            <ul class="breadcrumb justify-content-center pt-20 pb-20">
                <li class="bd-items"><a href="{{ route('frontend.home') }}">Home</a></li>
                <li class="bd-items bdritems">|</li>
                <li class="bd-items"> <a href="{{ route('frontend.partner') }}">Our Partners</a></li>
            </ul>
        </nav>
    </div>
    <!-- page title area end -->

    <main>
        <!--  partners-ofinner-area start -->
        <div class="partners-ofinner-area pt-120 pb-90">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="section_title_wrapper mb-50">
                            <span class="subtitle">
                                Honorable Partners
                            </span>
                            <h2 class="section-title">
                                We've Some Honorable Partners Globally
                            </h2>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="section-title-right mb-30 mr-20">
                            <p>Partner Institutes & Universities Lorem Ipsum is simply dummy text of the printing has been
                                the standard. when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-filter">
                            <ul>
                                <li class="active" data-filter="*">See All</li>
                                <li data-filter=".unitedstates">United States</li>
                                <li data-filter=".canada">Canada</li>
                                <li data-filter=".australia">Australia</li>
                                <li data-filter=".france">France</li>
                                <li data-filter=".unitedkingdom">United Kingdom</li>
                                <li data-filter=".switzerland">Switzerland</li>
                                <li data-filter=".newzealand">New Zealand</li>
                                <li data-filter=".china">China</li>
                                <li data-filter=".norway">Norway</li>
                                <li data-filter=".germany">Germany</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row project-grid g-0">
                    <div class="col-xxl-2 canada unitedstates france unitedkingdom newzealand norway">
                        <div class="partner-img">
                            <img src="{{ asset('fontend') }}/img/partners/pt-1.png" alt="">
                        </div>
                    </div>
                    <div class="col-xxl-2 unitedstates australia unitedkingdom china">
                        <div class="partner-img">
                            <img src="{{ asset('fontend') }}/img/partners/pt-2.png" alt="">
                        </div>
                    </div>
                    <div class="col-xxl-2 switzerland canada australia china norway">
                        <div class="partner-img">
                            <img src="{{ asset('fontend') }}/img/partners/pt-3.png" alt="">
                        </div>
                    </div>
                    <div class="col-xxl-2 canada finance newzealand">
                        <div class="partner-img">
                            <img src="{{ asset('fontend') }}/img/partners/pt-4.png" alt="">
                        </div>
                    </div>
                    <div class="col-xxl-2 switzerland consultancy newzealand china">
                        <div class="partner-img">
                            <img src="{{ asset('fontend') }}/img/partners/pt-5.png" alt="">
                        </div>
                    </div>
                    <div class="col-xxl-2 switzerland australia germany">
                        <div class="partner-img">
                            <img src="{{ asset('fontend') }}/img/partners/pt-6.png" alt="">
                        </div>
                    </div>
                    <div class="col-xxl-2 unitedstates finance france newzealand">
                        <div class="partner-img">
                            <img src="{{ asset('fontend') }}/img/partners/pt-7.png" alt="">
                        </div>
                    </div>
                    <div class="col-xxl-2 switzerland">
                        <div class="partner-img">
                            <img src="{{ asset('fontend') }}/img/partners/pt-8.png" alt="">
                        </div>
                    </div>
                    <div class="col-xxl-2 unitedstates australia unitedkingdom newzealand">
                        <div class="partner-img">
                            <img src="{{ asset('fontend') }}/img/partners/pt-9.png" alt="">
                        </div>
                    </div>
                    <div class="col-xxl-2 canada newzealand china germany">
                        <div class="partner-img">
                            <img src="{{ asset('fontend') }}/img/partners/pt-10.png" alt="">
                        </div>
                    </div>
                    <div class="col-xxl-2 canada france germany">
                        <div class="partner-img">
                            <img src="{{ asset('fontend') }}/img/partners/pt-11.png" alt="">
                        </div>
                    </div>
                    <div class="col-xxl-2 unitedstates canada france unitedkingdom china">
                        <div class="partner-img">
                            <img src="{{ asset('fontend') }}/img/partners/pt-12.png" alt="">
                        </div>
                    </div>

                </div>
                <div class="load-more text-center mt-60">
                    <a href="#" class="theme-btn">Load More</a>
                </div>
            </div>
        </div>
        <!--  partners-ofinner-area end -->
    </main>
@endsection
