@extends(config('constants.FRONTENT_FOLDER') . 'includes/header')

@section('content')

    <?php 
$pageTitle = 'Home | Urlwebwala Top-Rated Web Design & Development Company in India';
$description = 'Get top-rated web design & development services in India. We craft stunning, fast, and user-friendly websites to grow your business. Contact us today!!';
$keywords = 'web design, web development, mobile app development, digital marketing, SEO services, UI/UX design, software development, custom web solutions, ecommerce development, branding, IT solutions, responsive website design, online marketing, app development, top IT company in India, web agency Ahmedabad, India web developers';
$robots = 'index, follow';
$ogtype = 'website';
$ogTitle = 'Urlwebwala - Top-Rated Web Design & Development Company in India'; 
$ogDescription = 'Urlwebwala is a leading web design and development company in India, specializing in creating stunning websites and mobile apps that drive results.';
$ogImageAlt = 'https://urlwebwala.com/assets/metalog.png'; 
$ogImage = 'https://urlwebwala.com/assets/metalog.png';
$twitterTitle = 'Urlwebwala - Top-Rated Web Design & Development Company in India';
$twitterDescription = 'Urlwebwala is a leading web design and development company in India, specializing in creating stunning websites and mobile apps that drive results.';
?>

<body>
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />


    <style>
        .newsletter-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999;
            padding: 16px;
        }

        .newsletter-popup-container {
            display: flex;
            background: white;
            border-radius: 16px;
            overflow: hidden;
            width: 100%;
            max-width: 800px;
            max-height: 90vh;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            position: relative;
            flex-direction: row;
        }

        .newsletter-popup-image {
            flex: 1;
            min-width: 250px;
        }

        .newsletter-popup-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .newsletter-popup-content {
            flex: 1;
            padding: 40px 30px;
        }

        .newsletter-popup-content h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 12px;
        }

        .newsletter-popup-content p {
            color: #555;
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .newsletter-input-wrapper {
            position: relative;
            width: 100%;
            margin-bottom: 16px;
        }

        .newsletter-input-wrapper input {
            width: 100%;
            padding: 12px 46px 12px 14px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            background: #fff;
            height: 44px;
            box-sizing: border-box;
        }

        .newsletter-input-icon {
            position: absolute;
            top: 50%;
            right: 14px;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            pointer-events: none;
            opacity: 0.6;
        }

        .newsletter-dropdown-wrapper {
            width: 100%;
            margin-bottom: 16px;
        }


        .nice-select {
            width: 100% !important;
            display: block;
        }

        .nice-select .list {
            width: 100% !important;
            max-height: 200px;
            /* Adjust as needed */
            overflow-y: auto;
            /* Enable scrolling */
            overflow-x: hidden;
        }

        .nice-select .option {
            white-space: normal;
            /* Allow long text to wrap */
        }

        .nice-select .list::-webkit-scrollbar {
            width: 6px;
        }

        .nice-select .list::-webkit-scrollbar-thumb {
            background-color: #ccc;
            border-radius: 6px;
        }

        l .newsletter-dropdown-wrapper select {
            width: 100%;
            padding: 12px 14px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 8px;
            background: #fff;
            outline: none;
            height: 44px;
            display: block;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }


        .newsletter-subscribe-btn {
            background-color: #032b5f;
            color: white;
            border: none;
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
        }

        .newsletter-subscribe-btn:hover {
            background-color: #ff321f;
        }

        .newsletter-no-thanks {
            background: none;
            border: none;
            color: #555;
            margin-top: 15px;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .newsletter-privacy-text {
            margin-top: 25px;
            font-size: 0.8rem;
            color: #777;
        }

        .newsletter-privacy-text a {
            color: #0056ff;
            text-decoration: none;
        }

        .newsletter-close-btn {
            position: absolute;
            top: 20px;
            right: 25px;
            font-size: 24px;
            background: none;
            border: none;
            cursor: pointer;
            color: #888;
        }

        /* ✅ Green Success Box */
        .newsletter-confirmation-box {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #28a745;
            color: #fff;
            padding: 20px 30px;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 500;
            text-align: center;
            z-index: 10000;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.4s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translate(-50%, -60%);
            }

            to {
                opacity: 1;
                transform: translate(-50%, -50%);
            }
        }

        @media screen and (max-width: 768px) {
            .newsletter-popup-container {
                flex-direction: column;
                height: auto;
                max-height: 95vh;
            }

            .newsletter-popup-image {
                display: none;
            }

            .newsletter-popup-content {
                padding: 10px 15px;
            }

            .newsletter-close-btn {
                top: 15px;
                right: 20px;
            }
        }
    </style>

    <div class="newsletter-overlay" id="popup">
        <div class="newsletter-popup-container">
            <div class="newsletter-popup-image">
                <img src="vr-guy.png" alt="VR Guy" />
            </div>
            <div class="newsletter-popup-content">
                <button class="newsletter-close-btn" onclick="closePopup()">×</button>
                <h2>Subscribe to Our Newsletter</h2>
                <p>Subscribe to our newsletter & get notifications about discounts.</p>

                <form id="newsletterForm">
                    <div class="newsletter-input-wrapper">
                        <img src="email-svgrepo-com.svg" class="newsletter-input-icon" alt="Email Icon">
                        <input type="email" id="email" placeholder="Enter Email address" required />
                    </div>

                    <div class="newsletter-input-wrapper">
                        <img src="phone-plus-alt-svgrepo-com.svg" class="newsletter-input-icon" alt="Phone Icon">
                        <input type="tel" id="phone" placeholder="Enter Phone Number" required />
                    </div>

                    <div class="newsletter-dropdown-wrapper">
                        <div class="newsletter-select-icon-wrapper">
                            <select id="requirements" name="requirements" required>
                                <option value="#" disabled selected>Select an option</option>
                                <option value="Web Development">Web Development</option>
                                <option value="Android Development">Android Development</option>
                                <option value="iOS App Development">iOS App Development</option>
                                <option value="HRMS & CRM Development">HRMS & CRM Development</option>
                                <option value="Vendor Portal Development">Vendor Portal Development</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="UI/UX Design">UI/UX Design</option>
                                <option value="SEO Services">SEO Services</option>
                                <option value="Support & Maintenance">Support & Maintenance</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="newsletter-subscribe-btn">Subscribe</button>
                </form>

                <button class="newsletter-no-thanks" onclick="closePopup()">No, Thanks</button>
                <p class="newsletter-privacy-text">
                    By subscribing to our newsletter you agree to our
                    <a href="privacypolicy.php">Privacy Policy</a>.
                </p>
            </div>
        </div>
    </div>

    <div id="confirmationBox" class="newsletter-confirmation-box">
        <p>Your message has been sent successfully!<br>We will contact you soon.</p>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script>
        // Init EmailJS
        (function () {
            emailjs.init("nY2P3WJKO5soRpbuO");
        })();

        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }

        document.getElementById("newsletterForm").addEventListener("submit", function (e) {
            e.preventDefault();

            const email = document.getElementById("email").value;
            const phone = document.getElementById("phone").value;
            const requirements = document.getElementById("requirements").value;

            if (!requirements) {
                alert("Please select a requirement.");
                return;
            }

            const templateParams = {
                email: email,
                number: phone,
                project: requirements,
            };

            emailjs.send("default_service", "template_hac1ph9", templateParams)
                .then(function (response) {
                    const confirmationBox = document.getElementById("confirmationBox");
                    confirmationBox.style.display = "block";
                    setTimeout(() => {
                        confirmationBox.style.display = "none";
                    }, 2000);
                }, function (error) {
                    alert("Failed to send email. Please try again.");
                    console.error("FAILED...", error);
                });
        });
    </script>



