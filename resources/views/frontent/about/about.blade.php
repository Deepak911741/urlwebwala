@extends(config('constants.FRONTENT_FOLDER') . 'includes/header')

@section('content')
<main>
    <div class="breadcrumb__area theme-bg pt-120 pb-120" data-background="{{ asset ('public/images/breadcrumb/breadcrumb-bg.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list mb-10">
                            <span><a href="{{ config('constants.HOME_URL')}}">Home</a></span>
                            <span class="dvdr dvdr-line"></span>
                            <span class="tp-bc-acive-menu">About</span>
                        </div>
                       <h3 class="breadcrumb__title">Who We Are</h3> 
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
                                <div class="law-about-left-title mt-60 mb-20  vogue-bg ">
                                    <span><i class="flaticon-global"></i></span>
                                    <span>Good Expertise In Web And App Development</span>
                                </div>
                                <div class="law-about-img-1">
                                    <img src="{{ asset ('public/images/about/aboutwebwala.png')}}" alt="">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="law-about-img-2">
                                    <img src="{{ asset ('public/images/about/Aboutus3.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="law-icon law-icon-text ">
                            <div class="d-inline-block p-relative">
                                <div>
                                    <img src="{{ asset ('public/images/about/law-sm-img-3.png')}}" alt="">
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
                            <h2 class="tp-section__title wow tpfadeUp mb-30">We help you build and <br>
                                grow your business.
                            </h2>
                            <p class="text-grey wow tpfadeUp" data-wow-delay=".3s"><b>Urlwebwala Pvt.Ltd</b> is an
                                all-inclusive, top-notch software development business in India that also provides
                                website design,app development, social media post , digital card , logo design ,web
                                hosting,festival posts and software development. We have more expertise in front-end and
                                back-end scripting or programming for the creation of software products. We operate with
                                a high degree of software development integrity and are constantly expanding our skill
                                set and tech knowledge. Our technical expertise, along with our great awareness of the
                                technological developments affecting the online retail industry, has enabled us to
                                provide the most creative solutions.</p>
                            <p class="text-grey wow tpfadeUp" data-wow-delay=".3s">Custom software solutions are
                                delivered by <b>Urlwebwala Corporation LLP</b> on schedule and within budget. Our team
                                is enthusiastic about what we do and enjoys working in a setting that encourages us to
                                challenge ourselves.</p>
                        </div>
                    </div>
                    <div class="row gx-md-5">
                        <div class="col-sm-6 col-12">
                            <div class="low-ab-feature d-flex align-items-center">
                                <div class="low-ab-fea-icon mr-20">
                                    <img src="{{ asset ('public/images/about/icon-ab-chat.png')}}" alt="">
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
                                    <img src="{{ asset ('public/images/about/icon-tp-laptop.png')}}" alt="">
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

    <div class="tp-bs-cta-area pt-105 pb-120 theme-bg p-relative tp-ab-cta-overlay"
        data-background="assets/img/cta/website.jpg">
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

    <style>
    .industry-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 15px;
        border-radius: 10px;
        background: var(--tp-theme-bg);
        /* Light grey background */
        width: 100%;
        min-height: 150px;
        position: relative;
        overflow: hidden;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        /* Soft shadow with opacity */
    }

    /* Adding the gradient effect on the left side */
    .industry-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 6px;
        /* Adjust width as needed */
        height: 100%;
        background: linear-gradient(to bottom,
                var(--tp-theme-redical),
                var(--tp-theme-vogue),
                var(--tp-theme-orange));
        border-radius: 10px 0 0 10px;
    }


    .industries-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 30px;
        justify-content: center;
        align-items: center;
        padding: 20px 0;
    }

    @media (min-width: 1200px) {
        .industries-grid {
            grid-template-columns: repeat(6, 1fr);
        }
    }

    @media (max-width: 1199px) {
        .industries-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    @media (max-width: 768px) {
        .industries-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
        .industries-grid {
            grid-template-columns: repeat(1, 1fr);
        }
    }

    .industry-card img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 10px;
    }

    .industry-card p {
        font-size: 16px;
        font-weight: bold;
        color: #333;
        text-align: center;
    }
    </style>
    <div class="tp-about-deatials-service theme-bg pt-120 pb-90">
        <div class="container">
            <div class="section-title-wrapper pb-55">
                <div class="tp-section text-center">
                    <span class="tp-section__subtitle vogue-text-color white-bg mb-15 wow tpfadeUp"><i
                            class="before-border"></i>
                        Why Choose Us? <i class="after-border"></i></span>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 wow tpfadeUp">
                    <div class="tp-about-sv-content">
                        <h1>Why you should work with us?</h1>
                    </div>
                    <br>
                    <p class="text-grey wow tpfadeUp;" style="visibility: visible; font-size: 18px;" data-wow-delay=".3s"  >
                        At Urlwebwala, we do more than just complete projects. Our primary objective is to build
                        enduring
                        relationships founded on mutual success, trust, and confidentiality. With a team of dedicated
                        professionals,
                        we ensure that your business receives the customized solutions you need. Our unwavering
                        commitment to
                        quality
                        and innovative approaches makes us a dependable partner for your digital transformation journey.
                    </p>
                    <p class="text-grey wow tpfadeUp" data-wow-delay=".3s">
                        <b style="visibility: visible; font-size: 18px;">Here is why we stand out:</b>
                    </p>
                    <ul class="text-grey wow tpfadeUp" data-wow-delay=".3s">
                        <li style="visibility: visible; font-size: 18px;"><b>Tailored Solutions &nbsp:</b> Customized strategies to meet your unique project needs.
                        </li>
                        <li style="visibility: visible; font-size: 18px;"><b>Expert Team &nbsp:</b> Skilled professionals delivering impactful results.</li>
                        <li style="visibility: visible; font-size: 18px;"><b>Risk Management &nbsp:</b> Proactive measures to ensure smooth project execution.</li>
                        <li style="visibility: visible; font-size: 18px;"><b>Maximized ROI &nbsp:</b> Solutions designed to optimize your returns.</li>
                        <li style="visibility: visible; font-size: 18px;"><b>Flexible Models &nbsp:</b> Engagement options to match your business preferences.</li>
                        <li style="visibility: visible; font-size: 18px;"><b>Transparent Communication &nbsp:</b> Open updates to save time and costs.</li>
                        <li style="visibility: visible; font-size: 18px;"><b>Long-Term Partnerships &nbsp:</b> Building relationships that grow with your success.
                        </li>
                    </ul>
                    <br>
                    <div class="tp-sv-tabs-btn-wrapper mb-30">
                        <a href="{{ config('constants.SERVICE_URL')}}" class="tp-white-btn">
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
                        <img src="{{ asset ('public/images/services/web_developing.gif')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta are  -->
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
                                        <b class="is-hidden"> Urlwebwala LLP</b>
                                        <b class="is-visible">Urlwebwala LLP</b>
                                        <b class="is-hidden">Urlwebwala LLP</b>
                                    </span>

                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="bs-cta-btns text-center">
                        <a href="{{ config('constants.CONTACT_URL') }}" class="tp-btn mr-30 wow tpfadeUp">Contact Us<span><i
                                    class="fas fa-long-arrow-right"></i>
                                <i class="fas fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="thumb-animation d-none d-lg-block">
                <div class="like-thumb z-index-11">
                    <img src="{{ asset('public/images/cta/like-thumb.jpg')}}" alt="cta">
                </div>
                <div class="like-thumb-border z-index-11">
                </div>
            </div>
        </div>
</main>

@endsection