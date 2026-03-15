{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books by Polash Mollah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #f5f1ee;
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background-color: #f5f1ee;
        }

        .navbar a {
            color: #333 !important;
            font-weight: 500;
        }

        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: 48px;
            font-weight: 600;
        }

        .hero-subtitle {
            font-size: 18px;
            color: #555;
        }

        .book-card {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }

        .book-title {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 600;
        }

        .btn-custom {
            border: 1px solid #ddd;
            background: #f8f6f4;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: 500;
        }

        .btn-custom:hover {
            background: #e9e4df;
        }

        .book-img {
            border-radius: 10px;
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
    </style>
      <style>
        .navbar_custome {
            background-color: #efeeef;
        }

        .nav_custome {
            font-weight: 800;
            font-size: 20px;
        }

        .main-content {
            background-color: #f5f1eb;
        }

        .area_select {
            width: 80%;

            margin: auto;
        }

        .main_heading {
            font-weight: 700;
        }

        .author_name {
            font-style: italic;
        }

        .custome_btn {
            font-size: 20px;
            font-weight: 400;
            background-color: #c69c6d;
        }

        .service_area_main {
            background-color: #efeeef;
        }

        .service_area {
            width: 90%;
            margin: auto;
        }
         h5 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .service_area {
            padding: 60px 0;
        }

        .service_area .col {
            background: #fff;
            padding: 30px;
            margin: 10px 0;
            border-radius: 5px;
            min-height: 280px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service_area .col:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .service_area img {
            border-radius: 5px;
            object-fit: cover;
            height: 200px;
            width: 100%;
        }

        .btn-dark {
            background-color: #333;
            border: none;
            padding: 8px 20px;
        }

        .btn-dark:hover {
            background-color: #000;
            color: #fff;
        }

        .btn-success {
            background-color: #a87444;
            border: none;
            padding: 8px 20px;
        }

        .btn-success:hover {
            background-color: #8d6038;
            color: #fff;
        }

        p {
            color: #555;
        }

        @media (max-width: 768px) {
            .service_area .col {
                margin-bottom: 20px;
            }
        }

    </style>
</head>
<body> --}}
@extends('frontend.layouts.header')
<!-- Navbar -->
@include('frontend.layouts.navbar')


<!-- Hero Section -->
<section class="text-center py-5">
    <div class="container">
        <h1 class="hero-title">{{ $book_author->book_author_title }}</h1>
        <p class="hero-subtitle mt-3">
           {{ html_entity_decode(strip_tags($book_author->book_author_des)) }}
        </p>
    </div>
</section>

<div class="container">
    @foreach ($books as $book)
        <div class="book-card">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="{{ asset('admin/img/'. $book->book_img) }}" class="book-img" >
                </div>
                <div class="col-md-8">
                    <h3 class="book-title">{{ $book->book_name }}</h3>
                    <p class="mt-3">
                        {{ \Illuminate\Support\Str::limit(strip_tags(html_entity_decode($book->book_des)), 300) }}
                    </p>

                    <div class="mt-3">

                    @foreach($book->rel_to_book_link as $link)
                        <a href="{{ $link->book_platform_link }}" target="_blank" class="btn btn-custom me-2">
                            📘 {{ $link->book_platform_name }}
                        </a>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</div>
@include('frontend.layouts.footer')