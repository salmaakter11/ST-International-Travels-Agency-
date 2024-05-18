<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Consultancy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('fontend') }}/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/custom-animation.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/meanmenu.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/venobox.min.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/backToTop.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/swiper-bundle.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/default.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/main.css">

    {{-- Datatable --}}
    <link rel="stylesheet" href="{{ asset('fontend/common/common.css') }}">

    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->

    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header area start here -->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-8 col-lg-6">
                        <div class="header-top-left">
                            <ul>
                                <li><span>Opening Time :</span> 10:00 AM – 7:00 PM</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                        <div class="topheader-info">
                            <div class="top-button f-right ">
                                @if (Auth::check())
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                @else
                                    <a href="{{ route('register') }}">Apply Now</a>
                                @endif
                            </div>

                            <div class="header-location f-right">
                                <ul>
                                    <li><a href="https://www.google.com/maps/"><i class="flaticon-pin"></i></a></li>
                                </ul>
                            </div>
                            <div class="header-location f-right">
                                <ul>

                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="header-location f-right">
                                <ul>

                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="header-location f-right">
                                <ul>
                                    <li><a href="https://www.instagram.com/shakileuropevlog/"><i
                                                class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="header-location f-right">
                                <ul>
                                    <li><a href="https://www.facebook.com/st.inttravels/"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-menu header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-8">
                        <div class="header-logo ">
                            <a href="{{ route('frontend.home') }}"><img src="{{ asset('fontend') }}/img/logo/logo.png"
                                    class="img-fluid" alt="img"></a>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-4">
                        <div class="main-menu d-none d-lg-block ">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="{{ route('frontend.home') }}">HOME</a></li>
                                    <li class="menu-item-has-children"><a
                                            href="{{ route('frontend.service') }}">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('frontend.service_one') }}">Visa Consultancy </a>
                                            </li>
                                            <li><a href="{{ route('frontend.service_two') }}">E-visa Processing </a>
                                            </li>
                                            <li><a href="{{ route('frontend.service_three') }}">One Way Collection</a>
                                            </li>
                                            <li><a href="{{ route('frontend.service_four') }}">Document
                                                    Legalization</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a
                                            href="{{ route('frontend.about') }}">About</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('frontend.mdmessage') }}">Md Message </a></li>
                                            <li><a href="{{ route('frontend.team') }}">Team Member</a></li>
                                            <li><a href="{{ route('frontend.partner') }}">Partner</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('frontend.notice') }}">Notice</a></li>
                                    <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                                    <li class="menu-item-has-children"><a>Client area</a>
                                        <ul class="sub-menu">

                                            @if (Auth::check())
                                                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                                <li>
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(),document.getElementById('logout-form').submit()">logout</a>
                                                    <form action="{{ route('logout') }}" method="POST"
                                                        id="logout-form" class="d-none">@csrf</form>
                                                </li>
                                            @else
                                                <li><a href="{{ route('register') }}">Apply now</a></li>
                                                <li> <a href="{{ route('login') }}">login</a> </li>
                                            @endif

                                        </ul>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                        <div class="side-menu-icon d-lg-none text-end">
                            <button class="side-toggle"><i class="far fa-bars"></i></button>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3">
                        <div class="main-menu-wrapper d-flex align-items-center justify-content-end">

                            <div class="main-menu-wrapper__call-number d-flex align-items-center">
                                <div class="main-menu-wrapper__call-icon mr-10">
                                    <img src="{{ asset('fontend') }}/img/menu-icon/chatting.png" alt="">
                                </div>
                                <div class="main-menu-wrapper__call-text">
                                    <span>Contact Us</span>
                                    <h5><a href="tel:01757-733883">01757-733883</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-overlay"></div>
        <div class="fix">
            <div class="side-info">
                <button class="side-info-close"><i class="fal fa-times"></i></button>
                <div class="side-info-content">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- Fullscreen search -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fal fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search Entire Store...">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end fullscreen search -->
    <!-- header area end here -->

    <main>
        <!-- Contact  area start -->
        <div class="contact__area">
            <div class="container">
                <div class="row">
                    {{-- <div class="col-xxl-6 col-xl-6 col-lg-6"></div> --}}
                    <div class="col-xl-12 ">
                        <div class="contact__form pt-60">
                            <h2 class="contact-form__title text-center">
                                Registration <span> Form</span>
                            </h2>

                            <form action="{{ route('register_store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <strong>General Information's</strong>
                                <div class="row mt-3">
                                    <div class="col-md-6 col-xl-4 mb-3">
                                        <input name="name" class="contact__input mb-0" type="text"
                                            placeholder="Your Name*">
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 col-xl-4 mb-3" >
                                        <input name="phone" class="contact__input mb-0" type="text"
                                            placeholder="Phone*">
                                        <span class="text-danger">
                                            @error('phone')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 col-xl-4 mb-3">
                                        <input name="email" class="contact__input mb-0" type="email"
                                            placeholder="Your Email*">
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="col-md-6 col-xl-4">
                                        <input name="password" class="contact__input mb-0" type="password"
                                            placeholder="Password*">
                                        <span class="text-danger">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <input name="confirm_password" class="contact__input mb-0" type="password"
                                            placeholder="Confirm Password*">
                                        <span class="text-danger">
                                            @error('confirm_password')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <input name="dob" class="contact__input mb-0" id="date_ob" type="text"
                                            placeholder="Date of Birth*" autocomplete="off">
                                        <span class="text-danger">
                                            @error('dob')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 col-xl-4 mb-3">
                                        <select class="contact__input mb-0 search" name="gender">
                                            <option value="">Select Gender*</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                            <option value="3">Others</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('gender')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 col-xl-4 mb-3">
                                        <select class="contact__input mb-0 search" name="marital_status">
                                            <option value="">Select Marital Status*</option>
                                            <option value="1">Married</option>
                                            <option value="2">Un-Married</option>
                                            <option value="3">Others</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('marital_status')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 col-xl-4 mb-3">
                                        <select class="contact__input mb-0 search" name="religion">
                                            <option value="">Select Religion*</option>
                                            <option value="1">Islam</option>
                                            <option value="2">Hindu</option>
                                            <option value="1">Cristian</option>
                                            <option value="2">Buddhist</option>
                                            <option value="3">Others</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('religion')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 col-xl-4 mb-3">
                                        <input name="address" class="contact__input mb-0" type="text"
                                            placeholder="Address*">
                                        <span class="text-danger">
                                            @error('address')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 col-xl-4 mb-3">
                                        <select class="contact__input mb-0 search" name="country_id">
                                            <option value="">Select a Preferred country*</option>
                                            @if (isset($country))
                                                @foreach ($country as $data)
                                                    <option value="{{ $data->id }}"> {{ $data->country_name }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <span class="text-danger">
                                            @error('country_id')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 col-xl-4 mb-3">
                                        <input name="image" class="form-control bg-light" type="file"
                                            id="image_id">
                                        <span class="text-danger" id="error_show">
                                            @error('image')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class=" text-right">
                                        <img id="show_image" src="{{ asset('no_image.png') }}"
                                            style="width: 120px;height:120px"
                                            class="rounded elevation-2 img-thumbnail img-fluid" alt="No Image">
                                    </div>
                                </div>
                                <strong>Last Educational Qualification</strong>
                                <div class="row mt-3">
                                    <div class="col-md-6 col-xl-4 mb-3">
                                        <select class="contact__input mb-0 search" name="educational_one">
                                            <option value="">Select Education level*</option>
                                            @if (isset($education))
                                                @foreach ($education as $data)
                                                    <option value="{{ $data->id }}"> {{ $data->level_name }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <span class="text-danger">
                                            @error('educational_one')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 col-xl-4 mb-3">
                                        <input name="institute_one" class="contact__input mb-0" type="text"
                                            placeholder="Board / University / Institute*">
                                        <span class="text-danger">
                                            @error('institute_one')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 col-xl-4 mb-3">
                                        <input name="department_one" class="contact__input mb-0" type="text"
                                            placeholder="Department*">
                                        <span class="text-danger">
                                            @error('department_one')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 col-xl-4 mb-3">
                                        <input name="passing_year_one" class="contact__input mb-0" type="text"
                                            placeholder="Passing Year*">
                                        <span class="text-danger">
                                            @error('passing_year_one')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 col-xl-4 mb-3">
                                        <input name="grade_one" class="contact__input mb-0" type="text"
                                            placeholder="Result (Grade / Division)* ">
                                        <span class="text-danger">
                                            @error('grade_one')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 col-xl-4  mb-3">
                                        <select class="contact__input mb-0 search" name="result_one">
                                            <option value="">Select Result Type*</option>
                                            @if (isset($result))
                                                @foreach ($result as $data)
                                                    <option value="{{ $data->id }}"> {{ $data->result_type }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <span class="text-danger">
                                            @error('result_one')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <strong>English Language Test*</strong>
                                <div class="row mt-3">
                                    <div class="col-md-6 col-xl-4  mb-3">
                                        <select class="contact__input mb-0 search" name="language_id">
                                            <option value="">Select Language Test*</option>
                                            @if (isset($language))
                                                @foreach ($language as $data)
                                                    <option value="{{ $data->id }}"> {{ $data->language_test }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <span class="text-danger">
                                            @error('language_id')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 col-xl-4 mb-3">
                                        <input name="score" class="contact__input mb-0" type="text"
                                            placeholder="Score*">
                                        <span class="text-danger">
                                            @error('score')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 col-xl-4 mb-3">
                                        <input name="test_date" class="contact__input mb-0" type="text"
                                            placeholder="Test Date*" id="t_date" autocomplete="off">
                                        <span class="text-danger">
                                            @error('test_date')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xl-12">
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
    </main>

    <!-- footer area start -->
    <footer class="pt-80">
        <div class="footer__area footer-bg2 pt-95 pb-70 pt-60"
            style="background-image: url({{ asset('fontend') }}/img/footer-bg/footer-bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="footer__widget mb-30">
                            <div class="footer__widget-title">
                                <div class="logo mb-30">
                                    <a href="{{ route('frontend.home') }}"><img
                                            src="{{ asset('fontend') }}/img/footer-logo/f-logo.png"
                                            alt="logo"></a>
                                </div>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__logo-area">
                                    <p>ST International Travels Agency is a reliable travel agency in Bangladesh.</p>
                                    <div class="social">
                                        <ul>
                                            <li><a href="https://www.facebook.com/st.inttravels/"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="https://www.instagram.com/shakileuropevlog/ "><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="footer__widget margin-left-100 mb-30">
                            <div class="footer__widget-title mb-25">
                                <h2>Quick Links</h2>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__services">
                                    <ul>
                                        <li><a href="{{ route('frontend.about') }}">About Our Company</a></li>
                                        <li><a href="{{ route('frontend.service') }}">Latest Services</a></li>
                                        <li><a href="#">Payment Type</a></li>
                                        <li><a href="{{ route('frontend.about') }}">Awards Winnings</a></li>
                                        <li><a href="#">World Media Partner</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s"
                        style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                        <div class="footer__widget margin-left-30 mb-30">
                            <div class="footer__widget-title mb-25">
                                <h2>Visa Information</h2>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__services">
                                    <ul>
                                        <li><a>Visitor Visas</a></li>
                                        <li><a href="{{ route('frontend.contact') }}">Permanent Residence Visas</a>
                                        </li>
                                        <li><a>Business Visas</a></li>
                                        <li><a>Working Holiday Visas</a></li>
                                        <li><a>Studying & Training Visas</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.9s"
                        style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
                        <div class="footer-widget mb-30">
                            <div class="footer__widget-title mb-30">
                                <h2>Newsletter</h2>
                            </div>
                            <div class="subscribe-footer mb-35">
                                <form action="form.php">
                                    <input type="email" placeholder="Enter your email">
                                    <button type="submit"><i class="fal fa-long-arrow-right"></i></button>
                                </form>
                            </div>
                            <div class="footer__services ">
                                <ul>
                                    <li><span>Opening Time</span> </li>
                                    <li><span> Sat - Thu : 10:00 AM – 7:00 PM</span> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-coptright theme-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-6">
                        <div class="footer__text">
                            <p>Copyright ©2021 <a href="https://itsheba24.com/"><b>IT Sheba 24</b></a>. All Rights
                                Reserved</p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-copyright__wrapper footer-copyright__wrapper2">
                            <div class="footer-call d-flex align-items-center">
                                <div class="footer-copyright__wrapper__icon mr-10">
                                    <i class="fal fa-headset"></i>
                                </div>
                                <div class="footer-copyright__wrapper__call-number">
                                    <span>Call - Or - SMS</span>
                                    <h5><a href="tel:01757-733883">01757-733883</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- JS here -->
    <script src="{{ asset('fontend') }}/js/vendor/jquery.min.js"></script>
    <script src="{{ asset('fontend') }}/js/waypoints.min.js"></script>
    <script src="{{ asset('fontend') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('fontend') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('fontend') }}/js/slick.min.js"></script>
    <script src="{{ asset('fontend') }}/js/swiper-bundle.js"></script>
    <script src="{{ asset('fontend') }}/js/jquery.nice-select.min.js"></script>
    {{-- <script src="{{ asset('fontend') }}/js/venobox.min.js"></script> --}}
    <script src="{{ asset('fontend') }}/js/backToTop.js"></script>
    <script src="{{ asset('fontend') }}/js/jquery.meanmenu.min.js"></script>
    <script src="{{ asset('fontend') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('fontend') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('fontend') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('fontend') }}/js/ajax-form.js"></script>
    <script src="{{ asset('fontend') }}/js/wow.min.js"></script>
    <script src="{{ asset('fontend') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('fontend') }}/js/main.js"></script>

    {{-- Datatable --}}
    <script src="{{ asset('fontend/common/common.js') }}"></script>

    <script src="{{ asset('admin/datepicker/date_picker.js') }}"></script>
    <script src="{{ asset('admin') }}/plugins/select2/js/select2.full.min.js"></script>
    <script>
        $("#t_date", ).datepicker({
            uiLibrary: 'bootstrap5',
            format: 'dd-mm-yyyy',
            maxDate: new Date()
        });

        $("#date_ob", ).datepicker({
            uiLibrary: 'bootstrap5',
            format: 'dd-mm-yyyy',
            maxDate: new Date()
        });

        $('.search').select2({
            theme: 'bootstrap4'
        });
        image_validation("#image_id", "#show_image", "#error_show", '1024', "Image Size Can't larger than 1024 KB")
    </script>
</body>

</html>
