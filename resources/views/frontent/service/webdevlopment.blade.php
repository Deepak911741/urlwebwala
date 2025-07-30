@extends(config('constants.FRONTENT_FOLDER') . 'includes/header')

@section('content')

<main>
<div class="body-overlay"></div>
    <div class="breadcrumb__area theme-bg pt-120 pb-120" data-background="{{ asset ('public/images/breadcrumb/breadcrumb-bg.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list mb-10">
                            <span><a href="{{ config('constants.HOME_URL') }}">Home</a></span>
                            <span class="dvdr dvdr-line"></span>
                            <span class="tp-bc-acive-menu">Services</span>
                        </div>
                        <h3 class="breadcrumb__title">Web Development</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tp-sv-detials-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="tp-sv-details-serive-left wow tpfadeUp">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="sv-detials-sv-item mb-30">
                                    <div class="sv-detials-sv-item__icon">
                                        <span><i class="flaticon-computer"></i></span>
                                        <!-- flaticon-analytics -->
                                    </div>
                                    <h3 class="sv-detials-sv-item__title"><a href="{{ config('constants.SERVICE_URL') }}"> Clean Code</a></h3>
                                    <span class="counter-number">01</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="sv-detials-sv-item mb-30">
                                    <div class="sv-detials-sv-item__icon">
                                        <span><i class="flaticon-computer"></i></span>
                                        <!-- flaticon-analytics -->
                                    </div>
                                    <h3 class="sv-detials-sv-item__title"><a href="{{ config('constants.SERVICE_URL') }}"> On Time Delivery</a>
                                    </h3>
                                    <span class="counter-number">02</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="sv-detials-sv-item mb-30">
                                    <div class="sv-detials-sv-item__icon">
                                        <span><i class="flaticon-computer"></i></span>
                                        <!-- flaticon-analytics -->
                                    </div>
                                    <h3 class="sv-detials-sv-item__title"><a href="{{ config('constants.SERVICE_URL') }}"> Amazing Graphics</a>
                                    </h3>
                                    <span class="counter-number">03</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="sv-detials-sv-item mb-30">
                                    <div class="sv-detials-sv-item__icon">
                                        <span><i class="flaticon-computer"></i></span>
                                        <!-- flaticon-analytics -->
                                    </div>
                                    <h3 class="sv-detials-sv-item__title"><a href="{{ config('constants.SERVICE_URL') }}"> Speed Optimized</a>
                                    </h3>
                                    <span class="counter-number">04</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="tp-sv-details-serive-left mr-10 ml-40 wow tpfadeUp" data-wow-delay=".3s">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <h1><b>A website development company in india by Urlwebwala Corporation LLP applied
                                        unique solutions for your business </b></h1><br>
                                <p class="mb-0 pb-25">On various website development platforms, our web development
                                    specialists at Urlwebwala Corporation LLP have completed a wide range of business
                                    projects. PHP and WordPress are some of these. As a reputable web development
                                    company in Ahmedabad, India, we make every effort to win our clients' utmost respect
                                    and happiness.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service end  -->

    <!-- feature area start -->
    <div class="tp-sv-page-feature-area black-bg p-relative pt-120 pb-120">
        <div class="sv-page-fea-img-1" data-background="{{ asset ('public/images/services/sv-page-fea-img-1.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-sv-fea-ab-content mr-60">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <h2 class="tp-section__title text-white mb-25 wow tpfadeUp">
                                    Wordpress Web Development</h2>
                                <p class="mb-0 pb-55 wow tpfadeUp" data-wow-delay=".3s" style="text-align: justify;">A
                                    successful website is essential for business development. A website is much more
                                    than just a repository for photos and written material. Any company's website
                                    determines its future. Contact the top web development company in Ahmedabad if
                                    you're seeking for custom WordPress web development services. To give our clients
                                    the greatest outcomes, we also provide plugin development services.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-sv-page-feature-area black-bg p-relative pt-120 pb-120">
        <div class="sv-page-fea-img-2" data-background="{{ asset ('public/images/services/php.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="tp-sv-fea-ab-content ml-80">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <h2 class="tp-section__title text-white mb-25 wow tpfadeUp">PHP Website Development</h2>
                                <p class="mb-0 pb-55 wow tpfadeUp" data-wow-delay=".3s" style="text-align: justify;">Are
                                    you trying to find a PHP site? Contact us today to boost your company's image with a
                                    custom PHP website or PHP web application. We provide affordable PHP website
                                    development services in Ahmedabad. In accordance with your needs, we may also create
                                    websites and build PHP code.</p>
                            </div>
                        </div>
                        <div class="sv-details-feature-wrapper">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="sv-details-fea-item wow tpfadeRight">
                                        <div class="sv-details-fea-item__icon mb-20">
                                            <img src="{{ asset ('public/images/icons/bulb-icon.png')}}" alt="icons">
                                        </div>
                                        <h3 class="sv-details-fea-item__title">Key of success</h3>
                                        <div class="sv-details-fea-item__arrow">
                                            <span><i class="fal fa-long-arrow-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sv-details-fea-item wow tpfadeLeft">
                                        <div class="sv-details-fea-item__icon mb-20">
                                            <img src="{{ asset('public/images/icons/tv-icon.png')}}" alt="icons">
                                        </div>
                                        <h3 class="sv-details-fea-item__title">Stone for business</h3>
                                        <div class="sv-details-fea-item__arrow">
                                            <span><i class="fal fa-long-arrow-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-sv-page-feature-area black-bg p-relative pt-120 pb-120">
        <div class="sv-page-fea-img-1" data-background="{{ asset ('public/images/services/ecommerce.jpg')}}"
            style="background-image: url({{ asset ('public/images/services/sv-page-fea-img-1.html')}});"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-sv-fea-ab-content mr-60">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <h2 class="tp-section__title text-white mb-25 wow tpfadeUp"
                                    style="visibility: visible; animation-name: tpfadeUp;">Ecommerce Website Development
                                </h2>
                                <p class="mb-0 pb-55 wow tpfadeUp" data-wow-delay=".3s"
                                    style="visibility: visible; animation-delay: 0.3s; animation-name: tpfadeUp; text-align: justify;">
                                    Are you interested in selling your fantastic goods online? Have our skilled
                                    Ecommerce Web Developer in Ahmedabad build your online store. Every website is
                                    original and handcrafted from the ground up. Each eCommerce website is tailored to
                                    the needs of the business based on the requirements. Additionally, we assist you
                                    with payment gateway, material for product descriptions, Ecommerce SEO, and frequent
                                    assistance throughout your highest sales times.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection