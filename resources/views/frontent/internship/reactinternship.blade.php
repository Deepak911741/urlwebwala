@extends(config('constants.FRONTENT_FOLDER') . 'includes/header')

@section('content')

<div class="body-overlay"></div>
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb__area theme-bg pt-120 pb-120" data-background="{{ asset ('public/images//breadcrumb/breadcrumb-bg.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list mb-10">
                            <span><a href="index.php">Home</a></span>
                            <span class="dvdr dvdr-line"></span>
                            <span class="tp-bc-acive-menu">React JS Internship</span>
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
                        <img src="{{ asset ('public/images/cta/contact_us_banner.jpg')}}" alt="cta">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <div class="tp-contact-page-info ">
                        <p>React is a widely-used JavaScript library for building user interfaces, particularly for
                            single-page applications and mobile applications. Developed by Facebook and supported by a
                            vast community of developers, React offers a powerful toolkit for creating dynamic and
                            interactive front-end experiences.</p>
                    </div>
                </div>

                <!-- faq area start  -->
                <div class="seo-faq-area sv-fea-area pt-120 ">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="seo-faq-cotent mb-30">
                                    <div class="section-title-wraper">
                                        <div class="tp-section">
                                            <h2 class="tp-section__title mb-45 wow tpfadeUp">React.js Internship
                                                FAQs
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="accordion tp-accordion wow tpfadeUp" id="accordionExample">
                                        <div class="accordion-item wow tpfadeUp">
                                            <h2 class="accordion-header" id="faq1">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    What is a React.js internship?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="faq1" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    A React.js internship is a temporary work experience where
                                                    you apply your skills in building web applications using the
                                                    React.js library. It offers hands-on experience in frontend
                                                    web development.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item ">
                                            <h2 class="accordion-header" id="faq2">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    What should I include in my application for React.js
                                                    internships?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="faq2" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">Submit a well-crafted cover letter
                                                    expressing your enthusiasm for frontend development and
                                                    React.js, a polished resume highlighting your technical
                                                    expertise, and any required application forms or coding
                                                    assessments.</div>
                                            </div>
                                        </div>
                                        <div class="accordion-item " data-aos="fade-up" data-aos-duration="2000">
                                            <h2 class="accordion-header" id="faq3">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    How long do React.js internships typically last?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="faq3" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">React.js internships commonly last
                                                    around 10 to 12 weeks, although the duration can vary based
                                                    on the company's requirements and the project's scope.</div>
                                            </div>
                                        </div>
                                        <div class="accordion-item " data-aos="fade-up" data-aos-duration="2000">
                                            <h2 class="accordion-header" id="faq3">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Are React.js internships paid?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="faq3" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">Many React.js internships are paid,
                                                    but the compensation can vary depending on factors such as
                                                    the company's location, size, and industry norms.</div>
                                            </div>
                                        </div>
                                        <div class="accordion-item " data-aos="fade-up" data-aos-duration="2000">
                                            <h2 class="accordion-header" id="faq3">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Can a React.js internship lead to a full-time job?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="faq3" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">Absolutely, companies often use
                                                    internships as a way to identify potential future employees.
                                                    If you perform well during your React.js internship and
                                                    align with the company culture, you could be offered a
                                                    permanent position.</div>
                                            </div>
                                        </div>
                                        <div class="accordion-item " data-aos="fade-up" data-aos-duration="2000">
                                            <h2 class="accordion-header" id="faq3">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    How can I make the most of my React.js internship?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="faq3" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">Actively engage with your team, seek
                                                    opportunities to learn from experienced developers,
                                                    contribute ideas, work on meaningful projects, and aim to
                                                    improve your React.js skills and frontend development
                                                    expertise.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- faq area end  -->

                <div class="center-container">
                    <a href="about.php" class="tp-slider-btn orange-chat-color tp-btn-hover alt-color alt-bg-orange"
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
                    text-align: center;
                }
                </style>
            </div>
        </div>

    </div>
</main>

@endsection