@extends('layouts.layoutOnepageStyleTwo')
@section('title', 'Home Two || tecture || tecture Laravel Template')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">
@endpush

@section('content')
    <x-strickyHeaderTwo />
    <!-- /.stricky-header -->



    <!-- Main Slider Two Start -->
    <section class="main-slider-two" id="home">
        <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});">
        </div>
        <div class="main-slider__carousel owl-theme owl-carousel">

            <div class="item">
                <div class="main-slider-two__bg"
                    style="background-image: url({{ asset('assets/images/backgrounds/slider-2-1.jpg') }});">
                </div><!-- /.slider-one__bg -->

                <div class="container">
                    <div class="main-slider-two__content">
                        <h2 class="main-slider-two__title">Stunning Interior <br>
                            Design Possibilities
                        </h2>
                        <p class="main-slider-two__text">Ut elementum sergeoi mollis eu sapien neque des tempus
                            Tristique nisl nibh desing here this de tinci dunt our designer <br> here is Tristique
                            nisl nibh desing here this de tinci Tristique nisl nibh desing here this de tinci</p>
                        <div class="main-slider-two__btn-box">
                            <a href="{{ route('about') }}" class="thm-btn main-slider-two__btn">More Details <span
                                    class="icon-up-right-arrow"></span> </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="main-slider-two__bg"
                    style="background-image: url({{ asset('assets/images/backgrounds/slider-2-2.jpg') }});">
                </div><!-- /.slider-one__bg -->

                <div class="container">
                    <div class="main-slider-two__content">
                        <h2 class="main-slider-two__title">Stunning Interior <br>
                            Design Possibilities
                        </h2>
                        <p class="main-slider-two__text">Ut elementum sergeoi mollis eu sapien neque des tempus
                            Tristique nisl nibh desing here this de tinci dunt our designer <br> here is Tristique
                            nisl nibh desing here this de tinci Tristique nisl nibh desing here this de tinci</p>
                        <div class="main-slider-two__btn-box">
                            <a href="{{ route('about') }}" class="thm-btn main-slider-two__btn">More Details <span
                                    class="icon-up-right-arrow"></span> </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="main-slider-two__bg"
                    style="background-image: url({{ asset('assets/images/backgrounds/slider-2-3.jpg') }});">
                </div><!-- /.slider-one__bg -->

                <div class="container">
                    <div class="main-slider-two__content">
                        <h2 class="main-slider-two__title">Stunning Interior <br>
                            Design Possibilities
                        </h2>
                        <p class="main-slider-two__text">Ut elementum sergeoi mollis eu sapien neque des tempus
                            Tristique nisl nibh desing here this de tinci dunt our designer <br> here is Tristique
                            nisl nibh desing here this de tinci Tristique nisl nibh desing here this de tinci</p>
                        <div class="main-slider-two__btn-box">
                            <a href="{{ route('about') }}" class="thm-btn main-slider-two__btn">More Details <span
                                    class="icon-up-right-arrow"></span> </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Slider Two  Start -->

    <!--Feature Two Start -->
    <section class="feature-two">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="row">
                <!--Feature Two Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="feature-two__single">
                        <div class="feature-two__icon">
                            <span class="icon-staircase"></span>
                        </div>
                        <h3 class="feature-two__title"><a href="{{ route('interior-design') }}">INTERRIOR DESIGN</a></h3>
                        <p class="feature-two__text">Mrittik Architects is a full-service design firm
                            providing , master planning, urban design,</p>
                        <div class="feature-two__shape-box">
                            <div class="feature-two__shape-1"></div>
                            <div class="feature-two__shape-2"></div>
                            <div class="feature-two__shape-3"></div>
                        </div>
                    </div>
                </div>
                <!--Feature Two Single End -->
                <!--Feature Two Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="200ms">
                    <div class="feature-two__single">
                        <div class="feature-two__icon">
                            <span class="icon-plant"></span>
                        </div>
                        <h3 class="feature-two__title"><a href="{{ route('urban-design') }}">URBAN DESIGN</a></h3>
                        <p class="feature-two__text">Mrittik Architects is a full-service design firm
                            providing , master planning, urban design,</p>
                        <div class="feature-two__shape-box">
                            <div class="feature-two__shape-1"></div>
                            <div class="feature-two__shape-2"></div>
                            <div class="feature-two__shape-3"></div>
                        </div>
                    </div>
                </div>
                <!--Feature Two Single End -->
                <!--Feature Two Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="feature-two__single last-child">
                        <div class="feature-two__icon">
                            <span class="icon-vacuum-cleaner"></span>
                        </div>
                        <h3 class="feature-two__title"><a href="{{ route('landscape-design') }}">LANDSCAPE DESIGN</a></h3>
                        <p class="feature-two__text">Mrittik Architects is a full-service design firm
                            providing , master planning, urban design,</p>
                        <div class="feature-two__shape-box">
                            <div class="feature-two__shape-1"></div>
                            <div class="feature-two__shape-2"></div>
                            <div class="feature-two__shape-3"></div>
                        </div>
                    </div>
                </div>
                <!--Feature Two Single End -->
            </div>
        </div>
    </section>
    <!--Feature Two End -->

    <!--About Two Start-->
    <section class="about-two" id="about">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="about-two__shape-1 float-bob-x">
            <img src="{{ asset('assets/images/shapes/about-two-shape-1.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="about-two__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <h2 class="section-title__title title-animation">Simple Minimalist For Your Home
                                Interior</h2>
                        </div>
                        <p class="about-two__text">Inoterior design consultancy firm that brings sensitivity to the
                            design top restaurants,<br> hotels, offices & homes around the world. We stand for
                            quality,
                        </p>
                        <ul class="list-unstyled about-two__history">
                            <li>
                                <div class="about-two__history-single">
                                    <h3 class="about-two__history-year">1997</h3>
                                    <p class="about-two__history-text">We are committed to the impeccable
                                        craftsmanship and luxury is reflected in</p>
                                </div>
                            </li>
                            <li>
                                <div class="about-two__history-single">
                                    <h3 class="about-two__history-year">2027</h3>
                                    <p class="about-two__history-text">We are committed to the impeccable
                                        craftsmanship and luxury is reflected in</p>
                                </div>
                            </li>
                        </ul>
                        <div class="about-two__btn-box">
                            <a href="{{ route('about') }}" class="thm-btn about-two__btn">More Details <span
                                    class="icon-up-right-arrow"></span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                    <div class="about-two__right">
                        <div class="about-two__img">
                            <img src="{{ asset('assets/images/resources/about-two-img-1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Two End -->

    <!--Counter One Start -->
    <section class="counter-one" id="counter">
        <div class="counter-one__shape-1"
            style="background-image: url({{ asset('assets/images/shapes/counter-one-shape-1.png') }});"></div>
        <div class="container">
            <div class="counter-one__inner">
                <div class="counter-one__title-box">
                    <div class="section-title text-left sec-title-animation animation-style1">
                        <h2 class="section-title__title title-animation">Professional Experience</h2>
                        <div class="counter-one__title-border"></div>
                    </div>
                </div>
                <ul class="list-unstyled counter-one__list">
                    <li class="wow fadeInLeft" data-wow-delay="100ms">
                        <div class="counter-one__single">
                            <div class="counter-one__counter-box">
                                <h3 class="odometer" data-count="13">00</h3>
                                <span class="counter-one__counter-letter">k</span>
                                <span class="counter-one__counter-plus"> </span>
                            </div>
                            <p class="counter-one__counter-text">Project Complete</p>
                        </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-delay="300ms">
                        <div class="counter-one__single">
                            <div class="counter-one__counter-box">
                                <h3 class="odometer" data-count="179">00</h3>
                                <span class="counter-one__counter-letter">k</span>
                                <span class="counter-one__counter-plus"> </span>
                            </div>
                            <p class="counter-one__counter-text">Happy Clients</p>
                        </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-delay="600ms">
                        <div class="counter-one__single">
                            <div class="counter-one__counter-box">
                                <h3 class="odometer" data-count="33">00</h3>
                                <span class="counter-one__counter-letter">k</span>
                                <span class="counter-one__counter-plus"> </span>
                            </div>
                            <p class="counter-one__counter-text">Clients Project</p>
                        </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-delay="900ms">
                        <div class="counter-one__single">
                            <div class="counter-one__counter-box">
                                <h3 class="odometer" data-count="55">00</h3>
                                <span class="counter-one__counter-letter">k</span>
                                <span class="counter-one__counter-plus"> </span>
                            </div>
                            <p class="counter-one__counter-text">Success Rating</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Counter One End -->

    <!--Project Two Start -->
    <section class="project-two" id="projects">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="project-two__top">
            <div class="container">
                <div class="section-title text-left sec-title-animation animation-style2">
                    <h2 class="section-title__title title-animation">Designing <br> Defining Spaces</h2>
                </div>
            </div>
        </div>
        <div class="project-two__bottom">
            <div class="container">
                <div class="project-two__carousel owl-theme owl-carousel">
                    <div class="item">
                        <div class="project-two__single">
                            <div class="project-two__img">
                                <img src="{{ asset('assets/images/project/projects-2-1.jpg') }}" alt="">
                            </div>
                            <div class="project-two__content">
                                <h3 class="project-two__title"><a href="{{ route('project-details') }}">Industrial Chic
                                        Restaurant</a></h3>
                                <div class="project-two__arrow">
                                    <a href="{{ asset('assets/images/project/projects-2-1.jpg') }}"
                                        class="img-popup"><span class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-two__single">
                            <div class="project-two__img">
                                <img src="{{ asset('assets/images/project/projects-2-2.jpg') }}" alt="">
                            </div>
                            <div class="project-two__content">
                                <h3 class="project-two__title"><a href="{{ route('project-details') }}">Amman Rotane
                                        Hotel</a>
                                </h3>
                                <div class="project-two__arrow">
                                    <a href="{{ asset('assets/images/project/projects-2-2.jpg') }}"
                                        class="img-popup"><span class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-two__single">
                            <div class="project-two__img">
                                <img src="{{ asset('assets/images/project/projects-2-3.jpg') }}" alt="">
                            </div>
                            <div class="project-two__content">
                                <h3 class="project-two__title"><a href="{{ route('project-details') }}">Harmony
                                        Interiors</a>
                                </h3>
                                <div class="project-two__arrow">
                                    <a href="{{ asset('assets/images/project/projects-2-3.jpg') }}"
                                        class="img-popup"><span class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-two__single">
                            <div class="project-two__img">
                                <img src="{{ asset('assets/images/project/projects-2-1.jpg') }}" alt="">
                            </div>
                            <div class="project-two__content">
                                <h3 class="project-two__title"><a href="{{ route('project-details') }}">Industrial Chic
                                        Restaurant</a></h3>
                                <div class="project-two__arrow">
                                    <a href="{{ asset('assets/images/project/projects-2-1.jpg') }}"
                                        class="img-popup"><span class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-two__single">
                            <div class="project-two__img">
                                <img src="{{ asset('assets/images/project/projects-2-2.jpg') }}" alt="">
                            </div>
                            <div class="project-two__content">
                                <h3 class="project-two__title"><a href="{{ route('project-details') }}">Amman Rotane
                                        Hotel</a>
                                </h3>
                                <div class="project-two__arrow">
                                    <a href="{{ asset('assets/images/project/projects-2-2.jpg') }}"
                                        class="img-popup"><span class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-two__single">
                            <div class="project-two__img">
                                <img src="{{ asset('assets/images/project/projects-2-3.jpg') }}" alt="">
                            </div>
                            <div class="project-two__content">
                                <h3 class="project-two__title"><a href="{{ route('project-details') }}">Harmony
                                        Interiors</a>
                                </h3>
                                <div class="project-two__arrow">
                                    <a href="{{ asset('assets/images/project/projects-2-3.jpg') }}"
                                        class="img-popup"><span class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Project Two End -->

    <!--Services Two Start -->
    <section class="services-two" id="services">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="services-two__shape-1 img-bounce">
            <img src="{{ asset('assets/images/shapes/services-two-shape-1.png') }}" alt="">
        </div>
        <div class="services-two__wrapper">
            <div class="services-two__top">
                <div class="section-title text-left sec-title-animation animation-style2 wow fadeInLeft"
                    data-wow-delay="100ms">
                    <h2 class="section-title__title title-animation">We Provide Experts to <br> For Your Business
                    </h2>
                </div>
                <div class="services-two__btn-box wow fadeInRight" data-wow-delay="100ms">
                    <a href="{{ route('services') }}" class="thm-btn services-two__btn">More Details <span
                            class="icon-up-right-arrow"></span> </a>
                </div>
            </div>
            <div class="services-two__bottom">
                <ul class="list-unstyled services-two__list">
                    <li class="hover-item wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-two__single">
                            <div class="services-two__single-left">
                                <div class="services-two__count-box">
                                    <div class="services-two__count"></div>
                                    <div class="services-two__dot"></div>
                                </div>
                                <h3 class="services-two__title"><a href="{{ route('services') }}">Ee Modify Whole
                                        System</a>
                                </h3>
                            </div>
                            <div class="services-two__single-right">
                                <p class="services-two__text">Our associate consultants specialize in a range of
                                    business areas. These include strategic planning, <br> issues resolution,
                                    culture assessment, board effectiveness, retention.</p>
                                <div class="services-two__arrow">
                                    <a href="{{ route('services') }}"><span class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/services/services-2-1.jpg') }}" alt="Image"
                                class="hover-item__box-img">
                        </div>
                    </li>
                    <li class="hover-item wow fadeInUp" data-wow-delay="300ms">
                        <div class="services-two__single">
                            <div class="services-two__single-left">
                                <div class="services-two__count-box">
                                    <div class="services-two__count"></div>
                                    <div class="services-two__dot"></div>
                                </div>
                                <h3 class="services-two__title"><a href="{{ route('services') }}">Hard Working
                                        Attitudes</a>
                                </h3>
                            </div>
                            <div class="services-two__single-right">
                                <p class="services-two__text">Our associate consultants specialize in a range of
                                    business areas. These include strategic planning, <br> issues resolution,
                                    culture assessment, board effectiveness, retention.</p>
                                <div class="services-two__arrow">
                                    <a href="{{ route('services') }}"><span class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/services/services-2-2.jpg') }}" alt="Image"
                                class="hover-item__box-img">
                        </div>
                    </li>
                    <li class="hover-item wow fadeInUp" data-wow-delay="600ms">
                        <div class="services-two__single">
                            <div class="services-two__single-left">
                                <div class="services-two__count-box">
                                    <div class="services-two__count"></div>
                                    <div class="services-two__dot"></div>
                                </div>
                                <h3 class="services-two__title"><a href="{{ route('services') }}">Still up in The air To
                                        Succeed</a></h3>
                            </div>
                            <div class="services-two__single-right">
                                <p class="services-two__text">Our associate consultants specialize in a range of
                                    business areas. These include strategic planning, <br> issues resolution,
                                    culture assessment, board effectiveness, retention.</p>
                                <div class="services-two__arrow">
                                    <a href="{{ route('services') }}"><span class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/services/services-2-3.jpg') }}" alt="Image"
                                class="hover-item__box-img">
                        </div>
                    </li>
                    <li class="hover-item wow fadeInUp" data-wow-delay="900ms">
                        <div class="services-two__single">
                            <div class="services-two__single-left">
                                <div class="services-two__count-box">
                                    <div class="services-two__count"></div>
                                    <div class="services-two__dot"></div>
                                </div>
                                <h3 class="services-two__title"><a href="{{ route('services') }}">Urban Interventions</a>
                                </h3>
                            </div>
                            <div class="services-two__single-right">
                                <p class="services-two__text">Our associate consultants specialize in a range of
                                    business areas. These include strategic planning, <br> issues resolution,
                                    culture assessment, board effectiveness, retention.</p>
                                <div class="services-two__arrow">
                                    <a href="{{ route('services') }}"><span class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="hover-item__box">
                            <img src="{{ asset('assets/images/services/services-2-4.jpg') }}" alt="Image"
                                class="hover-item__box-img">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Services Two End -->

    <!--Team One Start -->
    <section class="team-one">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">Where Inovation Meet <br>
                    Interior Design</h2>
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

    <!--Testimonial Two Start-->
    <section class="testimonial-two">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">
                    What Our Clients Say
                </h2>
            </div>
            <div class="testimonial-two__bottom">
                <div class="testimonial-two__carousel owl-carousel owl-theme thm-owl__carousel">
                    <!--Testimonial Two Single Start-->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-shape-1"
                                style="background-image: url({{ asset('assets/images/shapes/testimonial-two-single-shape-1.png') }});">
                            </div>
                            <div class="testimonial-two__img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-1.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__shape-1">
                                <img src="{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}"
                                    alt="">
                            </div>
                            <ul class="testimonial-two__ratting list-unstyled">
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                            </ul>
                            <h3 class="testimonial-two__name"><a href="{{ route('testimonials') }}">Michael Angenla</a>
                            </h3>
                            <p class="testimonial-two__sub-title">Project Manager</p>
                            <p class="testimonial-two__text">Divide carefully fruitsome sixth form beginning
                                replenis together midst lesser to airs there brought forth him she us one seas can
                                was void can be awrare were nots multiply image female best project.
                            </p>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                    <!--Testimonial Two Single Start-->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-shape-1"
                                style="background-image: url({{ asset('assets/images/shapes/testimonial-two-single-shape-1.png') }});">
                            </div>
                            <div class="testimonial-two__img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-2.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__shape-1">
                                <img src="{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}"
                                    alt="">
                            </div>
                            <ul class="testimonial-two__ratting list-unstyled">
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                            </ul>
                            <h3 class="testimonial-two__name"><a href="{{ route('testimonials') }}">Brenda Gregory</a>
                            </h3>
                            <p class="testimonial-two__sub-title">CEO of Apple</p>
                            <p class="testimonial-two__text">Divide carefully fruitsome sixth form beginning
                                replenis together midst lesser to airs there brought forth him she us one seas can
                                was void can be awrare were nots multiply image female best project.
                            </p>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                    <!--Testimonial Two Single Start-->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-shape-1"
                                style="background-image: url({{ asset('assets/images/shapes/testimonial-two-single-shape-1.png') }});">
                            </div>
                            <div class="testimonial-two__img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-3.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__shape-1">
                                <img src="{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}"
                                    alt="">
                            </div>
                            <ul class="testimonial-two__ratting list-unstyled">
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                            </ul>
                            <h3 class="testimonial-two__name"><a href="{{ route('testimonials') }}">Edward Monroe</a>
                            </h3>
                            <p class="testimonial-two__sub-title">Senior Designer</p>
                            <p class="testimonial-two__text">Divide carefully fruitsome sixth form beginning
                                replenis together midst lesser to airs there brought forth him she us one seas can
                                was void can be awrare were nots multiply image female best project.
                            </p>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                    <!--Testimonial Two Single Start-->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-shape-1"
                                style="background-image: url({{ asset('assets/images/shapes/testimonial-two-single-shape-1.png') }});">
                            </div>
                            <div class="testimonial-two__img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-4.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__shape-1">
                                <img src="{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}"
                                    alt="">
                            </div>
                            <ul class="testimonial-two__ratting list-unstyled">
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                            </ul>
                            <h3 class="testimonial-two__name"><a href="{{ route('testimonials') }}">Alisa Brown</a></h3>
                            <p class="testimonial-two__sub-title">Project Manager</p>
                            <p class="testimonial-two__text">Divide carefully fruitsome sixth form beginning
                                replenis together midst lesser to airs there brought forth him she us one seas can
                                was void can be awrare were nots multiply image female best project.
                            </p>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                    <!--Testimonial Two Single Start-->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-shape-1"
                                style="background-image: url({{ asset('assets/images/shapes/testimonial-two-single-shape-1.png') }});">
                            </div>
                            <div class="testimonial-two__img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-5.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__shape-1">
                                <img src="{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}"
                                    alt="">
                            </div>
                            <ul class="testimonial-two__ratting list-unstyled">
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                            </ul>
                            <h3 class="testimonial-two__name"><a href="{{ route('testimonials') }}">Brenda heyden</a>
                            </h3>
                            <p class="testimonial-two__sub-title">CEO of Apple</p>
                            <p class="testimonial-two__text">Divide carefully fruitsome sixth form beginning
                                replenis together midst lesser to airs there brought forth him she us one seas can
                                was void can be awrare were nots multiply image female best project.
                            </p>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                    <!--Testimonial Two Single Start-->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-shape-1"
                                style="background-image: url({{ asset('assets/images/shapes/testimonial-two-single-shape-1.png') }});">
                            </div>
                            <div class="testimonial-two__img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-6.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__shape-1">
                                <img src="{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}"
                                    alt="">
                            </div>
                            <ul class="testimonial-two__ratting list-unstyled">
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                                <li><span class="icon-pointed-star"></span></li>
                            </ul>
                            <h3 class="testimonial-two__name"><a href="{{ route('testimonials') }}">Kark Edward</a></h3>
                            <p class="testimonial-two__sub-title">Senior Designer</p>
                            <p class="testimonial-two__text">Divide carefully fruitsome sixth form beginning
                                replenis together midst lesser to airs there brought forth him she us one seas can
                                was void can be awrare were nots multiply image female best project.
                            </p>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial Two End-->

    <!--Contact One Start -->
    <section class="contact-one" id="contact">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="contact-one__shape-2 float-bob-y">
            <img src="{{ asset('assets/images/shapes/contact-one-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="contact-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="contact-one__inner">
                            <div class="contact-one__shape-1 float-bob-x">
                                <img src="{{ asset('assets/images/shapes/contact-one-shape-1.png') }}" alt="">
                            </div>
                            <form class="contact-form-validated contact-one__form" action="assets/inc/sendemail.php"
                                method="post" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="contact-one__input-box">
                                            <input type="text" name="name" placeholder="Your Nome" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-one__input-box">
                                            <input type="email" name="email" placeholder="Email Address"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-one__input-box">
                                            <input type="text" name="Phone" placeholder="Your Phone"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-one__input-box">
                                            <input type="text" name="Subject" placeholder="Subject" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-one__input-box text-message-box">
                                            <textarea name="message" placeholder="How can we help you? Feel free to get in touch!"></textarea>
                                        </div>
                                        <div class="contact-one__btn-box">
                                            <button type="submit" class="thm-btn contact-one__btn">Learn More<span
                                                    class="icon-up-right-arrow"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="contact-one__right">
                        <div class="contact-one__right-content sec-title-animation animation-style2">
                            <h3 class="contact-one__title title-animation">Do You need Any Help? <br>
                                Send Message.</h3>
                            <div class="contact-one__contact-info">
                                <div class="contact-one__contact-icon">
                                    <span class="icon-customer-service"></span>
                                </div>
                                <div class="contact-one__contact-icon-2">
                                    <span class="icon-customer-service"></span>
                                </div>
                                <div class="contact-one__contact-number-box">
                                    <p>Call us for ony inquiry</p>
                                    <h5><a href="tel:4844987989">( 484 ) 4987 989</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact One End -->

    <!--Blog Two Start -->
    <section class="blog-two" id="blog">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-left sec-title-animation animation-style2">
                <h2 class="section-title__title title-animation">Unleash Your Creativity with <br> Interior
                    Inspiration</h2>
            </div>
            <div class="blog-two__carousel owl-theme owl-carousel">
                <!--Blog Two Single Start -->
                <div class="item">
                    <div class="blog-two__single">
                        <div class="blog-two__img">
                            <img src="{{ asset('assets/images/blog/blog-2-1.jpg') }}" alt="">
                            <div class="blog-two__date">
                                <p>17</p>
                                <h5>Dec</h5>
                            </div>
                            <div class="blog-two__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn blog-two__btn">More Details <span
                                        class="icon-up-right-arrow"></span> </a>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <h3 class="blog-two__title"><a href="{{ route('blog-details') }}">Inspiring Designs for
                                    Inspired
                                    Where
                                    InnovationMeets</a></h3>
                        </div>
                    </div>
                </div>
                <!--Blog Two Single End -->
                <!--Blog Two Single Start -->
                <div class="item">
                    <div class="blog-two__single">
                        <div class="blog-two__img">
                            <img src="{{ asset('assets/images/blog/blog-2-2.jpg') }}" alt="">
                            <div class="blog-two__date">
                                <p>17</p>
                                <h5>Dec</h5>
                            </div>
                            <div class="blog-two__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn blog-two__btn">More Details <span
                                        class="icon-up-right-arrow"></span> </a>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <h3 class="blog-two__title"><a href="{{ route('blog-details') }}">It is a long established
                                    fact
                                    that a reader will be distracted</a></h3>
                        </div>
                    </div>
                </div>
                <!--Blog Two Single End -->
                <!--Blog Two Single Start -->
                <div class="item">
                    <div class="blog-two__single">
                        <div class="blog-two__img">
                            <img src="{{ asset('assets/images/blog/blog-2-3.jpg') }}" alt="">
                            <div class="blog-two__date">
                                <p>17</p>
                                <h5>Dec</h5>
                            </div>
                            <div class="blog-two__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn blog-two__btn">More Details <span
                                        class="icon-up-right-arrow"></span> </a>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <h3 class="blog-two__title"><a href="{{ route('blog-details') }}">Lorem Ipsum is simply dummy
                                    text
                                    of the printing and typesetting</a></h3>
                        </div>
                    </div>
                </div>
                <!--Blog Two Single End -->
                <!--Blog Two Single Start -->
                <div class="item">
                    <div class="blog-two__single">
                        <div class="blog-two__img">
                            <img src="{{ asset('assets/images/blog/blog-2-1.jpg') }}" alt="">
                            <div class="blog-two__date">
                                <p>17</p>
                                <h5>Dec</h5>
                            </div>
                            <div class="blog-two__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn blog-two__btn">More Details <span
                                        class="icon-up-right-arrow"></span> </a>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <h3 class="blog-two__title"><a href="{{ route('blog-details') }}">Inspiring Designs for
                                    Inspired
                                    Where
                                    InnovationMeets</a></h3>
                        </div>
                    </div>
                </div>
                <!--Blog Two Single End -->
                <!--Blog Two Single Start -->
                <div class="item">
                    <div class="blog-two__single">
                        <div class="blog-two__img">
                            <img src="{{ asset('assets/images/blog/blog-2-2.jpg') }}" alt="">
                            <div class="blog-two__date">
                                <p>17</p>
                                <h5>Dec</h5>
                            </div>
                            <div class="blog-two__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn blog-two__btn">More Details <span
                                        class="icon-up-right-arrow"></span> </a>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <h3 class="blog-two__title"><a href="{{ route('blog-details') }}">It is a long established
                                    fact
                                    that a reader will be distracted</a></h3>
                        </div>
                    </div>
                </div>
                <!--Blog Two Single End -->
                <!--Blog Two Single Start -->
                <div class="item">
                    <div class="blog-two__single">
                        <div class="blog-two__img">
                            <img src="{{ asset('assets/images/blog/blog-2-3.jpg') }}" alt="">
                            <div class="blog-two__date">
                                <p>17</p>
                                <h5>Dec</h5>
                            </div>
                            <div class="blog-two__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn blog-two__btn">More Details <span
                                        class="icon-up-right-arrow"></span> </a>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <h3 class="blog-two__title"><a href="{{ route('blog-details') }}">Lorem Ipsum is simply
                                    dummy text
                                    of the printing and typesetting</a></h3>
                        </div>
                    </div>
                </div>
                <!--Blog Two Single End -->
            </div>
        </div>
    </section>
    <!--Blog Two End -->

    <x-footer.footerStyleTwo />
@endsection
