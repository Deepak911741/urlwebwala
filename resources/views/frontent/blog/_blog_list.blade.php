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
    <div class="col-12"><p>No blogs found for this category.</p></div>
@endif
