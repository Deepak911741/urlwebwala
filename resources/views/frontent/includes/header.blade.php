<!Doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo (isset($pageTitle) && !empty($pageTitle) ? $pageTitle : 'Urlwebwala LLP'); ?></title>
    <meta name="description" content="<?php echo (isset($description) && !empty($description) ? $description : ' '); ?>">
    <meta name="keywords" content="<?php echo (isset($keywords) && !empty($keywords) ? $keywords : ''); ?>">
    <meta name="author" content="<?php echo (isset($author) && !empty($author) ? $author : 'Urlwebwala LLP'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.urlwebwala.com">
    <meta property="og:site_name" content="">
    <meta property="og:image" content="https://urlwebwala.com/assets/metalog.png">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image:alt" content="">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <link rel="icon" type="image/x-icon" href="./assets/img/logo/fev.png">
    <link rel="canonical" href="https://www.urlwebwala.com">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NZ5QVDBENP"></script>
    <link rel="stylesheet" href="{{ asset ('public/css/style1.css')}}">
    <link rel="stylesheet" href="{{ asset ('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('public/css/font-awesome-pro.css')}}">
    <link rel="stylesheet" href="{{ asset ('public/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{ asset ('public/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset ('public/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset ('public/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{ asset ('public/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset ('public/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset ('public/css/spacing.css')}}">
    <link rel="stylesheet" href="{{ asset ('public/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset ('public/css/blogstyle.css')}}">
    <link rel="stylesheet" href="{{ asset ('public/css/stylecookies.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
   
</head>

