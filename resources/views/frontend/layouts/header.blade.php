<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
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

         .hero-title {
      font-size: 42px;
      font-weight: 600;
    }

    .search-box input {
      border-radius: 10px 0 0 10px;
      padding: 12px;
    }

    .search-box button {
      border-radius: 0 10px 10px 0;
      background-color: #b89b84;
      border: none;
    }

    .search-box button:hover {
      background-color: #a88972;
    }

    .blog-card {
      background: #fff;
      border-radius: 12px;
      padding: 20px;
      margin-bottom: 25px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      transition: 0.3s;
    }

    .blog-card:hover {
      transform: translateY(-5px);
    }

    .blog-img {
      border-radius: 10px;
      height: 180px;
      object-fit: cover;
      width: 100%;
    }

    .read-btn {
      background-color: #b89b84;
      border: none;
      padding: 8px 18px;
      border-radius: 8px;
      color: white;
    }

    .read-btn:hover {
      background-color: #a88972;
    }

    .load-btn {
      background-color: #b89b84;
      border: none;
      padding: 10px 30px;
      border-radius: 10px;
      color: white;
    }
      .card-custom {
      background: #fff;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }

    .form-control {
      border-radius: 8px;
      padding: 12px;
      border: 1px solid #ddd;
    }
     .btn-custom:hover {
      background-color: #a88972;
    }

    .profile-img {
      border-radius: 10px;
      width: 100%;
      object-fit: cover;
    }

    .social-box {
      background: #fff;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      text-align: center;
    }

    .social-icon {
      width: 45px;
      height: 45px;
      margin: 10px;
    }
    </style>

</head>

<body>
