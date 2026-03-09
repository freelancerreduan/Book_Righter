    @include('frontend.layouts.header')
    @include('frontend.layouts.navbar')

    <div class="main-content">
        <div class="area_select">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="image_area">
                            {{-- @dd($home_data->image); --}}
                            {{-- {{ $home_data->image }} --}}
                            <img src="{{ asset('admin/img/'.$home_data->img) }}" alt="Polash Mollah"
                                class="img-fluid rounded mt-3" style="height: 500px; width: 100% !important; ">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 d-flex align-items-center">
                        <div class="right_side_section py-5">
                            <h1 class="main_heading">{{ $home_data->name }}</h1>
                            <h3 class="text-muted author_name">{{ $home_data->title }}</h3>
                            <hr>
                            <p class="lead">
                                {{ strip_tags($home_data->description) }}
                            </p>
                            <a href="{{ route('about') }}" class="btn btn-success custome_btn p-3 px-5">About Me</a>

                            <div class="social-icons mt-3">
                                @foreach ($social_media as $media)
                                    <a href="{{ $media->social_link }}" target="_blank" class="me-2">
                                        <i class="{{ $media->social_icon }}" style="height:30px; width: 30px; font-size: 30px;"></i>
                                    </a>
                                @endforeach
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
                                    <img src="{{ asset('admin/img/'.$home_data->book_img) }}" alt="Books" class="img-fluid">
                                </div>
                                <a href="{{ route('book') }}" class="btn btn-dark">View Books</a>
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
                                <p>{{ html_entity_decode(strip_tags(Str::limit($about_details->description, 300))) }} </p>
                                <a href="{{ route('about') }}" class="btn btn-success">Read More</a>
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
