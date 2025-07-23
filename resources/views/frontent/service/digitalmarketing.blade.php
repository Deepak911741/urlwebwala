@extends(config('constants.FRONTENT_FOLDER') . 'includes/header')

@section('content')

<main>
<div class="body-overlay"></div>
    <div class="breadcrumb__area theme-bg pt-120 pb-120" data-background="{{ asset('public/images/breadcrumb/breadcrumb-bg.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list mb-10">
                            <span><a href="index.php">Home</a></span>
                            <span class="dvdr dvdr-line"></span>
                            <span class="tp-bc-acive-menu">Services</span>
                        </div>
                        <h3 class="breadcrumb__title">Digital Marketing</h3>
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
                <div class="col-xl-7 col-lg-12">
                    <div class="seo-faq-img text-end p-relative mb-30 wow tpfadeUp"
                        style="visibility: visible; animation-name: tpfadeUp;">
                        <img src="{{ asset('public/images/services/digital.jpg')}}" alt="services" class="img-fluid">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12">
                    <div class="tp-sv-details-serive-left mr-10 ml-40 wow tpfadeUp" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: tpfadeUp;">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <h2 class="tp-section__title mb-25">Digital Marketing Expert Company in Ahmedabad</h2>
                                <p class="mb-0 pb-25" style="text-align: justify;">Brands don't develop overnight.
                                    Before they become well-known, they experience a lot. Experts who are familiar with
                                    the subtleties are needed for the brand-building process. An Ahmedabad-based digital
                                    marketing agency might assist you in reaching your objectives if you're seeking for
                                    a larger marketing team.<br>
                                    <br>
                                    Whatever your location, Urlwebwala Corporation LLP serves as your community social
                                    media firm. In order to aid you in building brand recognition, we also curate and
                                    carry out brand campaigns and competitions. We support you as you begin, expand, and
                                    maintain online scalability.
                                </p>
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
        <div class="sv-page-fea-img-1" data-background="{{ asset('public/images/services/facebook.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-sv-fea-ab-content mr-60">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <h2 class="tp-section__title text-white mb-25 wow tpfadeUp">Facebook Marketing</h2>
                                <p class="mb-0 pb-55 wow tpfadeUp" data-wow-delay=".3s" style="text-align: justify;">
                                    Through Facebook Marketing Services, you may target the appropriate demographic. We
                                    are an Ahmedabad-based social media marketing company that produces results. If you
                                    require a dedicated Social Media Manager to manage your Facebook brand page, get in
                                    touch with us. We can assist you with creating a Facebook page, managing a brand
                                    page, creating social media graphics for daily posting, and more.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-sv-page-feature-area black-bg p-relative pt-120 pb-120">
        <div class="sv-page-fea-img-2" data-background="{{ asset('public/images/services/instagram.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="tp-sv-fea-ab-content ml-80">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <h2 class="tp-section__title text-white mb-25 wow tpfadeUp">
                                    Instagram Marketing</h2>
                                <p class="mb-0 pb-55 wow tpfadeUp" data-wow-delay=".3s" style="text-align: justify;">You
                                    absolutely need our Instagram Marketing services if you publish on your Instagram
                                    brand page and nothing happens. You can stand out on Instagram with the aid of our
                                    social media marketing services. When you inquire about our process, we will begin
                                    by bringing your brand to life on Instagram.</p>
                            </div>
                        </div>
                        <div class="sv-details-feature-wrapper">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="sv-details-fea-item wow tpfadeRight">
                                        <div class="sv-details-fea-item__icon mb-20">
                                            <img src="{{ asset('public/images/icons/bulb-icon.png')}}" alt="icons">
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
        <div class="sv-page-fea-img-1" data-background="{{ asset('public/images/services/tweeter.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-sv-fea-ab-content mr-60">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <h2 class="tp-section__title text-white mb-25 wow tpfadeUp">Twitter Marketing</h2>
                                <p class="mb-0 pb-55 wow tpfadeUp" data-wow-delay=".3s" style="text-align: justify;">Our
                                    Twitter marketing services are tailored to the needs of your company. Find out from
                                    us how Twitter marketing may enhance your brand's marketing. Both free and paid
                                    Twitter campaigns are curated with our assistance. Today, let's speak about getting
                                    viral if you want to trend.</p>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-sv-page-feature-area black-bg p-relative pt-120 pb-120">
        <div class="sv-page-fea-img-2" data-background="{{ asset('public/images/services/linkdinb.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="tp-sv-fea-ab-content ml-80">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <h2 class="tp-section__title text-white mb-25 wow tpfadeUp">
                                    LinkedIn Marketing</h2>
                                <p class="mb-0 pb-55 wow tpfadeUp" data-wow-delay=".3s" style="text-align: justify;">
                                    LinkedIn marketing services broaden the scope of internet marketing by targeting
                                    potential stakeholders and workers. If a firm is seeking for a Linkedin Page
                                    Management Expert, it indicates that they have a greater chance of finding the team
                                    they want. Contact us right now!</p>
                            </div>
                        </div>
                        <div class="sv-details-feature-wrapper">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="sv-details-fea-item wow tpfadeRight">
                                        <div class="sv-details-fea-item__icon mb-20">
                                            <img src="{{ asset('public/images/icons/bulb-icon.png')}}" alt="icons">
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
        <div class="sv-page-fea-img-1" data-background="{{ asset('public/images/services/youtube.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-sv-fea-ab-content mr-60">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <h2 class="tp-section__title text-white mb-25 wow tpfadeUp">Youtube Marketing</h2>
                                <p class="mb-0 pb-55 wow tpfadeUp" data-wow-delay=".3s" style="text-align: justify;">
                                    YouTube video marketing is growing in popularity as content changes since it is
                                    simpler to watch and understand. Compared to other types of material, YouTube
                                    content is the most engaging. It increases a company's chances of reaching the
                                    target market more quickly and in a much more original way, such as through video
                                    optimization. Own a YouTube channel yourself? Let us handle your marketing concerns!
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