<main>
    <div class="tp-it-slider-area">
        <div class="swiper-container ptg-slider-active">
            <div class="swiper-wrapper">
                <div class="tp-it-slider it-slider-height fix swiper-slide"
                    data-background="{{ asset ('public/images/slider/it-slider-1.jpg') }}">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-12">
                                <div class="it-slider__content">
                                    <h2 class="it-slider__content-title mb-20" data-animation="tpfadeUp"
                                        data-delay=".5s">IT
                                        Solutions For Business</h2>
                                    <p class="mb-50" data-animation="tpfadeUp" data-delay=".6s">We are a software
                                        development company that offers<br>business solutions to help you grow your
                                        company.</p>
                                    <a href="about.php"
                                        class="tp-slider-btn orange-chat-color tp-btn-hover alt-color alt-bg-orange"
                                        data-animation="tpfadeUp" data-delay=".9s">
                                        <span class="mr-10">
                                            <i class="fas fa-comments"></i>
                                            <i class="fas fa-comments"></i>
                                        </span>
                                        About Us
                                        <b></b>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="it-slider-img p-relative">
                                    <img src="{{ asset ('public/images/slider/it-slider-img.png') }}" alt="slider">
                                    <div class="it-slder-quite">
                                        <b>“Our visions encourage every small<br> business to grow
                                            and develope digitally”</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-it-slider it-slider-height fix swiper-slide"
                    data-background="{{ asset('public/images/slider/Social.jpg') }}">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-12">
                                <div class="it-slider__content">
                                    <h2 class="it-slider__content-title mb-20" data-animation="tpfadeUp"
                                        data-delay=".4s">IT
                                        Solutions For Branding</h2>
                                    <p class="mb-50" data-animation="tpfadeUp" data-delay=".8s"> We provide the best IT
                                        services for branding. using the right tools<br>to develop the most effective
                                        websites.</p>

                                    <a href="about.php"
                                        class="tp-slider-btn orange-chat-color tp-btn-hover alt-color alt-bg-orange"
                                        data-animation="tpfadeUp" data-delay=".9s">
                                        <span class="mr-10">
                                            <i class="fas fa-comments"></i>
                                            <i class="fas fa-comments"></i>
                                        </span>
                                        About Us
                                        <b></b>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="it-slider-img p-relative">
                                    <img src="{{ asset ('public/images/slider/it-slider-img.png') }}" alt="slider">
                                    <div class="it-slder-quite">
                                        <b>“ our visions encourage every small<br> business to grow
                                            and develope digitally ”</b>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-it-slider it-slider-height fix swiper-slide"
                    data-background="{{ asset ('public/images/slider/it-slider-3.jpg') }}">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-12">
                                <div class="it-slider__content">
                                    <h2 class="it-slider__content-title mb-20" data-animation="tpfadeUp"
                                        data-delay=".4s">IT
                                        Solutions For Markting</h2>
                                    <p class="mb-50" data-animation="tpfadeUp" data-delay=".6s">The company provides IT
                                        services for marketing. Our team has many years of experience in the field knows
                                        how to solve any technological problems for you.</p>

                                    <a href="about.php"
                                        class="tp-slider-btn orange-chat-color tp-btn-hover alt-bg-orange"
                                        data-animation="tpfadeUp" data-delay=".9s">
                                        <span class="mr-10">
                                            <i class="fas fa-comments"></i>
                                            <i class="fas fa-comments"></i>
                                        </span>
                                        About Us
                                        <b></b>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="it-slider-img p-relative">
                                    <img src="{{ asset ('public/images/slider/it-slider-img.png')}}" alt="slider">
                                    <div class="it-slder-quite">
                                        <b>“ our visions encourage every small<br> business to grow
                                            and develope digitally ”</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider end  -->

    <!-- about us Start -->
    ̥<div class="law-about-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-wraper pb-55">
                        <div class="tp-section text-center">
                            <span class="tp-section__subtitle vogue-text-color white-bg mb-15 wow tpfadeUp"><i
                                    class="before-border"></i>
                                About Us <i class="after-border"></i></span>
                            <h2 class="tp-section__title vogue-text-color wow tpfadeUp" data-wow-delay=".3s">Welcome to
                                UrlWebwala</h2>
                        </div>
                    </div>
                </div>̥
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 wow tpfadeUp">
                    <div class="law-about-left p-relative mb-30">
                        <div class="row gx-4">
                            <div class="col-md-6">
                                <div class="law-about-left-title mt-60 mb-20  vogue-bg ">
                                    <span><i class="flaticon-global"></i></span>
                                    <span>Good Expertise In Website And App Development</span>
                                </div>
                                <div class="law-about-img-1">
                                    <img src="{{ asset ('public/images/about/aboutwebwala.png') }}" alt="about">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="law-about-img-2">
                                    <img src="{{ asset ('public/images/about/aboutUrl.png') }}" alt="about">
                                </div>
                            </div>
                        </div>
                        <div class="law-icon law-icon-text ">
                            <div class="d-inline-block p-relative">
                                <div>
                                    <img src="{{ asset ('public/images/about/law-sm-img-3.png') }}" alt="about">
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
                            <h3 class="tp-section__title wow tpfadeUp mb-30">We Help Our Clients <br>
                                Achieve Their Business Goals
                            </h3>
                            <p class="text-grey wow tpfadeUp" data-wow-delay=".3s">We are the best custom application
                                development company in Ahemdabad. Our goal is to provide you with what you need as
                                quickly and sustainably as possible. We provide a variety of services based on our
                                clients web
                                application requirements.
                                Specific features of web application development, in which we specialise, include the
                                many
                                options we provide.</p>
                            <a href="about.php"
                                class="tp-slider-btn orange-chat-color tp-btn-hover alt-color alt-bg-orange"
                                data-animation="tpfadeUp" data-delay=".9s">
                                <span class="mr-10">
                                    <i class="fas fa-comments"></i>
                                    <i class="fas fa-comments"></i>
                                </span>
                                Read More
                                <b></b>
                            </a>
                        </div>
                        <div class="row gx-md-5">
                            <div class="col-sm-6 col-12">
                                <div class="low-ab-feature d-flex align-items-center">
                                    <div class="low-ab-fea-icon mr-20">
                                        <img src="{{ asset ('public/images/about/icon-ab-chat.png')}}" alt="about">
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
                                        <img src="{{ asset('public/images/about/icon-tp-laptop.png')}}" alt="about">
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
        <!-- about us End -->

        <!-- service start  -->
        <div class="tp-it-service pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-wraper pb-55">
                            <div class="tp-section text-center">
                                <span class="tp-section__subtitle vogue-text-color white-bg mb-15 wow tpfadeUp"><i
                                        class="before-border"></i>
                                    Our Services <i class="after-border"></i></span>
                                <h2 class="tp-section__title vogue-text-color wow tpfadeUp" data-wow-delay=".3s">Custom
                                    IT
                                    Services and <br> Solutions Built</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row it-sv-counter">
                    <div class="col-lg-4 col-md-6">
                        <div class="it-service__item mb-30 text-center wow tpfadeUp" data-wow-delay=".3s">
                            <div class="it-servicce__item-img mb-35">
                                <img src="{{ asset('public/images/services/icon/it-service-1.png')}}" alt="services">
                            </div>
                            <h3 class="it-service__item-title mb-20"><a href="web_development.php">Web Development</a>
                            </h3>
                            <p class="mb-0" style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">To
                                attract and keep consumers, get a strong website developed from scratch
                                utilising the most recent web development techniques.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="it-service__item mb-30 text-center wow tpfadeUp" data-wow-delay=".4s">
                            <div class="it-servicce__item-img mb-35">
                                <img src="{{ asset('public/images/services/icon/it-service-2.png')}}" alt="services">
                            </div>
                            <h3 class="it-service__item-title mb-20"><a href="mobile_app_development.php">App
                                    Development</a></h3>
                            <p class="mb-0" style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">We
                                create attractive mobile applications that boost consumer engagement and
                                conversion rates.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="it-service__item mb-30 text-center wow data tpfadeUp" data-wow-delay=".5s">
                            <div class="it-servicce__item-img mb-35">
                                <img src="{{ asset('public/images/services/icon/it-service-3.png')}}" alt="services">
                            </div>
                            <h3 class="it-service__item-title mb-20"><a href="digital_marketing.php">Digital
                                    Marketing</a>
                            </h3>
                            <p class="mb-0" style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">We
                                will create personalised online marketing solutions for you so you can
                                stay
                                on top of your social media and SEO game.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="it-service__item mb-30 text-center wow data tpfadeUp" data-wow-delay=".5s">
                            <div class="it-servicce__item-img mb-35">
                                <img src="{{ asset('public/images/services/icon/it-service-4.png')}}" alt="services">
                            </div>
                            <h3 class="it-service__item-title mb-20"><a href="graphics.php">Graphics & Logo</a></h3>
                            <p class="mb-0" style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">For a
                                variety of platforms, we transform conceptual ideas into clear,
                                practical,
                                and beautiful visual interfaces.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="it-service__item mb-30 text-center wow data tpfadeUp" data-wow-delay=".5s">
                            <div class="it-servicce__item-img mb-35">
                                <img src="{{ asset('public/images/services/icon/it-service-4.png')}}" alt="services">
                            </div>
                            <h3 class="it-service__item-title mb-20"><a href="testing.php">QA Testing Website</a></h3>
                            <p class="mb-0" style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                Applications are thoroughly tested using industry-standard testing approach
                                and
                                QA procedures.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="it-service__item mb-30 text-center wow data tpfadeUp" data-wow-delay=".5s">
                            <div class="it-servicce__item-img mb-35">
                                <img src="{{ asset('public/images/services/icon/it-service-6.png')}}" alt="services">
                            </div>
                            <h3 class="it-service__item-title mb-20"><a href="digital_card.php">Digital Card Design</a>
                            </h3>
                            <p class="mb-0" style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">The
                                electronic equivalent of a paper card is a digital card. Digital cards
                                can
                                also be called as digital business cards.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service end  -->

        <div class="tp-about-deatials-service theme-bg pt-120 pb-90">
            <div class="container">
                <div class="section-title-wrapper pb-55">
                    <div class="tp-section text-center">
                        <span class="tp-section__subtitle vogue-text-color white-bg mb-15 wow tpfadeUp"><i
                                class="before-border"></i>
                            Who We Are? <i class="after-border"></i></span>
                        <h2 class="tp-section__title vogue-text-color wow tpfadeUp" data-wow-delay=".3s">IT Solutions to
                            equip
                            your path to business success</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 wow tpfadeUp">
                        <div class="tp-about-sv-content">
                            <h1>We develop solutions that meet your needs for applications and websites.</h1>
                        </div><br>
                        <p class="text-grey wow tpfadeUp"
                            style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;" data-wow-delay=".3s">
                            Urlwebwala Ahmedabad is an ISO-certified
                            software development firm that offers complete business IT solutions for
                            clients around the world.</p>
                        <p class="text-grey wow tpfadeUp"
                            style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;" data-wow-delay=".3s">
                            We are the pioneers of web, mobile app,
                            and
                            AR/VR solutions. Our highly experienced and skilled specialists are always on hand to meet
                            any
                            challenge and satisfy the needs of our customers. We are committed to quality, and we don't
                            make a
                            mistake in delivering the quality of our services. We are Urlwebwala Ahmedabad, and we
                            deliver
                            modern IT solutions to various sectors, including gaming, business, finance, healthcare,
                            hospitality, education, travel, and automotive.
                        </p><br>
                        <div class="tp-sv-tabs-btn-wrapper mb-30">
                            <a href="services.php" class="tp-white-btn">
                                More Services
                                <span class="ml-10">
                                    <i class="fal fa-long-arrow-right"></i>
                                    <i class="fal fa-long-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 wow tpfadeUp">
                        <div class="about-sv-img">
                            <img src="{{ asset('public/images/about/who.avif')}}" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Experties start  -->
        <div class="unique-it-service pt-120 pb-90">
            <div class="container">
                <div class="section-title-wrapper pb-55">
                    <div class="unique-section text-center">
                        <div class="tp-section text-center">
                            <span class="tp-section__subtitle vogue-text-color white-bg mb-15 wow tpfadeUp"><i
                                    class="before-border"></i>
                                Our Expertise <i class="after-border"></i></span>
                            <h2 class="tp-section__title vogue-text-color wow tpfadeUp" data-wow-delay=".3s">Our
                                Technology
                                Stack</h2>
                        </div>
                    </div>
                </div>
                <div class="unique-scroll-container">
                    <div class="unique-scroll-content">
                        <!-- Original Content -->
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="assets/img/services/ico/android.png" alt="Android">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="assets/img/services/ico/ios.png" alt="iOS">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="assets/img/services/ico/java.png" alt="Java">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="assets/img/services/ico/php.png" alt="PHP">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="assets/img/services/ico/angular.svg" alt="Angular">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="assets/img/services/ico/Node-js.svg" alt="Node.js">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="assets/img/services/ico/Shopify_logo_2018.svg.png" alt="Shopify">
                            </div>
                        </div>

                        <!-- Duplicate Content for Seamless Sliding -->
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="assets/img/services/ico/Kotlin_logo.svg.png" alt="Android">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="assets/img/services/ico/Swift_logo.svg.png" alt="iOS">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="assets/img/technology/Bootstarp.png" alt="Java">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="assets/img/technology/css.png" alt="PHP">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="assets/img/technology/html.png" alt="Angular">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="assets/img/technology/sql.png" alt="Node.js">
                            </div>
                        </div>
                        <div class="unique-service-item">
                            <div class="unique-service-box">
                                <img src="assets/img/services/ico/Shopify_logo_2018.svg.png" alt="Shopify">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            /* Overall container */
            .unique-it-service {
                padding: 60px 15px;
            }

            /* Section Title */
            .unique-section__title {
                font-size: 24px;
                color: #2c3e50;
                margin-bottom: 10px;
                font-weight: bold;
            }

            .unique-section__subtitle {
                display: inline-block;
                padding: 5px 15px;
                color: #ffffff;
                background-color: #3498db;
                border-radius: 25px;
                font-size: 16px;
            }

            /* Scroll container (slider) */
            .unique-scroll-container {
                position: relative;
                overflow: hidden;
                width: 100%;
            }

            .unique-scroll-content {
                display: flex;
                gap: 20px;
                animation: unique-auto-slide 20s linear infinite;
            }

            /* Service Item */
            .unique-service-item {
                flex: 0 0 auto;
                width: 160px;
                height: 160px;
                display: flex;
                align-items: center;
                justify-content: center;
                perspective: 1000px;
            }

            /* 3D Box */
            .unique-service-box {
                width: 150px;
                height: 150px;
                background: #ffffff;
                box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
                border-radius: 10px;
                display: flex;
                justify-content: center;
                align-items: center;
                transform-style: preserve-3d;
                transform: rotateY(0deg);
                transition: transform 0.6s ease, box-shadow 0.3s ease;
            }

            .unique-service-box:hover {
                transform: rotateY(20deg) rotateX(10deg);
                box-shadow: 0 12px 25px rgba(0, 0, 0, 0.5);
            }

            .unique-service-box img {
                max-width: 80%;
                max-height: 80%;
                object-fit: contain;
            }

            /* Animation for continuous loop */
            @keyframes unique-auto-slide {
                0% {
                    transform: translateX(0%);
                }

                100% {
                    transform: translateX(-50%);
                }
            }

            /* Responsive adjustments */
            @media (max-width: 768px) {
                .unique-scroll-content {
                    gap: 10px;
                }

                .unique-service-item {
                    width: 120px;
                    height: 120px;
                }

                .unique-service-box {
                    width: 100px;
                    height: 100px;
                }

                .unique-section__title {
                    font-size: 20px;
                }

                .unique-section__subtitle {
                    font-size: 14px;
                }
            }
        </style>
        <!-- Our Experties end  -->

        <!-- Mission start  -->
        <div class="tp-it-about theme-bg-2 pt-120 ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="tp-it-about-info mb-30">
                            <div class="section-title-wraper tp-border-bottom mb-40">
                                <div class="tp-section">
                                    <span class="tp-section__subtitle vogue-text-color white-bg mb-15 wow tpfadeUp"><i
                                            class="before-border"></i> Since From
                                        2022</span>
                                    <h3 class="tp-section__title vogue-text-color mb-30 wow tpfadeUp"
                                        data-wow-delay=".3s">
                                        Our Mission</h3>
                                    <div class="tp-price-fea-list app-list">
                                        <ul>
                                            <li><i class="fal fa-check"></i><b>Passion for work and never give up </b>
                                            </li>
                                            <li><i class="fal fa-check"></i><b>Discipline and punctual at work</b></li>
                                            <li><i class="fal fa-check"></i><b>Always innovating in developing
                                                    technology</b></li>
                                            <li><i class="fal fa-check"></i><b>Passion for work and never give up</b>
                                            </li>
                                            <li><i class="fal fa-check"></i><b>Always innovating in developing
                                                    technology</b></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="tp-it-author-info wow tpfadeUp" data-wow-delay=".5s">
                                <p>Highly Tailored IT Design, Management & Support Services. It’s
                                    possible to simultaneously manage.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tp-it-about-right mb-30 wow tpfadeUp">
                            <div class="tp-it-about-img text-end p-relative w-img" data-tilt="about"
                                data-tilt-perspective="2000">
                                <img src="assets/img/about/vision%20(1).jpg" alt="about">
                                <div class="it-ab-cirlce-logo">
                                    <img src="assets/img/about/logo1.png" alt="about">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mission end  -->

        <!--Clint Start-->
        <div class="unique-client-service pt-120 pb-90">
            <div class="container">
                <div class="section-title-wrapper pb-55">
                    <div class="tp-section text-center">
                        <span class="tp-section__subtitle vogue-text-color white-bg mb-15 wow tpfadeUp"><i
                                class="before-border"></i>
                            Our Clients <i class="after-border"></i></span>
                        <h2 class="tp-section__title vogue-text-color wow tpfadeUp" data-wow-delay=".3s">Brands We Work
                            With
                        </h2>
                    </div>
                </div>
                <div class="logos">
                    <div class="logos-slide">
                        <img src="assets/img/clints/cluix.webp" />
                        <img src="assets/img/clints/1.png" />
                        <img src="assets/img/clints/2.webp" />
                        <img src="assets/img/clints/3.png" />
                        <img src="assets/img/clints/4.png" style="height: 100px; width: 120px;" />
                        <img src="assets/img/clints/5.png" style="height: 80px; width: 100px;" />
                        <img src="assets/img/clints/8.png" />
                        <img src="assets/img/clints/logo.webp" style="height: 70px; width: 230px;" />
                        <img src="assets/img/businesspartners/2.png" style="height: 100px; width: 200px;"/>
                        <!-- <img src="https://tmb001.vercel.app/images/partners/logo-closeoutnj.png" /> -->
                    </div>


                </div>
            </div>
        </div>
        <style>
            @keyframes slide {
                from {
                    transform: translateX(0);

                }

                to {
                    transform: translateX(-100%);

                }
            }

            .logos {
                overflow: hidden;
                padding: 60px 0;
                background: white;
                white-space: nowrap;
                position: relative;
            }

            .logos:before,
            .logos:after {
                content: "";
                position: absolute;
                top: 0;
                width: 250px;
                height: 100%;
                z-index: 2;
            }

            .logos:before {
                left: 0;
                background: linear-gradient(to left, rgba(255, 255, 255, 0), white);
            }

            .logos:after {
                right: 0;
                background: linear-gradient(to right, rgba(255, 255, 255, 0), white);
            }


            .logos:hover .logos-slide {
                animation-play-state: paused;


            }

            .logos-slide {
                display: inline-block;
                animation: 35s slide infinite linear;
            }

            .logos-slide img {
                height: 50px;
                margin: 0 40px;
            }
        </style>

        <script>
            const copy = document.querySelector(".logos-slide").cloneNode(true);
            document.querySelector(".logos").appendChild(copy);
        </script>
        <!--Clint Start-->

        <!-- testimonial start  -->
        <div class="tp-it-testimonial fix pb-120">
            <div class="it-testi-wraper theme-bg-2 pt-120 pb-125">
                <div class="container">
                    <div class="row ">
                        <div class="col-12 col-md-8">
                            <div class="section-title-wraper">
                                <div class="tp-section">
                                    <span class="tp-section__subtitle vogue-text-color white-bg mb-15"><i
                                            class="before-border"></i>
                                        Testimonials</span>
                                    <h2 class="tp-section__title vogue-text-color mb-70">Users Feedback</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-none d-md-block">
                            <div class="it-testi-navigation text-end p-relative pt-40">
                                <div class="it-testi-button-prev">
                                    <i class="fal fa-long-arrow-left"></i>

                                </div>
                                <div class="it-testi-button-next">
                                    <i class="fal fa-long-arrow-right"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tp-it-testi-active swiper-container">
                    <div class="swiper-wrapper">
                        <div class="it-testimonial swiper-slide">
                            <div class="it-testimonial-box p-relative">
                                <div class="it-testimonial-box__ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fal fa-star"></i>
                                </div>
                                <div class="it-testimonial-box__review">
                                    “ I've been working with this company for over 2 years and never once
                                    had an issue with any of their work. They are very professional &
                                    their rates are reasonable!I'm extremely happy with their service. ”
                                </div>
                                <div class="it-testimonial-bg">
                                    <img src="assets/img/testimonial/testi-icon-bg.png" alt="testimonial">
                                </div>
                            </div>
                            <div class="tp-testimonial-reviewer d-flex align-items-center ml-40">
                                <div class="it-tesi-reviewer-name">
                                    <h4 class="mb-5 vogue-text-color">N.H.Enterprise</h4>
                                    <span>Founder</span>
                                </div>
                            </div>
                        </div>
                        <div class="it-testimonial swiper-slide">
                            <div class="it-testimonial-box p-relative">
                                <div class="it-testimonial-box__ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fal fa-star"></i>
                                </div>
                                <div class="it-testimonial-box__review">
                                    “ It's the best it services company in the market, hands down.
                                    All their clients love them and they never let me down. No one
                                    has ever been as reliable as website development for me. ”
                                </div>
                                <div class="it-testimonial-bg">
                                    <img src="assets/img/testimonial/testi-icon-bg.png" alt="testimonial">
                                </div>
                            </div>
                            <div class="tp-testimonial-reviewer d-flex align-items-center ml-40">
                                <!--<div class="tesi-reviewer-avata mr-15">-->
                                <!--   <img src="assets/img/testimonial/testi-avata-3.png" alt="logo">-->
                                <!--</div>-->
                                <div class="it-tesi-reviewer-name">
                                    <h4 class="mb-5 vogue-text-color">Consultancy</h4>
                                    <span>HR, Manager.</span>
                                </div>
                            </div>
                        </div>
                        <div class="it-testimonial swiper-slide">
                            <div class="it-testimonial-box p-relative">
                                <div class="it-testimonial-box__ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fal fa-star"></i>
                                </div>
                                <div class="it-testimonial-box__review">
                                    “ I have been working with various IT companies for some
                                    time but in this company I find a lot of professionalism &nbsp;
                                    ,good prices and a great quality of service. I recommend
                                    this company to all my friends. ”
                                </div>
                                <div class="it-testimonial-bg">
                                    <img src="assets/img/testimonial/testi-icon-bg.png" alt="testimonial">
                                </div>
                            </div>
                            <div class="tp-testimonial-reviewer d-flex align-items-center ml-40">
                                <!--<div class="tesi-reviewer-avata mr-15">-->
                                <!--   <img src="assets/img/testimonial/testi-avata-4.png" alt="logo">-->
                                <!--</div>-->
                                <div class="it-tesi-reviewer-name">
                                    <h4 class="mb-5 vogue-text-color">Manish Patel </h4>
                                    <span>IT Consulting</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- testimonial end  -->

        <!---Clint count start -->
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

        <br>

        <!-- clinr count end -->


        <!--Industries We Have Served Start -->
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
                            <img src="assets/img/iconourwork/ecommerce-1.png" alt="Ecommerce">
                            <p>Ecommerce, Retail & B2B</p>
                        </div>
                        <div class="industry-card">
                            <img src="assets/img/iconourwork/manufacture-1.png" alt="Manufacturing">
                            <p>Manufacturing</p>
                        </div>
                        <div class="industry-card">
                            <img src="assets/img/iconourwork/hospitality-1.png" alt="Hospitality">
                            <p>Hospitality</p>
                        </div>
                        <div class="industry-card">
                            <img src="assets/img/iconourwork/healthcare-1.png" alt="Healthcare">
                            <p>Healthcare & Fitness</p>
                        </div>
                        <div class="industry-card">
                            <img src="assets/img/iconourwork/on-demand-1.png" alt="On-Demand">
                            <p>On-Demand Solutions</p>
                        </div>
                        <div class="industry-card">
                            <img src="assets/img/iconourwork/logistick-1.png" alt="Logistics">
                            <p>Logistics & Distribution</p>
                        </div>
                        <div class="industry-card">
                            <img src="assets/img/iconourwork/banking-1.png" alt="Banking">
                            <p>Banking, Finance & Insurance</p>
                        </div>
                        <div class="industry-card">
                            <img src="assets/img/iconourwork/education-1.png" alt="Education">
                            <p>Education & eLearning</p>
                        </div>
                        <div class="industry-card">
                            <img src="assets/img/iconourwork/transfort-1.png" alt="Transport">
                            <p>Transport & Automotive</p>
                        </div>
                        <div class="industry-card">
                            <img src="assets/img/iconourwork/Social-1.png" alt="Social Networking">
                            <p>Social Networking</p>
                        </div>
                        <div class="industry-card">
                            <img src="assets/img/iconourwork/food-1.png" alt="Food">
                            <p>Food & Restaurant</p>
                        </div>
                        <div class="industry-card">
                            <img src="assets/img/iconourwork/realestate-1.png" alt="Real Estate">
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
                font-size: 14px;
                font-weight: bold;
                color: #333;
                text-align: center;
            }
        </style>

        <!--Industries We Have Served Start End -->


        <!--Our Business Model Start -->
        <div class="unique-client-service">
            <div class="container">
                <div class="section-title-wrapper pb-55">
                    <div class="tp-section text-center">
                        <span class="tp-section__subtitle vogue-text-color white-bg mb-15">
                            <i class="before-border wow tpfadeUp" data-wow-delay=".3s"></i> Our Trusted Business Partners <i class="after-border"></i>
                        </span>
                        <p class="text-grey wow tpfadeUp" data-wow-delay=".3s">
                            We collaborate with industry-leading partners to deliver exceptional value and innovative solutions for our clients..
                        </p>
                    </div>
                    <strong>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="square-holder">
                                    <img alt="partner" src="assets/img/businesspartners/1.png" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="square-holder">
                                    <img alt="partner" src="assets/img/businesspartners/2.png" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="square-holder">
                                    <img alt="partner" src="assets/img/businesspartners/3.png" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="square-holder">
                                    <img alt="partner" src="assets/img/businesspartners/5.png" />
                                </div>
                            </div>
                        </div>
                    </strong>
                </div>
            </div>
        </div>


        <style>
            .square-holder {
                padding: 30px;
                border: 1px solid #cecece;
                align-items: center;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 20px;
                background-color: var(--tp-theme-bg);
                height: 250px
            }

            .square-holder img {
                max-width: 120%;
                filter: grayscale(100%);
                transition: all 0.3s;
            }

            .square-holder:hover img {
                filter: none;
            }
        </style>

        <!--Our Business Model End -->



        <!--Blog Start-->
        <div class="tp-it-testimonial fix pb-120">
            <div class="it-testi-wraper theme-bg-2 pt-120 pb-125">
                <div class="container">
                    <div class="row ">
                        <div class="col-12 col-md-8">
                            <div class="section-title-wraper">
                                <div class="tp-section">
                                    <span class="tp-section__subtitle vogue-text-color white-bg mb-15"><i
                                            class="before-border"></i>
                                        Latest News & Blogs</span>
                                    <h2 class="tp-section__title vogue-text-color">What's New in the Business Area
                                        to Know</h2>
                                    <p>Don’t focus on having a great blog. Focus on producing a blog that’s great
                                        for
                                        readers.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-none d-md-block text-end">
                            <div class="it-testi-navigation p-relative pt-40">
                                <a href="blog.php"
                                    class="tp-slider-btn orange-chat-color tp-btn-hover alt-color alt-bg-orange"
                                    data-animation="tpfadeUp" data-delay=".9s">
                                    <span class="mr-10">
                                        <i class="fas fa-comments"></i>
                                        <i class="fas fa-comments"></i>
                                    </span>
                                    All New Articles
                                    <b></b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .unique-card-container {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    gap: 2rem;
                    max-width: 1200px;
                    margin: 2rem auto;
                    padding: 1rem;
                }

                .unique-card {
                    display: flex;
                    flex-direction: column;
                    width: clamp(18rem, 90%, 22rem);
                    overflow: hidden;
                    box-shadow: 0 0.1rem 1rem rgba(0, 0, 0, 0.1);
                    border-radius: 1em;
                    background: linear-gradient(to right, #ffffff, #ece9e6);
                }

                .unique-card img {
                    width: 100%;
                    display: block;
                    object-fit: cover;
                }

                .unique-card-content {
                    padding: 1rem;
                    display: flex;
                    flex-direction: column;
                    gap: 0.5rem;
                }

                .unique-category-tag {
                    align-self: flex-start;
                    padding: 0.25em 0.75em;
                    border-radius: 1em;
                    font-size: 0.75rem;
                    color: #fafafa;
                }

                .unique-tech {
                    background: linear-gradient(to bottom, var(--tp-theme-orange), var(--tp-theme-redical));
                }

                .unique-food {
                    background: linear-gradient(to bottom, var(--tp-theme-orange), var(--tp-theme-redical));
                }

                .unique-card-footer {
                    display: flex;
                    padding: 1rem;
                    margin-top: auto;
                }

                .unique-author {
                    display: flex;
                    gap: 0.5rem;
                    align-items: center;
                }

                .unique-author img {
                    border-radius: 50%;
                }

                @media (max-width: 768px) {
                    .unique-card-container {
                        flex-direction: column;
                        align-items: center;
                    }
                }
            </style>

            <div class="unique-card-container">
                <div class="unique-card">
                    <img src="assets/img/newimages/5199286.jpg" alt="tech_image">
                    <div class="unique-card-content">
                        <span class="unique-category-tag unique-tech">Technology</span>
                        <h4 class="it-service__item-title">What's new in 2022 Tech</h4>
                        <p class="text-grey wow tpfadeUp"
                            style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">Lorem ipsum dolor
                            sit
                            amet consectetur adipisicing elit. Sequi perferendis
                            molestiae
                            non
                            nemo
                            doloribus.</p>
                    </div>
                    <div class="unique-card-footer">
                        <div class="unique-author">
                            <img src="assets/img/logo/fevicon.png" alt="user1" style="height: 40px; width: 40px">
                            <div>
                                <h5>Urlwebwala</h5>
                                <small>2h ago</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="unique-card">
                    <img src="assets/img/newimages/5199286.jpg" alt="food_image">
                    <div class="unique-card-content">
                        <span class="unique-category-tag unique-food">Technology</span>
                        <h4 class="it-service__item-title">Delicious Food</h4>
                        <p class="text-grey wow tpfadeUp"
                            style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">Lorem ipsum dolor
                            sit
                            amet consectetur adipisicing elit. Sequi perferendis
                            molestiae
                            non
                            nemo
                            doloribus.</p>
                    </div>
                    <div class="unique-card-footer">
                        <div class="unique-author">
                            <img src="assets/img/logo/fevicon.png" alt="user1" style="height: 40px; width: 40px">
                            <div>
                                <h5>Urlwebwala</h5>
                                <small>Yesterday</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="unique-card">
                    <img src="assets/img/newimages/5199286.jpg" alt="food_image">
                    <div class="unique-card-content">
                        <span class="unique-category-tag unique-food">Unity Development</span>
                        <h4 class="it-service__item-title">Delicious Food</h4>
                        <p class="text-grey wow tpfadeUp"
                            style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">Lorem ipsum dolor
                            sit
                            amet consectetur adipisicing elit. Sequi perferendis
                            molestiae
                            non
                            nemo
                            doloribus.</p>
                    </div>
                    <div class="unique-card-footer">
                        <div class="unique-author">
                            <img src="assets/img/logo/fevicon.png" alt="user1" style="height: 40px; width: 40px">
                            <div>
                                <h5>Urlwebwala</h5>
                                <small>Yesterday</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--Blog end-->

        <!-- faq area start  -->
        <div class="seo-faq-area sv-fea-area pt-120" style="padding-top: 0px;">
            <div class="container">
                <div class="col-12 col-md-8">
                    <div class="section-title-wrapper">
                        <div class="tp-section">
                            <span class="tp-section__subtitle vogue-text-color white-bg mb-15">
                                <i class="before-border"></i> Our Answers
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="seo-faq-content mb-30">
                            <div class="section-title-wrapper">
                                <div class="tp-section">
                                    <h2 class="tp-section__title mb-45 wow tpfadeUp">Frequently Asked Questions</h2>
                                    <p class="text-grey wow tpfadeUp" data-wow-delay=".3s">Here are some of the
                                        frequently asked
                                        questions.</p>
                                </div>
                            </div>
                            <div class="accordion tp-accordion wow tpfadeUp" id="accordionExample">
                                <!-- FAQ Item 1 -->
                                <div class="accordion-item wow tpfadeUp">
                                    <h2 class="accordion-header" id="faq1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            What is your process flow for Web/App Development?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="faq1" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            We follow a highly organized and comprehensive process to ensure the
                                            website
                                            or
                                            application
                                            meets your requirements. We start with a deep analysis of the project,
                                            prepare an
                                            action
                                            plan, create user-friendly designs, develop the project, and finally
                                            deploy
                                            the
                                            website/application.
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            What are the advantages of hiring us?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="faq2"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            We have expert developers for every technology. Our expertise includes
                                            crafting highly
                                            stable
                                            code, creating reusable modules, simplifying maintenance, and developing
                                            robust app
                                            architectures.
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item 3 -->
                                <div class="accordion-item" data-aos="fade-up" data-aos-duration="2000">
                                    <h2 class="accordion-header" id="faq3">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Why hire developers from an agency instead of freelancers?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="faq3"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            We provide a one-stop solution for all your business requirements. Our
                                            team
                                            meticulously
                                            plans the Software Development Life Cycle, including analysis,
                                            monitoring,
                                            and
                                            necessary
                                            customizations from the initial project idea to deployment. Therefore,
                                            hiring a
                                            development
                                            agency offers more advantages than hiring freelancers.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="seo-faq-img text-end p-relative mb-30 wow tpfadeUp">
                            <img src="assets/img/faq/sv-page-faq.jpg" alt="FAQ Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- faq area end  -->

        <!-- cta are  -->
        <div class="tp-bs-cta-area pt-105 pb-120 theme-bg p-relative tp-ab-cta-overlay"
            data-background="assets/img/cta/cta-ab-bg.jpg">
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
                        <a href="contact.php" class="tp-btn mr-30 wow tpfadeUp">Contact Us<span><i
                                    class="fal fa-long-arrow-right"></i>
                                <i class="fal fa-long-arrow-right"></i></span></a>

                    </div>
                </div>
            </div>
            <!-- <div class="red-nots">
                     <img src="assets/img/cta/point-bg.png" alt="logo">
                  </div> -->
            <div class="thumb-animation d-none d-lg-block">
                <div class="like-thumb z-index-11">
                    <img src="assets/img/cta/like-thumb.jpg" alt="cta">
                </div>
                <div class="like-thumb-border z-index-11">
                </div>
            </div>
        </div>
        <!-- cta end -->



</main>

<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/680543517f5f42190ba77ea5/1ipa8ttnm';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>

@endsection