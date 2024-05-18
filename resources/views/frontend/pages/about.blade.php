@extends('frontend.master')

@section('fontend_body')
    <!-- page title area start -->
    <div class="page-title__area pt-110" style="background-image: url({{ asset('fontend') }}/img/about-us/ab-us.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper text-center">
                        <h3 class="pb-100">About Us </h3>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadccrumb-bg">
            <ul class="breadcrumb justify-content-center pt-20 pb-20">
                <li class="bd-items"><a href="{{ route('frontend.home') }}">Home</a></li>
                <li class="bd-items bdritems">|</li>
                <li class="bd-items"> <a href="{{ route('frontend.about') }}"> About Us</a></li>
            </ul>
        </nav>
    </div>
    <!-- page title area end -->

    <main>
        <!-- About-us area start here -->
        <section class="about-area-2 pt-120 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 mb-30 wow fadeInUp" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="about2-left d-flex">
                            <div class="about2-left__img1 mr-10">
                                <img src="{{ asset('fontend') }}/img/about-2/about2.jpg" alt="">
                            </div>
                            <div class="about2-left__img2">
                                <img src="{{ asset('fontend') }}/img/about-2/about2-1.jpg" alt="">
                                <div class="about2-left__info d-flex align-items-center">
                                    <div class="about2-left__info__left mr-15">
                                        <img src="{{ asset('fontend') }}/img/about-2/seal.png" alt="">
                                    </div>
                                    <div class="about2-left__info__right">
                                        <h4>ISO Certified</h4>
                                        <p>1990-2000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 mb-30 wow fadeInUp" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="section_title_wrapper">
                            <span class="subtitle">
                                About visapass
                            </span>
                            <h2 class="section-title about-span mb-30">
                                <span>25+</span> Years of Your Trust <br> and Recommendation
                            </h2>
                            <div class="section_title_wrapper__about-content mb-40">
                                <p>ST International Travels Agency is a leading tour operator of Bangladesh. ST
                                    International Travels Agency offer inbound and outbound tour for you.If you’d like to
                                    find out a little more about some of the tour operators and holiday companies featured
                                    on our company.</p>
                            </div>
                        </div>
                        <div class="about-trust">
                            <div class="row mb-10">
                                <div class="col-lg-6">
                                    <div class="about2__item d-flex  mb-20">
                                        <div class="about2__icon">
                                            <i class="flaticon-fair-trade"></i>
                                        </div>
                                        <div class="about2__content">
                                            <h4>Trusted by Millions</h4>
                                            <p>Most trusted & recommended by millions of students</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about2__item d-flex  mb-20">
                                        <div class="about2__icon">
                                            <i class="flaticon-trophy"></i>
                                        </div>
                                        <div class="about2__content">
                                            <h4>Awards Winner</h4>
                                            <p>Most trusted & recommended by millions of students</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-us area end here -->

        <!-- Histry Tabs area start here -->
        <div class="histry-area pt-110 pb-90" style="background-image: url({{ asset('fontend') }}/img/about/abbg.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-10">
                        <div class="section_title_wrapper text-center wow fadeInUp" data-wow-delay="0.3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <h2 class="section-title white-color">
                                Visapass Carries 25+ Year's <br> Awesome History
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Histry Tabs area end here -->

        <!-- About- Tabs area start here -->
        <div class="ab-tabs pb-70">
            <div class="abtb-hr1">
                <span></span>
            </div>
            <div class="abtb-pth">
                <img src="{{ asset('fontend') }}/img/about/pth.png" alt="">
            </div>
            <div class="container">
                <div class="row ">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                        <div class="price-tab pb-130 abtab-top">
                            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link nav-radius active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab"
                                        aria-controls="pills-home" aria-selected="true">1990 - 1995</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">1996 - 2000</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab1" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">2001 - 2005</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab2" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">2006 - 2010</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link navr-radius" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">2011 - 2020</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="row ">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="abtb-content text-right pr-105 mb-45">
                                    <div class="abtbs-round">
                                        <span></span>
                                    </div>
                                    <div class="abtb-mbr">
                                        <span></span>
                                    </div>
                                    <span>22 jan 1995</span>
                                    <h4 class="abtb-title">
                                        Europe, USA, Australia & Canada
                                    </h4>
                                    <p>Europe Tour Package, USA Tour Package, Australia Tour Package, Canada Tour Package.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="abtb-content pl-105 mb-45">
                                    <span>25 Aug 1994</span>
                                    <h4 class="abtb-title">
                                        Travel in Asia
                                    </h4>
                                    <p>Malaysia Tour Package, Thailand Tour Package, Singapore Tour Package,  Indonesia Tour Package, and Maldives Tour Package</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="abtb-content text-right pr-105 mb-45">
                                    <div class="abtbs-round">
                                        <span></span>
                                    </div>
                                    <div class="abtb-mbr">
                                        <span></span>
                                    </div>
                                    <span>22 jan 1995</span>
                                    <h4 class="abtb-title">
                                        Dubai , India , Nepal and  Egypt
                                    </h4>
                                    <p>Our international tours package from Bangladesh  India Tour Package, Nepal Tour Package,  Egypt Tour Package, and Dubai Tour Package.</p>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="abtb-content pl-105 mb-45">
                                    <span>25 Aug 1994</span>
                                    <h4 class="abtb-title">
                                        Tour in Beautiful Bangladesh
                                    </h4>
                                    <p>We offer you Dhaka to Shundarban, Dhaka to Cox’sbazar, Dhaka to Rangamati,
                                        Khagrachori, Bandarbon, Chittagong & Sylhet and Contact with us worldwide Visa
                                        support. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row ">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="abtb-content text-right pr-105 mb-45">
                                    <div class="abtbs-round">
                                        <span></span>
                                    </div>
                                    <div class="abtb-mbr">
                                        <span></span>
                                    </div>
                                    <span>22 jan 1995</span>
                                    <h4 class="abtb-title">
                                        Started Journey in New York
                                    </h4>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the
                                        end of the day, going forward, a new normal that has evolved from generation.</p>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="abtb-content pl-105 mb-45">
                                    <span>25 Aug 1994</span>
                                    <h4 class="abtb-title">
                                        First Trophy Winner in World
                                    </h4>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the
                                        end of the day, going forward, a new normal that has evolved from generation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="abtb-content text-right pr-105 mb-45">
                                    <div class="abtbs-round">
                                        <span></span>
                                    </div>
                                    <div class="abtb-mbr">
                                        <span></span>
                                    </div>
                                    <span>22 jan 1995</span>
                                    <h4 class="abtb-title">
                                        Started Journey in New York
                                    </h4>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the
                                        end of the day, going forward, a new normal that has evolved from generation.</p>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="abtb-content pl-105 mb-45">
                                    <span>25 Aug 1994</span>
                                    <h4 class="abtb-title">
                                        First Trophy Winner in World
                                    </h4>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the
                                        end of the day, going forward, a new normal that has evolved from generation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="row ">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="abtb-content text-right pr-105 mb-45">
                                    <div class="abtbs-round">
                                        <span></span>
                                    </div>
                                    <div class="abtb-mbr">
                                        <span></span>
                                    </div>
                                    <span>22 jan 1995</span>
                                    <h4 class="abtb-title">
                                        Started Journey in New York
                                    </h4>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the
                                        end of the day, going forward, a new normal that has evolved from generation.</p>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="abtb-content pl-105 mb-45">
                                    <span>25 Aug 1994</span>
                                    <h4 class="abtb-title">
                                        First Trophy Winner in World
                                    </h4>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the
                                        end of the day, going forward, a new normal that has evolved from generation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="abtb-content text-right pr-105 mb-45">
                                    <div class="abtbs-round">
                                        <span></span>
                                    </div>
                                    <div class="abtb-mbr">
                                        <span></span>
                                    </div>
                                    <span>22 jan 1995</span>
                                    <h4 class="abtb-title">
                                        Started Journey in New York
                                    </h4>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the
                                        end of the day, going forward, a new normal that has evolved from generation.</p>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="abtb-content pl-105 mb-45">
                                    <span>25 Aug 1994</span>
                                    <h4 class="abtb-title">
                                        First Trophy Winner in World
                                    </h4>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the
                                        end of the day, going forward, a new normal that has evolved from generation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About- Tabs area end here -->

        <!-- Ab-fact-area start -->

        <div class="abfact-area pt-80 pb-170"
            style="background-image: url({{ asset('fontend') }}/img/ab-fact/abfact.jpg);">
            <div class="container">
                <div class="row mb-20">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                        <div class="fact fact-2 abfact-items text-center">
                            <h1 class="counter-count"><span class="counter">25</span>k+</h1>
                            <span>Happy Clients & Students</span>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30 ">
                        <div class="fact fact-2 abfact-items text-center ">
                            <h1 class="counter-count"><span class="counter">80</span>+</h1>
                            <span>Countries Affiliation</span>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                        <div class="fact fact-2 abfact-items text-center ">
                            <h1 class="counter">360</h1>
                            <span>Top University Partner</span>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                        <div class="fact fact-2 abfact-items text-center ">
                            <h1 class="counter-count"><span class="counter">23</span>k+</h1>
                            <span>Visa & Immigration</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ab-fact-area end -->

        <!-- intro-area start -->
        <section class="intro-area">
            <div class="container">
                <div class="row abintro-top g-0">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 d-flex align-items-center wow fadeInUp" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="section_title_wrapper pl-50 pr-70 wow fadeInUp" data-wow-delay="0.5s"
                            style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <span class="subtitle">
                                Our Missions
                            </span>
                            <h2 class="section-title">
                                We Journey The Global Business to Ensuring The Guarantee
                            </h2>
                            <p class="pt-30 pb-30 ">For the last 25 years, We have helped students, business persons,
                                tourists, clients with medical needs. There are many variations of passages of Lorem Ipsum
                                available.</p>
                            <div class="abinfro-btn d-flex align-items-center">
                                <a href="contact.html" class="theme-btn">See Packages</a>
                                <a href="#0" class="btn-download"> <i class="fal fa-download"></i> Download
                                    Brochure</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="intro-right">
                            <img src="{{ asset('fontend') }}/img/about-us/ab-m.jpg" alt="">
                            <div class="intro-btn">
                                <a class="play-btn popup-video" href="https://www.youtube.com/watch?v=pNje3bWz7V8"><i
                                        class="flaticon-play-button"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- intro-area end -->

        <!-- Testimonail start -->
        <section class="testimonail-area pt-110 pb-190">
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
                            <div class="testimonail__wrapper__info d-flex align-items-center mb-30">
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
                                <p>Travellers from countries categorized under the high-risk list who are eligible to enter
                                    Germany, aged 12 and older, are obliged to present their vaccination certificates</p>
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
                            <div class="testimonail__wrapper__info d-flex align-items-center mb-30">
                                <div class="testimonail__wrapper__info__img ">
                                    <img src="{{ asset('fontend') }}/img/testimonial/ts-2.png" alt="">
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
                                <p>Travellers from countries categorized under the high-risk list who are eligible to enter
                                    Germany, aged 12 and older, are obliged to present their vaccination certificates</p>
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
                            <div class="testimonail__wrapper__info d-flex align-items-center mb-30">
                                <div class="testimonail__wrapper__info__img ">
                                    <img src="{{ asset('fontend') }}/img/testimonial/ts-3.png" alt="">
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
                                <p>Travellers from countries categorized under the high-risk list who are eligible to enter
                                    Germany, aged 12 and older, are obliged to present their vaccination certificates</p>
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
                            <div class="testimonail__wrapper__info d-flex align-items-center mb-30">
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
                                <p>Travellers from countries categorized under the high-risk list who are eligible to enter
                                    Germany, aged 12 and older, are obliged to present their vaccination certificates</p>
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
                            <div class="testimonail__wrapper__info d-flex align-items-center mb-30">
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
                                <p>Travellers from countries categorized under the high-risk list who are eligible to enter
                                    Germany, aged 12 and older, are obliged to present their vaccination certificates</p>
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
                            <div class="testimonail__wrapper__info d-flex align-items-center mb-30">
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
                                <p>Travellers from countries categorized under the high-risk list who are eligible to enter
                                    Germany, aged 12 and older, are obliged to present their vaccination certificates</p>
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
                            <div class="testimonail__wrapper__info d-flex align-items-center mb-30">
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
                                <p>Travellers from countries categorized under the high-risk list who are eligible to enter
                                    Germany, aged 12 and older, are obliged to present their vaccination certificates</p>
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

        <!-- Team area start -->
        <section class="team-area grey-soft-bg pt-110 pb-80"
            style="background-image: url({{ asset('fontend') }}/img/testimonial/tsti1-bg.jpg);">
            <div class="container">
                <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
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
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
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
                                    <a>Marida Tohaman</a>
                                </h3>
                                <span>CEO, Visapass</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
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
                                    <a>Daniel Hasmass</a>
                                </h3>
                                <span>Sr. Consultant</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s"
                        style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
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
                                    <a>Narayan Kamora</a>
                                </h3>
                                <span>Senior Lawyer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s"
                        style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
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
                                    <a>Marida Tohaman</a>
                                </h3>
                                <span>Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team area end -->


        <!-- abbrand-area start -->
        <div class="abbrand-area pt-120 pb-120 wow fadeInUp" data-wow-delay="0.3s"
            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <div class="container">
                <div class="abbrand-active owl-carousel">
                    <div class="abbrand-img wow fadeInUp" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <a href="{{ route('frontend.partner') }}"><img src="{{ asset('fontend') }}/img/testimonial/1.png"
                                alt=""></a>
                    </div>
                    <div class="abbrand-img wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <a href="{{ route('frontend.partner') }}"><img src="{{ asset('fontend') }}/img/testimonial/2.png"
                                alt=""></a>
                    </div>
                    <div class="abbrand-img wow fadeInUp" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <a href="{{ route('frontend.partner') }}"><img src="{{ asset('fontend') }}/img/testimonial/3.png"
                                alt=""></a>
                    </div>
                    <div class="abbrand-img wow fadeInUp" data-wow-delay="0.6s"
                        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                        <a href="{{ route('frontend.partner') }}"><img src="{{ asset('fontend') }}/img/testimonial/4.png"
                                alt=""></a>
                    </div>
                    <div class="abbrand-img wow fadeInUp" data-wow-delay="0.7s"
                        style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                        <a href="{{ route('frontend.partner') }}"><img src="{{ asset('fontend') }}/img/testimonial/5.png"
                                alt=""></a>
                    </div>
                    <div class="abbrand-img wow fadeInUp" data-wow-delay="0.7s"
                        style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                        <a href="{{ route('frontend.partner') }}"><img src="{{ asset('fontend') }}/img/testimonial/4.png"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- abbrand-area end -->
    </main>
@endsection
