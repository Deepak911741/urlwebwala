@extends(config('constants.FRONTENT_FOLDER') . 'includes/header')

@section('content')

<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb__area theme-bg pt-120 pb-120" data-background="assets/img/breadcrumb/breadcrumb-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list mb-10">
                            <span><a href="{{ config('constants.HOME_URL') }}">Home</a></span>
                            <span class="dvdr dvdr-line"></span>
                            <span class="tp-bc-acive-menu">Internship</span>
                        </div>
                        <h3 class="breadcrumb__title">We Provide Internship</h3>
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
                            <img src="{{ asset ('public/images/services/icon/php-code.png')}}" alt="services" style="height: 100px;">
                        </div>
                        <h3 class="it-service__item-title mb-20"><a href="{{ config('constants.PHPINTERNSHIP_URL') }}">PHP</a></h3>
                        <p class="mb-0">A popular general-purpose scripting language that is especially suited to web
                            development.
                            Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular
                            websites in the world.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="it-service__item mb-30 text-center wow tpfadeUp" data-wow-delay=".4s">
                        <div class="it-servicce__item-img mb-35">
                            <img src="{{ asset ('public/images/services/icon/design.png')}}" alt="services" style="height: 100px;">
                        </div>
                        <h3 class="it-service__item-title mb-20"><a href="{{ config('constants.WEBINTERNSHIP_URL') }}">Web Design</a></h3>
                        <p class="mb-0">Web design involves creating the visual elements and layout of a website, while
                            coding involves translating these designs into a functional website using programming
                            languages like HTML, CSS, and JavaScript.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="it-service__item mb-30 text-center wow data tpfadeUp" data-wow-delay=".5s">
                        <div class="it-servicce__item-img mb-35">
                            <img src="{{ asset ('public/images/services/icon/4642761@0.webp')}}" alt="services" style="height: 100px;">
                        </div>
                        <h3 class="it-service__item-title mb-20"><a href="{{ config('constants.FLUTTERINTERNSHIP_URL') }}">Flutter</a></h3>
                        <p class="mb-0">Flutter transforms the development process. Build, test, and deploy beautiful
                            mobile, web, desktop, and embedded experiences from a single codebase.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="it-service__item mb-30 text-center wow data tpfadeUp" data-wow-delay=".5s">
                        <div class="it-servicce__item-img mb-35">
                            <img src="{{ asset ('public/images/services/icon/transparent-android.png')}}" alt="services" style="height: 100px;">
                        </div>
                        <h3 class="it-service__item-title mb-20"><a href="{{ config('constants.APPDEVELOPMENT_URL') }}">Android</a></h3>
                        <p class="mb-0">Write better Android apps faster with Kotlin. Kotlin is a modern statically
                            typed programming language used by over 60% of professional Android developers that helps
                            boost productivity, developer satisfaction, and code safety.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="it-service__item mb-30 text-center wow data tpfadeUp" data-wow-delay=".5s">
                        <div class="it-servicce__item-img mb-35">
                            <img src="{{ asset ('public/images/services/icon/react-icon.png" alt="services')}}" style="height: 100px;">
                        </div>
                        <h3 class="it-service__item-title mb-20"><a href="{{ config('constants.REACTINTERNSHIP_URL') }}">React JS</a></h3>
                        <p class="mb-0">React has been designed from the start for gradual adoption, and you can use as
                            little or as much React as you need. Whether you want to get a taste of React, add some
                            interactivity to a simple HTML page, or start a complex React-powered app, the links in this
                            section will help you get started.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="it-service__item mb-30 text-center wow data tpfadeUp" data-wow-delay=".5s">
                        <div class="it-servicce__item-img mb-35">
                            <img src="{{ asset ('public/images/services/icon/js_logo.png')}}" alt="services" style="height: 100px;">
                        </div>
                        <h3 class="it-service__item-title mb-20"><a href="{{ config('constants.NODEINTERNSHIP_URL') }}">Node JS</a></h3>
                        <p class="mb-0">Node.js is an open-source and cross-platform JavaScript runtime environment. It
                            is a popular tool for almost any kind of project!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="it-service__item mb-30 text-center wow data tpfadeUp" data-wow-delay=".5s">
                        <div class="it-servicce__item-img mb-35">
                            <img src="{{ asset ('public/images/services/icon/home-project-icon.jpg')}}" alt="services" style="height: 100px;">
                        </div>
                        <h3 class="it-service__item-title mb-20"><a href="{{ config('constants.NODEINTERNSHIP_URL') }}">Live Project
                                Training</a></h3>
                        <p class="mb-0">Live projects are innovative educational practices that enable students to
                            engage in authentic learning outside the physical institution of learning and through
                            working collaboratively with real clients and users.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


</main>
@endsection