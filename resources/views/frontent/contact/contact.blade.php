@extends(config('constants.FRONTENT_FOLDER') . 'includes/header')

@section('content')
    <div class="tp-offcanvas-wrapper">
    <div class="tp-offcanvas white-bg">
        <div class="offc-top-pattern">
            <img src="{{ asset ('public/images/hero/nav-parrten-top.png')}}" alt="">
        </div>
        <div class="tp-offcanvas__top tp-border-bottom pb-30 mb-30">
            <div class="tp-offcanvas-close">
                <span><i class="fal fa-times"></i></span>
            </div>
            <div class="tp-offcanvas__logo mb-50">
                <a href="index.php">
                    <img src="{{ asset ('public/images/logo/urlwebwala.png')}}" style="width:150px;" alt="logo">
                </a>
            </div>
            <p>We believe that every customer deserves a quality experience and we're committed to delivering just that.</p>
            <div class="tp-offcanvas__social">
                <span> <a href="https://www.facebook.com/share/18aStSgd8m/"><i class="fab fa-facebook-f"></i></a></span>
                <span> <a href=""><i class="fab fa-twitter"></i></a></span>
                <span> <a href="https://www.instagram.com/urlwebwala?igsh=MXM1aTl3ZDhiN284eQ=="><i class="fab fa-instagram"></i></a></span>
                <span> <a href="https://www.linkedin.com/company/urlwebwala-pvt-ltd/"><i class="fab fa-linkedin "></i></a></span>
            </div>
        </div>
        <div class="tp-offcanvas__widget mb-40 d-none d-xl-block">
            <div class="tp-offcanvas-cta d-flex align-items-center tp-border-bottom pb-20 mb-30">
                <span class="icon mr-20"><img src="{{ asset ('public/images/icons/ofp-phone.png')}}" alt=""></span>
                <span>
                    <span class="d-block mb-0">Phone number</span>
                    <b><a href="tel:+918084033396"> Call Us: +91 8084033396 </a></b>
                </span>
            </div>
            <div class=" tp-offcanvas-cta d-flex align-items-center tp-border-bottom pb-20 mb-30">
                <span class="icon mr-20"><img src="{{ asset ('public/images/icons/ofc-mail-icon.png')}}" alt=""></span>
                <span>
                    <span class="d-block mb-0">Email address</span>
                    <a href="mailto:mail.info@urlwebwala.com"> info@urlwebwala.com </a></b>
                </span>
            </div>
            <div class="tp-offcanvas-cta d-flex align-items-center pb-20 mb-30">
                <span class="icon mr-20"><img src="{{ asset ('public/images/icons/ofc-locaiton.png')}}" alt=""></span>
                <span>
                    <span class="d-block mb-0">Ahemdabad Gujrat (382481)</span>
                </span>
            </div>
        </div>
        <div class="tp-mobile-menu"></div>
        <div class="tp-offcanvas__bottom mt-80 d-none d-lg-block">
            <p>Our team applies its wide ranging in experience to determining.</p>
            <div class="tp-offcanvas-btn-wrapper">
                <a href="contact.html" class="tp-common-btn">Get in touch
                    <span>
                        <i class="fas fa-long-arrow-right"></i>
                        <i class="fas fa-long-arrow-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="offc-bottom-pattern">
            <img src="assets/img/hero/nav-parrten-botoom.png" alt="">
        </div>
    </div>
</div>
{{-- <div class="body-overlay"></div> --}}

<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb__area theme-bg pt-120 pb-120" data-background="{{ asset ('public/images/breadcrumb/breadcrumb-bg.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list mb-10">
                            <span><a href="index.php">Home</a></span>
                            <span class="dvdr dvdr-line"></span>
                            <span class="tp-bc-acive-menu">Contact</span>
                        </div>
                        <h3 class="breadcrumb__title">Get In Touch</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- contact page info start -->
    <div class="contact-page-area pt-120 pb-90 wow tpfadeUp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-img-1 pb-100 w-img">
                        <img src="assets/img/cta/contact_us_banner.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <span class="say-hello">Say Hello</span>
                </div>
                <div class="col-lg-10">
                    <div class="tp-contact-page-info">
                        <h3 class="tp-section__title pb-60 mb-60 tp-border-bottom">Please let us know if you have a question, want to leave a comment about Urlwebwala Corporation LLP.</h3>
                    </div>
                    <div class="row text-center text-md-start">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="contact-cta-item">
                                <b style="font-size: 20px;">Phone Number</b> <br>
                                <a href="tel:+918084033396" style="font-size: 18px;">+91 8084033396</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="contact-cta-item">
                                <b style="font-size: 20px;">Email Address</b> <br>
                                <a href="mailto:mail.info@urlwebwala.com" style="font-size: 18px;">info@urlwebwala.com</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                            <div class="contact-cta-item">
                                <b style="font-size: 20px;">Office Address</b> <br>
                                <a href="#" style="font-size: 18px;">Ahemdabad Gujrat (382481)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tp-contact-map p-relative">
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14681.755057707092!2d72.5485664!3d23.0810288!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e838e6b41426f%3A0x18fc09c2c8985c55!2sURLWebwala!5e0!3m2!1sen!2sin!4v1696143981709!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="it-cta-area law-cta-area about-me-cta-area pt-120 pb-85 theme-bg" data-background="assets/img/cta/sv-detials-cta-bg.png">
        
        <style>
        .popup-message {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #28a745;
            color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 18px;
            text-align: center;
            display: none;
            z-index: 9999;
            width: auto;
            max-width: 400px;
        }
        .popup-message.error {
            background-color: #dc3545;
        }
        .popup-message.show {
            display: block;
        }
        .loading {
            opacity: 0.7;
            pointer-events: none;
        }
        </style>

        <!-- Contact Form -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="mb-30">
                        <div class="it-cta__title wow tpfadeUp">
                            <div class="section-title-wraper">
                                <div class="tp-section">
                                    <div class="pb-40"><img src="assets/img/icons/red-what-icon.png" alt=""></div>
                                    <h2 class="tp-section__title text-black text-capitalize mb-25">Got a project to discuss? Get in touch.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-6">
                    <div class="it-cta-form wow tpfadeUp" data-wow-delay=".4s">
                        <!-- CRITICAL: Added method="POST" and action to prevent GET submission -->
                        <form id="contactForm" method="POST" action="javascript:void(0);">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-item">
                                        <span><i class="fas fa-user"></i></span>
                                        <input type="text" name="name" id="name" placeholder="Full name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-item">
                                        <span><i class="fas fa-envelope-open"></i></span>
                                        <input type="email" name="email" id="email" placeholder="Email address" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-item">
                                        <span><i class="fas fa-phone"></i></span>
                                        <input type="tel" name="phone" id="phone" maxlength="15" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-item">
                                        <span><i class="fas fa-book"></i></span>
                                        <input type="text" name="subject" id="subject" placeholder="Service">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-item-textarea">
                                        <span><i class="fas fa-pen"></i></span>
                                        <textarea name="message" id="message" placeholder="Message"></textarea>
                                    </div>
                                    <button type="submit" id="submitBtn" class="it-cta-form-submit border-0">
                                        Send Email
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection