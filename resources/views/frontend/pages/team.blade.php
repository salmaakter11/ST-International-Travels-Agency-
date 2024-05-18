@extends('frontend.master')

@section('fontend_body')
    <!-- page title area start -->
    <div class="page-title__area pt-110" style="background-image: url({{ asset('fontend') }}/img/about-us/ab-us.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper text-center">
                        <h3 class="pb-100">Team Member</h3>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadccrumb-bg">
            <ul class="breadcrumb justify-content-center pt-20 pb-20">
                <li class="bd-items"><a href="{{ route('frontend.home') }}">Home</a></li>
                <li class="bd-items bdritems">|</li>
                <li class="bd-items"> <a href="{{ route('frontend.team') }}">Our Team</a></li>
            </ul>
        </nav>
    </div>
    <!-- page title area end -->

    <!-- tagent  area start -->
    <section class="tagent__area grey-bg-3 pt-110 pb-40">
        <div class="tagent__bg" style="background-image: url({{ asset('fontend') }}/img/team/team.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 d-flex align-items-center">
                    <div class="section_title_wrapper pr-70">
                        <span class="subtitle">
                            Authorized Agents
                        </span>
                        <h2 class="section-title">
                            Agents are Dedicatedly Working With Us
                        </h2>
                        <p class="pt-30 mb-40">We have helped students, business persons, tourists, clients with medical
                            needs to acquire U.S. visas. Besides, we also help with other family and provide counseling
                            services for immigration </p>
                        <a href="#" class="theme-btn">Join With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tagent area end -->

    <!-- Team area start -->
    <section class="team-area">
        <div class="container">
            <div class="row white-color inner-team">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                    <div class="team text-center mb-35">
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
                                <a>Md.Shakil Hossain</a>
                            </h3>
                            <span>CEO</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                    <div class="team text-center mb-35">
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
                                <a>Md.Tuhin</a>
                            </h3>
                            <span>Sr. Consultant</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                    <div class="team text-center mb-35">
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
                                <a>Name</a>
                            </h3>
                            <span>Senior Lawyer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                    <div class="team text-center mb-35">
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
                                <a>Md.Babu</a>
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
    <div class="abbrand-area pt-80 pb-120 wow fadeInUp" data-wow-delay="0.3s"
        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
        <div class="container">
            <div class="abbrand-active owl-carousel">
                <div class="abbrand-img">
                    <a href="partners.html"><img src="{{ asset('fontend') }}/img/testimonial/1.png" alt=""></a>
                </div>
                <div class="abbrand-img">
                    <a href="partners.html"><img src="{{ asset('fontend') }}/img/testimonial/2.png" alt=""></a>
                </div>
                <div class="abbrand-img">
                    <a href="partners.html"><img src="{{ asset('fontend') }}/img/testimonial/3.png" alt=""></a>
                </div>
                <div class="abbrand-img">
                    <a href="partners.html"><img src="{{ asset('fontend') }}/img/testimonial/4.png" alt=""></a>
                </div>
                <div class="abbrand-img">
                    <a href="partners.html"><img src="{{ asset('fontend') }}/img/testimonial/5.png" alt=""></a>
                </div>
                <div class="abbrand-img">
                    <a href="partners.html"><img src="{{ asset('fontend') }}/img/testimonial/4.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- abbrand-area end -->
@endsection
