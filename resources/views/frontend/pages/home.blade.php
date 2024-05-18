@extends('frontend.master')

@section('fontend_body')


<main>
    <!-- hero area start here -->
    <section class="slider-area fix">
        <div class="slider-active swiper-container">
            <div class="swiper-wrapper">
                <div class="single-slider slider-height d-flex align-items-center swiper-slide" data-swiper-autoplay="5000">
                    <div class="slide-bg" data-background="{{ asset('fontend') }}/img/hero/slider-bg-1.jpg"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="aslider z-index">
                                    <span class="slider-top-text" data-animation="fadeInUp" data-delay=".5s">Effective Visa Solution</span>
                                    <h2 class="aslider--title mb-25" data-animation="fadeInUp" data-delay=".7s">Visa & Immigration <br> Consultation</h2>
                                    <p class="aslider--subtitle mb-40" data-animation="fadeInUp" data-delay=".9s">Our professionalism, honesty, sincerity & dedication to client service <br>   has helped our clients to fulfill their wishes </p>
                                    <div class="aslider--btn" data-animation="fadeInUp" data-delay=".9s">
                                        @if (Auth::check())
                                            <a href="{{ route('dashboard') }}" class="theme-btn blacks-hover">Dashboard</a>
                                        @else
                                            <a href="{{ route('register') }}" class="theme-btn blacks-hover">Apply Now</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-height d-flex align-items-center swiper-slide" data-swiper-autoplay="5000">
                    <div class="slide-bg" data-background="{{ asset('fontend') }}/img/hero/slider-bg-3.jpg"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="aslider z-index">
                                    <span class="slider-top-text" data-animation="fadeInUp" data-delay=".5s">Effective Visa Solution</span>
                                    <h2 class="aslider--title mb-25" data-animation="fadeInUp" data-delay=".7s">Visa & Immigration <br> Consultation</h2>
                                    <p class="aslider--subtitle mb-40" data-animation="fadeInUp" data-delay=".9s">Our professionalism, honesty, sincerity & dedication to client service <br>   has helped our clients to fulfill their wishes </p>
                                    <div class="aslider--btn" data-animation="fadeInUp" data-delay=".9s">
                                        @if (Auth::check())
                                            <a href="{{ route('dashboard') }}" class="theme-btn blacks-hover">Dashboard</a>
                                        @else
                                            <a href="{{ route('register') }}" class="theme-btn blacks-hover">Apply Now</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev slide-prev"><i class="far fa-long-arrow-left"></i></div>
            <div class="swiper-button-next slide-next"><i class="far fa-long-arrow-right"></i></div>
        </div>
    </section>
    <!-- hero area end here -->

    <!-- visa area start here -->
    <section class="visa-area theme-bg">
               <div class="container">
                   <div class="row g-0">
                       <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                           <div class="visa__items br-none">
                               <div class="visa__items-single d-flex align-items-center">
                                   <div class="visa__items-single-icon">
                                    <i class="flaticon-passport"></i>
                                   </div>
                                   <h4 class="visa__items-single-title">
                                      <a href="{{ route('frontend.service_one') }}"> Online Visa
                                        Application</a>
                                   </h4>
                               </div>
                           </div>
                       </div>
                       <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="visa__items">
                                <div class="visa__items-single d-flex align-items-center">
                                    <div class="visa__items-single-icon">
                                    <i class="flaticon-content"></i>
                                    </div>
                                    <h4 class="visa__items-single-title">
                                    <a href="{{ route('frontend.service_two') }}"> Visa
                                        Information</a>
                                    </h4>
                                </div>
                           </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="visa__items">
                                <div class="visa__items-single d-flex align-items-center">
                                    <div class="visa__items-single-icon">
                                     <i class="flaticon-customer"></i>
                                    </div>
                                    <h4 class="visa__items-single-title">
                                       <a href="{{ route('frontend.service_three') }}">Immigration
                                        Resources</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="visa__items">
                                <div class="visa__items-single d-flex align-items-center">
                                    <div class="visa__items-single-icon">
                                     <i class="flaticon-passport-1"></i>
                                    </div>
                                    <h4 class="visa__items-single-title">
                                       <a href="{{ route('frontend.service_four') }}">Online
                                        Passport Application</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                   </div>
               </div>
    </section>
    <!-- visa area end here -->

    <!-- featurs area start here -->
    <section class="featurs-services pt-110 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="section_title_wrapper text-center mb-50 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <span class="subtitle">
                            Featured Services
                        </span>
                        <h2 class="section-title">
                            We Provide Visa & Immigration Service <br> From Experienced Lawyers
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="features">
                        <div class="features__thumb">
                           <a href="{{ route('frontend.service_one') }}"><img src="{{ asset('fontend') }}/img/featurs/featurs-1.jpg" alt=""></a>
                        </div>
                        <div class="features__content">
                            <h3 class="features__content-title"> <a href="{{ route('frontend.service_one') }}">Business Visa</a> </h3>
                            <p>We helped with other family based employment based and investment based Immigration.</p>
                            <a href="{{ route('frontend.service_one') }}">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="features">
                        <div class="features__thumb">
                           <a href="{{ route('frontend.service_two') }}"><img src="{{ asset('fontend') }}/img/featurs/featurs-2.jpg" alt=""></a>
                        </div>
                        <div class="features__content">
                            <h3 class="features__content-title"> <a href="{{ route('frontend.service_two') }}">Students Visa </a> </h3>
                            <p>We helped with other family based employment based and investment based Immigration.</p>
                            <a href="{{ route('frontend.service_two') }}">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                    <div class="features" >
                        <div class="features__thumb">
                          <a href="{{ route('frontend.service_three') }}"><img src="{{ asset('fontend') }}/img/featurs/featurs-3.jpg" alt=""></a>
                        </div>
                        <div class="features__content">
                            <h3 class="features__content-title"> <a href="{{ route('frontend.service_three') }}">Work & Job Visa</a> </h3>
                            <p>We helped with other family based employment based and investment based Immigration.</p>
                            <a href="{{ route('frontend.service_three') }}">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
                    <div class="features">
                        <div class="features__thumb">
                           <a href="{{ route('frontend.service_four') }}"><img src="{{ asset('fontend') }}/img/featurs/featurs-4.jpg" alt=""></a>
                        </div>
                        <div class="features__content">
                            <h3 class="features__content-title"> <a href="{{ route('frontend.service_four') }}">Tourist & Visitor Visa</a> </h3>
                            <p>We helped with other family based employment based and investment based Immigration.</p>
                            <a href="{{ route('frontend.service_four') }}">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- featurs area end here -->

    <!-- Scholarship Programs start here -->
    <section class="scholarship-area d-flex align-items-center" style="background-image: url({{ asset('fontend') }}/img/scholarship/scholarship-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 ">
                     <div class="scholarship-left">
                         <img src="{{ asset('fontend') }}/img/scholarship/scholarship-left.png" alt="">
                     </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="scholarship__wrapper pt-110 pb-90">
                            <h2 class="scholarship__wrapper-title mb-30">20+ Best Universities Scholarship Programs From 20 Countries</h2>
                            <p>We also help with other family based employment based and investment based Immigration.
                               Praesent eui vel aliquam nisl efficitur eu.</p>
                            <div class="scholarship__wrapper-img mb-40">
                                <img src="{{ asset('fontend') }}/img/scholarship/s-1.png" alt="">
                                <img src="{{ asset('fontend') }}/img/scholarship/s-2.png" alt="">
                                <img src="{{ asset('fontend') }}/img/scholarship/s-3.png" alt="">
                                <img src="{{ asset('fontend') }}/img/scholarship/s-4.png" alt="">
                                <img src="{{ asset('fontend') }}/img/scholarship/s-5.png" alt="">
                            </div>
                            <h5>Validity From : 05 March 2021 - 25 Jan 2022</h5>
                            @if (Auth::check())
                                <a href="{{ route('dashboard') }}" class="theme-btn blacks-hover">Dashboard</a>
                            @else
                                <a href="{{ route('register') }}" class="theme-btn blacks-hover">Apply Now</a>
                            @endif
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Scholarship Programs end here -->

    <!-- About  start here -->
    <section class="about-area pt-120 pb-90">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="col-xxl-6 col-xl-6 col-lg-6 mb-30">
                    <div class="section_title_wrapper">
                        <span class="subtitle">
                            About visapass
                        </span>
                        <h2 class="section-title about-span mb-30">
                            <span>25+</span>  Years of Your Trust and Recommendation
                        </h2>
                        <div class="section_title_wrapper-about-content">
                            <h5>ISO Certified & Best Immigration Award 2018 Winner </h5>
                            <p>For the last 35 years, We have helped students, business persons, tourists, clients with medical needs to acquire U.S. visas. Besides, we also help with other family based, employment based & investment based Immigration. Aenean vestibulum ornare sapien, at pharetra massa consectetur et. Aliquam sit amet ipsum</p>
                            <a href="{{ route('frontend.about') }}" class="theme-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 mb-30">
                    <div class="about_wrapper">
                        <div class="about_wrapper__certificate">
                            <img src="{{ asset('fontend') }}/img/about/certificate.png" alt="">
                        </div>
                        <div class="about_wrapper__group">
                             <div class="about_wrapper__group-top mb-15">
                                 <img src="{{ asset('fontend') }}/img/about/about-1.jpg" alt="">
                             </div>
                             <div class="about_wrapper__group-btm d-flex align-items-center justify-content-end">
                                 <div class="about_wrapper__group-btm-img1 ml-30">
                                     <img src="{{ asset('fontend') }}/img/about/about-2.jpg" alt="">
                                 </div>
                                 <div class="about_wrapper__group-btm-img2 ml-15">
                                     <img src="{{ asset('fontend') }}/img/about/about-3.jpg" alt="">
                                 </div>
                             </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </section>
    <!-- About  end here -->

    <!-- fact-area start -->
    <section class="fact-area pb-90 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
        <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                    <div class="fact text-center">
                        <h1 class="counter-count"><span class="counter">25</span>k+</h1>
                        <span>Happy Clients & Students</span>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                    <div class="fact text-center ">
                        <h1 class="counter-count"><span class="counter">80</span>+</h1>
                        <span>Countries Affiliation</span>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                    <div class="fact text-center ">
                        <h1 class="counter">360</h1>
                        <span>Top University Partner</span>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                    <div class="fact text-center ">
                        <h1 class="counter-count"><span class="counter">23</span>k+</h1>
                        <span>Visa & Immigration</span>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- fact-area end -->

    <!-- popularct start -->
    <section class="popularct-area pt-110 pb-160" style="background-image: url({{ asset('fontend') }}/img/popularct/plr-ct.jpg);">
        <div class="container">
            <div class="row  justify-content-center">
                <div class="col-xxl-10">
                    <div class="section_title_wrapper popularct-extra text-center">
                        <span class="subtitle">
                            Visa Guide
                        </span>
                        <h2 class="section-title">
                            Select Your Favorite Country <br> To Apply Visa
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popularct end -->

    <!-- Country-all start -->
    <section class="country-all">
        <div class="container">
                    <div class="brand-active  owl-carousel">
                        <div class="country_item__wrapper">
                            <div class="country_item__wrapper__top">
                                <div class="country_item__wrapper__top__img">
                                    <a href="{{ route('frontend.india') }}"><img src="{{ asset('fontend') }}/img/country-img/c-1.jpg" alt=""></a>
                                </div>
                                <div class="country_item__wrapper__top__icon">
                                    <a href="{{ route('frontend.india') }}"><i class="fal fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="country_item__wrapper__bottom">
                                <h4 class="country_item__wrapper__bottom__title">
                                    <a>India</a>
                                </h4>
                            </div>
                        </div>

                        <div class="country_item__wrapper">
                            <div class="country_item__wrapper__top">
                                <div class="country_item__wrapper__top__img">
                                    <a href="{{ route('frontend.dubai') }}"><img src="{{ asset('fontend') }}/img/country-img/c-2.jpg" alt=""></a>
                                </div>
                                <div class="country_item__wrapper__top__icon">
                                    <a href="{{ route('frontend.dubai') }}"><i class="fal fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="country_item__wrapper__bottom">
                                <h4 class="country_item__wrapper__bottom__title">
                                    <a>Dubai</a>
                                </h4>
                            </div>
                        </div>
                        <div class="country_item__wrapper">
                            <div class="country_item__wrapper__top">
                                <div class="country_item__wrapper__top__img">
                                    <a href="{{ route('frontend.china') }}"><img src="{{ asset('fontend') }}/img/country-img/c-3.jpg" alt=""></a>
                                </div>
                                <div class="country_item__wrapper__top__icon">
                                    <a href="{{ route('frontend.china') }}"><i class="fal fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="country_item__wrapper__bottom">
                                <h4 class="country_item__wrapper__bottom__title">
                                    <a>China</a>
                                </h4>
                            </div>
                        </div>
                        <div class="country_item__wrapper">
                            <div class="country_item__wrapper__top">
                                <div class="country_item__wrapper__top__img">
                                    <a href="{{ route('frontend.qatar') }}"><img src="{{ asset('fontend') }}/img/country-img/c-4.jpg" alt=""></a>
                                </div>
                                <div class="country_item__wrapper__top__icon">
                                    <a href="{{ route('frontend.qatar') }}"><i class="fal fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="country_item__wrapper__bottom">
                                <h4 class="country_item__wrapper__bottom__title">
                                    <a>Qatar</a>
                                </h4>
                            </div>
                        </div>
                        <div class="country_item__wrapper">
                            <div class="country_item__wrapper__top">
                                <div class="country_item__wrapper__top__img">
                                    <a href="{{ route('frontend.schengen') }}"><img src="{{ asset('fontend') }}/img/country-img/c-5.jpg" alt=""></a>
                                </div>
                                <div class="country_item__wrapper__top__icon">
                                    <a href="{{ route('frontend.schengen') }}"><i class="fal fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="country_item__wrapper__bottom">
                                <h4 class="country_item__wrapper__bottom__title">
                                    <a>Schengen</a>
                                </h4>
                            </div>
                        </div>
                    </div>
            </div>
    </section>
    <!-- Country-all end -->

    <!-- Globall area start -->
    <section class="global-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="section_title_wrapper global-text mb-30">
                        <span class="subtitle">
                            Global Visa Business
                        </span>
                        <h2 class="section-title">
                            We Work Globally With Partners In 80+ Popular Countries
                        </h2>
                        <p>We have helped students, business persons, tourists, clients with medical needs to acquire U.S. visas. Besides, we also help with other family and provide counseling services for immigration  </p>
                        <div class="global-subscribe">
                             <form action="#">
                                 <input type="email" placeholder=" Enter you NID No">
                                 <button type="submit" >Check Availability <i class="fal fa-long-arrow-right"></i></button>
                             </form>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="global-area-img">
                        <img src="{{ asset('fontend') }}/img/globall/Map.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Globall area end -->

    <!-- Calltoaction area start -->
    <section class="calltoaction-area d-flex align-items-center" style="background-image: url({{ asset('fontend') }}/img/calltoaction/cl-bg.jpg);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-3 col-xl-3 col-lg-3">
                    <div class="calltoaction-img ">
                        <img src="{{ asset('fontend') }}/img/calltoaction/cl-1.png" alt="">
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8">
                    <h4 class="calltoaction-title pt-80 pb-75">
                        Get a skilled job in abroad taking our technical courses
                    </h4>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                    <div class="calltoaction-btn text-right">
                        @if (Auth::check())
                            <a href="{{ route('dashboard') }}" class="theme-btn cl-btn">Dashboard</a>
                        @else
                            <a href="{{ route('register') }}" class="theme-btn cl-btn">Apply Now</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Calltoaction area end -->

    <!-- Team area start -->
    <section class="team-area grey-soft-bg pt-110 pb-80">
        <div class="container">
            <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="col-xxl-10">
                    <div class="section_title_wrapper text-center mb-50">
                        <span class="subtitle">
                            Authorized Agents
                        </span>
                        <h2 class="section-title">
                            Our Agents Who are <br> Dedicatedly Working With Us
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="team text-center mb-30">
                        <div class="team__thumb team__thumb-2 mb-25">
                            <img src="{{ asset('fontend') }}/img/team/t-1.jpg" alt="">
                            <div class="team__thumb-info">
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team__text">
                            <h3 class="team__text-title">
                                <a href="team-details.html">Md.Shakil Hossain</a>
                            </h3>
                            <span>CEO</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="team text-center mb-30">
                        <div class="team__thumb team__thumb-2 mb-25">
                            <img src="{{ asset('fontend') }}/img/team/t-2.jpg" alt="">
                            <div class="team__thumb-info">
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team__text">
                            <h3 class="team__text-title">
                                <a href="team-details.html">Md.Tuhin</a>
                            </h3>
                            <span>Sr. Consultant</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                    <div class="team text-center mb-30">
                        <div class="team__thumb team__thumb-2 mb-25">
                            <img src="{{ asset('fontend') }}/img/team/t-3.jpg" alt="">
                            <div class="team__thumb-info">
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team__text">
                            <h3 class="team__text-title">
                                <a href="team-details.html">Name</a>
                            </h3>
                            <span>Senior Lawyer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
                    <div class="team text-center mb-30">
                        <div class="team__thumb team__thumb-2 mb-25">
                            <img src="{{ asset('fontend') }}/img/team/t-4.jpg" alt="">
                            <div class="team__thumb-info">
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team__text">
                            <h3 class="team__text-title">
                                <a href="team-details.html">Md.Babu</a>
                            </h3>
                            <span>Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team area end -->

    <!-- Our Partners start -->
    <section class="partners-area pt-120 pb-100" style="background-image: url({{ asset('fontend') }}/img/partners/partners-1.png);">
        <div class="container">
            <div class="row ">
                <div class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="section_title_wrapper partners-65 mb-30">
                        <span class="subtitle">
                            Our Partners
                        </span>
                        <h2 class="section-title">
                            Our Partner Companies <br>And Institutions
                        </h2>
                        <p class="mt-30 mb-40">We have helped students, business persons, tourists, clients with medical needs to acquire U.S. visas. Besides, we also help with other family and provide counseling services for immigration </p>
                        <a class="theme-btn partner-btn">See All Partners</a>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="row g-0">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                            <div class="partner-img">
                                <a><img src="{{ asset('fontend') }}/img/partners/pt-1.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                            <div class="partner-img">
                                <a><img src="{{ asset('fontend') }}/img/partners/pt-2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                            <div class="partner-img">
                                <a><img src="{{ asset('fontend') }}/img/partners/pt-3.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                            <div class="partner-img">
                                <a><img src="{{ asset('fontend') }}/img/partners/pt-4.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                            <div class="partner-img">
                                <a><img src="{{ asset('fontend') }}/img/partners/pt-5.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                            <div class="partner-img">
                                <a><img src="{{ asset('fontend') }}/img/partners/pt-6.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Partners end -->

    <!-- Testimonail start -->
    <section class="testimonail-area grey-bg pt-110 pb-190">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="section_title_wrapper text-center mb-50">
                        <span class="subtitle">
                            Testimonials
                        </span>
                        <h2 class="section-title">
                            What Clients Say About Us and <br> Our Services
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="textimonail-active owl-carousel">
                    <div class="testimonail__wrapper">
                        <div class="testimonail__wrapper__info d-flex align-items-center mb-25">
                            <div class="testimonail__wrapper__info__img ">
                                <img src="{{ asset('fontend') }}/img/testimonial/ts-1.png" alt="">
                            </div>
                            <div class="testimonail__wrapper__info__author">
                                <h4>Karlosh Tremon</h4>
                                <span>Student</span>
                            </div>
                            <div class="testimonail__wrapper__info__quotes">
                                <i class="flaticon-quote"></i>
                            </div>
                        </div>
                        <div class="testimonail__wrapper__content">
                            <p>Travellers from countries categorized under the high-risk list who are eligible to enter Germany, aged 12 and older, are obliged to present their vaccination certificates</p>
                            <div class="testimonail__wrapper__content__reviews">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li>(Switzerland Visa)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="testimonail__wrapper">
                        <div class="testimonail__wrapper__info d-flex align-items-center mb-25">
                            <div class="testimonail__wrapper__info__img ">
                                <img src="{{ asset('fontend') }}/img/testimonial/ts-2.png" alt="">
                            </div>
                            <div class="testimonail__wrapper__info__author">
                                <h4>Daniel Groveria</h4>
                                <span>Business Man</span>
                            </div>
                            <div class="testimonail__wrapper__info__quotes">
                                <i class="flaticon-quote"></i>
                            </div>
                        </div>
                        <div class="testimonail__wrapper__content">
                            <p>Travellers from countries categorized under the high-risk list who are eligible to enter Germany, aged 12 and older, are obliged to present their vaccination certificates</p>
                            <div class="testimonail__wrapper__content__reviews ">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li>(Switzerland Visa)</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="testimonail__wrapper">
                        <div class="testimonail__wrapper__info d-flex align-items-center mb-25">
                            <div class="testimonail__wrapper__info__img ">
                                <img src="{{ asset('fontend') }}/img/testimonial/ts-3.png" alt="">
                            </div>
                            <div class="testimonail__wrapper__info__author">
                                <h4>Michel Midester</h4>
                                <span>Traveller</span>
                            </div>
                            <div class="testimonail__wrapper__info__quotes">
                                <i class="flaticon-quote"></i>
                            </div>
                        </div>
                        <div class="testimonail__wrapper__content">
                            <p>Travellers from countries categorized under the high-risk list who are eligible to enter Germany, aged 12 and older, are obliged to present their vaccination certificates</p>
                            <div class="testimonail__wrapper__content__reviews">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li>(Switzerland Visa)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="testimonail__wrapper">
                        <div class="testimonail__wrapper__info d-flex align-items-center mb-25">
                            <div class="testimonail__wrapper__info__img ">
                                <img src="{{ asset('fontend') }}/img/testimonial/ts-1.png" alt="">
                            </div>
                            <div class="testimonail__wrapper__info__author">
                                <h4>Daniel Groveria</h4>
                                <span>Student</span>
                            </div>
                            <div class="testimonail__wrapper__info__quotes">
                                <i class="flaticon-quote"></i>
                            </div>
                        </div>
                        <div class="testimonail__wrapper__content">
                            <p>Travellers from countries categorized under the high-risk list who are eligible to enter Germany, aged 12 and older, are obliged to present their vaccination certificates</p>
                            <div class="testimonail__wrapper__content__reviews">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li>(Switzerland Visa)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="testimonail__wrapper">
                        <div class="testimonail__wrapper__info d-flex align-items-center mb-25">
                            <div class="testimonail__wrapper__info__img ">
                                <img src="{{ asset('fontend') }}/img/testimonial/ts-2.png" alt="">
                            </div>
                            <div class="testimonail__wrapper__info__author">
                                <h4>Dana Holly Joya</h4>
                                <span>Student</span>
                            </div>
                            <div class="testimonail__wrapper__info__quotes">
                                <i class="flaticon-quote"></i>
                            </div>
                        </div>
                        <div class="testimonail__wrapper__content">
                            <p>Travellers from countries categorized under the high-risk list who are eligible to enter Germany, aged 12 and older, are obliged to present their vaccination certificates</p>
                            <div class="testimonail__wrapper__content__reviews">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li>(Switzerland Visa)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="testimonail__wrapper">
                        <div class="testimonail__wrapper__info d-flex align-items-center mb-25">
                            <div class="testimonail__wrapper__info__img ">
                                <img src="{{ asset('fontend') }}/img/testimonial/ts-1.png" alt="">
                            </div>
                            <div class="testimonail__wrapper__info__author">
                                <h4>Linkon Dicruse</h4>
                                <span>Student</span>
                            </div>
                            <div class="testimonail__wrapper__info__quotes">
                                <i class="flaticon-quote"></i>
                            </div>
                        </div>
                        <div class="testimonail__wrapper__content">
                            <p>Travellers from countries categorized under the high-risk list who are eligible to enter Germany, aged 12 and older, are obliged to present their vaccination certificates</p>
                            <div class="testimonail__wrapper__content__reviews">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li>(Switzerland Visa)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="testimonail__wrapper">
                        <div class="testimonail__wrapper__info d-flex align-items-center mb-25">
                            <div class="testimonail__wrapper__info__img ">
                                <img src="{{ asset('fontend') }}/img/testimonial/ts-3.png" alt="">
                            </div>
                            <div class="testimonail__wrapper__info__author">
                                <h4>Jonathon Deoya</h4>
                                <span>Student</span>
                            </div>
                            <div class="testimonail__wrapper__info__quotes">
                                <i class="flaticon-quote"></i>
                            </div>
                        </div>
                        <div class="testimonail__wrapper__content">
                            <p>Travellers from countries categorized under the high-risk list who are eligible to enter Germany, aged 12 and older, are obliged to present their vaccination certificates</p>
                            <div class="testimonail__wrapper__content__reviews">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li>(Switzerland Visa)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonail end -->

    <!-- Blog start -->
    <section class="blog-area pt-120 pb-90 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="section_title_wrapper mb-50">
                        <span class="subtitle">
                            Recent Blog
                        </span>
                        <h2 class="section-title">
                            Recent Updates of Visa <br> And Immagration
                        </h2>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                   <div class="section-title-right mb-30 mr-20">
                       <p>We have helps students business persons tourists clients with medical needs to acquire U.s visas. Besides we also help with other family and provide counseeling services for immegration</p>
                   </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <article class="blog mb-30">
                        <div class="blog__thumb">
                            <a href="{{ route('frontend.partner') }}"><img src="{{ asset('fontend') }}/img/blog/blog1.jpg" alt=""></a>
                        </div>
                        <div class="blog__content">
                            <div class="blog-meta">
                                <span> <i class="fal fa-calendar-day"></i><a href="{{ route('frontend.partner') }}">visapass</a></span>
                                <span> <i class="far fa-user"></i> 02 feb 2018 </span>
                                <span><i class="far fa-comments"></i><a href="{{ route('frontend.partner') }}">(36)</a></span>
                            </div>
                            <div class="blog-text">
                                <h3 class="blog__content__title">
                                    <a href="{{ route('frontend.partner') }}">Web Development To Update React Hooks Cons</a>
                                 </h3>
                                 <p>We have helped students, business persons, tourists, clients with medical needs......</p>
                                 <div class="read-more">
                                     <a href="{{ route('frontend.partner') }}">Read More <i class="fal fa-long-arrow-right"></i></a>
                                 </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <article class="blog mb-30">
                        <div class="blog__thumb">
                            <a href="{{ route('frontend.partner') }}"><img src="{{ asset('fontend') }}/img/blog/blog2.jpg" alt=""></a>
                        </div>
                        <div class="blog__content">
                            <div class="blog-meta">
                                <span> <i class="fal fa-calendar-day"></i><a href="{{ route('frontend.partner') }}">visapass</a></span>
                                <span> <i class="far fa-user"></i>02 feb 2018</span>
                                <span><i class="far fa-comments"></i><a href="{{ route('frontend.partner') }}">(36)</a></span>
                            </div>
                            <div class="blog-text">
                                <h3 class="blog__content__title">
                                    <a href="{{ route('frontend.partner') }}">EU Commission Introduces New Erasmus+ App</a>
                                 </h3>
                                 <p>We have helped students, business persons, tourists, clients with medical needs......</p>
                                 <div class="read-more">
                                     <a href="{{ route('frontend.partner') }}">Read More <i class="fal fa-long-arrow-right"></i></a>
                                 </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <article class="blog mb-30">
                        <div class="blog__thumb">
                            <a href="{{ route('frontend.partner') }}"><img src="{{ asset('fontend') }}/img/blog/blog3.jpg" alt=""></a>
                        </div>
                        <div class="blog__content">
                            <div class="blog-meta">
                                <span> <i class="fal fa-calendar-day"></i><a href="{{ route('frontend.partner') }}">visapass</a></span>
                                <span> <i class="far fa-user"></i>02 feb 2018 </span>
                                <span><i class="far fa-comments"></i><a>(36)</a></span>
                            </div>
                            <div class="blog-text">
                                <h3 class="blog__content__title">
                                    <a href="{{ route('frontend.partner') }}">France Extend Health Insurance  Requirement</a>
                                 </h3>
                                 <p>We have helped students, business persons, tourists, clients with medical needs......</p>
                                 <div class="read-more">
                                     <a href="{{ route('frontend.partner') }}">Read More <i class="fal fa-long-arrow-right"></i></a>
                                 </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog end -->
    </main>

@endsection
