@extends('frontend.master')

@section('fontend_body')
    <!-- header area end here -->

    <!-- page title area start -->
    <div class="page-title__area pt-110" style="background-image: url({{ asset('fontend') }}/img/about-us/ab-us.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper text-center">
                        <h3 class="pb-100">E-visa Processing </h3>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadccrumb-bg">
            <ul class="breadcrumb justify-content-center pt-20 pb-20">
                <li class="bd-items"><a href="{{ route('frontend.home') }}">Home</a></li>
                <li class="bd-items bdritems">|</li>
                <li class="bd-items"> <a href="{{ route('frontend.service_two') }}">E-visa Processing </a></li>
            </ul>
        </nav>
    </div>
    <!-- page title area end -->

    <main>


        <!-- business area start here -->
        <div class="businnes-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="sidebar-left__wrapper">
                            <div class="sidebar__widget mb-30">
                                <div class="sidebar__widget-content">
                                    <div class="cat-link">
                                        <ul>
                                            <li><a class="active">Business Visa</a></li>
                                            <li><a> Student Visa</a></li>
                                            <li><a>Job/work Visa</a></li>
                                            <li><a>Business Visa</a></li>
                                            <li><a> Student Visa</a></li>
                                            <li><a>Job/work Visa</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget mb-30 theme-bg pd-30">
                                <div class="sidebar__widget-title title-white mb-40">
                                    <h4>Download</h4>
                                </div>
                                <div class="sidebar__widget-content">
                                    <ul>
                                        <li class="d-flex align-items-center mb-20 pdf-btm-border">
                                            <div class="docu__thumb mr-15">
                                                <a href="{{ route('frontend.contact') }}"><i class="fas fa-file-pdf"></i></a>
                                            </div>
                                            <div class="docu__text">
                                                <h6><a href="{{ route('frontend.contact') }}">Service Broohoru</a></h6>
                                                <p>PDF<span>12Mb</span></p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center mb-20 pdf-btm-border">
                                            <div class="docu__thumb mr-15">
                                                <a href="{{ route('frontend.contact') }}"><i class="fas fa-file-pdf"></i></a>
                                            </div>
                                            <div class="docu__text">
                                                <h6><a href="{{ route('frontend.contact') }}">Visa Application Form</a></h6>
                                                <p>PDF<span>12Mb</span></p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center mb-20 pdf-btm-border pdf-btm-none">
                                            <div class="docu__thumb mr-15">
                                                <a href="{{ route('frontend.contact') }}"><i class="fas fa-file-pdf"></i></a>
                                            </div>
                                            <div class="docu__text">
                                                <h6><a href="{{ route('frontend.contact') }}">Admission Form</a></h6>
                                                <p>PDF<span>12Mb</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="faqfrm__visa mb-30">
                                <div class="sidebar-title mb-40">
                                    <h3>Ask Us Custom</h3>
                                </div>
                                <div class="faqfrm__visa-form">
                                    <form action="#">
                                        <input type="text" placeholder="Name*">
                                        <input type="email" placeholder="Email*">
                                        <input type="email" placeholder="Phone*">
                                        <select style="display: none;">
                                            <option> Subject</option>
                                            <option> Choose an option</option>
                                            <option> Choose an option</option>
                                            <option> Choose an option</option>
                                            <option> Choose an option</option>
                                        </select>
                                        <div class="nice-select" tabindex="0"><span class="current"> Subject</span>
                                            <ul class="list">
                                                <li data-value="Subject" class="option selected focus"> Subject</li>
                                                <li data-value="Choose an option" class="option"> Choose an option</li>
                                                <li data-value="Choose an option" class="option"> Choose an option</li>
                                                <li data-value="Choose an option" class="option"> Choose an option</li>
                                                <li data-value="Choose an option" class="option"> Choose an option</li>
                                            </ul>
                                        </div>
                                        <textarea cols="30" rows="10"></textarea>
                                        <button class="theme-btn" type="submit">Submit Now</button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar__widget mb-30">
                                <div class="sidebar__widget-content">
                                    <div class="sidebar__widget-content-banner">
                                        <img src="{{ asset('fontend') }}/img/business-visa/business-adds.jpg"
                                            alt="">
                                        <div class="sidebar__widget-content-banner-text">
                                            <span>Higher Study</span>
                                            <h2>In Austalia</h2>
                                            <a href="{{ route('frontend.contact') }}" class="banner-btn">Apply Visa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="sidebar__deatils">
                            <div class="visa-details">
                                <div class="visa-deatils__thumb mb-40">
                                    <img src="{{ asset('fontend') }}/img/business-visa/business-visa.jpg" alt="">
                                </div>
                                <p class="mb-30">To make lives easy for global travelers, some countries offer electronic
                                    visa facilities. You can fill in the necessary details in an online form, upload scanned
                                    copies of the required documents, and make an online payment to apply for an e-visa.
                                    E-visa is issued and received at the visa seeker’s email/application profile within a
                                    very short time.
                                </p>
                                <p class="mb-35">Sometimes the online system seems a bit complicated. Sometimes a visa
                                    seeker doesn’t have enough time to carry out the entire process, prepare and format the
                                    document according to the checklist for uploading it.Sometimes the payment gateways are
                                    just not the right fit and you can’t
                                    get your card working. </p>
                                <h3 class="visa-deatils__title mb-25">
                                    Visa Application Whole Process
                                </h3>
                                <p class="mb-35">We understand what difficulties a visa seeker may face while
                                    applying for an e-visa.ST International Travels Agency provides e-visa services for all the available travel
                                    destinations.</p>
                            </div>
                            <div class="business__items">
                                <div class="row">
                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                                        <div class="business__items-single faq-bg mb-50">
                                            <i class="flaticon-requirement"></i>
                                            <h4 class="business__items-single-title mt-25 mb-20">
                                                Ensure <br> The Requrements
                                            </h4>
                                            <p>Work permit approval in higher education is designed for career professionals
                                                seeking</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                                        <div class="business__items-single faq-bg mb-50">
                                            <i class="flaticon-paperwork"></i>
                                            <h4 class="business__items-single-title mt-25 mb-20">
                                                Collection <br>
                                                The Documents
                                            </h4>
                                            <p>Work permit approval in higher education is designed for career professionals
                                                seeking</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                                        <div class="business__items-single faq-bg mb-50">
                                            <i class="flaticon-application"></i>
                                            <h4 class="business__items-single-title mt-25 mb-20">
                                                Fill Up <br>
                                                The Required From
                                            </h4>
                                            <p>Work permit approval in higher education is designed for career professionals
                                                seeking</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="necessary">
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6">
                                        <div class="necessary__box-thumb">
                                            <img src="{{ asset('fontend') }}/img/business-visa/business-1.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <div class="necessary__box">
                                            <h4 class="necessary__title mb-25">
                                                E-visa services
                                            </h4>
                                            <ul class="necessary-link mb-20">
                                                <li><i class="fal fa-check-square"></i> Purchase e-visa Service</li>
                                                <li><i class="fal fa-check-square"></i> Document Receipt & Processing</li>
                                                <li><i class="fal fa-check-square"></i> Signing up for a Client Account</li>
                                                <li><i class="fal fa-check-square"></i> Application Lodgment</li>
                                                <li><i class="fal fa-check-square"></i> Uploading Documents </li>
                                                <li><i class="fal fa-check-square"></i> Make online payment</li>
                                            </ul>
                                            <a href="{{ route('frontend.service') }}" class="business-btn">View More Requrements</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="information mt-60 ">
                                <h3 class="information__title mb-25">
                                    Visa Application Whole Process
                                </h3>
                                <p class="mb-30">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, quae
                                    temporibus? Placeat ea dolorum at officiis laborum recusandae enim magni.</p>
                                <div class="row">
                                    <div class="col-xxl-6">
                                        <div class="information-info">
                                            <ul>
                                                <li><span>Processing time</span>: <span>7 - 28 Days</span></li>
                                                <li><span>Stay period</span>: <span>Up to 180 Days</span></li>
                                                <li><span>Entry Persons</span>: <span>Single / Double</span></li>
                                                <li><span>Life Insurance</span>: <span>Yes</span></li>
                                                <li><span>Medical Checkup</span>: <span>Yes</span></li>
                                                <li><span>Total Charges</span>: <span>$23,570</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6">
                                        <div class="information-right">
                                            <img src="{{ asset('fontend') }}/img/business-visa/bussiness-2.jpg"
                                                alt="">
                                            <div class="information__wrapper d-flex align-items-center theme-bg">
                                                <div class="information__wrapper-icon">
                                                    <i class="fal fa-headset"></i>
                                                </div>
                                                <div class="information__wrapper-cell">
                                                    <span>Call for support</span>
                                                    <h5><a href="tel:01757-733883">01757-733883</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="business-according">
                                <p class="mt-40 mb-40 ">England dotted with a lush, green landscape, rustic villages and
                                    throbbing with humanity. South Asian country that has plenty to offer to visitors with
                                    its diverse wildlife .We have helped students, business persons, tourists, clients with
                                    medical needs. There are many variations of passages of Lorem Ipsum available.</p>
                                <div class="tab-content mb-30">
                                    <div class="tab-pane fade show active">
                                        <div class="faq-content faq-white">
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            How long does it take for a Transit Visa to process?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            The European business visa is mainly for people who want to
                                                            participate in business meetings, conferences in Europe. Visa
                                                            holders are not allowed to work or seek employment in Europe.
                                                            Individuals and circumstances influence how long it takes to
                                                            apply for a business visa.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            What is the purpose of the United States Business visa?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>The European business visa is mainly for people who want to
                                                                participate in business meetings, conferences in Europe.
                                                                Visa holders are not allowed to work or seek employment in
                                                                Europe. Individuals and circumstances influence how long it
                                                                takes to apply for a business visa. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingThree">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            If the applicant is intending to stay more than 3 months?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseThree" class="accordion-collapse collapse"
                                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>The European business visa is mainly for people who want to
                                                                participate in business meetings, conferences in Europe.
                                                                Visa holders are not allowed to work or seek employment in
                                                                Europe. Individuals and circumstances influence how long it
                                                                takes to apply for a business visa. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingThree1">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseThree1"
                                                            aria-expanded="false" aria-controls="collapseThree1">
                                                            What are the important things to know as a Transit Visa
                                                            applicant?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseThree1" class="accordion-collapse collapse"
                                                        aria-labelledby="headingThree1"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>The European business visa is mainly for people who want to
                                                                participate in business meetings, conferences in Europe.
                                                                Visa holders are not allowed to work or seek employment in
                                                                Europe. Individuals and circumstances influence how long it
                                                                takes to apply for a business visa. </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- business area end here -->
        <!-- abbrand-area start -->
        <div class="abbrand-area pb-120 wow fadeInUp" data-wow-delay="0.3s"
            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <div class="container">
                <div class="abbrand-active owl-carousel">
                    <div class="abbrand-img">
                        <a href="{{ route('frontend.partner') }}"><img src="{{ asset('fontend') }}/img/testimonial/1.png"
                                alt=""></a>
                    </div>
                    <div class="abbrand-img">
                        <a href="{{ route('frontend.partner') }}"><img src="{{ asset('fontend') }}/img/testimonial/2.png"
                                alt=""></a>
                    </div>
                    <div class="abbrand-img">
                        <a href="{{ route('frontend.partner') }}"><img src="{{ asset('fontend') }}/img/testimonial/3.png"
                                alt=""></a>
                    </div>
                    <div class="abbrand-img">
                        <a href="{{ route('frontend.partner') }}"><img src="{{ asset('fontend') }}/img/testimonial/4.png"
                                alt=""></a>
                    </div>
                    <div class="abbrand-img">
                        <a href="{{ route('frontend.partner') }}"><img src="{{ asset('fontend') }}/img/testimonial/5.png"
                                alt=""></a>
                    </div>
                    <div class="abbrand-img">
                        <a href="{{ route('frontend.partner') }}"><img src="{{ asset('fontend') }}/img/testimonial/4.png"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- abbrand-area end -->
    </main>
@endsection
