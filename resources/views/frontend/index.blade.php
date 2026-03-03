    @include('frontend.layouts.header')
    @include('frontend.layouts.navbar')

    <div class="main-content">
        <div class="area_select">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="image_area">
                            <img src="{{ asset('frontend/image/polash_mollah.png') }}" alt="Polash Mollah" class="img-fluid rounded mt-3">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 d-flex align-items-center">
                        <div class="right_side_section py-5">
                            <h1 class="main_heading">Polash Mollah</h1>
                            <h3 class="text-muted author_name">Write & Author</h3>
                            <hr>
                            <p class="lead">
                                Polash Mollah is a Bangladeshi author, known for his works in fiction and non-fiction.
                                He has written several novels, short stories, and essays that have garnered critical
                                acclaim and a wide readership. Mollah's writing often explores themes of identity,
                                culture, and social issues in Bangladesh.
                            </p>
                            <a href="books.html" class="btn btn-success custome_btn p-3 px-5">About Me</a>
                            
                            <div class="social-icons mt-3">
                                <i class="fa-brands fa-facebook"  style="font-size : 30px; margin-right: 10px;"></i>
                               <i class="fa-brands fa-twitter"  style="font-size : 30px; margin-right: 10px;"></i>
                               <i class="fa-brands fa-linkedin"  style="font-size : 30px; margin-right: 10px;"></i>
                               <i class="fa-solid fa-envelope"  style="font-size : 30px; margin-right: 10px;"></i>
                            </div>
                            <!-- <i class="fa-brands fa-facebook" style="height:30px; width: 30px;"></i> -->
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
   <div class="service_area_main">
        <div class="service_area">
            <div class="container">
                <div class="row g-4">
                    <!-- My Books -->
                    <div class="col-md-4">
                        <div class="card p-2">
                            <div class="card-header">
                                <h5>My Books</h5>
                            </div>
                            <div class="card-body">
                                <div class="img mb-3">
                                    <img src="{{ asset('frontend/image/book.png') }}" alt="Books" class="img-fluid">
                                </div>
                                <a href="books.html" class="btn btn-dark">View Books</a>
                            </div>
                        </div>
                    </div>

                    <!-- About Me -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>About Me</h5>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate.</p>
                                <a href="about.html" class="btn btn-success">Read More</a>
                            </div>

                        </div>
                    </div>

                    <!-- Media & Profile -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Media & Profile</h5>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate.</p>
                                <a href="about.html" class="btn btn-dark">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@include('frontend.layouts.footer')