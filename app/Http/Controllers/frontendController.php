<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    //
    function index() {
        return view('frontend.index');
    }

    function about() {
        return view('frontend.about');
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
