@extends('frontend.layouts.header')
@php
use Illuminate\Support\Str;
@endphp
<!-- Navbar -->
@include('frontend.layouts.navbar')
<!-- Hero Section -->
<div class="container text-center my-5">
  <h1 class="hero-title">Polash Mollah’s Blog</h1>
  <p class="mt-3">
    Welcome to Polash Mollah’s blog where I share insights, tips, and articles 
    on personal growth, patience, motivation, and emotional strength.
  </p>
</div>

<!-- Search -->
<div class="container mb-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="input-group search-box">
        <input type="text" class="form-control" placeholder="Search">
        <button class="btn text-white px-4">Search</button>
      </div>
    </div>
  </div>
</div>

<!-- Blog List -->
<div class="container">

  <!-- Blog Item -->
   @foreach ($blogs as $blog)
    <div class="blog-card row align-items-center">
      <div class="col-md-4">
        <img src="{{ $blog->blog_img ? asset('admin/img/' . $blog->blog_img) : asset('admin/img/default.png') }}" class="blog-img">
      </div>
      <div class="col-md-8">
        <h4>{{ $blog->blog_title }}</h4>
        <small> {{ $blog->updated_at->format('d F Y') }} </small>
        <p class="mt-2">
            {{ Str::limit( html_entity_decode(strip_tags($blog->blog_description) ), 250) }}
        </p>
        <a href="{{ route('admin.blog.detils', $blog->id ) }}" class="read-btn"> Read More </a> 
      </div>
    </div>
   @endforeach


  <!-- Load More -->
  <div class="text-center my-4">
    <button class="load-btn">Load More</button>
  </div>

</div>

<!-- Footer -->
@include('frontend.layouts.footer')