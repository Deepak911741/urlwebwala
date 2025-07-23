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
                            <span><a href="index.php">Home</a></span>
                            <span class="dvdr dvdr-line"></span>
                            <span class="tp-bc-acive-menu">Blog</span>
                        </div>
                        <h3 class="breadcrumb__title">Blog & News</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <div class="tp-portfoliop-page-area pt-120 pb-120">
        <div class="container">
            <div class="tp-portfolio-header mb-30">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-pf-btn-group text-center">
                            <button class="active" data-filter="*">All News</button>
                            <button data-filter=".carddesign">Card Design</button>
                            <button data-filter=".design">Logo Design</button>
                            <button data-filter=".support">Web development</button>
                            <button data-filter=".app">App Development</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection