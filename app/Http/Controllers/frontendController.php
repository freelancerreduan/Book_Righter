<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\AboutDetails;
use App\Models\SocialMedia;
use Illuminate\Support\Str;

class frontendController extends Controller
{
    //
    function index() {
        $home_data = Home::first();
        $social_media = SocialMedia::all();
        $about_details = About::first();
        // dd($about_details);
        $about_description = Str::limit(strip_tags($about_details->description), 10);
        // dd($about_description);
        return view('frontend.index', compact('home_data', 'social_media', 'about_details', 'about_description'));
    }

    function about() {
        $about = About::first();
        $about_details = AboutDetails::all();
        $social_media = SocialMedia::all();
        return view('frontend.about', compact('about','about_details','social_media'));
    }

    function book() {
        return view('frontend.books');
    }

    function blog() {
        return view('frontend.blog');
    }

    function contact() {
        return view('frontend.contact');
    }


}
