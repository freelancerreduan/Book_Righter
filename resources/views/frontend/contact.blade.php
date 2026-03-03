@extends('frontend.layouts.header')


@include('frontend.layouts.navbar')

<!-- Hero Section -->
<div class="container text-center my-5">
  <h1 class="hero-title">Contact Polash Mollah</h1>
  <p class="mt-3">
    Want to reach out to Polash Mollah? Use the form below to send an email or reach out via social media.
  </p>
</div>

<!-- Contact Form Section -->
<div class="container mb-5">
  <div class="card-custom">
    <div class="row align-items-center">
      
      <!-- Image -->
      <div class="col-md-4 mb-4 mb-md-0">
        <img src="https://images.unsplash.com/photo-1603415526960-f7e0328c63b1" class="profile-img">
      </div>

      <!-- Form -->
      <div class="col-md-8">
        <h3>Contact Form</h3>
        <p>Fill out the form below to get in touch with Polash Mollah.</p>

        <form>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Your Name">
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Your Email">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Subject">
          </div>
          <div class="mb-3">
            <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
          </div>
          <button type="submit" class="btn btn-custom w-100">Send Message</button>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- Social Media Section -->
<div class="container mb-5">
  <div class="social-box">
    <h3>Connect on Social Media</h3>
    <p>You can also connect with me on social media:</p>

    <div>
      <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" class="social-icon">
      <img src="https://cdn-icons-png.flaticon.com/512/2111/2111646.png" class="social-icon">
      <span class="badge bg-light text-dark p-3">
        contact@polashmollah.com
      </span>
    </div>
  </div>
</div>

<!-- Footer -->
@include('frontend.layouts.footer')

