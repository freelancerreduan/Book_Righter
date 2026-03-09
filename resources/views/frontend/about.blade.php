    @include('frontend.layouts.header')
    <div class="main-contain">
        @include('frontend.layouts.navbar')
        <div class="main-content">
            <div class="area_select">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="image_area ">
                                <img src="{{ asset('admin/img/'. $about->img) }}" alt="Polash Mollah" class="img-fluid rounded mt-5" style="height: 60vh; width: 100% !important; ">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 d-flex align-items-center">
                            <div class="right_side_section py-5">
                                <h1 class="main_heading">{{ $about->name }}</h1>
                                <h3 class="text-muted author_name">{{ $about->title }}</h3>
                                <hr>
                                <p class="lead">
                                    {{ html_entity_decode(strip_tags($about->description)) }}
                                </p>
                                <!-- <i class="fa-brands fa-facebook" style="height:30px; width: 30px;"></i> -->
                            </div>
                        </div>
                    </div>
                    <div class="personal_info">
                        <div class="professional_details_area rounded">
                            <p style="font-size: 25px;" class="my-4 py-2 fw-bold ms-2">Professional Details</p>
                        </div>
                        @foreach ($about_details as $detail)
                            <p style="font-size: 18px;">
                                <span class="fw-bold">{{ $detail->filed_name }}:</span> {{ $detail->filed_value }}
                            </p>
                        @endforeach
                      
                    </div>
                    <div class="professional_details_area rounded"> 
                        <p style="font-size: 25px;" class="my-4 py-2 fw-bold ms-2">Online Profiles</p>
                    </div>
                    <div class="social-icons my-3 p-5 d-flex align-items-center justify-content-center">
                        @foreach ($social_media as $media)
                            <div class="icon_area d-flex align-items-center me-2">
                               <a href="{{ $media->social_link }}" target="_blank" class="me-0">
                                   <i class="{{ $media->social_icon }}" style="font-size : 30px; margin-right: 10px;"></i>
                                </a>
                                <span>{{ $media->social_name }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center mt-4"> Official website of writer Polash Mollah </p>
@include('frontend.layouts.footer')