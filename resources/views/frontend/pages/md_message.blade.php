@extends('frontend.master')

@section('fontend_body')
<!-- team details area start -->
<section class="team__details pt-90 pb-10">
    <div class="container">
        <div class="team__details-inner p-relative white-bg">
            <div class="team__details-shape p-absolute wow fadeInRight" data-wow-delay=".2s">
                <img src="{{ asset('fontend') }}/img/icon/team/shape-1.png" alt="">
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="team__details-img w-img mr-50">
                        <img src="{{ asset('fontend') }}/img/team/team-01.jpg" class="w-100" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="team__details-content pt-105">
                        <span class="wow fadeInUp" data-wow-delay=".4s">UI/UX Designer</span>
                        <h3 class="wow fadeInUp" data-wow-delay=".6s">Parsley Montana</h3>
                        <p class="wow fadeInUp" data-wow-delay=".8s">So I said on your bike mate easy peasy dropped a clanger blow  porkies is fantastic show off show.!</p>
                        <div class="team__details-contact mb-45">
                            <ul>
                                <li class="wow fadeInUp" data-wow-delay="1s">
                                    <div class="icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <span><a href="mailto:support@zibber.com">support@zibber.com</a></span>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="1s">
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="text">
                                        <span><a href="tel:(+642)-394-396-432">(+642) 394 396 432</a></span>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="1s">
                                    <div class="icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="text">
                                        <span>Ave 14th Street, Mirpur 210, <br> San Franciso, USA 3296.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="team__details-social theme-social wow fadeInUp" data-wow-delay="1s">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-vimeo-v"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="team__details-info mt-60">
                    <h4 class="wow fadeInUp" data-wow-delay=".4s">Information</h4>
                    <p class="wow fadeInUp" data-wow-delay=".6s">jolly good codswallop what a plonker he nicked it bog-standard porkies gosh the full monty, wind up at public school hanky panky cheeky bugger Richard do one some dodgy chav bite your arm off. Argy-bargy excuse my French brown bread up the duff bleeder fanny around spend a penny barmy bonnet, bubble and squeak brolly bugger no biggie smashing get stuffed mate old lurgy, cup of tea nice one mufty that I knackered some dodgy chav. Say vagabond morish crikey excuse my French bonnet William blatant spend a penny, knackered bite your arm off what a plonker blimey smashing a blinding shot pardon me grub, wind up cracking goal Jeffrey hanky panky are you taking the piss such a fibber hunky-dory.</p>
                    <p class="wow fadeInUp" data-wow-delay=".8s">So I said on your bike mate easy peasy dropped a clanger blow off porkies is fantastic show off show off pick your nose and blow off, faff about bubble and squeak bugger all mate happy days hotpot don't get shirty with me jolly good gormless barmy.</p>
                    <a href="{{ route('frontend.contact') }}" class="theme-btn blacks-hover mt-10">Appionment </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team details area end -->
@endsection
