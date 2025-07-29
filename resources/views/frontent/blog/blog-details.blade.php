@extends(config('constants.FRONTENT_FOLDER') . 'includes/header')
@section('content')

<style>
.blog-detail-content {
    background: #fff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.blog-meta-info {
    border-bottom: 1px solid #eee;
    padding-bottom: 20px;
}

.blog-category-tag,
.blog-date,
.blog-author,
.blog-views {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-size: 14px;
    color: #666;
    padding: 5px 12px;
    background: #f8f9fa;
    border-radius: 15px;
}

.blog-category-tag {
    background: linear-gradient(45deg, var(--tp-theme-orange), var(--tp-theme-redical));
    color: white;
}

.blog-detail-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #333;
    line-height: 1.3;
}

.blog-detail-text {
    font-size: 16px;
    line-height: 1.8;
    color: #555;
}

.blog-detail-text h1,
.blog-detail-text h2,
.blog-detail-text h3,
.blog-detail-text h4,
.blog-detail-text h5,
.blog-detail-text h6 {
    color: #333;
    margin: 30px 0 15px 0;
}

.blog-detail-text p {
    margin-bottom: 20px;
}

.blog-detail-text img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin: 20px 0;
}

.blog-share {
    border-top: 1px solid #eee;
    padding-top: 20px;
}

.share-buttons {
    display: flex;
    gap: 10px;
    margin-top: 10px;
}

.share-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    color: white;
    text-decoration: none;
    transition: transform 0.3s ease;
}

.share-btn:hover {
    transform: translateY(-2px);
    color: white;
}

