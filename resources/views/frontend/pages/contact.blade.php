@extends('frontend.master')

@section('fontend_body')
    <!-- page title area start -->
    <div class="page-title__area pt-110" style="background-image: url({{ asset('fontend') }}/img/about-us/ab-us.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper text-center">
                        <h3 class="pb-100">Contact Us</h3>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadccrumb-bg">
            <ul class="breadcrumb justify-content-center pt-20 pb-20">
                <li class="bd-items"><a href="{{ route('frontend.home') }}">Home</a></li>
                <li class="bd-items bdritems">|</li>
                <li class="bd-items"> <a href="{{ route('frontend.contact') }}">Contact Us</a></li>
            </ul>
        </nav>
    </div>
    <!-- page title area end -->

    <main>

        <!-- Contact  area start -->
        <div class="contact__area">
            <div class="contact__vmap">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.5597579627215!2d90.35064551537211!3d23.798686392846125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c13991c3cd01%3A0x879716d5a4249c0c!2zTXVrdG9iYW5nbGEgU2hvcHBpbmcgQ29tcGxleC3gpq7gp4HgppXgp43gpqTgpqzgpr7gpoLgprLgpr4g4Ka24Kaq4Ka_4KaCIOCmleCmruCmquCnjeCmsuCnh-CmleCnjeCmuA!5e0!3m2!1sen!2sbd!4v1681033851161!5m2!1sen!2sbd"></iframe>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6"></div>
                    <div class="col-xl-6 col-xl-6 col-lg-6">
                        <div class="contact__form pt-110">
                            <h2 class="contact-form__title">
                                Get in <span>Touch </span>
                            </h2>
                            <form id="contact-form" action="{{ asset('fontend') }}/mail.php" method="POST">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <input name="name" class="contact__input" type="text" placeholder="Your Name">
                                    </div>
                                    <div class="col-xl-6">
                                        <input name="email" class="contact__input" type="email"
                                            placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <input name="phone" class="contact__input" type="text" placeholder="Phone">
                                    </div>
                                    <div class="col-xl-6">
                                        <input name="subject" class="contact__input" type="text" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <select class="contact__input" name="contact-select">
                                            <option value="subject">Subject</option>
                                            <option value="subject-1">Option 1</option>
                                            <option value="subject-2">Option 2</option>
                                            <option value="subject-3">Option 3</option>
                                            <option value="subject-4">Option 4</option>
                                            <option value="subject-5">Option 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <textarea name="message" class="contact__input txt-area " cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <button class="theme-btn" type="submit">Submit Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact  area end -->

        <!-- Contact group info start -->
        <div class="contact-group-area pb-70 pt-145">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 ">
                        <div class="contact__gpinfo grey-soft2-bg mb-50">
                            <div class="contact__gpinfo-icon text-center">
                                <i class="flaticon-pin"></i>
                            </div>
                            <div class="contact__gpinfo-content">
                                <h3 class="contact__gpinfo-content-title text-center mb-25">
                                    Mirpur Office
                                </h3>
                                <ul>
                                    <li><a href="{{ route('frontend.contact') }}"> <span>Address</span>: <p>Space No: 399, 3rd Floor, Mukto Bangla Shopping Complex, Mirpur-1, Dhaka-1216</p></a>
                                    </li>
                                    <li><a href="info@stinternationaltravels.com"> <span>Email</span>: <p> info@stinternationaltravels.com</p></a>
                                    </li>
                                    <li><a href="tel:01757-733883"> <span>Phone</span>: <p>01757-733883</p> </a></li>
                                    <li><a><span>Opening</span>: <p>Sat - Thu : 10:00 AM – 7:00 PM</p> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact group info end -->



        <!-- abbrand-area start -->
        <div class="abbrand-area pb-120 wow fadeInUp" data-wow-delay="0.3s"
            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
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
    </main>
@endsection
