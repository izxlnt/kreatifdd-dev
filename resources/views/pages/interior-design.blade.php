@extends('layouts.layoutCommon')
@section('title', 'Interior Design || tecture || tecture Laravel  Template')
@push('styles') 
    
<link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/page-header.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/error-page.css') }}">
 
@endpush

@section('content')
    <x-strickyHeaderTwo />
    <x-page-header title="Interior Design" subtitle="Interior Design" />


        <!--Page Header End-->

        <!--Services Details Start-->
        <section class="service-details">
            <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="service-details__left">
                            <div class="service-details__service-box">
                                <ul class="service-details__services-list list-unstyled">
                                    <li>
                                        <a href="{{ route('evolve-space-designs') }}">Evolve Space Designs<span
                                                class="icon-right"></span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('eden-home-styling') }}">Eden Home Styling<span
                                                class="icon-right"></span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('harmony-interiors') }}">Harmony Interiors<span
                                                class="icon-right"></span></a>
                                    </li>
                                    <li class="active">
                                        <a href="{{ route('interior-design') }}">Interior Design<span
                                                class="icon-right"></span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('urban-design') }}">Urban Design<span class="icon-right"></span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('landscape-design') }}">Landscape Design<span
                                                class="icon-right"></span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="service-details__contact-box">
                                <h3 class="service-details__title">Contact withus for
                                    any advice</h3>
                                <div class="service-details__icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <p class="service-details__text">Need help? Talk to an expert</p>
                                <p class="service-details__number"><a href="tel:892123119999"> 892 12311 9999</a></p>
                            </div>
                            <div class="service-details__download-box">
                                <div class="icon">
                                    <span class="icon-download"></span>
                                </div>
                                <a href="#">Download PDF File</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="service-details__right">
                            <div class="service-details__img">
                                <img src="{{ asset('assets/images/services/service-details-img-4.jpg') }}" alt="">
                            </div>
                            <h3 class="service-details__title-1">Interior Design</h3>
                            <p class="service-details__text-1">Globally optimize highly efficient solution whereas
                                open-source application. Completely strategize quality internal or
                                "organic" sources for virtual e-business. Phosfluorescently re-engineer enterprise
                                markets via value-added networks.
                                Seamlessly restore inexpensive e-markets vis-a-vis corporate intellectual capital.
                                Holisticly reinvent compelling niche
                                markets via scalable strategic.</p>
                            <p class="service-details__text-2">Globally optimize highly efficient solution whereas
                                open-source application. Completely strategize quality internal
                                or "organic" sources for virtual e-business. Phosfluorescently re-engineer enterprise
                                markets via value-added
                                networks. Seamlessly restore inexpensive e-markets vis-a-vis corporate intellectual</p>
                            <div class="service-details__img-and-point-box">
                                <div class="service-details__points-img">
                                    <img src="{{ asset('assets/images/services/service-details-points-img.jpg') }}" alt="">
                                </div>
                                <div class="service-details__points-box">
                                    <h3 class="service-details__points-title">Global QuantumTech AI</h3>
                                    <ul class="service-details__points-list list-unstyled">
                                        <li>
                                            <div class="service-details__points-shape"></div>
                                            <p>Customer engagement matters</p>
                                        </li>
                                        <li>
                                            <div class="service-details__points-shape"></div>
                                            <p>The Love Boat promis someg for Plan</p>
                                        </li>
                                        <li>
                                            <div class="service-details__points-shape"></div>
                                            <p>Research beyond the business plan</p>
                                        </li>
                                        <li>
                                            <div class="service-details__points-shape"></div>
                                            <p>Id risus pharetra est, at rhoncus, nec </p>
                                        </li>
                                        <li>
                                            <div class="service-details__points-shape"></div>
                                            <p>Elit curabitur amet risus bibendum.</p>
                                        </li>
                                        <li>
                                            <div class="service-details__points-shape"></div>
                                            <p>Non saed velit dictum quam risus pharetra esta.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h3 class="service-details__title-2">Our Strengths And Advantages</h3>
                            <p class="service-details__text-3">Globally optimize highly efficient solution whereas
                                open-source application. Completely strategize
                                quality internal or "organic" sources for virtual e-business. Phosfluorescently
                                re-engineer
                                enterprise markets via value-added networks. Seamlessly restore inexpensive e-markets
                                vis-a-vis
                                corporate intellectual capital. Holisticly reinvent compelling niche </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Details End-->


        <!--Brand One Start-->
        <section class="brand-one">
            <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
            <div class="container">
                <div class="brand-one__carousel owl-theme owl-carousel">
                    <div class="item">
                        <div class="brand-one__img">
                            <a href="#"><img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="brand-one__img">
                            <a href="#"><img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="brand-one__img">
                            <a href="#"><img src="{{ asset('assets/images/brand/brand-1-3.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="brand-one__img">
                            <a href="#"><img src="{{ asset('assets/images/brand/brand-1-4.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="brand-one__img">
                            <a href="#"><img src="{{ asset('assets/images/brand/brand-1-5.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="brand-one__img">
                            <a href="#"><img src="{{ asset('assets/images/brand/brand-1-6.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->

        <!--Site Footer Start-->
        

    <x-footer.footerStyleOne />
@endsection