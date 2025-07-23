@extends(config('constants.FRONTENT_FOLDER') . 'includes/header')

@section('content')

<div class="body-overlay"></div>
<main>
    <div class="breadcrumb__area theme-bg pt-120 pb-120" data-background="{{ asset ('public/images/breadcrumb/breadcrumb-bg.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list mb-10">
                            <span><a href="index.php">Home</a></span>
                            <span class="dvdr dvdr-line"></span>
                            <span class="tp-bc-acive-menu">Services</span>
                        </div>
                        <h3 class="breadcrumb__title">QA Testing</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- service start  -->
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
                                    <h3 class="sv-detials-sv-item__title"><a href="service.html"> Definition &
                                            Structure</a></h3>
                                    <span class="counter-number">01</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="sv-detials-sv-item mb-30">
                                    <div class="sv-detials-sv-item__icon">
                                        <span><i class="flaticon-computer"></i></span>
                                        <!-- flaticon-analytics -->
                                    </div>
                                    <h3 class="sv-detials-sv-item__title"><a href="service.html"> Analysis &
                                            Planning</a></h3>
                                    <span class="counter-number">02</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="sv-detials-sv-item mb-30">
                                    <div class="sv-detials-sv-item__icon">
                                        <span><i class="flaticon-computer"></i></span>
                                        <!-- flaticon-analytics -->
                                    </div>
                                    <h3 class="sv-detials-sv-item__title"><a href="service.html"> Solutions &
                                            Findings</a></h3>
                                    <span class="counter-number">03</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="sv-detials-sv-item mb-30">
                                    <div class="sv-detials-sv-item__icon">
                                        <span><i class="flaticon-computer"></i></span>
                                        <!-- flaticon-analytics -->
                                    </div>
                                    <h3 class="sv-detials-sv-item__title"><a href="service.html"> Recommendations</a>
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
                                <h2 class="tp-section__title mb-25">QA Testing</h2>
                                <p class="mb-0 pb-25" style="text-align: justify;">Urlwebwala Corporation LLP
                                    WebServices provide for testing and quality assurance are essential to our software
                                    development process. At each stage of the event flow, our quality assurance team
                                    safeguards your project objectives. They identify and thwart every potential
                                    development flaw, continually enhancing the functioning of the best product, and
                                    making sure that customers have the best possible experience. Understanding the
                                    various QA testing types is necessary before we can establish a standardised QA
                                    methodology. The testing kinds and tools that will be useful during the review are
                                    examined below.</p>
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
        <div class="sv-page-fea-img-1" data-background="{{ asset ('public/images/services/functional.png')}}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-sv-fea-ab-content mr-60">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <h2 class="tp-section__title text-white mb-25 wow tpfadeUp">Functional Testing</h2>
                                <p class="mb-0 pb-55 wow tpfadeUp" data-wow-delay=".3s" style="text-align: justify;">By
                                    paying attention to buttons, forms, menus, and links, you may determine throughout
                                    the functional testing procedure if the place functions as intended. Additionally,
                                    make sure that any automatic answers are established properly and that all form
                                    entries are sent to the appropriate parties.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-sv-page-feature-area black-bg p-relative pt-120 pb-120">
        <div class="sv-page-fea-img-2" data-background="{{ asset ('public/images/services/performance.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="tp-sv-fea-ab-content ml-80">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <h2 class="tp-section__title text-white mb-25 wow tpfadeUp">Performance Testing</h2>
                                <p class="mb-0 pb-55 wow tpfadeUp" data-wow-delay=".3s" style="text-align: justify;">
                                    When it comes to website quality testing, performance testing is one of the most
                                    crucial phases. You would measure the speed at which a page loaded, key web
                                    performance indicators, and how the site handled attempted overloads during this
                                    phase. For instance, doing a spike test to gauge the effects of a sudden increase in
                                    site visits</p>
                            </div>
                        </div>
                        <div class="sv-details-feature-wrapper">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="sv-details-fea-item wow tpfadeRight">
                                        <div class="sv-details-fea-item__icon mb-20">
                                            <img src="{{ asset ('public/images//icons/bulb-icon.png')}}" alt="icons">
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
                                            <img src="{{ asset ('public/images//icons/tv-icon.png')}}" alt="icons">
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
        <div class="sv-page-fea-img-1" data-background="{{ asset ('public/images/services/usertesting.png')}}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-sv-fea-ab-content mr-60">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <h2 class="tp-section__title text-white mb-25 wow tpfadeUp">User Testing</h2>
                                <p class="mb-0 pb-55 wow tpfadeUp" data-wow-delay=".3s" style="text-align: justify;">
                                    User testing makes ensuring that website users can easily browse the site, get the
                                    information they need to assist themselves, and take the desired action. You would
                                    evaluate the site's search capabilities, menu structure, and content hierarchy
                                    during user testing.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-sv-page-feature-area black-bg p-relative pt-120 pb-120">
        <div class="sv-page-fea-img-2" data-background="{{ asset ('public/images/services/protection.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="tp-sv-fea-ab-content ml-80">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <h2 class="tp-section__title text-white mb-25 wow tpfadeUp">Security Testing</h2>
                                <p class="mb-0 pb-55 wow tpfadeUp" data-wow-delay=".3s" style="text-align: justify;">By
                                    doing security testing, you will be able to identify and fix any weaknesses on the
                                    site and defend it against potential assaults. Several of the topics you'll examine
                                    as you move through this phase include logins, restricted sections, payment
                                    gateways, and third-party connections. Make that the content management system
                                    (Urlwebwala Corporation LLP) you've chosen has the most recent security upgrades,
                                    whether it's Drupal, WordPress, or another option.</p>
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
        <div class="sv-page-fea-img-1" data-background="{{ asset ('public/images/services/support1.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-sv-fea-ab-content mr-60">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <h2 class="tp-section__title text-white mb-25 wow tpfadeUp">Support & Maintenance</h2>
                                <p class="mb-0 pb-55 wow tpfadeUp" data-wow-delay=".3s" style="text-align: justify;">
                                    Updates to mobile applications are essential for the success of any organisation,
                                    whether it be small, medium-sized, or big. We'll work with you to improve and
                                    modernise your application with a focus on customer data and their business needs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection