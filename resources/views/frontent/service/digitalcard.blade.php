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
                            <span><a href="{{ config('constants.HOME_URL') }}">Home</a></span>
                            <span class="dvdr dvdr-line"></span>
                            <span class="tp-bc-acive-menu">Services</span>
                        </div>
                        <h3 class="breadcrumb__title">Digital Card Design</h3>
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
                                <h2 class="tp-section__title mb-25">Digital Card Design</h2>
                                <p class="mb-0 pb-25" style="text-align: justify;">We employ the most recent designs at
                                    Urlwebwala Corporation LLP to assist you with your business cards. Learn more about
                                    our unique business card design services in Ahmedabad by looking at some of our
                                    examples. We aim to give any degree of assistance and support by providing
                                    high-performing services, removing your concerns regarding your brand
                                    identification.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tp-portfoliop-page-area ">
        <div class="container">
            <div class="tp-portfolio-header mb-30">
                <div class="row">
                    <div class="col-12">

                        <h2 class="tp-section__title mb-25" style="text-align:center" ;>Our Work</h2>
                    </div>
                </div>
            </div>
            <div class="row tp-portfolio-isotop-active">
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img design consultancy">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/services/1.jpg')}}" alt="services">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img business support">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/services/6.jpg')}}" alt="services">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img consultancy business">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/services/4.jpg')}}" alt="services">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img design support">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/services/3.jpg')}}" alt="services">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img business consultancy">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/services/5.jpg')}}" alt="services">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 tp-portfolio-item mb-25 w-img design">
                    <div class="pf-item-wrapper p-relative">
                        <div class="pf-single-item">
                            <img src="{{ asset ('public/images/services/2.jpg')}}" alt="services">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="seo-faq-area sv-fea-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="seo-faq-cotent mb-30">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <h2 class="tp-section__title mb-45 wow tpfadeUp">Our Companys
                                    Some Q &Answer
                                </h2>
                            </div>
                        </div>
                        <div class="accordion tp-accordion wow tpfadeUp" id="accordionExample">
                            <div class="accordion-item wow tpfadeUp">
                                <h2 class="accordion-header" id="faq1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Usability Testing
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="faq1"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        On the other hand we denounce with righteous indignation &amp;
                                        dislike men who are so beguiled and demoralized by the charms
                                        of pleasure of the moment.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="faq2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Design Making &amp; Develop
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="faq2"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Research helps you plan the best way to get your product from the
                                        manufacturer
                                        to the retail shelf. In addition to deciding which retailers should carry
                                        your
                                        product, you should determine where your inventory will be held.Research
                                        helps.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item " data-aos="fade-up" data-aos-duration="2000">
                                <h2 class="accordion-header" id="faq3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Refund Policy
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="faq3"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        On the other hand we denounce with righteous indignation &amp;
                                        dislike men who are so beguiled and demoralized by the charms
                                        of pleasure of the moment.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="seo-faq-img text-end p-relative mb-30 wow tpfadeUp">
                        <img src="{{ asset ('public/images//faq/sv-page-faq.jpg')}}" alt="faq">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection