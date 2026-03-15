<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Book;
use App\Models\Blog;
use App\Models\About;
use App\Models\AboutDetails;
use App\Models\SocialMedia;
use Illuminate\Support\Str;
use App\Models\BookAuthor;
class frontendController extends Controller
{
    //
    function index() {
        $home_data = Home::first();
        $social_media = SocialMedia::all();
        $about_details = About::first();
        // dd($about_details);
        $about_description = Str::limit(strip_tags(optional($about_details)->description), 10) ?? '';
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
        $books = Book::all();
        $book_author = BookAuthor::first();
            return view('frontend.books',[
                'book_author' => $book_author,
                'books' => $books, 
            ]);
    }

    function blog() {
        $blogs = Blog::all();
        return view('frontend.blog',[
            'blogs' => $blogs,
        ]);
    }


    function blog_details($id){
        $blog_single_page = Blog::find($id);
        return view('frontend.blog_single', [
            'blog_single_page' =>$blog_single_page,
        ]);
    }

    function contact() {
        return view('frontend.contact');
    }


}
