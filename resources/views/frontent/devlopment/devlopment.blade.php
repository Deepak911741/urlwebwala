@extends(config('constants.FRONTENT_FOLDER') . 'includes/header')

@section('content')
<main>
    <div class="breadcrumb__area theme-bg pt-120 pb-120" data-background="{{ asset ('public/images/breadcrumb/breadcrumb-bg.png')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1">
                            <div class="breadcrumb__list mb-10">
                                <span><a href="index.php">Home</a></span>
                                <span class="dvdr dvdr-line"></span>
                                <span class="tp-bc-acive-menu">Company</span>
                            </div>
                            <h3 class="breadcrumb__title">Development Process</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq area start  -->
        <div class="seo-faq-area sv-fea-area pt-120">
            <div class="container">
                <div class="section-title-wrapper pb-55">
                    <div class="tp-section text-center">
                    
                        <h2 class="tp-section__title vogue-text-color wow tpfadeUp" data-wow-delay=".3s">Development Process
                            We Follow
                        </h2>
                        <p>We follow a professional development process to complete your website and application
                            smoothly on time, every time.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="seo-faq-content mb-30">
                            <div class="section-title-wrapper">
                                
                            </div>
                            <div class="accordion tp-accordion wow tpfadeUp" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Meeting with You and Talk About What You Need
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="faq1"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            First, we start by meeting with you via email, chat, or phone. We discuss your
                                            requirements fully and research best practices related to your industry, your
                                            project’s goals, and the type of website/mobile app you wish to build
                                            (searchability
                                            or visual appeal).
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Project Plan and Website/App Architecture
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="faq2"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Now, we'll create a Website/App Project Plan. This will include functionality,
                                            resources, dates, and milestones for the website. Site architecture is a site
                                            map or
                                            the full list of desired pages. It’s important to establish this early on as it
                                            helps estimate the cost and develop an easy-to-use, intuitive, and functional
                                            site.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Wireframe Design Before the Real Design
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="faq3"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            First, we create a Wireframe Design. It’s a non-graphical layout for a visual
                                            guide
                                            used in interface design to suggest the structure of a website/App and
                                            relationships
                                            between its pages. Once these are approved by you, we start working on the first
                                            drafts of the website design. Our normal design phase consists of two revisions.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            PSD to XHTML Conversion
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="faq4"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            After the design is approved, we convert the PSD into XHTML. This ensures the
                                            visual
                                            design is converted to clean and functional code.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                            QA Testing and Demo Server
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="faq5"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Our aim is to catch and fix bugs in our QA and Testing phase. After testing, we
                                            launch your site on a demo server to gather your feedback and finalize all
                                            details.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq6">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Time for Launching the Website/App
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="faq6"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Finally, we officially launch the website/app after thorough collaboration with
                                            you.
                                            We also offer SEO services and ongoing maintenance as needed.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="seo-faq-img text-end p-relative mb-30 wow tpfadeUp">
                            <img src="{{ asset('public/images/faq/sv-page-faq.jpg')}}" alt="FAQ Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="seo-feature-area seagreen-bg p-relative pt-120 pb-90">
        <div class="seo-fea-line-share d-none d-xl-block">
            <img src="{{ asset ('public/images/icons/seo-feature-line.png')}}" alt="icons">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-wraper text-center">
                        <div class="tp-section">
                            <h2 class="tp-section__title text-white mb-25 wow tpfadeUp" data-wow-delay=".3s">Our Working
                                Process</h2>
                            <p class="pb-60 wow tpfadeUp" data-wow-delay=".4s">Search Engine & Social Media Optimization
                                Experts</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 wow tpfadeUp" data-wow-delay=".3s">
                    <div class="seo-feature-item down text-center mb-30">
                        <div class="seo-feature-item__icon p-relative">
                            <span class="seo-circle-bg"><i class="fas fa-book"></i></span>
                        </div>
                        <div class="seo-feature-item__content mt-40">
                            <h3 class="seo-feature-item__content-title mb-20"><a href="#">Strat From Sketch</a>
                            </h3>
                            <p>Begins with an exploration call to identify what you want.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 wow tpfadeUp" data-wow-delay=".4s">
                    <div class="seo-feature-item up text-center mb-30">
                        <div class="seo-feature-item__icon p-relative">
                            <span class="seo-circle-bg"><i class="fas fa-cog"></i></span>
                        </div>
                        <div class="seo-feature-item__content mt-40">
                            <h3 class="seo-feature-item__content-title mb-20"><a href="#">Creative Process</a> </h3>
                            <p>Designing a digital layout and planning it.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 wow tpfadeUp" data-wow-delay=".5s">
                    <div class="seo-feature-item text-center mb-30">
                        <div class="seo-feature-item__icon p-relative">
                            <span class="seo-circle-bg"><i class="flaticon-design"></i></span>
                        </div>
                        <div class="seo-feature-item__content mt-40">
                            <h3 class="seo-feature-item__content-title mb-20"><a href="#">Design & Development</a>
                            </h3>
                            <p>Our professional teams are working to implement your concept.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 wow tpfadeUp" data-wow-delay=".6s">
                    <div class="seo-feature-item up text-center mb-30">
                        <div class="seo-feature-item__icon p-relative">
                            <span class="seo-circle-bg"><i class="flaticon-box"></i></span>
                        </div>
                        <div class="seo-feature-item__content mt-40">
                            <h3 class="seo-feature-item__content-title mb-20"><a href="#">Final Product</a> </h3>
                            <p>Delivering your product following extensive testing.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

@endsection