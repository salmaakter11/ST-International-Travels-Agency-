@extends('frontend.master')

@section('fontend_body')
<!-- page title area start -->
<div class="page-title__area pt-110" style="background-image: url({{ asset('fontend') }}/img/about-us/ab-us.jpg);">
    <div class="container">
        <div class="row">
           <div class="col-xxl-12">
              <div class="page__title-wrapper text-center">
                 <h3 class="pb-100">Services</h3>
              </div>
           </div>
        </div>
     </div>
     <nav class="breadccrumb-bg">
        <ul class="breadcrumb justify-content-center pt-20 pb-20">
           <li class="bd-items"><a href="{{ route('frontend.home') }}">Home</a></li>
           <li class="bd-items bdritems">|</li>
           <li class="bd-items"><a href="{{ route('frontend.service') }}">Services</a></li>
        </ul>
     </nav>
</div>
 <!-- page title area end -->

 <!-- services featurs start -->
<div class="services-featurs pt-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="services-fimg">
                    <img src="{{ asset('fontend') }}/img/services/services-1.jpg" alt="">
                </div>
                <div class="section_title_wrapper pt-40">
                    <span class="subtitle">
                        Featured Services
                    </span>
                    <h2 class="section-title">
                        We Take The Challenge to Make The Life Easier
                    </h2>
                    <p class="pt-30 pb-25 mr-25">ST International Travels Agency is a leading tour operator of Bangladesh. ST International Travels Agency offer inbound and outbound tour for you. If you’d like to find out a little more about some of the tour operators and holiday packages please contact with us</p>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="services-items services-itm-color mb-30">
                            <h4 class="services-items__title">
                                Proper <br>
                                Information
                            </h4>
                            <p>Work permit approval  in higher education is designed for career professionals seeking</p>
                            <a class="aborder1"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="services-items services-itm-color2 mb-30">
                            <h4 class="services-items__title">
                                Advice & <br>
                                Consultancy
                            </h4>
                            <p>Work permit approval  in higher education is designed for career professionals seeking</p>
                            <a class="aborder2"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="services-items services-itm-color3 mb-30">
                            <h4 class="services-items__title">
                                Tour & Travel <br>
                                Guidelines
                            </h4>
                            <p>Work permit approval  in higher education is designed for career professionals seeking</p>
                            <a class="aborder3"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="services-items services-itm-color4 mb-30">
                            <h4 class="services-items__title">
                                Education <br>
                                Tips and Tricks
                            </h4>
                            <p>Work permit approval  in higher education is designed for career professionals seeking</p>
                            <a class="aborder4"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- services featurs end -->

<!-- featurs area start here -->
<section class="featurs-services pt-90 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="features">
                    <div class="features__thumb">
                       <a><img src="{{ asset('fontend') }}/img/featurs/featurs-1.jpg" alt=""></a>
                    </div>
                    <div class="features__content">
                        <h3 class="features__content-title"> <a>Business Visa</a> </h3>
                        <p>We helped with other family based employment based and investment based Immigration.</p>
                        <a href="{{ route('frontend.service') }}">Read More <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="features">
                    <div class="features__thumb">
                      <a><img src="{{ asset('fontend') }}/img/featurs/featurs-2.jpg" alt=""></a>
                    </div>
                    <div class="features__content">
                        <h3 class="features__content-title"> <a>Students Visa </a> </h3>
                        <p>We helped with other family based employment based and investment based Immigration.</p>
                        <a>Read More <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="features">
                    <div class="features__thumb">
                       <a><img src="{{ asset('fontend') }}/img/featurs/featurs-3.jpg" alt=""></a>
                    </div>
                    <div class="features__content">
                        <h3 class="features__content-title"> <a>Work & Job Visa</a> </h3>
                        <p>We helped with other family based employment based and investment based Immigration.</p>
                        <a>Read More <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                <div class="features">
                    <div class="features__thumb">
                       <a href="{{ route('frontend.service') }}"> <img src="{{ asset('fontend') }}/img/featurs/featurs-4.jpg" alt=""></a>
                    </div>
                    <div class="features__content">
                        <h3 class="features__content-title"> <a href="">Tourist & Visitor Visa</a> </h3>
                        <p>We helped with other family based employment based and investment based Immigration.</p>
                        <a>Read More <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- featurs area end here -->

<!-- Ab-fact-area start -->

<div class="abfact-area services-vrly pt-85 pb-285" style="background-image: url({{ asset('fontend') }}/img/services/services-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="fact fact-2 abfact-items text-center">
                    <h1 class="counter-count"><span class="counter">25</span>k+</h1>
                    <span>Happy Clients & Students</span>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
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
        <div class="row service-intro-top g-0">
            <div class="col-xxl-6 col-xl-6 col-lg-6 d-flex align-items-center">
                <div class="section_title_wrapper pl-50 pr-70">
                    <span class="subtitle">
                        Working Process
                    </span>
                    <h2 class="section-title">
                        We Take 1-2 Working Months For Processing
                    </h2>
                    <p class="pt-30 pb-25 ">For the last 25 years, We have helped students, business persons, tourists, clients with medical needs. There are many variations of passages of Lorem Ipsum available.</p>
                    <div class="check-use mb-40">
                        <a><i class="far fa-check-square"></i> Visa Requests</a>
                        <a><i class="far fa-check-square"></i> Visa Apply</a>
                        <a><i class="far fa-check-square"></i> Visa Service</a>
                    </div>
                    <div class="abinfro-btn d-flex align-items-center">
                        <a href="{{ route('frontend.service') }}" class="theme-btn">See Packages</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="intro-right">
                    <img src="{{ asset('fontend') }}/img/about-us/ab-m.jpg" alt="">
                    <div class="intro-btn">
                        <a class="play-btn popup-video" href="https://www.youtube.com/watch?v=pNje3bWz7V8"><i class="flaticon-play-button"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- intro-area end -->



<!-- abbrand-area start -->
<div class="abbrand-area pt-120 pb-120 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
    <div class="container">
        <div class="abbrand-active owl-carousel">
            <div class="abbrand-img">
               <a href="{{ route('frontend.partner') }}"><img src="{{ asset('fontend') }}/img/testimonial/1.png" alt=""></a>
            </div>
            <div class="abbrand-img">
                <a href="{{ route('frontend.partner') }}"><img src="{{ asset('fontend') }}/img/testimonial/2.png" alt=""></a>
             </div>
             <div class="abbrand-img">
                <a href="{{ route('frontend.partner') }}"><img src="{{ asset('fontend') }}/img/testimonial/3.png" alt=""></a>
             </div>
             <div class="abbrand-img">
                <a href="{{ route('frontend.partner') }}"><img src="{{ asset('fontend') }}/img/testimonial/4.png" alt=""></a>
             </div>
             <div class="abbrand-img">
                <a href="{{ route('frontend.partner') }}"><img src="{{ asset('fontend') }}/img/testimonial/5.png" alt=""></a>
             </div>
             <div class="abbrand-img">
                <a href="{{ route('frontend.partner') }}"><img src="{{ asset('fontend') }}/img/testimonial/4.png" alt=""></a>
             </div>
        </div>
    </div>
</div>
<!-- abbrand-area end -->
@endsection
