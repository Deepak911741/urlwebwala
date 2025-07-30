@extends(config('constants.FRONTENT_FOLDER') . 'includes/header')

@section('content')

<div class="body-overlay"></div>
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb__area theme-bg pt-120 pb-120" data-background="{{ asset ('public/images/breadcrumb/breadcrumb-bg.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list mb-10">
                            <span><a href="{{ config('constants.HOME_URL') }}">Home</a></span>
                            <span class="dvdr dvdr-line"></span>
                            <span class="tp-bc-acive-menu">Web Design Internship</span>
                        </div>
                        <h6 style="font-size:26px">Best Live Project Training in Ahmedabad for BE, B Tech, BCA, MSC IT
                            Student With Industrial Training & Job Placement </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- contact page info start  -->
    <div class="contact-page-area pt-120 pb-90 wow tpfadeUp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-img-1 pb-100 w-img">
                        <img src="{{ asset ('public/images/cta/contact_us_banner.jpg')}}" alt="icons">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <div class="tp-contact-page-info ">
                        <h6><b>Web Design Training</b>
                            <h6>
                                <p>Considering enrolling in a Web Designing Internship? The demand for web developers is
                                    soaring, with a recent study revealing a nearly 30% increase in web developer job
                                    postings over the past year. This surge underscores the high demand for these
                                    professionals, making it an opportune moment to pursue a career in web design.</p>
                                <p>A Certificate Internship in Web Designing at Urlwebwala Corporation LLP could be your
                                    perfect initial step. As a highly-rated Web Designing Company, Urlwebwala
                                    Corporation LLP has trained numerous students, aiding them in securing placements in
                                    top tech companies. Through this Internship, you'll grasp the fundamentals of Web
                                    Design, enabling you to craft visually appealing and user-friendly websites.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tp-contact-page-info ">
                        <h6><b>What exactly is Web Design, and why is a Web Designing Internship crucial?</b>
                            <h6>
                                <p>Web Design encompasses the practice of developing websites, covering everything from
                                    content and multimedia to strategy and organization. A Web Designer's role includes
                                    crafting the visual components of a website, including layout, color scheme,
                                    typography, and graphics.</p>
                                <p>Proficient Web Designers also understand principles of user experience (UX), ensuring
                                    websites are intuitive and easy to navigate. This field demands a diverse skill set,
                                    spanning web visual design, interface design, user experience design, and search
                                    engine optimization (SEO).</p>
                                <p>Web Designing Training and Internships focus on both technical aspects like HTML,
                                    CSS, and JavaScript coding, and creative elements such as layout, color schemes, and
                                    typography. Some Internships offer a blend of technical and creative components.</p>
                                <p>Enrolling in a Web Designing Internship equips you with the knowledge and skills to
                                    create effective and aesthetically pleasing websites. You'll also learn popular Web
                                    Design software and tools, streamlining the website design process.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tp-contact-page-info ">
                        <div class="center-container">
                            <a href="{{ config('constants.ABOUT_URL') }}"
                                class="tp-slider-btn orange-chat-color tp-btn-hover alt-color alt-bg-orange"
                                data-animation="tpfadeUp" data-delay=".9s">
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
                    </div>
                </div>
            </div>

</main>

@endsection