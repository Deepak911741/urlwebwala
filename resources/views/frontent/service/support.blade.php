@extends(config('constants.FRONTENT_FOLDER') . 'includes/header')

@section('content')


<div class="body-overlay"></div>
<main>
    <div class="breadcrumb__area theme-bg pt-120 pb-120" data-background="{{ asset ('public/images//breadcrumb/breadcrumb-bg.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list mb-10">
                            <span><a href="{{ config('constants.HOME_URL') }}">Home</a></span>
                            <span class="dvdr dvdr-line"></span>
                            <span class="tp-bc-acive-menu">Services</span>
                        </div>
                        <h3 class="breadcrumb__title">Support & Maintenance</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tp-sv-details-area py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center mb-4">
                    <img src="{{ asset ('public/images/services/support1.jpg')}}" alt="Support & Maintenance"
                        class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <div class="tp-sv-details-service-left">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <h2 class="tp-section__title mb-3">Support & Maintenance</h2>
                                <p class="text-justify">
                                    To guarantee your dynamic and transactional websites always run at their best, we
                                    offer the finest support and maintenance services for your routine requirements,
                                    such as continuous adjustments, regular or on-demand backups, and speed
                                    optimization.
                                </p>
                            </div>
                            <ul class="list-unstyled mt-3">
                                <li>✅ Website design changes</li>
                                <li>✅ Regular updates of your website content</li>
                                <li>✅ Regular Testing</li>
                                <li>✅ Administration Support</li>
                                <li>✅ Scheduled offsite backups</li>
                                <li>✅ Hosting Maintenance</li>
                                <li>✅ Graphic Design, UI & Multimedia</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

@endsection