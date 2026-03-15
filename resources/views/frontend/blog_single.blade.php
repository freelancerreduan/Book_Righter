@extends('frontend.layouts.header')
@include('frontend.layouts.navbar')
  <!-- Top bar -->


  <div class="container pb-5">
    <div class="row g-4">

      <!-- ── Main Blog Content ───────────────── -->
      <div class="col-lg-8">
        <div class="blog-card">

          <!-- Hero Image -->
          <a href="{{ route('admin.blog.detils', $blog_single_page->id) }}" class="blog-hero d-block">
            <img src="{{ asset('admin/img/' . $blog_single_page->blog_img) }}" alt="{{ $blog_single_page->blog_title }}">
            <div class="blog-hero-overlay"></div>
          </a>

          <!-- Body -->
          <div class="blog-body">
            <div class="blog-meta">
              <span class="tag">Article</span>
              <span class="date">{{ $blog_single_page->created_at->format('d F, Y') }}</span>
            </div>

            <h1 class="blog-title">{{ $blog_single_page->blog_title }}</h1>
            <div class="blog-divider"></div>

            <div class="blog-description">
              {{ $blog_single_page->blog_description }}
            </div>
          </div>

        </div>
      </div>

      <!-- ── Related Blogs Sidebar ───────────── -->
      <div class="col-lg-4">
        <div class="sidebar-card">

          <div class="sidebar-header">
            <div class="bar"></div>
            <h3>Related Articles</h3>
          </div>

          <div class="sidebar-body">
            @foreach ($all_blogs as $blog)
            <a href="{{ route('admin.blog.detils', $blog->id) }}" class="related-item">
              <img src="{{ asset('admin/img/' . $blog->blog_img) }}" alt="{{ $blog->blog_title }}" class="related-thumb">
              <div class="related-info">
                <div class="related-title-text">{{ $blog->blog_title }}</div>
                <div class="related-date">{{ $blog->created_at->format('d M Y') }}</div>
              </div>
            </a>
            @endforeach
          </div>

        </div>
      </div>

    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@include('frontend.layouts.footer')