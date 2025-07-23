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
                        <h3 class="breadcrumb__title">Hosting Services</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- service start -->
    <div class="tp-sv-detials-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-12 mb-4 mb-lg-0">
                    <div class="seo-faq-img text-end p-relative mb-30 wow tpfadeUp"
                        style="visibility: visible; animation-name: tpfadeUp;">
                        <img src="{{ asset ('public/images/services/hosting1.png')}}" alt="services" class="img-fluid">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12">
                    <div class="tp-sv-details-serive-left mr-10 ml-40 wow tpfadeUp" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: tpfadeUp;">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <h2 class="tp-section__title mb-25">Hosting Services Provider</h2>
                                <p class="mb-0 pb-25" style="text-align: justify;">Since we have been providing the best
                                    web hosting services, we have had plenty of time to develop our offerings so that
                                    they continuously satisfy the needs of our customers. Completely Scalable Web
                                    Hosting is what we provide. With a response time of 30 minutes and a maximum
                                    resolution time of 4 hours, which other web hosting companies in Bangalore don't
                                    give, our web hosting staff works continually to resolve your concerns related to
                                    web hosting. We promise you 99.9% uptime or a 400% credit for downtime. Your account
                                    can be transferred with no cost from us. We'll swiftly and easily transfer all of
                                    your website's files, databases, email accounts, and settings.</p>
                            </div>
                            <h4>Hosting Plans we offer:-</h4>

                            <ul>
                                <li>• Windows</li>
                                <li>• VPS</li>
                                <li>• Dedicated Server</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection