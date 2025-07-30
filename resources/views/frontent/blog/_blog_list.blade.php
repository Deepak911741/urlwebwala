@if (isset($blogs) && count($blogs))
    @foreach ($blogs as $blog)
        <div class="col-lg-4 col-md-6 mb-40 blog-item" data-category="{{ $blog->i_category_id ?? 'all' }}">
            <div class="blog-card">
                <div class="blog-image">
                    <img src="{{ (!empty($blog->v_image) ? getUploadedAssetUrl($blog->v_image) : 'assets/img/newimages/5199286.jpg') }}" alt="{{ $blog->v_title ?? '' }}" />
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span><i class="far fa-calendar"></i>{{ (!empty($blog->dt_created_at) ? formatDateFancy($blog->dt_created_at) : '') }}</span>
                        <span><i class="far fa-user"></i>{{ $blog->v_author_name ?? '' }}</span>
                    </div>
                    <h3 class="blog-title">
                        <a href="{{ config('constants.BLOG_URL') . '/' . ($blog->v_seo_url ?? '') }}" target="_blank">{{ $blog->v_title ?? '' }}</a>
                    </h3>
                    <div class="blog-excerpt">
                        {{ (!empty($blog->v_content) ? Str::limit(strip_tags($blog->v_content), 150) : '') }}
                    </div>
                    <a href="{{ config('constants.BLOG_URL') . '/' . ($blog->v_seo_url ?? '') }}" class="read-more-link">
                        Read More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
@else
<div class="col-12">
    <div class="text-center p-5 rounded shadow-sm" style="background-color: #f9f9f9;">
        <img src="{{ asset ('public/images/no-blog.png') }}" alt="No Blogs" style="width: 150px; max-width: 100%; margin-bottom: 20px;">
        <h4 class="text-muted">Oops! No blogs found</h4>
        <p class="text-secondary">We couldn't find any blogs under this category at the moment. Please check back later or explore other categories.</p>
        <a href="{{ url('/blog') }}" class="btn btn-primary mt-3">
            Back to Blogs <i class="fas fa-undo-alt ms-2"></i>
        </a>
    </div>
</div>
@endif
