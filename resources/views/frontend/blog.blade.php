@extends('frontend.layouts.header')

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
  <div class="blog-card row align-items-center">
    <div class="col-md-4">
      <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f" class="blog-img">
    </div>
    <div class="col-md-8">
      <h4>5 Ways to Boost Your Patience in Everyday Life</h4>
      <small>April 18, 2024</small>
      <p class="mt-2">
        Discover effective techniques to improve your patience and stay calm in your daily interactions.
      </p>
      <button class="read-btn">Read More</button>
    </div>
  </div>

  <!-- Blog Item -->
  <div class="blog-card row align-items-center">
    <div class="col-md-4">
      <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4" class="blog-img">
    </div>
    <div class="col-md-8">
      <h4>Setting Goals for Personal Growth: A Beginner's Guide</h4>
      <small>April 10, 2024</small>
      <p class="mt-2">
        Learn how to set achievable goals that will guide you on the path to self-improvement.
      </p>
      <button class="read-btn">Read More</button>
    </div>
  </div>

  <!-- Blog Item -->
  <div class="blog-card row align-items-center">
    <div class="col-md-4">
      <img src="https://images.unsplash.com/photo-1492724441997-5dc865305da7" class="blog-img">
    </div>
    <div class="col-md-8">
      <h4>How to Stay Motivated During Challenging Times</h4>
      <small>March 25, 2024</small>
      <p class="mt-2">
        Explore strategies to maintain motivation and overcome obstacles during difficult periods.
      </p>
      <button class="read-btn">Read More</button>
    </div>
  </div>

  <!-- Blog Item -->
  <div class="blog-card row align-items-center">
    <div class="col-md-4">
      <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e" class="blog-img">
    </div>
    <div class="col-md-8">
      <h4>Building Emotional Strength: Tips for Resilience</h4>
      <small>March 10, 2024</small>
      <p class="mt-2">
        Learn practical tips to build emotional resilience and handle stress effectively.
      </p>
      <button class="read-btn">Read More</button>
    </div>
  </div>

  <!-- Load More -->
  <div class="text-center my-4">
    <button class="load-btn">Load More</button>
  </div>

</div>

<!-- Footer -->
@include('frontend.layouts.footer')