<body>
    <header>
        <div class="tp-header__1 theme-bg p-relative">
            <div id="header-sticky" class="tp-header__1-main header-border-button pl-105 pr-105">
                <div class="container-fluid">
                    <div class="mega-menu-wrapper">
                        <div class="row align-items-center">
                            <div class="col-xxl-3 col-xl-2 col-6">
                                <div class="logo border-right" style="margin-left: 20px; width: 350px;">
                                    <a href="#">
                                        <img src="{{ asset ('public/images/logo/urlwebwala.png')}}" style="width:200px;" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xxl-8 col-xl-8 d-none d-xl-block">
                                <div class="main-menu p-relative">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li><a href="{{ config('constants.HOME_URL')}}">Home</a></li>
                                            <li class="has-dropdown">
                                                <a href="#">Company</a>
                                                <ul class="submenu">
                                                    <li><a href="{{ config('constants.ABOUT_URL')}}">ABOUT US</a></li>
                                                    <li><a href="{{ config('constants.CAREER_URL')}}">CAREER</a></li>
                                                    <li><a href="{{ config('constants.DEVELOPMENT_URL')}}">DEVELOPMENT PROCESS</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="{{ config('constants.SERVICE_URL') }}">SERVICES</a>
                                                <ul class="submenu">
                                                    <li><a href="{{ config('constants.WEBDEVELOPMENT_URL') }}">WEB DEVELOPMENT</a></li>
                                                    <li><a href="{{ config('constants.APPDEVELOPMENT_URL') }}">APP DEVELOPMENT</a></li>
                                                    <li><a href="{{ config('constants.DIGITALMARKETING_URL') }}">DIGITAL MARKETING</a></li>
                                                    <li><a href="{{ config('constants.GRAPHICSLOGO_URL') }}">GRAPHICS & LOGO</a></li>
                                                    <li><a href="{{ config('constants.QATESTING_URL') }}">QA TESTING WEBSITE</a></li>
                                                    <li><a href="{{ config('constants.DIGITALCARD_URL') }}">DIGITAL CARD DESIGN</a></li>
                                                    <li><a href="{{ config('constants.HOSTINGSERVICE_URL') }}">HOSTING SERVICE PROVIDER</a></li>
                                                    <li><a href="{{ config('constants.SUPPORT_URL') }}">SUPPORT & MAINTAINANCE</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="internship.php">INTERNSHIP</a>
                                                <ul class="submenu">
                                                    <li><a href="{{ config('constants.PHPINTERNSHIP_URL') }}">PHP</a></li>
                                                    <li><a href="{{ config('constants.WEBINTERNSHIP_URL') }}">WEB DEVELOPMENT</a></li>
                                                    <li><a href="{{ config('constants.FLUTTERINTERNSHIP_URL') }}">FLUTTER</a></li>
                                                    <li><a href="{{ config('constants.REACTINTERNSHIP_URL') }}">REACT JS</a></li>
                                                    <li><a href="{{ config('constants.NODEINTERNSHIP_URL') }}">NODE JS</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ config('constants.PORTFOLIO_URL') }}">Portfolio</a></li>
                                            <li><a href="{{ config('constants.BLOG_URL') }}">Blog</a></li>
                                            <li><a href="{{ config('constants.CONTACT_URL') }}">Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-2 d-xl-block col-md-6 col-6">
                                <div class="tp-header__1-right d-flex justify-content-end align-items-center">
                                    <div class="tp-header-search-nav d-flex justify-content-end d-xl-none">
                                        <div class="tp-header-nav">
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="tp-offcanvas-wrapper">
        <div class="tp-offcanvas white-bg">
            <div class="offc-top-pattern">
                <img src="{{ asset ('public/images/hero/nav-parrten-top.png')}}" alt="hero">
            </div>
            <div class="tp-offcanvas__top tp-border-bottom pb-30 mb-30">
                <div class="tp-offcanvas-close">
                    <span><i class="fal fa-times"></i></span>
                </div>
                <div class="tp-offcanvas__logo mb-50">
                    <a href="#"> <img src="{{ asset ('public/images/logo/urlwebwala.png')}}" style="width:100px;" alt="logo"></a>
                </div>
                <p>We believe that every customer deserves a quality experience and we're committed to delivering just
                    that.</p>
                <div class="tp-offcanvas__social">
                    <span> <a href="https://www.facebook.com/share/18aStSgd8m/"><i
                                class="fab fa-facebook-f"></i></a></span>
                    <span> <a href=""><i class="fab fa-twitter"></i></a></span>
                    <span> <a href="https://www.instagram.com/urlwebwala?igsh=MXM1aTl3ZDhiN284eQ=="><i
                                class="fab fa-instagram"></i></a></span>
                    <span> <a href="https://www.linkedin.com/company/urlwebwala-pvt-ltd/"><i
                                class="fab fa-linkedin"></i></a></span>
                </div>
            </div>
            <div class="tp-offcanvas__widget mb-40 d-none d-xl-block">
                <h3 class="tp-footer__widget-title mb-35">
                    Get In Touch
                </h3>
                <div class="tp-offcanvas-cta d-flex align-items-center tp-border-bottom pb-20  mb-30">
                    <span class="icon mr-20"><img src="{{ asset ('public/images/icons/ofp-phone.png')}}" alt="icons"></span>
                    <span>
                        <span class="d-block mb-0">Phone number</span>
                        <b><a href="tel:+918084033396"> Call Us: +91 8084033396 </a></b>
                    </span>
                </div>

                <div class="tp-offcanvas-cta d-flex align-items-center tp-border-bottom pb-20 mb-30">
                    <span class="icon mr-20"><img src="{{ asset ('public/images/icons/ofc-mail-icon.png')}}" alt="icons"></span>
                    <span>
                        <span class="d-block mb-0">Email address</span>
                        <b><a href="mailto:mail.info@urlwebwala.com"> info@urlwebwala.com </a></b>
                    </span>
                </div>
                <div class="tp-offcanvas-cta d-flex align-items-center pb-20  mb-30">
                    <span class="icon mr-20"><img src="{{ asset ('public/images/icons/ofc-locaiton.png')}}" alt="icons"></span>
                    <span>
                        <span class="d-block mb-0">
                            Ahemdabad Gujrat (382481)</span>

                    </span>
                </div>
            </div>
            <div class="tp-mobile-menu">
            </div>
            <div class="tp-offcanvas__bottom mt-80 d-none d-lg-block">
                <p>Our team applies its wide ranging in
                    experience to determining.</p>
                <div class="tp-offcanvas-btn-wrapper">
                    <a href="contact.html" class="tp-common-btn">Get in touch
                        <span>
                            <i class="fal fa-long-arrow-right"></i>
                            <i class="fal fa-long-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>

            <div class="offc-bottom-pattern">
                <img src="assets/img/hero/nav-parrten-botoom.png" alt="hero">
            </div>
        </div>
    </div>
    
    <a href="#main-wrapper" id="tp-backto-top" class="tp-back-to-top show">
        <span>
            <i class="fas fa-angle-double-up" style="margin-top: 20px;"></i>
        </span>
    </a>

    {{-- "section extends" --}}
    
    @yield('content')
    
    {{-- "section extends" --}}
