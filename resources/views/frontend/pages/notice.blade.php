@extends('frontend.master')

@section('fontend_body')
    <!-- page title area start -->
    <div class="page-title__area pt-110" style="background-image: url({{ asset('fontend') }}/img/about-us/ab-us.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper text-center">
                        <h3 class="pb-100">Notice</h3>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadccrumb-bg">
            <ul class="breadcrumb justify-content-center pt-20 pb-20">
                <li class="bd-items"><a href="{{ route('frontend.home') }}">Home</a></li>
                <li class="bd-items bdritems">|</li>
                <li class="bd-items"><a href="{{ route('frontend.notice') }}">Notice</a></li>
            </ul>
        </nav>
    </div>
    <!-- page title area end -->


    <section class="blog-area pt-120 pb-90 wow fadeInUp" data-wow-delay="0.3s"
        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <article class="blog mb-30">
                        <div class="blog__thumb">
                            <a><img src="{{ asset('fontend') }}/img/blog/blog1.jpg" alt=""></a>
                        </div>
                        <div class="blog__content">
                            <div class="blog-meta">
                                <span> <i class="fal fa-calendar-day"></i><a>02 feb 2018</a></span>
                                <span> <i class="far fa-user"></i>visapass</span>
                                <span><i class="far fa-comments"></i><a>(36)</a></span>
                            </div>
                            <div class="blog-text">
                                <h3 class="blog__content__title">
                                    <a>Web Development To Update React Hooks Cons</a>
                                </h3>
                                <p>We have helped students, business persons, tourists, clients with medical needs......</p>
                                <div class="read-more">
                                    <a>Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <article class="blog mb-30">
                        <div class="blog__thumb">
                            <a><img src="{{ asset('fontend') }}/img/blog/blog2.jpg" alt=""></a>
                        </div>
                        <div class="blog__content">
                            <div class="blog-meta">
                                <span> <i class="fal fa-calendar-day"></i><a>02 feb 2018</a></span>
                                <span> <i class="far fa-user"></i>visapass</span>
                                <span><i class="far fa-comments"></i><a>(36)</a></span>
                            </div>
                            <div class="blog-text">
                                <h3 class="blog__content__title">
                                    <a>EU Commission Introduces New Erasmus+ App</a>
                                </h3>
                                <p>We have helped students, business persons, tourists, clients with medical needs......</p>
                                <div class="read-more">
                                    <a>Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <article class="blog mb-30">
                        <div class="blog__thumb">
                            <a><img src="{{ asset('fontend') }}/img/blog/blog3.jpg" alt=""></a>
                        </div>
                        <div class="blog__content">
                            <div class="blog-meta">
                                <span> <i class="fal fa-calendar-day"></i><a>02 feb 2018</a></span>
                                <span> <i class="far fa-user"></i>visapass</span>
                                <span><i class="far fa-comments"></i><a>(36)</a></span>
                            </div>
                            <div class="blog-text">
                                <h3 class="blog__content__title">
                                    <a>France Extend Health Insurance Requirement</a>
                                </h3>
                                <p>We have helped students, business persons, tourists, clients with medical needs......</p>
                                <div class="read-more">
                                    <a>Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <article class="blog mb-30">
                        <div class="blog__thumb">
                            <a><img src="{{ asset('fontend') }}/img/blog/blog-single/b4.jpeg" alt=""></a>
                        </div>
                        <div class="blog__content">
                            <div class="blog-meta">
                                <span> <i class="fal fa-calendar-day"></i><a>02 feb 2018</a></span>
                                <span> <i class="far fa-user"></i>visapass</span>
                                <span><i class="far fa-comments"></i><a>(36)</a></span>
                            </div>
                            <div class="blog-text">
                                <h3 class="blog__content__title">
                                    <a>Business English Spoken Course For Beginners</a>
                                </h3>
                                <p>We have helped students, business persons, tourists, clients with medical needs......</p>
                                <div class="read-more">
                                    <a>Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <article class="blog mb-30">
                        <div class="blog__thumb">
                            <a><img src="{{ asset('fontend') }}/img/blog/blog-single/b3.jpg" alt=""></a>
                        </div>
                        <div class="blog__content">
                            <div class="blog-meta">
                                <span> <i class="fal fa-calendar-day"></i><a>02 feb
                                        2018</a></span>
                                <span> <i class="far fa-user"></i>visapass</span>
                                <span><i class="far fa-comments"></i><a>(36)</a></span>
                            </div>
                            <div class="blog-text">
                                <h3 class="blog__content__title">
                                    <a>Native English Spoken Course For Business</a>
                                </h3>
                                <p>We have helped students, business persons, tourists, clients with medical needs......</p>
                                <div class="read-more">
                                    <a>Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <article class="blog mb-30">
                        <div class="blog__thumb">
                            <a><img src="{{ asset('fontend') }}/img/blog/blog3.jpg" alt=""></a>
                        </div>
                        <div class="blog__content">
                            <div class="blog-meta">
                                <span> <i class="fal fa-calendar-day"></i><a>02 feb
                                        2018</a></span>
                                <span> <i class="far fa-user"></i>visapass</span>
                                <span><i class="far fa-comments"></i><a>(36)</a></span>
                            </div>
                            <div class="blog-text">
                                <h3 class="blog__content__title">
                                    <a>Spanish Language Course For Jobs Seekers</a>
                                </h3>
                                <p>We have helped students, business persons, tourists, clients with medical needs......</p>
                                <div class="read-more">
                                    <a>Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
