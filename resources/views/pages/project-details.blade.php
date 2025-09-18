@extends('layouts.layoutCommon')
@section('title', 'Project Details || tecture || tecture Laravel  Template')
@push('styles') 
    
<link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/page-header.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/error-page.css') }}">
 
@endpush

@section('content')
    <x-strickyHeaderTwo />
    <x-page-header title="Project Details" subtitle="Project Details" />


        <!--Page Header End-->

        <!--Project Details Start-->
        <section class="project-details">
            <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
            <div class="container">
                <div class="project-details__img">
                    <img src="{{ asset('assets/images/project/project-details-img-1.jpg') }}" alt="">
                </div>
                <div class="project-details__content">
                    <h3 class="project-details__title-1">Projects Details</h3>
                    <p class="project-details__text-1">To be clear, Project Online is NOT a web-based version of Project
                        Professional. Project Online is an entirely separate service that offers full portfolio and
                        project
                        management tools on the web. It includes Project Web App, and can, depending on your
                        subscription, also include Project Online Desktop Client, which is a
                        Discover Community. Explore subscription benefits, browse training courses, learn how to secure
                    </p>
                    <p class="project-details__text-2">To be clear, Project Online is NOT a web-based version of Project
                        Professional. Project Online is an entirely separate service that offers full portfolio and
                        project management tools on the web. It includes Project Web App, and can, depending on your
                        subscription, also include Project Online </p>
                    <div class="project-details__img-and-faq">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="project-details__img-box-img">
                                    <img src="{{ asset('assets/images/project/project-details-img-box-img.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="project-details__faq-box">
                                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                        <div class="accrodion active">
                                            <div class="accrodion-title">
                                                <h4>What is the latest technology trend in the ?</h4>
                                                <div class="project-details__faq-box-count"></div>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>The time it takes to repair a roof depends on the extent of the
                                                        damage. For minor repairs, it might take an hour or two. For
                                                        significant repairs, A or team might be at your home for half a
                                                        day.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div>
                                        <div class="accrodion">
                                            <div class="accrodion-title">
                                                <h4>How to Create my Project in Company?</h4>
                                                <div class="project-details__faq-box-count"></div>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>The time it takes to repair a roof depends on the extent of the
                                                        damage. For minor repairs, it might take an hour or two. For
                                                        significant repairs, A or team might be at your home for half a
                                                        day.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div>
                                        <div class="accrodion">
                                            <div class="accrodion-title">
                                                <h4>How can IT services benefit my business?</h4>
                                                <div class="project-details__faq-box-count"></div>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>The time it takes to repair a roof depends on the extent of the
                                                        damage. For minor repairs, it might take an hour or two. For
                                                        significant repairs, A or team might be at your home for half a
                                                        day.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div>
                                        <div class="accrodion">
                                            <div class="accrodion-title">
                                                <h4>What warranties do I have for installation?</h4>
                                                <div class="project-details__faq-box-count"></div>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>The time it takes to repair a roof depends on the extent of the
                                                        damage. For minor repairs, it might take an hour or two. For
                                                        significant repairs, A or team might be at your home for half a
                                                        day.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="project-details__text-3">To be clear, Project Online is NOT a web-based version of Project
                        Professional. Project Online is an entirely separate service that offers full portfolio and
                        project
                        management tools on the web. It includes Project Web App, and can, depending on your
                        subscription, also include Project Online Desktop Client, which is a
                        Discover Community. Explore subscription benefits, browse training courses, learn how to secure
                    </p>
                </div>
            </div>
        </section>
        <!--Project Details End-->

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