<footer>
    <div class="bs-footer">
        <div class="container">
            <div class="bs-footer__top fotter-btn-bottom pt-100 pb-40 d-none d-md-block">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="bs-footer__top-logo">
                            <h4>Urlwebwala LLP</h4>
                        </div>
                    </div>
                    <div class="col-6 text-md-end">
                        <div class="bs-footer__top-social">
                            <span> <a style="background-color: #1877F2;"
                                    href="https://www.facebook.com/share/18aStSgd8m/"><i
                                        class="fas fa-facebook"></i></a></span>
                            <span> <a style="background-color: #1DA1F2;" href="https://clutch.co/profile/urlwebwala"><i
                                        class="fas fa-twitter"></i></a></span>
                            <span> <a style="background-color: #e1306c;"
                                    href="https://www.instagram.com/urlwebwala?igsh=MXM1aTl3ZDhiN284eQ=="><i class="fa-brands fa-instagram"></i></a></span>
                            <span> <a style="background-color: #0077B5;"
                                    href="https://www.linkedin.com/company/urlwebwala-pvt-ltd/"><i class="fa-brands fa-linkedin"></i></a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="before" style="
            background: linear-gradient(to right, #fd004c, #fe9000, #fff020, #3edf4b, #3363ff, #b102b7, #fd004c );
            animation: rainbow-move 6s infinite linear alternate;
            height: 8px;">
            </div>
            <div class="bs-footer__main pb-10 pt-80 tp-border-bottom">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                            <a href="https://www.google.com/search?client=ms-android-nothing-terr1-rso3b&sca_esv=882ccfba8c13de80&hl=en-IN&cs=0&sxsrf=AHTn8zrqcdOavfs4TmGucF8QTVuhs-Zw2g%3A1738597802304&kgmid=%2Fg%2F11vdrr4rzw&q=URLWebwala%20Pvt.Ltd&shndl=30&source=sh%2Fx%2Floc%2Fact%2Fm1%2F4&kgs=0a5d2eba4e4269f4"
                                target="_blank">
                                <img src="{{ asset ('public/images/logo/googlereview.png')}}" class="img-fluid" alt="Google Review"
                                    style="max-width: 120px;">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                            <a href="" target="_blank">
                                <img src="{{ asset ('public/images/logo/clutch-5.png')}}" class="img-fluid" alt="Clutch Review"
                                    style="max-width: 120px;">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                            <a href="" target="_blank">
                                <img src="{{ asset ('public/images/logo/glassdoor.webp')}}" class="img-fluid" alt="Glassdoor Review"
                                    style="max-width: 130px;">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                            <a href="https://www.justdial.com/Ahmedabad/Url-Webwala-Shakti-School-Road-Chandlodiya/079PXX79-XX79-231108102308-M9X4_BZDET"
                                target="_blank">
                                <img src="{{ asset ('public/images/logo/jd-review-removebg-preview.png')}}" class="img-fluid"
                                    alt="JustDial Review" style="max-width: 150px;">
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="tp-footer__widget mb-40">
                                <h3 class="tp-footer__widget-title mb-35">About Us</h3>
                                <p class="pr-40" style="text-align: justify;">
                                    We are a full-service IT company committed to providing customers with the highest
                                    quality
                                    products and services. We design, build, support, and manage IT solutions that
                                    deliver real
                                    business results. Our services include web development, digital marketing, app
                                    development,
                                    graphics & logo design, QA testing, digital card design, hosting service provider,
                                    and
                                    support & maintenance.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <div class="tp-footer__widget mb-40">
                                <h3 class="tp-footer__widget-title mb-35">Quick Links</h3>
                                <ul>
                                    <li><a href="{{ config('constants.HOME_URL')}}">Home</a></li>
                                    <li><a href="{{ config('constants.ABOUT_URL') }}">About Us</a></li>
                                    <li><a href="{{ config('constants.PORTFOLIO_URL') }}">Portfolio</a></li>
                                    <li><a href="{{ config('constants.SERVICE_URL') }}">Services</a></li>
                                    <li><a href="{{ config('constants.INTERNSHIP_URL') }}">Internship</a></li>
                                    <li><a href="{{ config('constants.CONTACT_URL') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <div class="tp-footer__widget mb-40">
                                <h3 class="tp-footer__widget-title mb-35">Services</h3>
                                <ul>
                                    <li><a href="{{ config('constants.WEBDEVELOPMENT_URL') }}">Web Development</a></li>
                                    <li><a href="{{ config('constants.APPDEVELOPMENT_URL') }}">App Development</a></li>
                                    <li><a href="{{ config('constants.DIGITALMARKETING_URL') }}">Digital Marketing</a></li>
                                    <li><a href="{{ config('constants.GRAPHICSLOGO_URL') }}">Graphics & Logo</a></li>
                                    <li><a href="{{ config('constants.QATESTING_URL') }}">QA Testing Website</a></li>
                                    <li><a href="{{ config('constants.DIGITALCARD_URL') }}">Digital Card Design</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="tp-footer__widget mb-40">
                                <h3 class="tp-footer__widget-title mb-35">Get In Touch</h3>
                                <div class="tp-footer-cta d-flex align-items-center mb-30">
                                    <span class="call-icon"><img src="{{ asset ('public/images/icons/placeholder.png')}}" alt=""></span>
                                    <p class="mb-0">
                                        <span>Ahemdabad Gujrat (382481)</span>
                                    </p>
                                </div>
                                <div class="tp-footer-cta d-flex align-items-center mb-30">
                                    <span class="call-icon"><img src="{{ asset ('public/images/icons/law-mail.png')}}" alt=""></span>
                                    <p class="mb-0">
                                        <a href="mailto:mail.info@urlwebwala.com">info@urlwebwala.com</a>
                                    </p>
                                </div>
                                <div class="tp-footer-cta d-flex align-items-center mb-30">
                                    <span class="call-icon"><img src="{{ asset ('public/images/footer/call-icon.png')}}" alt=""></span>
                                    <p class="mb-0">
                                        <a href="tel:+916359102592">Call Us: +91 8084033396</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tp-footer__bottom pt-25 pb-25">
                        <div class="row align-items-center">
                            <div class="col-md-8 col-12">
                                <div class="tp-copyrigh-text text-center text-md-start">
                                    <span>
                                        <a href="privacypolicy.php">Privacy and Policy</a> |
                                        <a href="termsconditions.php">Terms & Conditions</a> |
                                        <a href="#">Admin Login</a>
                                    </span>
                                    <br>
                                    <span>Copyright &amp; Design With &#10084;&#65039; By <a
                                            href="https://www.urlwebwala.com">@Urlwebwala</a> -
                                        2025, All Rights Reserved.</span>
                                </div>
                            </div>
                            <div class="col-md-4 d-none d-md-block">
                                <div class="tp-footer-menu text-end">
                                    <ul>
                                        <li><a href="https://drive.google.com/file/d/1E-ZuxdB9JOM4SybMrvZV1b353UrVVqnn/view?usp=sharing">Download Brochure</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="cookie-container hide">
            <p class="cookie-text">
                We use cookies and similar technologies that are necessary to operate the website. Additional cookies
                are used to perform analysis of website usage. By continuing to use our website, consent to our use of
                cookies. For more information, please read our <a href="#"> Privacy Policy.</a>
            </p>
            <div class="agree">
                <button>Sounds good!</button>
            </div>
        </div> --}}
