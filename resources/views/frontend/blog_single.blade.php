<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Blog Details</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f6f7fb;
font-family: Arial, sans-serif;
}

.blog-wrapper{
background:white;
padding:25px;
border-radius:8px;
}

.blog-image{
width:100%;
border-radius:8px;
margin-bottom:20px;
}

.blog-title{
font-size:28px;
font-weight:600;
margin-bottom:5px;
}

.blog-date{
color:#888;
font-size:14px;
margin-bottom:20px;
}

.blog-description p{
margin-bottom:15px;
line-height:1.7;
}

.related-title{
font-size:20px;
font-weight:600;
margin-bottom:20px;
}

.related-item{
display:flex;
gap:12px;
margin-bottom:15px;
border-bottom:1px solid #eee;
padding-bottom:10px;
}

.related-item img{
width:90px;
height:70px;
object-fit:cover;
border-radius:6px;
}

.related-item a{
text-decoration:none;
color:#333;
font-weight:500;
}

.related-item a:hover{
color:#0d6efd;
}

.related-date{
font-size:13px;
color:#888;
}

</style>

</head>

<body>

<div class="container mt-5">

<div class="row">

<!-- Blog Content -->

<div class="col-lg-8">

<div class="blog-wrapper">

<img src="https://picsum.photos/900/400" class="blog-image">
<!-- @dd($blog_single_page); -->
<h2 class="blog-title">
  {{ $blog_single_page->blog_title }}
</h2>

<div class="blog-date">
{{ $blog_description->created_at->formate('d Y Y') }}
</div>

<div class="blog-description">

<p>
    {{ $blog_description->blog_description }}
</p>

</div>

</div>

</div>

<!-- Related Blogs -->

<div class="col-lg-4">

<div class="blog-wrapper">

<div class="related-title">
Related Blogs
</div>

<div class="related-item">

<img src="https://picsum.photos/120/80">

<div>
<a href="#">SEO Beginner Guide</a>
<div class="related-date">April 15, 2024</div>
</div>

</div>

<div class="related-item">

<img src="https://picsum.photos/121/80">

<div>
<a href="#">Top Marketing Strategies</a>
<div class="related-date">April 12, 2024</div>
</div>

</div>

<div class="related-item">

<img src="https://picsum.photos/122/80">

<div>
<a href="#">Social Media Growth Tips</a>
<div class="related-date">April 10, 2024</div>
</div>

</div>

</div>

</div>

</div>

</div>

</body>
</html>
