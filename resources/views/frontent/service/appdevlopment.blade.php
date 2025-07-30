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
                        <h3 class="breadcrumb__title">App Development</h3>
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
                                    <h3 class="sv-detials-sv-item__title"><a href="service.html">Effective App
                                            Design</a></h3>
                                    <span class="counter-number">01</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="sv-detials-sv-item mb-30">
                                    <div class="sv-detials-sv-item__icon">
                                        <span><i class="flaticon-computer"></i></span>
                                        <!-- flaticon-analytics -->
                                    </div>
                                    <h3 class="sv-detials-sv-item__title"><a href="service.html">Competitive Pricing</a>
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
                                    <h3 class="sv-detials-sv-item__title"><a href="service.html">On Time Delivery</a>
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
                                    <h3 class="sv-detials-sv-item__title"><a href="service.html">100% Satisfaction</a>
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
                                <h2 class="tp-section__title mb-25">App Development</h2>
                                <p class="mb-0 pb-25">In order to develop a large number of mobile applications with
                                    extensive customization that precisely fit the needs of our clients, our mobile
                                    application development specialists continuously employ cutting-edge technology and
                                    tools.</p>
                                <p class="mb-0 pb-25">Demand created by several mobile apps is continually growing in
                                    almost every industry. In order to build and develop innovative apps, our mobile app
                                    development team in Ahmedabad, India, serves as an accelerator.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tp-sv-page-feature-area black-bg p-relative pt-120 pb-120">
        <div class="sv-page-fea-img-1" data-background="{{ asset ('public/images/services/android.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-sv-fea-ab-content mr-60">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <h2 class="tp-section__title text-white mb-25 wow tpfadeUp">Android App Development</h2>
                                <p class="mb-0 pb-55 wow tpfadeUp" data-wow-delay=".3s" style="text-align: justify;">
                                    Considering creating your first app? Years of expertise have been accumulated by our
                                    experts and software developers in creating user-friendly apps. Offering Android App
                                    Development Services, we are skilled in serving and creating solutions for both
                                    small and large businesses. Do you want to create a business app? Searching for an
                                    Ahmedabad-based Android app development company? Request a price today!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-sv-page-feature-area black-bg p-relative pt-120 pb-120">
        <div class="sv-page-fea-img-2" data-background="{{ asset ('public/images/services/oios.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="tp-sv-fea-ab-content ml-80">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <h2 class="tp-section__title text-white mb-25 wow tpfadeUp">iPhone App Development</h2>
                                <p class="mb-0 pb-55 wow tpfadeUp" data-wow-delay=".3s" style="text-align: justify;">Are
                                    you trying to find an app for your iOS user base? Urlwebwala Corporation LLP is a
                                    reputable brand for an iPhone app development company in Ahmedabad, so you can stop
                                    your search right now. All of your requirements for business and iPhone app
                                    development may be met by us. Using the most recent technology, we create clever
                                    business solutions. For our clients, we make sure everything is easily accessible.
                                </p>
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
                                            <img src="{{ asset ('public/images/icons/tv-icon.png')}}" alt="icons">
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
        <div class="sv-page-fea-img-1" data-background="{{ asset ('public/images/services/Flutter.png')}}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-sv-fea-ab-content mr-60">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <h2 class="tp-section__title text-white mb-25 wow tpfadeUp">Flutter App Development</h2>
                                <p class="mb-0 pb-55 wow tpfadeUp" data-wow-delay=".3s" style="text-align: justify;">One
                                    of the most widely used platforms for creating mobile applications is Flutter. With
                                    only one codebase, you can create stunning native apps for iOS and Android. We
                                    create beautiful, intuitive software. Our major objective is to make your concept a
                                    reality. Your app has no restrictions, regardless of whether it is intended for a
                                    small business or a corporation. We have the ideal option for you, no matter what
                                    your budget is.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection