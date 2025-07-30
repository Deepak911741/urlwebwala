@extends(config('constants.FRONTENT_FOLDER') . 'includes/header')

@section('content')
    <div class="tp-offcanvas-wrapper">
    <div class="tp-offcanvas white-bg">
        <div class="offc-top-pattern">
            <img src="assets/img/hero/nav-parrten-top.png" alt="hero">
        </div>
        <div class="tp-offcanvas__top tp-border-bottom pb-30 mb-30">
            <div class="tp-offcanvas-close">
                <span><i class="fal fa-times"></i></span>
            </div>
            <div class="tp-offcanvas__logo mb-50">
                <img src="assets/img/logo/logo-no-background.png" style="width:150px;" alt="logo"></a>
            </div>
            <p>we believe that every customer deserves a quality experience and we're committed to delivering just that.
            </p>
            <div class="tp-offcanvas__social">
                <span> <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></span>
                <span> <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></span>
                <span> <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></span>
                <span> <a href="https://www.linkedin.com/in"><i class="fab fa-linkedin "></i></a></span>
            </div>
        </div>
        <div class="tp-offcanvas__widget mb-40 d-none d-xl-block">
            <h3 class="tp-footer__widget-title mb-35">
                Get In Touch
            </h3>
            <div class="tp-offcanvas-cta d-flex align-items-center tp-border-bottom pb-20  mb-30">
                <span class="icon mr-20"><img src="assets/img/icons/ofp-phone.png" alt="icons"></span>
                <span>
                    <span class="d-block mb-0">Phone number</span>
                    <b><a href="tel:+917600302430"> Call Us: +91 7600-302-430 </a></b>
                </span>
            </div>

            <div class="tp-offcanvas-cta d-flex align-items-center tp-border-bottom pb-20 mb-30">
                <span class="icon mr-20"><img src="assets/img/icons/ofc-mail-icon.png" alt="icons"></span>
                <span>
                    <span class="d-block mb-0">Email address</span>
                    <b><a href="mailto:mail.info@urlwebwala.com"> mail.info@urlwebwala.com </a></b>
                </span>
            </div>
            <div class="tp-offcanvas-cta d-flex align-items-center pb-20  mb-30">
                <span class="icon mr-20"><img src="assets/img/icons/ofc-locaiton.png" alt="icons"></span>
                <span>
                    <span class="d-block mb-0">C 512 Dev Aurum, Anand Nagar Cross Road, Prahlad Nagar, Ahmedabad,
                        380015.</span>

                </span>
            </div>
        </div>
        <div class="tp-mobile-menu">
        </div>
        <div class="tp-offcanvas__bottom mt-80 d-none d-lg-block">
            <p>Our team applies its wide ranging in
                experience to determining.</p>
            <div class="tp-offcanvas-btn-wrapper">
                <a href="contact.html" class="tp-common-btn">get in touch
                    <span>
                        <i class="fal fa-long-arrow-right"></i>
                        <i class="fal fa-long-arrow-right"></i>
                    </span>
                </a>
            </div>
        </div>

        <div class="offc-bottom-pattern">
            <img src="assets/img/hero/nav-parrten-botoom.png" alt="icons">
        </div>
    </div>
</div>
<div class="body-overlay"></div>
<main>
    <div class="breadcrumb__area theme-bg pt-120 pb-120" data-background="{{ asset ('public/images/breadcrumb/breadcrumb-bg.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list mb-10">
                            <span><a href="{{ config('constants.HOME_URL') }}">Home</a></span>
                            <span class="dvdr dvdr-line"></span>
                            <span class="tp-bc-acive-menu">Portfolio</span>
                        </div>
                        <h3 class="breadcrumb__title">Portfolio</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->
    <!-- porftfolio area start  -->
    <div class="tp-portfoliop-page-area pt-120 pb-120">
        <div class="container">
            <div class="tp-portfolio-header mb-30">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-pf-btn-group text-center">
                            <button class="active" data-filter="*">All Work</button>
                            <button data-filter=".carddesign">Card Design</button>
                            <button data-filter=".design">Logo Design</button>
                            <button data-filter=".support">Web development</button>
                            <button data-filter=".app">App Development</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row tp-portfolio-isotop-active">
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img business">
                    <!--logo-->
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/services/6.jpg')}}" alt="services">
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img carddesign">
                    <!--LOGO 3-->
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/services/5.jpg')}}" alt="services">
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img carddesign">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/services/4.jpg')}}" alt="services">
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img carddesign">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/services/3.jpg')}}" alt="services">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img carddesign">
                    <!--LOGO 4-->
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/services/1.jpg')}}" alt="services">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img support consultancy">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/1.png')}}" alt="portfolio" style="height:300px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img support consultancy">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/Port2.jpg')}}" alt="portfolio" style="height:300px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img support consultancy">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/Port3.jpg')}}" alt="portfolio" style="height:300px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img support consultancy">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/Port4.jpg')}}" alt="portfolio" style="height:300px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img support consultancy">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/Port7.jpg')}}" alt="portfolio" style="height:300px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img support consultancy">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/Port6.jpg')}}" alt="portfolio" style="height:300px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img support consultancy">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/Port8.jpg')}}" alt="portfolio" style="height:300px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img support consultancy">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/Port9.jpg')}}" alt="portfolio" style="height:300px">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img design">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/logo1.jpg')}}" alt="portfolio">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img design">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/logo2.jpg')}}" alt="portfolio">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img design">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/logo3.jpg')}}" alt="portfolio">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img design">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/logo4.jpg')}}" alt="portfolio">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img design">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/logo5.jpg')}}" alt="portfolio">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img design">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/logo6.jpg')}}" alt="portfolio">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img design">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/logo7.jpg')}}" alt="portfolio">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img design">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/logo8.jpg')}}" alt="portfolio">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img design">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/logo9.jpg')}}" alt="portfolio">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img design">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/logo10.jpg')}}" alt="portfolio">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img app">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/paint.png')}}" alt="portfolio" style="height:260px">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img app">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/App2.jpg')}}" alt="portfolio" style="height:300px">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img app">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/4.png')}}" alt="portfolio" style="height:280px">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img app">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/App4.jpg')}}" alt="portfolio" style="height:300px">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img app">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/App5.jpg')}}" alt="portfolio" style="height:300px">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img app">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/App6.jpg')}}" alt="portfolio" style="height:300px">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img app">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/App7.jpg')}}" alt="portfolio" style="height:300px">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img app">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/App8.jpg')}}" alt="portfolio" style="height:300px">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img app">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/App9.jpg')}}" alt="portfolio" style="height:300px">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img app">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/portfolio/App10.jpg')}}" alt="portfolio" style="height:300px">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection