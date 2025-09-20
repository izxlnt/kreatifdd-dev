@extends('layouts.layoutCommon')
@section('title', 'Hubungi Kami || Kreatif Digital Dinamik')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/page-header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/error-page.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/google-map.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/united-kingdom.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
@endpush
@section('content')
    <x-strickyHeaderTwo />
    <x-page-header title="Hubungi Kami" subtitle="Kami Sedia Membantu Anda" />

    <!--Contact Page Start-->
    <section class="contact-page">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="contact-page__inner">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="contact-page__left">
                            <div class="contact-page__information">
                                <h3 class="contact-page__information-title">Maklumat Perhubungan</h3>
                                <ul class="contact-page__information-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pin"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Alamat</h3>
                                            <p>Alor Setar, Kedah, Malaysia</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-trading"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Telefon</h3>
                                            <p><a href="tel:+60123456789">+60 12-345 6789</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-envelope-1"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Email</h3>
                                            <p><a
                                                    href="mailto:business@kreatifdigitaldinamik.com">business@kreatifdigitaldinamik.com</a>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-7 col-lg-7">
                        <div class="contact-page__right">
                            <h3 class="contact-page__contact-title">
                                Mohon Sebut Harga</h3>
                            <form id="contact-form" class="contact-page__form contact-form-validated"
                                action="assets/inc/sendemail.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-page__input-box">
                                            <input type="text" name="name" placeholder="Nama anda" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-page__input-box">
                                            <input type="email" name="email" placeholder="Alamat emel anda" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-page__input-box">
                                            <input type="number" placeholder="Nombor telefon" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-page__input-box">
                                            <input type="text" placeholder="Subjek" name="subject" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-page__input-box text-message-box">
                                            <textarea name="message" placeholder="Mesej anda" required></textarea>
                                        </div>
                                        <div class="contact-page__btn-box">
                                            <button type="submit" class="thm-btn contact-page__btn"
                                                data-loading-text="Sila tunggu...">
                                                Hantar Mesej
                                                <span class="icon-up-right-arrow"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="result mt-2"></div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!--Contact Page End-->

    <!--Contact Info Start-->
    <section class="contact-info-section">
        <div class="container">

            <div class="row">
                <div class="col-xl-3">
                    <div class="single-contact-info-section">
                        <div class="icon">
                            <i class=" icon-pin"></i>
                        </div>
                        <div class="single-contact-info-section__content">
                            <div class="text">
                                <h3>Lokasi</h3>
                                <p>Ibu Pejabat Kami</p>
                                <p>Alor Setar, Kedah</p>
                            </div>
                            <div class="btn-box">
                                <a href="#">
                                    Lihat Peta
                                    <span class="icon-up-right-arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="single-contact-info-section">
                        <div class="icon">
                            <i class="icon-telephone"></i>
                        </div>
                        <div class="single-contact-info-section__content">
                            <div class="text">
                                <h3>Telefon</h3>
                                <p>Hubungi kami bila-bila masa.</p>
                                <p><a href="tel:+60123456789">+60 12-345 6789</a></p>
                            </div>
                            <div class="btn-box">
                                <a href="#">
                                    Panggilan Balik
                                    <span class="icon-up-right-arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="single-contact-info-section">
                        <div class="icon">
                            <i class="icon-envelope-2"></i>
                        </div>
                        <div class="single-contact-info-section__content">
                            <div class="text">
                                <h3>Email</h3>
                                <p>Kami akan balas segera.</p>
                                <p><a href="mailto:business@kreatifdigitaldinamik.com">business@kreatifdigitaldinamik.com</a></p>
                            </div>
                            <div class="btn-box">
                                <a href="mailto:business@kreatifdigitaldinamik.com">
                                    Hantar Email
                                    <span class="icon-up-right-arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="single-contact-info-section">
                        <div class="icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <div class="single-contact-info-section__content">
                            <div class="text">
                                <h3>Waktu Operasi</h3>
                                <p>Isnin - Sabtu: 9.00 pagi - 7.30 malam</p>
                                <p>Hotline tersedia 24/7</p>
                            </div>
                            <div class="btn-box">
                                <a href="#">
                                    Hubungi Kami
                                    <span class="icon-up-right-arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--Contact Info End-->

    <!--Google Map Start-->
    <section class="google-map-one">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63818.04133954133!2d100.3327!3d6.1215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304b4ab0f4fefc0b%3A0x3039d80b220be10!2sAlor%20Setar%2C%20Kedah!5e0!3m2!1sms!2smy!4v1690000000000"
            class="google-map__one" allowfullscreen></iframe>

    </section>
    <!--Google Map End-->

    <!--Site Footer Start-->
    <x-footer.footerStyleOne />
@endsection
