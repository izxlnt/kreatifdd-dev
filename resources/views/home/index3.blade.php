@extends('layouts.layoutStyleThree')
@section('title', 'Kreatif Digital Dinamik - Home')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/before-after.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/how-it-work.css') }}">
@endpush

@section('content')
    <x-strickyHeaderTwo />
    <!-- /.stricky-header -->


    <!--Main Slider Three Start-->
    <section class="main-slider-three">
        
        <div class="container-full">
            <div class="main-slider-three__slider">
                <div class="row">

                    <div class="col-xl-4 col-lg-4 col-md-5">
                        <div class="main-slider-three__left">
                            <div class="swiper-container" id="main-slider-three__thumb">
                                <div class="swiper-wrapper">
                                    <!-- Slide 1 -->
                                    <div class="swiper-slide">
                                        <div class="main-slider-three__content-one">
                                            <h2 class="main-slider-three__title-one">Rakaman Momen</h2>
                                            <h3 class="main-slider-three__title-two">Fotografi & Videografi</h3>
                                            <div class="main-slider-three__btn-box">
                                                <a href="{{ route('contact') }}" class="thm-btn main-slider-three__btn">
                                                    Mula Bersama Kami
                                                    <span class="icon-up-right-arrow"></span>
                                                </a>
                                            </div>
                                            <h3 class="main-slider-three__title-three">Visual Kreatif</h3>
                                        </div>
                                    </div>

                                    <!-- Slide 2 -->
                                    <div class="swiper-slide">
                                        <div class="main-slider-three__content-one">
                                            <h2 class="main-slider-three__title-one">Identiti Visual</h2>
                                            <h3 class="main-slider-three__title-two">Rekaan Grafik Kreatif</h3>
                                            <div class="main-slider-three__btn-box">
                                                <a href="{{ route('contact') }}" class="thm-btn main-slider-three__btn">
                                                    Mula Bersama Kami
                                                    <span class="icon-up-right-arrow"></span>
                                                </a>
                                            </div>
                                            <h3 class="main-slider-three__title-three">Rekaan Unik</h3>
                                        </div>
                                    </div>

                                    <!-- Slide 3 -->
                                    <div class="swiper-slide">
                                        <div class="main-slider-three__content-one">
                                            <h2 class="main-slider-three__title-one">Strategi Kandungan</h2>
                                            <h3 class="main-slider-three__title-two">Pengurusan Media Sosial</h3>
                                            <div class="main-slider-three__btn-box">
                                                <a href="{{ route('contact') }}" class="thm-btn main-slider-three__btn">
                                                    Mula Bersama Kami
                                                    <span class="icon-up-right-arrow"></span>
                                                </a>
                                            </div>
                                            <h3 class="main-slider-three__title-three">Media Dinamik</h3>
                                        </div>
                                    </div>

                                    <!-- Slide 4 -->
                                    <div class="swiper-slide">
                                        <div class="main-slider-three__content-one">
                                            <h2 class="main-slider-three__title-one">Kempen Digital</h2>
                                            <h3 class="main-slider-three__title-two">Strategi Pemasaran Digital</h3>
                                            <div class="main-slider-three__btn-box">
                                                <a href="{{ route('contact') }}" class="thm-btn main-slider-three__btn">
                                                    Mula Bersama Kami
                                                    <span class="icon-up-right-arrow"></span>
                                                </a>
                                            </div>
                                            <h3 class="main-slider-three__title-three">Hasil Maksimum</h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /#main-slider-three__Nav -->
                            <div class="main-slider-three__nav">
                                <div class="swiper-button-next" id="main-slider-three__swiper-button-prev">
                                    <i class="icon-left-arrow"></i>
                                </div>
                                <div class="swiper-button-prev" id="main-slider-three__swiper-button-next">
                                    <i class="icon-right-arrow"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8 col-md-7">
                        <div class="main-slider-three__right">
                            <div class="main-slider-three__main-content">
                                <div class="swiper-container" id="main-slider-three__carousel">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="main-slider-three__img-box">
                                                <div class="main-slider-three__img">
                                                    <img src="{{ asset('assets/images/resources/main-slider-three-1-1.jpg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="main-slider-three__img-box">
                                                <div class="main-slider-three__img">
                                                    <img src="{{ asset('assets/images/resources/main-slider-three-1-2.jpg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="main-slider-three__img-box">
                                                <div class="main-slider-three__img">
                                                    <img src="{{ asset('assets/images/resources/main-slider-three-1-3.jpg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                    </div>
                                    <!-- /# If Need main-slider-three__carousel-pagination -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Main Slider Three End-->

    <!--About Three Start -->
    <section class="about-three">
        <div class="about-three__shape1">
            <img class="float-bob-x" src="{{ asset('assets/images/shapes/site-footer-two-shape-1.png') }}" alt="Shape">
        </div>
        <div class="about-three__shape2">
            <img class="float-bob-x" src="{{ asset('assets/images/shapes/site-footer-two-shape-2.png') }}" alt="Shape">
        </div>
        <div class="about-three__shape3">
            <img class="float-bob-x" src="{{ asset('assets/images/shapes/about-v1-shape1.png') }}" alt="Shape">
        </div>
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-three__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <h2 class="section-title__title title-animation">Kreatif Digital Dinamik (KDD) – Your SME
                                Marketing Partner</h2>
                        </div>
                        <p class="about-three__text">Kami membantu syarikat dan perniagaan membina jenama yang lebih kuat
                            melalui media dan pemasaran digital. Fokus kami adalah memastikan setiap projek yang dijalankan
                            memberi kesan jangka panjang, bukan sekadar hasil sekali lalu.
                        </p>
                        <br>
                        <p class="about-three__text">
                            Kami berpengalaman bekerjasama dengan pelbagai organisasi dan jenama seperti PNB, SME
                            Bank, Attana Hotel, Johorean Comrade, Al-Ikhsan, Madad Dakwah Centre, Protasa Properties,
                            Mergong Tiling Sdn. Bhd., Esthetic Medical Solution, Dr Meow, dan PERKIM. Hasilnya, kami
                            membuktikan kemampuan untuk menghasilkan foto, video, dan strategi pemasaran yang
                            konsisten serta memberi nilai kepada klien.</p>
                        <ul class="about-three__points-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-workstations"></span>
                                </div>
                                <div class="content">
                                    <h3>Fotografi & videografi profesional</h3>
                                    <p>Perkhidmatan kami mengutamakan kreativiti, kualiti, dan kepuasan pelanggan dalam
                                        setiap projek.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-social-media-marketing"></span>
                                </div>
                                <div class="content">
                                    <h3>Rekaan grafik kreatif</h3>
                                    <p>
                                    <p>Kami menghasilkan rekaan grafik yang kreatif dan berkualiti untuk memenuhi keperluan
                                        jenama anda.</p>
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="about-three__btn-box">
                            <a href="{{ route('about') }}" class="thm-btn about-three__btn">Lebih Lanjut<span
                                    class="icon-up-right-arrow"></span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-three__right wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-three__img">
                            <img src="{{ asset('assets/images/resources/about-three-img-1.jpg') }}" alt="">
                            <div class="about-three__experience-box">
                                <h3 class="about-three__experience-title">Funfacts
                                    in Great<br> Numbers</h3>
                                <div class="about-three__experience">
                                    <div class="about-three__experience-count-shape"></div>
                                    <p class="about-three__experience-sub-title">Years Of <br>Experience</p>
                                    <div class="about-three__experience-count count-box">
                                        <h3 class="count-text" data-stop="25" data-speed="1500">00</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Three End -->


    <!--How It Work Start -->
    <section class="how-it-work">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">Apa Yang Kami Lakukan</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="how-it-work__single how-it-work__single-3">
                        <div class="how-it-work__count"></div>
                        <h3 class="how-it-work__title">FOTOGRAFI & VIDEOGRAFI PROFESIONAL</h3>
                        <p class="how-it-work__text">Merakam detik berharga anda dengan hasil fotografi dan videografi yang
                            berkualiti tinggi dan penuh kreativiti.</p>
                        <div class="how-it-work__icon">
                            <span class="icon-social-media-marketing"></span>
                        </div>
                    </div>
                    <div class="how-it-work__single">
                        <div class="how-it-work__count"></div>
                        <h3 class="how-it-work__title">STRATEGI PEMASARAN DIGITAL</h3>
                        <p class="how-it-work__text">Membangunkan strategi pemasaran digital yang berkesan untuk
                            meningkatkan capaian, penglibatan, dan jualan anda.</p>

                        <div class="how-it-work__icon">
                            <span class="icon-customer-service"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="how-it-work__img-box">
                        <div class="how-it-work__img">
                            <img src="{{ asset('assets/images/artworks/laptop-with-camera-glasses.jpg') }}"
                                alt="">
                        </div>
                        <div class="how-it-work__icon-2">
                            <span class="icon-globe"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="how-it-work__single how-it-work__single-2">
                        <div class="how-it-work__count"></div>
                        <h3 class="how-it-work__title">PENGURUSAN MEDIA SOSIAL HARIAN</h3>
                        <p class="how-it-work__text">Mengurus dan mengemas kini platform media sosial anda setiap hari
                            untuk memastikan jenama sentiasa aktif dan relevan.</p>
                        <div class="how-it-work__icon">
                            <span class="icon-campaign"></span>
                        </div>
                    </div>
                    <div class="how-it-work__single how-it-work__single-2">
                        <div class="how-it-work__count"></div>
                        <h3 class="how-it-work__title">REKAAN GRAFIK KREATIF</h3>
                        <p class="how-it-work__text">Mencipta rekaan grafik yang inovatif untuk menyerlahkan identiti
                            visual dan jenama anda.</p>
                        <div class="how-it-work__icon">
                            <span class="icon-workstations"></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--How It Work End -->

    <!--Services Three Start -->
    <section class="services-three">
        <div class="services-three__bg"
            style="background-image: url({{ asset('assets/images/shapes/site-footer-shape-1.jpg') }});"></div>
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">Where Inovation Meet <br>
                    Interior Design</h2>
            </div>
            <div class="row">
                <!--Services Three Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-staircase"></span>
                        </div>
                        <h3 class="services-three__title"><a href="{{ route('interior-design') }}"> Architecture & <br>
                                Building </a></h3>
                        <div class="services-three__img">
                            <img src="{{ asset('assets/images/services/services-3-1.jpg') }}" alt="">
                        </div>
                        <p class="services-three__text">Our associate consultants specialize in a range of business
                            areas. These include strategic planning, issues resolution, culture assessment, board
                            effectiveness, retention.</p>
                        <div class="services-three__arrow">
                            <a href="{{ route('interior-design') }}"><span class="icon-up-right-arrow-1"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End -->
                <!--Services Three Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-workstations"></span>
                        </div>
                        <h3 class="services-three__title"><a href="{{ route('evolve-space-designs') }}"> Evolve Space
                                <br>
                                Designs </a></h3>
                        <div class="services-three__img">
                            <img src="{{ asset('assets/images/services/services-3-2.jpg') }}" alt="">
                        </div>
                        <p class="services-three__text">Our associate consultants specialize in a range of business
                            areas. These include strategic planning, issues resolution, culture assessment, board
                            effectiveness, retention.</p>
                        <div class="services-three__arrow">
                            <a href="{{ route('evolve-space-designs') }}"><span class="icon-up-right-arrow-1"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End -->
                <!--Services Three Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="600ms">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-plant"></span>
                        </div>
                        <h3 class="services-three__title"><a href="{{ route('eden-home-styling') }}"> Eden Home <br>
                                Styling
                            </a></h3>
                        <div class="services-three__img">
                            <img src="{{ asset('assets/images/services/services-3-3.jpg') }}" alt="">
                        </div>
                        <p class="services-three__text">Our associate consultants specialize in a range of business
                            areas. These include strategic planning, issues resolution, culture assessment, board
                            effectiveness, retention.</p>
                        <div class="services-three__arrow">
                            <a href="{{ route('eden-home-styling') }}"><span class="icon-up-right-arrow-1"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End -->
                <!--Services Three Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="800ms">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-vacuum-cleaner"></span>
                        </div>
                        <h3 class="services-three__title"><a href="{{ route('harmony-interiors') }}"> Harmony Design <br>
                                Interiors </a></h3>
                        <div class="services-three__img">
                            <img src="{{ asset('assets/images/services/services-3-4.jpg') }}" alt="">
                        </div>
                        <p class="services-three__text">Our associate consultants specialize in a range of business
                            areas. These include strategic planning, issues resolution, culture assessment, board
                            effectiveness, retention.</p>
                        <div class="services-three__arrow">
                            <a href="{{ route('harmony-interiors') }}"><span class="icon-up-right-arrow-1"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End -->
            </div>
        </div>
    </section>
    <!--Services Three End -->

    <!-- Sliding Text Two Start -->
    <section class="sliding-text-two">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="sliding-text-two__wrap">
            <ul class="sliding-text-two__list list-unstyled marquee_mode">
                <li>
                    <h2 data-hover="Fotografi & Videografi" class="sliding-text-two__title">Fotografi & Videografi</h2>
                </li>
                <li>
                    <h2 data-hover="Rekaan Grafik Kreatif" class="sliding-text-two__title">Rekaan Grafik Kreatif</h2>
                </li>
                <li>
                    <h2 data-hover="Pengurusan Media Sosial" class="sliding-text-two__title">Pengurusan Media Sosial</h2>
                </li>
                <li>
                    <h2 data-hover="Strategi Pemasaran Digital" class="sliding-text-two__title">Strategi Pemasaran Digital
                    </h2>
                </li>
                <li>
                    <h2 data-hover="Content Marketing" class="sliding-text-two__title">Content Marketing</h2>
                </li>
                <li>
                    <h2 data-hover="Branding & Identiti Visual" class="sliding-text-two__title">Branding & Identiti Visual
                    </h2>
                </li>
            </ul>
        </div>
    </section>

    <!-- Sliding Text Two End -->

    <!--Projects Three Start-->
    <section class="projects-three">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="projects-three__wrapper">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">Dedikasi Kami, <br>
                    Impak Digital Anda.</h2>
            </div>
            <div class="projects-three__carousel owl-theme owl-carousel">
                <!--Projects Three Single Start-->
                <div class="item">
                    <div class="projects-three__single">
                        <div class="projects-three__img">
                            <img src="{{ asset('assets/images/project/projects-3-1.jpg') }}" alt="">
                            <div class="projects-three__content">
                                <p class="projects-three__sub-title">Interior Design</p>
                                <h4 class="projects-three__title"><a href="{{ route('project-details') }}">Neoclassical
                                        Sofa</a></h4>
                            </div>
                            <div class="projects-three__arrow">
                                <a href="{{ asset('assets/images/project/projects-3-1.jpg') }}" class="img-popup"><span
                                        class="icon-up-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Three Single End-->
                <!--Projects Three Single Start-->
                <div class="item">
                    <div class="projects-three__single">
                        <div class="projects-three__img">
                            <img src="{{ asset('assets/images/project/projects-3-2.jpg') }}" alt="">
                            <div class="projects-three__content">
                                <p class="projects-three__sub-title">Interior Design</p>
                                <h4 class="projects-three__title"><a href="{{ route('project-details') }}">Living Room
                                        Interior Design</a></h4>
                            </div>
                            <div class="projects-three__arrow">
                                <a href="{{ asset('assets/images/project/projects-3-2.jpg') }}" class="img-popup"><span
                                        class="icon-up-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Three Single End-->
                <!--Projects Three Single Start-->
                <div class="item">
                    <div class="projects-three__single">
                        <div class="projects-three__img">
                            <img src="{{ asset('assets/images/project/projects-3-3.jpg') }}" alt="">
                            <div class="projects-three__content">
                                <p class="projects-three__sub-title">Building</p>
                                <h4 class="projects-three__title"><a href="{{ route('project-details') }}">Living Room
                                        Remodeling</a></h4>
                            </div>
                            <div class="projects-three__arrow">
                                <a href="{{ asset('assets/images/project/projects-3-3.jpg') }}" class="img-popup"><span
                                        class="icon-up-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Three Single End-->
                <!--Projects Three Single Start-->
                <div class="item">
                    <div class="projects-three__single">
                        <div class="projects-three__img">
                            <img src="{{ asset('assets/images/project/projects-3-4.jpg') }}" alt="">
                            <div class="projects-three__content">
                                <p class="projects-three__sub-title">Architecture</p>
                                <h4 class="projects-three__title"><a href="{{ route('project-details') }}">Restaurant
                                        Interior
                                        Design</a></h4>
                            </div>
                            <div class="projects-three__arrow">
                                <a href="{{ asset('assets/images/project/projects-3-4.jpg') }}" class="img-popup"><span
                                        class="icon-up-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Three Single End-->
                <!--Projects Three Single Start-->
                <div class="item">
                    <div class="projects-three__single">
                        <div class="projects-three__img">
                            <img src="{{ asset('assets/images/project/projects-3-1.jpg') }}" alt="">
                            <div class="projects-three__content">
                                <p class="projects-three__sub-title">Interior Design</p>
                                <h4 class="projects-three__title"><a href="{{ route('project-details') }}">Neoclassical
                                        Sofa</a></h4>
                            </div>
                            <div class="projects-three__arrow">
                                <a href="{{ asset('assets/images/project/projects-3-1.jpg') }}" class="img-popup"><span
                                        class="icon-up-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Three Single End-->
                <!--Projects Three Single Start-->
                <div class="item">
                    <div class="projects-three__single">
                        <div class="projects-three__img">
                            <img src="{{ asset('assets/images/project/projects-3-2.jpg') }}" alt="">
                            <div class="projects-three__content">
                                <p class="projects-three__sub-title">Interior Design</p>
                                <h4 class="projects-three__title"><a href="{{ route('project-details') }}">Living Room
                                        Interior Design</a></h4>
                            </div>
                            <div class="projects-three__arrow">
                                <a href="{{ asset('assets/images/project/projects-3-2.jpg') }}" class="img-popup"><span
                                        class="icon-up-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Three Single End-->
                <!--Projects Three Single Start-->
                <div class="item">
                    <div class="projects-three__single">
                        <div class="projects-three__img">
                            <img src="{{ asset('assets/images/project/projects-3-3.jpg') }}" alt="">
                            <div class="projects-three__content">
                                <p class="projects-three__sub-title">Building</p>
                                <h4 class="projects-three__title"><a href="{{ route('project-details') }}">Living Room
                                        Remodeling</a></h4>
                            </div>
                            <div class="projects-three__arrow">
                                <a href="{{ asset('assets/images/project/projects-3-3.jpg') }}" class="img-popup"><span
                                        class="icon-up-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Three Single End-->
                <!--Projects Three Single Start-->
                <div class="item">
                    <div class="projects-three__single">
                        <div class="projects-three__img">
                            <img src="{{ asset('assets/images/project/projects-3-4.jpg') }}" alt="">
                            <div class="projects-three__content">
                                <p class="projects-three__sub-title">Architecture</p>
                                <h4 class="projects-three__title"><a href="{{ route('project-details') }}">Restaurant
                                        Interior
                                        Design</a></h4>
                            </div>
                            <div class="projects-three__arrow">
                                <a href="{{ asset('assets/images/project/projects-3-4.jpg') }}" class="img-popup"><span
                                        class="icon-up-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Three Single End-->
            </div>
        </div>
    </section>
    <!--Projects Three End-->

    <!--Before And After Start -->
    {{-- <section class="before-and-after">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">Interior Design Conversion</h2>
            </div>
            <p class="before-and-after__text">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.<br> Lorem Ipsum has been the industry's standard dummy text.</p>
            <div class="before-and-after__img-box">
                <div class="before-after">
                    <div class="before-after-twentytwenty" id="wrinkle-before-after">
                        <img src="{{ asset('assets/images/resources/before-and-after-img-1.jpg') }}" alt="">
                        <img src="{{ asset('assets/images/resources/before-and-after-img-2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--Before And After End -->

    <!-- Testimonial One Start -->
    <section class="testimonial-one">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style2">
                <h2 class="section-title__title title-animation">
                    What Our Clients Say
                </h2>
            </div>
            <div class="testimonial-one__top">
                <div class="row">
                    <!-- Testimonial One Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-one-client-1-1.jpg') }}"
                                        alt="">
                                </div>
                                <div class="testimonial-one__client-content">
                                    <h5 class="testimonial-one__client-name"><a
                                            href="{{ route('testimonials') }}">Madriya
                                            Merin</a></h5>
                                    <p class="testimonial-one__client-sub-title">Spatial Design</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text">Arrangements are made to transport cargo by sea
                                to meet customers’ international transpor
                                tation needs.</p>
                            <div class="testimonial-one__rating-and-review">
                                <ul class="list-unstyled testimonial-one__rating">
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-3.png') }}" alt="">
                                        </div>
                                    </li>
                                </ul>
                                <p class="testimonial-one__review">4.7/6 on Disign</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial One Single End -->
                    <!-- Testimonial One Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-one-client-1-2.jpg') }}"
                                        alt="">
                                </div>
                                <div class="testimonial-one__client-content">
                                    <h5 class="testimonial-one__client-name"><a href="{{ route('testimonials') }}">Mike
                                            Hardson</a></h5>
                                    <p class="testimonial-one__client-sub-title">Spatial Design</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text">Arrangements are made to transport cargo by sea
                                to meet customers’ international transpor
                                tation needs.</p>
                            <div class="testimonial-one__rating-and-review">
                                <ul class="list-unstyled testimonial-one__rating">
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-3.png') }}" alt="">
                                        </div>
                                    </li>
                                </ul>
                                <p class="testimonial-one__review">4.7/6 on Disign</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial One Single End -->
                    <!-- Testimonial One Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-one-client-1-3.jpg') }}"
                                        alt="">
                                </div>
                                <div class="testimonial-one__client-content">
                                    <h5 class="testimonial-one__client-name"><a href="{{ route('testimonials') }}">Marlon
                                            Samuls</a></h5>
                                    <p class="testimonial-one__client-sub-title">Spatial Design</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text">Arrangements are made to transport cargo by sea
                                to meet customers’ international transpor
                                tation needs.</p>
                            <div class="testimonial-one__rating-and-review">
                                <ul class="list-unstyled testimonial-one__rating">
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-3.png') }}" alt="">
                                        </div>
                                    </li>
                                </ul>
                                <p class="testimonial-one__review">4.7/6 on Disign</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial One Single End -->
                </div>
            </div>
            <div class="testimonial-one__bottom">
                <div class="row">
                    <!-- Testimonial One Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="600ms">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-one-client-1-4.jpg') }}"
                                        alt="">
                                </div>
                                <div class="testimonial-one__client-content">
                                    <h5 class="testimonial-one__client-name"><a href="{{ route('testimonials') }}">Marco
                                            Jansen</a></h5>
                                    <p class="testimonial-one__client-sub-title">Spatial Design</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text">Arrangements are made to transport cargo by sea
                                to meet customers’ international transpor
                                tation needs.</p>
                            <div class="testimonial-one__rating-and-review">
                                <ul class="list-unstyled testimonial-one__rating">
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-3.png') }}" alt="">
                                        </div>
                                    </li>
                                </ul>
                                <p class="testimonial-one__review">4.7/6 on Disign</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial One Single End -->
                    <!-- Testimonial One Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="800ms">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-one-client-1-5.jpg') }}"
                                        alt="">
                                </div>
                                <div class="testimonial-one__client-content">
                                    <h5 class="testimonial-one__client-name"><a href="{{ route('testimonials') }}">Mithel
                                            Mars</a></h5>
                                    <p class="testimonial-one__client-sub-title">Spatial Design</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text">Arrangements are made to transport cargo by sea
                                to meet customers’ international transpor
                                tation needs.</p>
                            <div class="testimonial-one__rating-and-review">
                                <ul class="list-unstyled testimonial-one__rating">
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-3.png') }}" alt="">
                                        </div>
                                    </li>
                                </ul>
                                <p class="testimonial-one__review">4.7/6 on Disign</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial One Single End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial One End -->

    <!--Team One Start -->
    <section class="team-one">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">Bersama <br>
                    Kami Hasilkan Inspirasi</h2>
            </div>
            <div class="row">
                <!--Team One Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="team-one__sinlge">
                        <div class="team-one__img">
                            <img src="{{ asset('assets/images/team/team-1-1.jpg') }}" alt="">
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__social">
                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                <a href="#"><span class="fab fa-vine"></span></a>
                                <a href="#"><span class="fab fa-twitter"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                            </div>
                            <p class="team-one__sub-title">Teka dibe bacchu</p>
                            <h3 class="team-one__title"><a href="{{ route('team-details') }}">Jonathan S. Wilcox</a></h3>
                        </div>
                    </div>
                </div>
                <!--Team One Single End -->
                <!--Team One Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="team-one__sinlge">
                        <div class="team-one__img">
                            <img src="{{ asset('assets/images/team/team-1-2.jpg') }}" alt="">
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__social">
                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                <a href="#"><span class="fab fa-vine"></span></a>
                                <a href="#"><span class="fab fa-twitter"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                            </div>
                            <p class="team-one__sub-title">Teka dibe bacchu</p>
                            <h3 class="team-one__title"><a href="{{ route('team-details') }}">Jessica Brown</a></h3>
                        </div>
                    </div>
                </div>
                <!--Team One Single End -->
                <!--Team One Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="600ms">
                    <div class="team-one__sinlge">
                        <div class="team-one__img">
                            <img src="{{ asset('assets/images/team/team-1-3.jpg') }}" alt="">
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__social">
                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                <a href="#"><span class="fab fa-vine"></span></a>
                                <a href="#"><span class="fab fa-twitter"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                            </div>
                            <p class="team-one__sub-title">Teka dibe bacchu</p>
                            <h3 class="team-one__title"><a href="{{ route('team-details') }}">Jonathan Trot</a></h3>
                        </div>
                    </div>
                </div>
                <!--Team One Single End -->
            </div>
        </div>
    </section>
    <!--Team One End -->

    <!-- Blog One Start -->
    {{-- <section class="blog-one blog-three">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">Latest News & Articles From <br> The Blog Posts
                </h2>
            </div>
            <div class="row">
                <!-- Blog One Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/blog/blog-1-1.jpg') }}" alt="">
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__content-shape-1"
                                style="background-image: url({{ asset('assets/images/shapes/blog-one-content-shape-1.png') }});">
                            </div>
                            <div class="blog-one__date-and-title-box">
                                <div class="blog-one__date">
                                    <h3>23</h3>
                                    <p>Sep 2024</p>
                                </div>
                                <div class="blog-one__title-box">
                                    <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Top 10 Modern
                                            Building
                                            <br>
                                            Design in Califronia, USA</a></h3>
                                </div>
                            </div>
                            <div class="blog-one__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn blog-one__btn">More Details <span
                                        class="icon-up-right-arrow"></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog One Single End -->
                <!-- Blog One Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/blog/blog-1-2.jpg') }}" alt="">
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__content-shape-1"
                                style="background-image: url({{ asset('assets/images/shapes/blog-one-content-shape-1.png') }});">
                            </div>
                            <div class="blog-one__date-and-title-box">
                                <div class="blog-one__date">
                                    <h3>13</h3>
                                    <p>Sep 2024</p>
                                </div>
                                <div class="blog-one__title-box">
                                    <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">It is a long
                                            established
                                            fact <br> that a reader will</a></h3>
                                </div>
                            </div>
                            <div class="blog-one__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn blog-one__btn">More Details <span
                                        class="icon-up-right-arrow"></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog One Single End -->
                <!-- Blog One Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/blog/blog-1-3.jpg') }}" alt="">
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__content-shape-1"
                                style="background-image: url({{ asset('assets/images/shapes/blog-one-content-shape-1.png') }});">
                            </div>
                            <div class="blog-one__date-and-title-box">
                                <div class="blog-one__date">
                                    <h3>04</h3>
                                    <p>Sep 2024</p>
                                </div>
                                <div class="blog-one__title-box">
                                    <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Lorem Ipsum is
                                            simply
                                            <br>
                                            dummy text of the printing</a></h3>
                                </div>
                            </div>
                            <div class="blog-one__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn blog-one__btn">More Details <span
                                        class="icon-up-right-arrow"></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog One Single End -->
            </div>
        </div>
    </section> --}}
    <!-- Blog One End -->

    <x-footer.footerStyleOne />
@endsection
