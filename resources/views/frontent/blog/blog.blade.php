@extends(config('constants.FRONTENT_FOLDER') . 'includes/header')

@section('content')

<style>
.blog-card {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.blog-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

.blog-image {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.blog-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.blog-card:hover .blog-image img {
    transform: scale(1.05);
}

.blog-category {
    position: absolute;
    top: 15px;
    left: 15px;
    background: linear-gradient(45deg, var(--tp-theme-orange), var(--tp-theme-redical));
    color: white;
    padding: 5px 12px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
}

.blog-content {
    padding: 25px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.blog-meta {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
    font-size: 14px;
    color: #666;
}

.blog-meta i {
    margin-right: 5px;
    color: var(--tp-theme-orange);
}

.blog-title {
    margin-bottom: 15px;
    font-size: 20px;
    line-height: 1.4;
}

.blog-title a {
    color: #333;
    text-decoration: none;
    transition: color 0.3s ease;
}

.blog-title a:hover {
    color: var(--tp-theme-orange);
}

.blog-excerpt {
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
    flex-grow: 1;
}

.read-more-link {
    color: var(--tp-theme-orange);
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    transition: all 0.3s ease;
    margin-top: auto;
}

.read-more-link:hover {
    color: var(--tp-theme-redical);
    gap: 10px;
}

.tp-pf-btn-group button {
    background: transparent;
    border: 2px solid #ddd;
    padding: 10px 20px;
    margin: 5px;
    border-radius: 25px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 500;
}

.tp-pf-btn-group button.active,
.tp-pf-btn-group button:hover {
    background: linear-gradient(45deg, var(--tp-theme-orange), var(--tp-theme-redical));
    color: white;
    border-color: transparent;
}

@media (max-width: 768px) {
    .blog-content {
        padding: 20px;
    }
    
    .blog-meta {
        flex-direction: column;
        gap: 10px;
    }
}
</style>
<main>
    <div class="breadcrumb__area theme-bg pt-120 pb-120" data-background="{{ asset ('public/images/breadcrumb/breadcrumb-bg.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list mb-10">
                            <span><a href="{{ config('constants.HOME_URL')}}">Home</a></span>
                            <span class="dvdr dvdr-line"></span>
                            <span class="tp-bc-acive-menu">Blog</span>
                        </div>
                        <h3 class="breadcrumb__title">Blog & News</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-portfoliop-page-area pt-120 pb-120">
        <div class="container">
            <div class="tp-portfolio-header mb-50">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-pf-btn-group text-center">
                            <button class="active" onclick="filterBlogs('all')">All</button>
                            @if(isset($categories) && !empty($categories))
                                @foreach ($categories as $category)
                                    <button onclick="filterBlogs('{{ $category->i_id }}')">
                                        {{ $category->v_category_name ?? '' }}
                                    </button>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="blog-container">
                @if (isset($blogs) && !empty($blogs))
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6 mb-40 blog-item" data-category="{{ isset($blog->i_category_id) ? $blog->i_category_id : 'all'}}">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src="{{ (isset($blog) && !empty($blog->v_image) ? getUploadedAssetUrl($blog->v_image) : 'assets/img/newimages/5199286.jpg') }}" alt="{{ (isset($blog) && ($blog->v_title) ? $blog->v_title : '') }}" />
                                </div>

                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span><i class="far fa-calendar"></i>{{ (isset($blog) && !empty($blog->dt_created_at) ? formatDateFancy($blog->dt_created_at) : '') }}</span>
                                        <span><i class="far fa-user"></i>{{ (isset($blog) && !empty($blog->v_author_name) ? $blog->v_author_name : '') }}</span>
                                    </div>

                                    <h3 class="blog-title">
                                        <a href="{{ config('constants.BLOG_URL') . '/' . (isset($blog) && !empty($blog->v_seo_url) ? $blog->v_seo_url : '') }}" target="_blank">{{ (isset($blog) && !empty($blog->v_title) ? $blog->v_title : '') }}</a>
                                    </h3>

                                    <div class="blog-excerpt">
                                        {{ (isset($blog) && !empty($blog->v_content) ? Str::limit(strip_tags($blog->v_content), 150) : '') }}
                                    </div>

                                    <a href="{{ config('constants.BLOG_URL') . '/' . (isset($blog) && !empty($blog->v_seo_url) ? $blog->v_seo_url : '') }}" class="read-more-link">
                                        Read More <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
            </div>
        </div>
    </div>

    <script>
        function filterBlogs(categoryId) {
            $.ajax({
                url: "{{ url()->current() }}",
                type: "GET",
                data: { filter: categoryId },
                success: function(response) {
                    $('#blog-container').html(response);
                },
                error: function(xhr) {
                    console.log("AJAX error", xhr);
                }
            });
        }

    </script>
</main>

@endsection