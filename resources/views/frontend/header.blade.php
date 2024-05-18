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
                          <div class="header-language f-right">
                              <select>
                                  <option data-display="English">English</option>
                                  <option value="1">Bangla</option>
                                  <option value="2">Arbi</option>
                                  <option value="3">China</option>
                                  <option value="4">Turky</option>
                              </select>
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
                                  <li class="menu-item-has-children"><a href="{{ route('frontend.service') }}">Services</a>
                                      <ul class="sub-menu">
                                          <li><a href="{{ route('frontend.service_one') }}">Visa Consultancy </a></li>
                                          <li><a href="{{ route('frontend.service_two') }}">E-visa Processing </a></li>
                                          <li><a href="{{ route('frontend.service_three') }}">One Way Collection</a>
                                          </li>
                                          <li><a href="{{ route('frontend.service_four') }}">Document Legalization</a>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="menu-item-has-children"><a href="{{ route('frontend.about') }}">About</a>
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
                                                  <a href="{{ route('logout') }}" onclick="event.preventDefault(),document.getElementById('logout-form').submit()">logout</a>
                                                  <form action="{{ route('logout') }}" method="POST" id="logout-form" class="d-none">@csrf</form>
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