.share-btn.facebook { background: #3b5998; }
.share-btn.twitter { background: #1da1f2; }
.share-btn.linkedin { background: #0077b5; }
.share-btn.whatsapp { background: #25d366; }

/* Sidebar Styles */
.blog-sidebar {
    padding-left: 30px;
}

.sidebar-widget {
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    margin-bottom: 30px;
}

.widget-title {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 20px;
    color: #333;
    position: relative;
    padding-bottom: 10px;
}

.widget-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 3px;
    background: linear-gradient(45deg, var(--tp-theme-orange), var(--tp-theme-redical));
}

.related-post-item {
    display: flex;
    gap: 15px;
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #eee;
}

.related-post-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.related-post-image {
    flex-shrink: 0;
    width: 80px;
    height: 80px;
    border-radius: 8px;
    overflow: hidden;
}

.related-post-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.related-post-content h6 {
    margin-bottom: 5px;
    line-height: 1.4;
}

.related-post-content h6 a {
    color: #333;
    text-decoration: none;
    transition: color 0.3s ease;
}

.related-post-content h6 a:hover {
    color: var(--tp-theme-orange);
}

.post-date {
    font-size: 12px;
    color: #999;
}

.contact-widget {
    text-align: center;
    background: linear-gradient(135deg, var(--tp-theme-orange), var(--tp-theme-redical));
    color: white;
    border-radius: 10px;
    padding: 30px;
}

.contact-widget h4 {
    color: white;
    margin-bottom: 15px;
}

.contact-btn {
    display: inline-block;
    background: white;
    color: var(--tp-theme-orange);
    padding: 12px 25px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    margin-top: 15px;
    transition: all 0.3s ease;
}

.contact-btn:hover {
    background: #f8f9fa;
    transform: translateY(-2px);
    color: var(--tp-theme-redical);
}

@media (max-width: 991px) {
    .blog-sidebar {
        padding-left: 0;
        margin-top: 50px;
    }
    
    .blog-detail-content {
        padding: 25px;
    }
    
    .blog-detail-title {
        font-size: 2rem;
    }
}

@media (max-width: 768px) {
    .blog-meta-info .d-flex {
        flex-direction: column;
        align-items: flex-start !important;
        gap: 10px !important;
    }
    
    .share-buttons {
        justify-content: center;
    }
    
    .related-post-item {
        flex-direction: column;
        text-align: center;
    }
    
    .related-post-image {
        width: 100%;
        height: 200px;
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
                            <span><a href="index.php">Home</a></span>
                            <span class="dvdr dvdr-line"></span>
                            <span><a href="blog.php">Blog</a></span>
                            <span class="dvdr dvdr-line"></span>
                            <span class="tp-bc-acive-menu">{{ (isset($blog) && !empty($blog->v_title) ? $blog->v_title : '') }}</span>
                        </div>
                        <h3 class="breadcrumb__title">{{ (isset($blog) && !empty($blog->v_title) ? $blog->v_title : '') }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tp-blog-details-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-detail-content">
                            <div class="blog-featured-image mb-40">
                                <img src="{{ (isset($blog) && !empty($blog->v_image) ? getUploadedAssetUrl($blog->v_image) : '')}}" alt="{{ (isset($blog) && !empty($blog->v_title) ? $blog->v_title : '') }}"
                                     class="w-100 rounded">
                            </div>
                        <div class="blog-meta-info mb-30">
                            <div class="d-flex flex-wrap align-items-center gap-3">
                                    <span class="blog-category-tag">
                                        <i class="fas fa-tag"></i>{{ (isset($blog) && !empty($blog->categoryInfo->v_category_name) ? $blog->categoryInfo->v_category_name : '') }}
                                    </span>
                                <span class="blog-date">
                                    <i class="far fa-calendar"></i>{{ (isset($blog) && !empty($blog->dt_created_at) ? formatDateFancy($blog->dt_created_at) : '') }}
                                </span>
                                
                                <span class="blog-author">
                                    <i class="far fa-user"></i>
                                    {{ (isset($blog) && !empty($blog->v_author_name) ? $blog->v_author_name : 'Admin') }}
                                </span>
                                
                                <span class="blog-views">
                                    <i class="far fa-eye"></i> {{ (isset($blog) && !empty($blog->i_view_count) ? $blog->i_view_count : 0) }} Views
                                </span>
                            </div>
                        </div>
                        
                        <h1 class="blog-detail-title mb-30">{{ (isset($blog) && !empty($blog->v_title) ? $blog->v_title : '')}}</h1>

                        <div class="blog-detail-text">
                            {{ (isset($blog) && !empty($blog->v_content) ? $blog->v_content : '') }}
                        </div>
                        
                        <div class="blog-share mt-40">
                            <h5>Share this post:</h5>
                            <div class="share-buttons">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ config('constants.BLOG_URL') . '/' . (isset($blog) && !empty($blog->v_seo_url) ? $blog->v_seo_url : '') }}" 
                                   target="_blank" class="share-btn facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ config('constants.BLOG_URL') . '/' . (isset($blog) && !empty($blog->v_seo_url) ? $blog->v_seo_url : '') }}&text={{ (isset($blog) && !empty($blog->v_title) ? $blog->v_title : '') }}" 
                                   target="_blank" class="share-btn twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ config('constants.BLOG_URL') . '/' . (isset($blog) && !empty($blog->v_seo_url) ? $blog->v_seo_url : '') }}" 
                                   target="_blank" class="share-btn linkedin">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="https://wa.me/?text={{ config('constants.BLOG_URL') . '/' . (isset($blog) && !empty($blog->v_seo_url) ? $blog->v_seo_url : '') }}" 
                                   target="_blank" class="share-btn whatsapp">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                            <div class="sidebar-widget">
                                <h4 class="widget-title">Related Posts</h4>
                                <div class="related-posts">
                                    @if (isset($related_blogs) && !empty($related_blogs))
                                        @foreach ($related_blogs as $related)
                                            <div class="related-post-item">
                                                <div class="related-post-image">
                                                    <img src="{{ (isset($related->v_image) && !empty($related->v_image) ? getUploadedAssetUrl($related->v_image) : asset('public/images/newimages/5199286.jpg')) }}" 
                                                         alt="{{ (isset($related->v_title) ? $related->v_title : 'Related Post') }}">
                                                </div>
                                                <div class="related-post-content">
                                                    <h6><a href="{{ config('constants.BLOG_URL') . '/' . (isset($related->v_seo_url) ? $related->v_seo_url : '') }}" target="_blank">
                                                        {{ (isset($related->v_title) ? $related->v_title : 'Related Post') }}
                                                    </a></h6>
                                                    <span class="post-date">{{ (isset($related->dt_created_at) ? formatDateFancy($related->dt_created_at) : '') }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        <div class="sidebar-widget">
                            <div class="contact-widget">
                                <h4>Need Help?</h4>
                                <p>Contact us for any queries or project discussions.</p>
                                <a href="{{ config('constants.CONTACT_URL')}}" class="contact-btn">Get In Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @if (empty($blog))
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Blog Not Found</h2>
                <p>The blog post you're looking for doesn't exist or has been removed.</p>
                <a href="{{ config('constants.BLOG_URL')}}" class="btn btn-primary">Back to Blog</a>
            </div>
        </div>
    </div>
    @endif
</main>
@endsection