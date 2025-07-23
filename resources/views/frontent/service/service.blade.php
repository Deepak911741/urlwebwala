@extends(config('constants.FRONTENT_FOLDER') . 'includes/header')

@section('content')
    
<!-- off canvas area  -->
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
                        <h3 class="breadcrumb__title">What We Do</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- service start  -->
    <div class="tp-it-service pt-120">
        <div class="container">
            <div class="row it-sv-counter">
                <div class="col-lg-4 col-md-6">
                    <div class="it-service__item mb-30 text-center wow tpfadeUp" data-wow-delay=".3s">
                        <div class="it-servicce__item-img mb-35">
                            <img src="{{ asset ('public/images/services/icon/it-service-1.png')}}" alt="icon">
                        </div>
                        <h3 class="it-service__item-title mb-20"><a href="web_development.html">Web Development</a></h3>
                        <p class="mb-0">To attract and keep consumers, get a strong website developed from scratch
                            utilising the most recent web development techniques.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="it-service__item mb-30 text-center wow tpfadeUp" data-wow-delay=".4s">
                        <div class="it-servicce__item-img mb-35">
                            <img src="{{ asset ('public/images/services/icon/it-service-2.png')}}" alt="icon">
                        </div>
                        <h3 class="it-service__item-title mb-20"><a href="mobile_app_development.html">App
                                Development</a></h3>
                        <p class="mb-0">We create attractive mobile applications that boost consumer engagement and
                            conversion rates.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="it-service__item mb-30 text-center wow data tpfadeUp" data-wow-delay=".5s">
                        <div class="it-servicce__item-img mb-35">
                            <img src="{{ asset ('public/images/services/icon/it-service-3.png')}}" alt="icon">
                        </div>
                        <h3 class="it-service__item-title mb-20"><a href="digital_marketing.html">Digital Marketing</a>
                        </h3>
                        <p class="mb-0">We will create personalised online marketing solutions for you so you can stay
                            on top of your social media and SEO game.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="it-service__item mb-30 text-center wow data tpfadeUp" data-wow-delay=".5s">
                        <div class="it-servicce__item-img mb-35">
                            <img src="{{ asset ('public/images/services/icon/it-service-4.png')}}" alt="icon">
                        </div>
                        <h3 class="it-service__item-title mb-20"><a href="graphics.html">Graphics & Logo</a></h3>
                        <p class="mb-0">For a variety of platforms, we transform conceptual ideas into clear, practical,
                            and beautiful visual interfaces.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="it-service__item mb-30 text-center wow data tpfadeUp" data-wow-delay=".5s">
                        <div class="it-servicce__item-img mb-35">
                            <img src="{{ asset ('public/images/services/icon/it-service-9.png')}}" alt="icon">
                        </div>
                        <h3 class="it-service__item-title mb-20"><a href="#">Festival Post Design</a></h3>
                        <p class="mb-0">Applications are thoroughly tested using industry-standard testing approach and
                            QA procedures.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="it-service__item mb-30 text-center wow data tpfadeUp" data-wow-delay=".5s">
                        <div class="it-servicce__item-img mb-35">
                            <img src="{{ asset ('public/images/services/icon/it-service-6.png')}}" alt="icon">
                        </div>
                        <h3 class="it-service__item-title mb-20"><a href="digital_card.html">Digital Card Design</a>
                        </h3>
                        <p class="mb-0">The electronic equivalent of a paper card is a digital card. Digital cards can
                            also be called as digital business cards.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="it-service__item mb-30 text-center wow data tpfadeUp" data-wow-delay=".5s">
                        <div class="it-servicce__item-img mb-35">
                            <img src="{{ asset ('public/images/services/icon/it-service-5.png')}}" alt="icon">
                        </div>
                        <h3 class="it-service__item-title mb-20"><a href="testing.html">QA Testing Website</a></h3>
                        <p class="mb-0">Applications are thoroughly tested using industry-standard testing approach and
                            QA procedures.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="it-service__item mb-30 text-center wow data tpfadeUp" data-wow-delay=".5s">
                        <div class="it-servicce__item-img mb-35">
                            <img src="{{ asset ('public/images/services/icon/it-service-7.png')}}" alt="icon">
                        </div>
                        <h3 class="it-service__item-title mb-20"><a href="hosting.html">Hosting Service Provider</a>
                        </h3>
                        <p class="mb-0">Applications are thoroughly tested using industry-standard testing approach and
                            QA procedures.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="it-service__item mb-30 text-center wow data tpfadeUp" data-wow-delay=".5s">
                        <div class="it-servicce__item-img mb-35">
                            <img src="{{ asset ('public/images/services/icon/it-service-8.png')}}" alt="icon">
                        </div>
                        <h3 class="it-service__item-title mb-20"><a href="support.html">Support & Maintainance</a></h3>
                        <p class="mb-0">The electronic equivalent of a paper card is a digital card. Digital cards can
                            also be called as digital business cards.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection