@extends(config('constants.FRONTENT_FOLDER') . 'includes/header')

@section('content')

<main>
    <div class="breadcrumb__area theme-bg pt-120 pb-120" data-background="{{ asset ('public/images/breadcrumb/breadcrumb-bg.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list mb-10">
                            <span><a href="{{ config('constants.HOME_URL') }}">Home</a></span>
                            <span class="dvdr dvdr-line"></span>
                            <span class="tp-bc-active-menu">Company</span>
                        </div>
                        <h3 class="breadcrumb__title">Career</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="law-about-area pt-120 pb-90">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 wow tpfadeUp">
                    <div class="law-about-left p-relative mb-30">
                        <div class="row gx-4">
                            <div class="col-md-6">
                                <div class="law-about-left-title mt-60 mb-20 vogue-bg">
                                    <span><i class="flaticon-global"></i></span>
                                    <span>Good Expertise in Website and App Development</span>
                                </div>
                               <div class="law-about-img-1">
                                    <img src="{{ asset ('public/images/about/aboutwebwala.png')}}"
                                        alt=" Expertise in Development">
                                </div>
                            </div>
                            <div class="col-md-6">
                               <div class="law-about-img-2">
                                    <img src="{{ asset ('public/images/about/aboutUrl.png')}}" alt="About Us">
                                </div>
                            </div>
                        </div>
                        <div class="law-icon law-icon-text">
                            <div class="d-inline-block p-relative">
                                <div>
                                    <img src="{{ asset ('public/images/about/law-sm-img-3.png')}}"
                                        alt="Years of Experience">
                                </div>
                                <div class="law-icon-info">
                                    <span><b>2+</b> Years Experience</span>
                                </div>
                            </div>
                        </div>
                        <div class="red-dot law-ab-dot"></div>
                    </div>
                </div>
                <div class="col-xl-6 wow tpfadeUp">
                    <div class="section-title-wrapper mb-40">
                        <div class="tp-section">
                            <h2 class="tp-section__title wow tpfadeUp mb-30">About the Company</h2>
                            <p class="text-grey wow tpfadeUp" data-wow-delay=".3s">
                                <b>Urlwebwala</b> is a team of highly creative and innovative individuals contributing
                                to the company's success. We have a welcoming and stimulating culture that hones our
                                highly-skilled team players. Be part of our wonderful team!
                            </p>

                            <div class="why-urlwebwala">
                                <h3>Why Urlwebwala Corporation LLP?</h3>
                                <hr>
                                <ul>
                                    <li><i class="fa fa-check-circle"></i> Employee-friendly work environment</li>
                                    <li><i class="fa fa-check-circle"></i> Challenging work and opportunities for faster
                                        career growth</li>
                                    <li><i class="fa fa-check-circle"></i> Employee engagement activities</li>
                                    <li><i class="fa fa-check-circle"></i> Five-day working policy</li>
                                    <li><i class="fa fa-check-circle"></i> 16 leaves per annum plus festivals and
                                        government holidays</li>
                                    <li><i class="fa fa-check-circle"></i> Monthly celebrations</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Style Section -->
    <style>
    .why-urlwebwala {
        padding: 20px;
        margin-top: 20px;
    }

    .why-urlwebwala h3 {
        color: var(--tp-theme-vogue);
        font-size: 20px;
        margin-bottom: 10px;
    }

    .why-urlwebwala hr {
        border: 0;
        height: 2px;
        background-color: var(--tp-theme-redical);
        width: 50px;
        margin-bottom: 20px;
    }

    .why-urlwebwala ul {
        list-style: none;
        padding: 0;
    }

    .why-urlwebwala li {
        margin-bottom: 10px;
        font-size: 16px;
        color: #333;
        display: flex;
        align-items: center;
    }

    .why-urlwebwala li i {
        color: var(--tp-theme-redical);
        font-size: 18px;
        margin-right: 10px;
    }
    </style>

    <!-- Current Openings Section start -->
    <div class="tp-it-service pt-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-wrapper pb-55">
                        <div class="tp-section text-center">
                            <span class="tp-section__subtitle vogue-text-color white-bg mb-15 wow tpfadeUp">
                                <i class="before-border"></i>
                                Current Openings <i class="after-border"></i>
                            </span>
                            <p class="mb-0">
                                Ready to take your career to the next level? Submit your resume to
                                <b>hr@urlwebwala.com</b> or call our HR team <b>+91 8084033396</b> to get started!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row it-sv-counter">
                <!-- PHP Internship -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="it-service__item text-center wow tpfadeUp" data-wow-delay=".4s"
                        style="position: relative; height: 420px;">
                        <div class="current-openings"
                            style="position: absolute; top: 10px; left: 10px; background: var(--tp-theme-orange); color: #fff; padding: 5px 10px; border-radius: 5px; font-size: 14px; font-weight: bold;">
                            Openings: 2
                        </div>

                        <div class="preferred-experience"
                            style="position: absolute; top: 10px; right: 10px; background: var(--tp-theme-redical); color: #fff; padding: 5px 10px; border-radius: 5px; font-size: 14px;">
                            Experience: 0 - 1 Years
                        </div>

                        <div class="it-service__item-img mb-35">
                            <img src="{{ asset('public/images/services/icon/digitalmarketing.png')}}" alt="PHP Internship" class="w-full"
                                style="max-height: 100px; object-fit: contain;">
                        </div>
                        <h3 class="it-service__item-title mb-20">
                            <a href="{{ config('constants.PHPINTERNSHIP_URL')}}">Digital Marketing (Work From Home - Remote)</a>
                        </h3>
                        <p class="mb-0">
                            Enhance brand visibility through SEO, social media, content creation, and paid ads. Develop
                            strategies, analyze
                            performance, and drive online engagement for business growth.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="center-container">
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdqBX3XPo447yZ-DgonR9oRX9kZqPAx0Sd5y1Lw4dx6O3kfiw/viewform?usp=dialog"
            class="tp-slider-btn orange-chat-color tp-btn-hover alt-color alt-bg-orange" data-animation="tpfadeUp"
            data-delay=".9s">
            <span class="mr-10">
                <i class="fas fa-comments"></i>
                <i class="fas fa-comments"></i>
            </span>
            Apply Now
            <b></b>
        </a>
    </div>

    <style>
    .center-container {
        display: flex;
        justify-content: center;
        align-items: center;
        /* Adjust the height as needed */
        text-align: center;
    }
    </style>
</main>

@endsection