</footer>

<script src="{{ asset ('public/js/jquery.js')}}"></script>
<script src="{{ asset ('public/js/waypoints.js')}}"></script>
<script src="{{ asset ('public/js/modernizr.js')}}"></script>
<script src="{{ asset ('public/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset ('public/js/meanmenu.js')}}"></script>
<script src="{{ asset ('public/js/swiper-bundle.js')}}"></script>
<script src="{{ asset ('public/js/slick.js')}}"></script>
<script src="{{ asset ('public/js/magnific-popup.js')}}"></script>
<script src="{{ asset ('public/js/counterup.js')}}"></script>
<script src="{{ asset ('public/js/wow.js')}}"></script>
<script src="{{ asset ('public/js/nice-select.js')}}"></script>
<script src="{{ asset ('public/js/tilt.jquery.min.js')}}"></script>
<script src="{{ asset ('public/js/isotope-pkgd.js')}}"></script>
<script src="{{ asset ('public/js/imagesloaded-pkgd.js')}}"></script>
<script src="{{ asset ('public/js/ajax-form.js')}}"></script>
<script src="{{ asset ('public/js/headline.js')}}"></script>
<script src="{{ asset ('public/js/main.js')}}"></script>
<script src="{{ asset ('public/js/scriptcookies.js')}}"></script>
</body>

</html>