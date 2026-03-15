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


        :root {
      --ink:       #1a1a2e;
      --paper:     #f5f0e8;
      --cream:     #fffdf8;
      --accent:    #c8922a;
      --accent2:   #2a6fc8;
      --muted:     #8a8070;
      --border:    #e2d9c8;
      --card-bg:   #ffffff;
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      background: var(--paper);
      font-family: 'DM Sans', sans-serif;
      color: var(--ink);
      min-height: 100vh;
    }

    /* ─── Grain overlay ─────────────────────────── */
    body::before {
      content: '';
      position: fixed; inset: 0;
      background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
      pointer-events: none; z-index: 0; opacity: .5;
    }

    .container { position: relative; z-index: 1; }

    /* ─── Top bar ───────────────────────────────── */
    .top-bar {
      background: var(--ink);
      padding: 14px 0;
      margin-bottom: 48px;
    }
    .top-bar .label {
      font-family: 'DM Sans', sans-serif;
      font-size: 11px;
      font-weight: 500;
      letter-spacing: .18em;
      text-transform: uppercase;
      color: var(--accent);
    }
    .top-bar .site-name {
      font-family: 'Playfair Display', serif;
      font-size: 22px;
      color: #fff;
      font-weight: 700;
    }

    /* ─── Main blog card ────────────────────────── */
    .blog-card {
      background: var(--card-bg);
      border-radius: 2px;
      overflow: hidden;
      box-shadow: 0 2px 40px rgba(26,26,46,.08), 0 1px 0 var(--border);
      animation: fadeUp .6s ease both;
    }

    .blog-hero {
      position: relative;
      overflow: hidden;
    }
    .blog-hero img {
      width: 100%;
      height: 420px;
      object-fit: cover;
      display: block;
      transition: transform 8s ease;
    }
    .blog-hero:hover img { transform: scale(1.04); }
    .blog-hero-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(26,26,46,.55) 0%, transparent 55%);
      pointer-events: none;
    }

    .blog-body { padding: 40px 44px 48px; }

    .blog-meta {
      display: flex;
      align-items: center;
      gap: 18px;
      margin-bottom: 18px;
    }
    .blog-meta .tag {
      font-size: 10px;
      font-weight: 500;
      letter-spacing: .16em;
      text-transform: uppercase;
      color: var(--cream);
      background: var(--accent);
      padding: 4px 12px;
      border-radius: 2px;
    }
    .blog-meta .date {
      font-size: 13px;
      color: var(--muted);
      font-weight: 300;
    }

    .blog-title {
      font-family: 'Playfair Display', serif;
      font-size: 34px;
      font-weight: 700;
      line-height: 1.25;
      color: var(--ink);
      margin-bottom: 28px;
      letter-spacing: -.01em;
    }

    .blog-divider {
      width: 48px;
      height: 3px;
      background: var(--accent);
      margin-bottom: 28px;
      border-radius: 2px;
    }

    .blog-description {
      font-size: 16px;
      line-height: 1.85;
      color: #3a3830;
      font-weight: 300;
    }

    /* ─── Sidebar ───────────────────────────────── */
    .sidebar-card {
      background: var(--card-bg);
      border-radius: 2px;
      overflow: hidden;
      box-shadow: 0 2px 40px rgba(26,26,46,.06), 0 1px 0 var(--border);
      animation: fadeUp .6s .15s ease both;
    }
    .sidebar-header {
      background: var(--ink);
      padding: 18px 24px;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .sidebar-header .bar {
      width: 3px; height: 18px;
      background: var(--accent);
      border-radius: 2px;
    }
    .sidebar-header h3 {
      font-family: 'Playfair Display', serif;
      font-size: 16px;
      font-weight: 600;
      color: #fff;
      letter-spacing: .02em;
    }
    .sidebar-body { padding: 8px 0; }

    /* ─── Related item ──────────────────────────── */
    .related-item {
      display: flex;
      gap: 14px;
      padding: 16px 20px;
      text-decoration: none;
      border-bottom: 1px solid var(--border);
      transition: background .2s ease;
      position: relative;
      overflow: hidden;
    }
    .related-item:last-child { border-bottom: none; }
    .related-item::before {
      content: '';
      position: absolute;
      left: 0; top: 0; bottom: 0;
      width: 3px;
      background: var(--accent);
      transform: scaleY(0);
      transform-origin: bottom;
      transition: transform .25s ease;
    }
    .related-item:hover { background: #faf7f2; }
    .related-item:hover::before { transform: scaleY(1); }

    .related-thumb {
      flex-shrink: 0;
      width: 80px;
      height: 62px;
      border-radius: 2px;
      object-fit: cover;
      transition: transform .3s ease;
    }
    .related-item:hover .related-thumb { transform: scale(1.04); }

    .related-info { flex: 1; min-width: 0; }
    .related-info .related-title-text {
      font-family: 'Playfair Display', serif;
      font-size: 13.5px;
      font-weight: 600;
      color: var(--ink);
      line-height: 1.4;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
      margin-bottom: 6px;
      transition: color .2s;
    }
    .related-item:hover .related-title-text { color: var(--accent); }
    .related-date {
      font-size: 11px;
      color: var(--muted);
      font-weight: 400;
      letter-spacing: .04em;
    }

    /* ─── Animations ────────────────────────────── */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(22px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    /* ─── Responsive ────────────────────────────── */
    @media (max-width: 768px) {
      .blog-body { padding: 28px 22px 36px; }
      .blog-title { font-size: 24px; }
      .blog-hero img { height: 260px; }
    }
    </style>

</head>

<body>
