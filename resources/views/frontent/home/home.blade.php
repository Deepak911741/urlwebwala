@extends(config('constants.FRONTENT_FOLDER') . 'includes/header')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="{{ asset ('public/css/home.css') }}">
    @extends('frontent.newslatter.newslatter')
<main>
    <div class="tp-it-slider-area">
        <div class="swiper-container ptg-slider-active">
            <div class="swiper-wrapper">
                <div class="tp-it-slider it-slider-height fix swiper-slide"
                    data-background="{{ asset ('public/images/slider/it-slider-1.jpg') }}">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-12">
                                <div class="it-slider__content">
                                    <h2 class="it-slider__content-title mb-20" data-animation="tpfadeUp"
                                        data-delay=".5s">IT
                                        Solutions For Business</h2>
                                    <p class="mb-50" data-animation="tpfadeUp" data-delay=".6s">We are a software
                                        development company that offers<br>business solutions to help you grow your
                                        company.</p>
                                    <a href="{{ config('constants.ABOUT_URL') }}"
                                        class="tp-slider-btn orange-chat-color tp-btn-hover alt-color alt-bg-orange"
                                        data-animation="tpfadeUp" data-delay=".9s">
                                        <span class="mr-10">
                                            <i class="fas fa-comments"></i>
                                            <i class="fas fa-comments"></i>
                                        </span>
                                        About Us
                                        <b></b>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="it-slider-img p-relative">
                                    <img src="{{ asset ('public/images/slider/it-slider-img.png') }}" alt="slider">
                                    <div class="it-slder-quite">
                                        <b>“Our visions encourage every small<br> business to grow
                                            and develope digitally”</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-it-slider it-slider-height fix swiper-slide"
                    data-background="{{ asset('public/images/slider/Social.jpg') }}">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-12">
                                <div class="it-slider__content">
                                    <h2 class="it-slider__content-title mb-20" data-animation="tpfadeUp"
                                        data-delay=".4s">IT
                                        Solutions For Branding</h2>
                                    <p class="mb-50" data-animation="tpfadeUp" data-delay=".8s"> We provide the best IT
                                        services for branding. using the right tools<br>to develop the most effective
                                        websites.</p>

                                    <a href="{{ config('constants.ABOUT_URL') }}"
                                        class="tp-slider-btn orange-chat-color tp-btn-hover alt-color alt-bg-orange"
                                        data-animation="tpfadeUp" data-delay=".9s">
                                        <span class="mr-10">
                                            <i class="fas fa-comments"></i>
                                            <i class="fas fa-comments"></i>
                                        </span>
                                        About Us
                                        <b></b>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="it-slider-img p-relative">
                                    <img src="{{ asset ('public/images/slider/it-slider-img.png') }}" alt="slider">
                                    <div class="it-slder-quite">
                                        <b>“ our visions encourage every small<br> business to grow
                                            and develope digitally ”</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-it-slider it-slider-height fix swiper-slide"
                    data-background="{{ asset ('public/images/slider/it-slider-3.jpg') }}">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-12">
                                <div class="it-slider__content">
                                    <h2 class="it-slider__content-title mb-20" data-animation="tpfadeUp"
                                        data-delay=".4s">IT
                                        Solutions For Markting</h2>
                                    <p class="mb-50" data-animation="tpfadeUp" data-delay=".6s">The company provides IT
                                        services for marketing. Our team has many years of experience in the field knows
                                        how to solve any technological problems for you.</p>

                                    <a href="{{ config('constants.ABOUT_URL') }}"
                                        class="tp-slider-btn orange-chat-color tp-btn-hover alt-bg-orange"
                                        data-animation="tpfadeUp" data-delay=".9s">
                                        <span class="mr-10">
                                            <i class="fas fa-comments"></i>
                                            <i class="fas fa-comments"></i>
                                        </span>
                                        About Us
                                        <b></b>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="it-slider-img p-relative">
                                    <img src="{{ asset ('public/images/slider/it-slider-img.png')}}" alt="slider">
                                    <div class="it-slder-quite">
                                        <b>“ our visions encourage every small<br> business to grow
                                            and develope digitally ”</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider end  -->

    <!-- about us Start -->
    ̥<div class="law-about-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-wraper pb-55">
                        <div class="tp-section text-center">
                            <span class="tp-section__subtitle vogue-text-color white-bg mb-15 wow tpfadeUp"><i
                                    class="before-border"></i>
                                About Us <i class="after-border"></i></span>
                            <h2 class="tp-section__title vogue-text-color wow tpfadeUp" data-wow-delay=".3s">Welcome to
                                UrlWebwala</h2>
                        </div>
                    </div>
                </div>̥
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 wow tpfadeUp">
                    <div class="law-about-left p-relative mb-30">
                        <div class="row gx-4">
                            <div class="col-md-6">
                                <div class="law-about-left-title mt-60 mb-20  vogue-bg ">
                                    <span><i class="flaticon-global"></i></span>
                                    <span>Good Expertise In Website And App Development</span>
                                </div>
                                <div class="law-about-img-1">
                                    <img src="{{ asset ('public/images/about/aboutwebwala.png') }}" alt="about">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="law-about-img-2">
                                    <img src="{{ asset ('public/images/about/aboutUrl.png') }}" alt="about">
                                </div>
                            </div>
                        </div>
                        <div class="law-icon law-icon-text ">
                            <div class="d-inline-block p-relative">
                                <div>
                                    <img src="{{ asset ('public/images/about/law-sm-img-3.png') }}" alt="about">
                                </div>
                                <div class="law-icon-info">
                                    <span><b>2+</b>Years Experience</span>
                                </div>
                            </div>
                        </div>
                        <div class="red-dot law-ab-dot">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow tpfadeUp">
                    <div class="section-title-wraper mb-40">
                        <div class="tp-section">
                            <h3 class="tp-section__title wow tpfadeUp mb-30">We Help Our Clients <br>
                                Achieve Their Business Goals
                            </h3>
                            <p class="text-grey wow tpfadeUp" data-wow-delay=".3s">We are the best custom application
                                development company in Ahemdabad. Our goal is to provide you with what you need as
                                quickly and sustainably as possible. We provide a variety of services based on our
                                clients web
                                application requirements.
                                Specific features of web application development, in which we specialise, include the
                                many
                                options we provide.</p>
                            <a href="{{ config('constants.ABOUT_URL') }}"
                                class="tp-slider-btn orange-chat-color tp-btn-hover alt-color alt-bg-orange"
                                data-animation="tpfadeUp" data-delay=".9s">
                                <span class="mr-10">
                                    <i class="fas fa-comments"></i>
                                    <i class="fas fa-comments"></i>
                                </span>
                                Read More
                                <b></b>
                            </a>
                        </div>
                        <div class="row gx-md-5">
                            <div class="col-sm-6 col-12">
                                <div class="low-ab-feature d-flex align-items-center">
                                    <div class="low-ab-fea-icon mr-20">
                                        <img src="{{ asset ('public/images/about/icon-ab-chat.png')}}" alt="about">
                                    </div>
                                    <div>
                                        <h4 class="law-ab-fea-title wine-text-color text-uppercase">24/7
                                            <br> Support
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="low-ab-feature d-flex align-items-center">
                                    <div class="low-ab-fea-icon mr-20">
                                        <img src="{{ asset('public/images/about/icon-tp-laptop.png')}}" alt="about">
                                    </div>
                                    <div>
                                        <h4 class="law-ab-fea-title wine-text-color text-uppercase">On Time
                                            <br>Delivery
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about us End -->

        <!-- service start  -->
        <div class="tp-it-service pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-wraper pb-55">
                            <div class="tp-section text-center">
                                <span class="tp-section__subtitle vogue-text-color white-bg mb-15 wow tpfadeUp"><i
                                        class="before-border"></i>
                                    Our Services <i class="after-border"></i></span>
                                <h2 class="tp-section__title vogue-text-color wow tpfadeUp" data-wow-delay=".3s">Custom
                                    IT
                                    Services and <br> Solutions Built</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row it-sv-counter">
                    <div class="col-lg-4 col-md-6">
                        <div class="it-service__item mb-30 text-center wow tpfadeUp" data-wow-delay=".3s">
                            <div class="it-servicce__item-img mb-35">
                                <img src="{{ asset('public/images/services/icon/it-service-1.png')}}" alt="services">
                            </div>
                            <h3 class="it-service__item-title mb-20"><a href="{{ config('constants.WEBDEVELOPMENT_URL') }}">Web Development</a>
                            </h3>
                            <p class="mb-0" style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">To
                                attract and keep consumers, get a strong website developed from scratch
                                utilising the most recent web development techniques.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="it-service__item mb-30 text-center wow tpfadeUp" data-wow-delay=".4s">
                            <div class="it-servicce__item-img mb-35">
                                <img src="{{ asset('public/images/services/icon/it-service-2.png')}}" alt="services">
                            </div>
                            <h3 class="it-service__item-title mb-20"><a href="{{ config('constants.APPDEVELOPMENT_URL') }}">App
                                    Development</a></h3>
                            <p class="mb-0" style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">We
                                create attractive mobile applications that boost consumer engagement and
                                conversion rates.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="it-service__item mb-30 text-center wow data tpfadeUp" data-wow-delay=".5s">
                            <div class="it-servicce__item-img mb-35">
                                <img src="{{ asset('public/images/services/icon/it-service-3.png')}}" alt="services">
                            </div>
                            <h3 class="it-service__item-title mb-20"><a href="{{ config('constants.DIGITALMARKETING_URL') }}">Digital
                                    Marketing</a>
                            </h3>
                            <p class="mb-0" style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">We
                                will create personalised online marketing solutions for you so you can
                                stay
                                on top of your social media and SEO game.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="it-service__item mb-30 text-center wow data tpfadeUp" data-wow-delay=".5s">
                            <div class="it-servicce__item-img mb-35">
                                <img src="{{ asset('public/images/services/icon/it-service-4.png')}}" alt="services">
                            </div>
                            <h3 class="it-service__item-title mb-20"><a href="{{ config('constants.GRAPHICSLOGO_URL') }}">Graphics & Logo</a></h3>
                            <p class="mb-0" style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">For a
                                variety of platforms, we transform conceptual ideas into clear,
                                practical,
                                and beautiful visual interfaces.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="it-service__item mb-30 text-center wow data tpfadeUp" data-wow-delay=".5s">
                            <div class="it-servicce__item-img mb-35">
                                <img src="{{ asset('public/images/services/icon/it-service-4.png')}}" alt="services">
                            </div>
                            <h3 class="it-service__item-title mb-20"><a href="{{ config('constants.QATESTING_URL') }}">QA Testing Website</a></h3>
                            <p class="mb-0" style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                Applications are thoroughly tested using industry-standard testing approach
                                and
                                QA procedures.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="it-service__item mb-30 text-center wow data tpfadeUp" data-wow-delay=".5s">
                            <div class="it-servicce__item-img mb-35">
                                <img src="{{ asset('public/images/services/icon/it-service-6.png')}}" alt="services">
                            </div>
                            <h3 class="it-service__item-title mb-20"><a href="{{ config('constants.DIGITALCARD_URL') }}">Digital Card Design</a>
                            </h3>
                            <p class="mb-0" style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">The
                                electronic equivalent of a paper card is a digital card. Digital cards
                                can
                                also be called as digital business cards.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service end  -->

        <div class="tp-about-deatials-service theme-bg pt-120 pb-90">
            <div class="container">
                <div class="section-title-wrapper pb-55">
                    <div class="tp-section text-center">
                        <span class="tp-section__subtitle vogue-text-color white-bg mb-15 wow tpfadeUp"><i
                                class="before-border"></i>
                            Who We Are? <i class="after-border"></i></span>
                        <h2 class="tp-section__title vogue-text-color wow tpfadeUp" data-wow-delay=".3s">IT Solutions to
                            equip
                            your path to business success</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 wow tpfadeUp">
                        <div class="tp-about-sv-content">
                            <h1>We develop solutions that meet your needs for applications and websites.</h1>
                        </div><br>
                        <p class="text-grey wow tpfadeUp"
                            style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;" data-wow-delay=".3s">
                            Urlwebwala Ahmedabad is an ISO-certified
                            software development firm that offers complete business IT solutions for
                            clients around the world.</p>
                        <p class="text-grey wow tpfadeUp"
                            style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;" data-wow-delay=".3s">
                            We are the pioneers of web, mobile app,
                            and
                            AR/VR solutions. Our highly experienced and skilled specialists are always on hand to meet
                            any
                            challenge and satisfy the needs of our customers. We are committed to quality, and we don't
                            make a
                            mistake in delivering the quality of our services. We are Urlwebwala Ahmedabad, and we
                            deliver
                            modern IT solutions to various sectors, including gaming, business, finance, healthcare,
                            hospitality, education, travel, and automotive.
                        </p><br>
                        <div class="tp-sv-tabs-btn-wrapper mb-30">
                            <a href="{{ config('constants.SERVICE_URL') }}" class="tp-white-btn">
                                More Services
                                <span class="ml-10">
                                    <i class="fas fa-long-arrow-right"></i>
                                    <i class="fas fa-long-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 wow tpfadeUp">
                        <div class="about-sv-img">
                            <img src="{{ asset('public/images/about/who.avif')}}" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Experties start  -->
        <div class="unique-it-service pt-120 pb-90">
            <div class="container">
                <div class="section-title-wrapper pb-55">
                    <div class="unique-section text-center">
                        <div class="tp-section text-center">
                            <span class="tp-section__subtitle vogue-text-color white-bg mb-15 wow tpfadeUp"><i
                                    class="before-border"></i>
                                Our Expertise <i class="after-border"></i></span>
                            <h2 class="tp-section__title vogue-text-color wow tpfadeUp" data-wow-delay=".3s">Our Technology Stack</h2>
                        </div>
                    </div>
                </div>
                <div class="unique-scroll-container">
                    <div class="unique-scroll-content">
                        <!-- Original Content -->
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="{{ asset ('public/images/services/ico/android.png') }}" alt="Android">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="{{asset ('public/images/services/ico/ios.png')}}" alt="iOS">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="{{ asset ('public/images/services/ico/java.png')}}" alt="Java">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="{{ asset ('public/images/services/ico/php.png')}}" alt="PHP">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="{{ asset ('public/images/services/ico/angular.svg')}}" alt="Angular">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="{{ asset ('public/images/services/ico/Node-js.svg')}}" alt="Node.js">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="{{ asset ('public/images/services/ico/Shopify_logo_2018.svg.png')}}" alt="Shopify">
                            </div>
                        </div>

                        <!-- Duplicate Content for Seamless Sliding -->
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="{{ asset ('public/images/services/ico/Kotlin_logo.svg.png')}}" alt="Android">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="{{ asset ('public/images/services/ico/Swift_logo.svg.png')}}" alt="iOS">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="{{ asset ('public/images/technology/Bootstarp.png')}}" alt="Java">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="{{ asset ('public/images/technology/css.png')}}" alt="PHP">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="{{ asset ('public/images/technology/html.png') }}" alt="Angular">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="{{ asset ('public/images/technology/sql.png')}}" alt="Node.js">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="{{ asset ('public/images/services/ico/Shopify_logo_2018.svg.png')}}" alt="Shopify">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Experties end  -->

        <!-- Mission start  -->
        <div class="tp-it-about theme-bg-2 pt-120 ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="tp-it-about-info mb-30">
                            <div class="section-title-wraper tp-border-bottom mb-40">
                                <div class="tp-section">
                                    <span class="tp-section__subtitle vogue-text-color white-bg mb-15 wow tpfadeUp"><i
                                            class="before-border"></i> Since From 2022</span>
                                    <h3 class="tp-section__title vogue-text-color mb-30 wow tpfadeUp"
                                        data-wow-delay=".3s">
                                        Our Mission</h3>
                                    <div class="tp-price-fea-list app-list">
                                        <ul>
                                            <li><i class="fas fa-check"></i><b>Passion for work and never give up </b></li>
                                            <li><i class="fas fa-check"></i><b>Discipline and punctual at work</b></li>
                                            <li><i class="fas fa-check"></i><b>Always innovating in developing technology</b></li>
                                            <li><i class="fas fa-check"></i><b>Passion for work and never give up</b></li>
                                            <li><i class="fas fa-check"></i><b>Always innovating in developing technology</b></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tp-it-author-info wow tpfadeUp" data-wow-delay=".5s">
                                <p>Highly Tailored IT Design, Management & Support Services. It’s possible to simultaneously manage.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tp-it-about-right mb-30 wow tpfadeUp">
                            <div class="tp-it-about-img text-end p-relative w-img" data-tilt="about"
                                data-tilt-perspective="2000">
                                <img src="{{ asset ('public/images/about/vision%20(1).jpg')}}" alt="about">
                                <div class="it-ab-cirlce-logo">
                                    <img src="{{ asset('public/images/about/logo1.png')}}" alt="about">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mission end  -->

        <!--Clint Start-->
        <div class="unique-client-service pt-120 pb-90">
            <div class="container">
                <div class="section-title-wrapper pb-55">
                    <div class="tp-section text-center">
                        <span class="tp-section__subtitle vogue-text-color white-bg mb-15 wow tpfadeUp"><i
                                class="before-border"></i>
                            Our Clients <i class="after-border"></i></span>
                        <h2 class="tp-section__title vogue-text-color wow tpfadeUp" data-wow-delay=".3s">Brands We Work
                            With
                        </h2>
                    </div>
                </div>
                <div class="logos">
                    <div class="logos-slide">
                    @if (isset($clients) && !empty($clients))
                        @foreach ($clients as $client)
                            <img src="{{ (isset($client) && !empty($client->v_image) ? getUploadedAssetUrl($client->v_image) : '') }}" alt="{{ $client->v_name }}" style="height: 100px; width: 200px;"/>
                        @endforeach
                    @endif
                    </div>
                </div>
            </div>
        </div>

         <div class="tp-it-testimonial fix pb-120">
            <div class="it-testi-wraper theme-bg-2 pt-120 pb-125">
                <div class="container">
                    <div class="row ">
                        <div class="col-12 col-md-8">
                            <div class="section-title-wraper">
                                <div class="tp-section">
                                    <span class="tp-section__subtitle vogue-text-color white-bg mb-15"><i
                                            class="before-border"></i>
                                        Testimonials</span>
                                    <h2 class="tp-section__title vogue-text-color mb-70">Users Feedback</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-none d-md-block">
                            <div class="it-testi-navigation text-end p-relative pt-40">
                                <div class="it-testi-button-prev">
                                    <i class="fas fa-long-arrow-left" style="margin-top: 20px"></i>

                                </div>
                                <div class="it-testi-button-next">
                                    <i class="fas fa-long-arrow-right" style="margin-top: 20px"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tp-it-testi-active swiper-container">
                    <div class="swiper-wrapper">
                        @if(isset($testimonials) && !empty($testimonials))
                            @foreach ($testimonials as $testimonial)
                                <div class="it-testimonial swiper-slide">
                                    <div class="it-testimonial-box p-relative">
                                        <div class="it-testimonial-box__ratting">
                                            @php
                                                $rating = isset($testimonial->v_rating) ? (int)$testimonial->v_rating : 0;
                                            @endphp

                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $rating)
                                                    <i class="fas fa-star"></i>
                                                @else
                                                    <i class="far fa-star"></i>
                                                @endif
                                            @endfor
                                        </div>
                                        <div class="it-testimonial-box__review">
                                            {{ (isset($testimonial->v_designation) && !empty($testimonial->v_designation) ? $testimonial->v_designation : '') }}
                                        </div>
                                        <div class="it-testimonial-bg">
                                            <img src="assets/img/testimonial/testi-icon-bg.png" alt="">
                                        </div>
                                    </div>
                                    <div class="tp-testimonial-reviewer d-flex align-items-center ml-40">
                                        <div class="tesi-reviewer-avata mr-15">
                                          <img src="{{ (isset($testimonial->v_image) && !empty($testimonial->v_image) ? getUploadedAssetUrl($testimonial->v_image) : '') }}" alt="deepak" style="width: 50px; height: 50px; border-radius: 50%;">
                                        </div>
                                        <div class="it-tesi-reviewer-name">
                                            <h4 class="mb-5 vogue-text-color">{{ (isset($testimonial->v_client_name) && !empty($testimonial->v_client_name) ? $testimonial->v_client_name : '') }}</h4>
                                            <span>{{ (isset($testimonial->v_states) && !empty($testimonial->v_states) ? $testimonial->v_states : '') }} </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
         <div class="tp-bs-cta-area pt-105 pb-120 theme-bg p-relative tp-ab-cta-overlay"
            data-background="{{ asset ('public/images/cta/website.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="ab-fact-item mb-30" style="text-align: center;">
                            <span class="counter-up"
                                style="display: flex; justify-content: center; align-items: center; width: 100%;">150</span>
                            <h3 class="ab-fact-item__title" style="text-align: center;"><a href="#">Successful
                                    projects</a></h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ab-fact-item mb-30" style="text-align: center;">
                            <span class="counter-up"
                                style="display: flex; justify-content: center; align-items: center; width: 100%;">120</span>
                            <h3 class="ab-fact-item__title" style="text-align: center;"><a href="#">Satisfied
                                    Clients</a></h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ab-fact-item mb-30" style="text-align: center;">
                            <span class="counter-up"
                                style="display: flex; justify-content: center; align-items: center; width: 100%;">2</span>
                            <h3 class="ab-fact-item__title" style="text-align: center;"><a href="#">Years of
                                    experience</a></h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ab-fact-item mb-30" style="text-align: center;">
                            <span class="counter-up"
                                style="display: flex; justify-content: center; align-items: center; width: 100%;">256</span>
                            <h3 class="ab-fact-item__title" style="text-align: center;"><a href="#">Full Time Staff</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <br>

        <div class="unique-client-service pt-120 pb-90">
            <div class="container">
                <div class="section-title-wrapper pb-55">
                    <div class="tp-section text-center">
                        <span class="tp-section__subtitle vogue-text-color white-bg mb-15">
                            <i class="before-border wow tpfadeUp" data-wow-delay=".3s"></i> Served More than 10
                            Industries <i class="after-border"></i>
                        </span>
                        <h2 class="tp-section__title vogue-text-color wow tpfadeUp" data-wow-delay=".3s">
                            Industries We Have Served
                        </h2>
                        <p class="text-grey wow tpfadeUp" data-wow-delay=".3s">
                            We have delivered customized solutions for more than 300 clients across more than 10
                            industries.
                        </p>
                    </div>

                    <div class="industries-grid">
                        <div class="industry-card">
                            <img src="{{ asset('public/images/iconourwork/ecommerce-1.png') }}" alt="Ecommerce">
                            <p>Ecommerce, Retail & B2B</p>
                        </div>
                        <div class="industry-card">
                            <img src="{{ asset('public/images/iconourwork/manufacture-1.png') }}" alt="Manufacturing">
                            <p>Manufacturing</p>
                        </div>
                        <div class="industry-card">
                            <img src="{{ asset('public/images/iconourwork/hospitality-1.png') }}" alt="Hospitality">
                            <p>Hospitality</p>
                        </div>
                        <div class="industry-card">
                            <img src="{{ asset('public/images/iconourwork/healthcare-1.png') }}" alt="Healthcare">
                            <p>Healthcare & Fitness</p>
                        </div>
                        <div class="industry-card">
                            <img src="{{ asset('public/images/iconourwork/on-demand-1.png') }}" alt="On-Demand">
                            <p>On-Demand Solutions</p>
                        </div>
                        <div class="industry-card">
                            <img src="{{ asset('public/images/iconourwork/logistick-1.png') }}" alt="Logistics">
                            <p>Logistics & Distribution</p>
                        </div>
                        <div class="industry-card">
                            <img src="{{ asset('public/images/iconourwork/banking-1.png') }}" alt="Banking">
                            <p>Banking, Finance & Insurance</p>
                        </div>
                        <div class="industry-card">
                            <img src="{{ asset('public/images/iconourwork/education-1.png') }}" alt="Education">
                            <p>Education & eLearning</p>
                        </div>
                        <div class="industry-card">
                            <img src="{{ asset('public/images/iconourwork/transfort-1.png') }}" alt="Transport">
                            <p>Transport & Automotive</p>
                        </div>
                        <div class="industry-card">
                            <img src="{{ asset('public/images/iconourwork/Social-1.png') }}" alt="Social Networking">
                            <p>Social Networking</p>
                        </div>
                        <div class="industry-card">
                            <img src="{{ asset('public/images/iconourwork/food-1.png') }}" alt="Food">
                            <p>Food & Restaurant</p>
                        </div>
                        <div class="industry-card">
                            <img src="{{ asset('public/images/iconourwork/realestate-1.png') }}" alt="Real Estate">
                            <p>Real Estate & Property</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Our Business Model Start -->
        <div class="unique-client-service">
            <div class="container">
                <div class="section-title-wrapper pb-55">
                    <div class="tp-section text-center">
                        <span class="tp-section__subtitle vogue-text-color white-bg mb-15">
                            <i class="before-border wow tpfadeUp" data-wow-delay=".3s"></i> Our Trusted Business Partners <i class="after-border"></i>
                        </span>
                        <p class="text-grey wow tpfadeUp" data-wow-delay=".3s">
                            We collaborate with industry-leading partners to deliver exceptional value and innovative solutions for our clients..
                        </p>
                    </div>
                    <strong>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="square-holder">
                                    <img alt="partner" src="{{ asset('public/images/businesspartners/1.png')}}" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="square-holder">
                                    <img alt="partner" src="{{ asset ('public/images/businesspartners/2.png')}}" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="square-holder">
                                    <img alt="partner" src="{{ asset ('public/images/businesspartners/3.png')}}" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="square-holder">
                                    <img alt="partner" src="{{ asset ('public/images/businesspartners/5.png')}}" />
                                </div>
                            </div>
                        </div>
                    </strong>
                </div>
            </div>
        </div>

        <!--Blog Start-->
        <div class="tp-it-testimonial fix pb-120">
            <div class="it-testi-wraper theme-bg-2 pt-120 pb-125">
                <div class="container">
                    <div class="row ">
                        <div class="col-12 col-md-8">
                            <div class="section-title-wraper">
                                <div class="tp-section">
                                    <span class="tp-section__subtitle vogue-text-color white-bg mb-15"><i
                                            class="before-border"></i>
                                        Latest News & Blogs</span>
                                    <h2 class="tp-section__title vogue-text-color">What's New in the Business Area
                                        to Know</h2>
                                    <p>Don’t focus on having a great blog. Focus on producing a blog that’s great
                                        for
                                        readers.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-none d-md-block text-end">
                            <div class="it-testi-navigation p-relative pt-40">
                                <a href="{{ config('constants.BLOG_URL') }}"
                                    class="tp-slider-btn orange-chat-color tp-btn-hover alt-color alt-bg-orange"
                                    data-animation="tpfadeUp" data-delay=".9s">
                                    <span class="mr-10">
                                        <i class="fas fa-comments"></i>
                                        <i class="fas fa-comments"></i>
                                    </span>
                                    All New Articles
                                    <b></b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="unique-card-container">
                @if (isset($blogs) && !empty($blogs))
                @foreach ($blogs as $blog)
                <div class="unique-card">
                    <img src="{{ (isset($blog->v_image) && !empty($blog->v_image) ? getUploadedAssetUrl($blog->v_image) : asset('public/images/newimages/5199286.jpg')) }}" alt="blog_image" style="height: 250px; width: 100%; object-fit: cover;">
                    <div class="unique-card-content">
                        <span class="unique-category-tag unique-tech">{{ (isset($blog) && !empty($blog->categoryInfo->v_category_name) ? $blog->categoryInfo->v_category_name : '') }}</span>
                        <h4 class="it-service__item-title"><a href="{{ config('constants.BLOG_URL') . '/' . (isset($blog) && !empty($blog->v_seo_url) ? $blog->v_seo_url : '') }}" target="_blank">{{ (isset($blog) && !empty($blog->v_title) ? $blog->v_title : '') }}</a></h4>
                        <p class="text-grey wow tpfadeUp"
                            style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">{{ $blog->v_content }}</p>
                    </div>
                    <div class="unique-card-footer">
                        <div class="unique-author">
                            <img src="{{ asset('public/images/logo/fevicon.png') }}" alt="user1" style="height: 40px; width: 40px">
                            <div>
                                <h5>{{ (isset($blog->v_author_name) && !empty($blog->v_author_name) ? $blog->v_author_name : '') }}</h5>
                                <small>{{ (isset($blog->dt_created_at) && !empty($blog->dt_created_at) ? $blog->dt_created_at : '') }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>

        <div class="seo-faq-area sv-fea-area pt-120" style="padding-top: 0px;">
            <div class="container">
                <div class="col-12 col-md-8">
                    <div class="section-title-wrapper">
                        <div class="tp-section">
                            <span class="tp-section__subtitle vogue-text-color white-bg mb-15">
                                <i class="before-border"></i> Our Answers
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="seo-faq-content mb-30">
                            <div class="section-title-wrapper">
                                <div class="tp-section">
                                    <h2 class="tp-section__title mb-45 wow tpfadeUp">Frequently Asked Questions</h2>
                                    <p class="text-grey wow tpfadeUp" data-wow-delay=".3s">Here are some of the
                                        frequently asked
                                        questions.</p>
                                </div>
                            </div>
                            <div class="accordion tp-accordion wow tpfadeUp" id="accordionExample">
                                <!-- FAQ Item 1 -->
                                <div class="accordion-item wow tpfadeUp">
                                    <h2 class="accordion-header" id="faq1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            What is your process flow for Web/App Development?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="faq1" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            We follow a highly organized and comprehensive process to ensure the
                                            website
                                            or
                                            application
                                            meets your requirements. We start with a deep analysis of the project,
                                            prepare an
                                            action
                                            plan, create user-friendly designs, develop the project, and finally
                                            deploy
                                            the
                                            website/application.
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            What are the advantages of hiring us?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="faq2"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            We have expert developers for every technology. Our expertise includes
                                            crafting highly
                                            stable
                                            code, creating reusable modules, simplifying maintenance, and developing
                                            robust app
                                            architectures.
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item 3 -->
                                <div class="accordion-item" data-aos="fade-up" data-aos-duration="2000">
                                    <h2 class="accordion-header" id="faq3">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Why hire developers from an agency instead of freelancers?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="faq3"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            We provide a one-stop solution for all your business requirements. Our
                                            team
                                            meticulously
                                            plans the Software Development Life Cycle, including analysis,
                                            monitoring,
                                            and
                                            necessary
                                            customizations from the initial project idea to deployment. Therefore,
                                            hiring a
                                            development
                                            agency offers more advantages than hiring freelancers.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="seo-faq-img text-end p-relative mb-30 wow tpfadeUp">
                            <img src="{{ asset ('public/images/faq/sv-page-faq.jpg')}}" alt="FAQ Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tp-bs-cta-area pt-105 pb-120 theme-bg p-relative tp-ab-cta-overlay"
            data-background="{{ asset ('public/images/cta/cta-ab-bg.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bs-cta-section text-center">
                            <div class="cd-intro">
                                <h3
                                    class="bs-cta-section__title ca-cta-section-title cd-headline loading-bar mb-55 ca-cta-title wow tpfadeUp">
                                    <span>Start your business journey better <br>
                                        with</span>
                                    <span class="cd-words-wrapper bs-cta-wrapper ca-cta-wrapper">
                                        <b class="is-hidden"> Urlwebwala</b>
                                        <b class="is-visible">Urlwebwala</b>
                                        <b class="is-hidden">Urlwebwala</b>
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="bs-cta-btns text-center">
                        <a href="{{ config('constants.CONTACT_URL')}}" class="tp-btn mr-30 wow tpfadeUp">Contact Us<span><i class="fas fa-long-arrow-right"></i>
                            <i class="fas fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- <div class="red-nots">
                     <img src="assets/img/cta/point-bg.png" alt="logo">
                  </div> -->
            <div class="thumb-animation d-none d-lg-block">
                <div class="like-thumb z-index-11">
                    <img src="{{ asset ('public/images/cta/like-thumb.jpg')}}" alt="cta">
                </div>
                <div class="like-thumb-border z-index-11">
                </div>
            </div>
        </div>
</main>

{{-- <script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/680543517f5f42190ba77ea5/1ipa8ttnm';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script> --}}

@endsection