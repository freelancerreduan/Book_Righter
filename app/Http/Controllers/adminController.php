<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutDetails;
use App\Models\Book;
use App\Models\Blog;
use App\Models\BookAuthor;
use App\Models\Home;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use App\Models\BookLink;



class adminController extends Controller
{
    // Admin Dashboard
    public function home_page()
    {
        $home = Home::first();

        return view('admin.components.home', compact('home'));
    }

    public function home_store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'img' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:3048',
            'book_img' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:3048',
        ]);

        $home = Home::firstOrNew(['id' => 1]);

        $home->name = $request->name;
        $home->title = $request->title;
        $home->description = $request->description;

        $manager = new ImageManager(new Driver);

        // Image 1
        if ($request->hasFile('img')) {

            if ($home->img && file_exists(public_path('admin/img/'.$home->img))) {
                unlink(public_path('admin/img/'.$home->img));
            }

            $image = $manager->read($request->file('img'));

            $filename = 'home_'.time().'.jpg';

            $image->resize(800, null)
                ->save(public_path('admin/img/'.$filename));

            $home->img = $filename;
        }

        // Image 2
        if ($request->hasFile('book_img')) {

            if ($home->book_img && file_exists(public_path('admin/img/'.$home->book_img))) {
                unlink(public_path('admin/img/'.$home->book_img));
            }

            $image = $manager->read($request->file('book_img'));

            $filename2 = 'book_'.time().'.jpg';

            $image->resize(800, null)
                ->save(public_path('admin/img/'.$filename2));

            $home->book_img = $filename2;
        }

        $home->save();

        return back()->with('success', 'Home Updated Successfully!');
    }

    public function about_page()
    {
        $about = About::first();

        return view('admin.components.about', compact('about'));
    }

    public function about_store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'img' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:3048',
        ]);

        $about = About::firstOrNew(['id' => 1]);

        $about->name = $request->name;
        $about->title = $request->title;
        $about->description = $request->description;

        $manager = new ImageManager(new Driver);

        // Image
        if ($request->hasFile('img')) {

            if ($about->img && file_exists(public_path('admin/img/'.$about->img))) {
                unlink(public_path('admin/img/'.$about->img));
            }

            $image = $manager->read($request->file('img'));

            $filename = 'about_'.time().'.jpg';

            $image->resize(800, null)
                ->save(public_path('admin/img/'.$filename));

            $about->img = $filename;
        }

        $about->save();

        return back()->with('success', 'About Updated Successfully!');
    }

    public function about_details()
    {
        $about_details = AboutDetails::all();

        return view('admin.components.about_details', compact('about_details'));
    }

    public function about_details_store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'filed_name' => 'required|string|max:255',
            'filed_value' => 'required|string|max:255',
        ]);

        $about = AboutDetails::insert([
            'filed_name' => $request->filed_name,
            'filed_value' => $request->filed_value,
        ]);

        return back()->with('success', 'About Details Updated Successfully!');
    }

    public function about_details_delete($id)
    {
        AboutDetails::find($id)->delete();

        return back()->with('success', 'About Details Deleted Successfully!');
    }

    public function about_details_edit($id)
    {
        $about = AboutDetails::find($id);

        return view('admin.components.about_details_edit', compact('about'));
    }

    public function about_details_update(Request $request, $id)
    {
        $request->validate([
            'filed_name' => 'required|string|max:255',
            'filed_value' => 'required|string|max:255',
        ]);

        $about = AboutDetails::find($id);

        $about->filed_name = $request->filed_name;
        $about->filed_value = $request->filed_value;

        $about->save();

        return redirect()->back()->with('success', 'About Details Updated Successfully!');
    }

    public function social_media()
    {
        $social_media = SocialMedia::all();

        return view('admin.components.social_media', compact('social_media'));
    }

    public function social_media_store(Request $request)
    {
        $request->validate([
            'social_name' => 'required|string|max:255',
            'social_link' => 'required|url',
            'social_icon' => 'nullable|string|max:255',
        ]);

        SocialMedia::create([
            'social_name' => $request->social_name,
            'social_link' => $request->social_link,
            'social_icon' => $request->social_icon,
        ]);

        return back()->with('success', 'Inserted Successfully');
    }

    public function social_media_edit($id)
    {
        $social = SocialMedia::find($id);

        return view('admin.components.social_media_edit', compact('social'));
    }

    public function social_media_update(Request $request, $id)
    {
        $request->validate([
            'social_name' => 'required|string|max:255',
            'social_link' => 'required|url',
            'social_icon' => 'nullable|string|max:255',
        ]);

        $social = SocialMedia::find($id);

        $social->social_name = $request->social_name;
        $social->social_link = $request->social_link;
        $social->social_icon = $request->social_icon;

        $social->save();

        return redirect()->route('social_media')->with('success', 'Social Media Updated Successfully!');
    }

    public function social_media_delete($id)
    {
        SocialMedia::find($id)->delete();

        return back()->with('success', 'Social Media Deleted Successfully!');
    }

    public function book_author()
    {
        $book_author = BookAuthor::first();

        return view('admin.components.book_author', compact('book_author'));
    }

    public function book_author_store(Request $request)
    {
        $request->validate([
            'author_title' => 'required|string|max:255',
            'author_description' => 'required|string|max:255',
        ]);

        // dd($request->all());
        BookAuthor::updateOrInsert([
            'id' => 1,
        ], [
            'book_author_title' => $request->author_title,
            'book_author_des' => $request->author_description,
        ]);

        return back()->with('success', 'Book Author Info Updated Successfully!');

    }

    public function book_add()
    {
        $book = Book::all();
        return view('admin.components.book_add', compact('book'));
    }

    public function book_add_store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'book_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $manager = new ImageManager(new Driver);
        $filename = null;

        if ($request->hasFile('book_img')) {
            $image = $manager->read($request->file('book_img'));
            $filename = 'book_' . time() . '.jpg';
            $image->save(public_path('admin/img/' . $filename));
        }

        Book::create([
            'book_name' => $request->title,
            'book_des' => $request->description,
            'book_img' => $filename,
        ]);

        return back()->with('success','Book Added Successfully');
    }

    public function book_links($id)
    {
        $book = Book::findOrFail($id);
        $links = BookLink::where('book_id',$id)->get();

        return view('admin.components.book_link',compact('book','links'));
    }

    public function book_link_store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'book_id' => 'required',
            'link_title' => 'required',
            'platform_link' => 'required|url',
        ]);
        // dd($request->all());

        BookLink::create([
            'book_id' => $request->book_id,
            'book_platform_name' => $request->link_title,
            'book_platform_link' => $request->platform_link
        ]);

        return back()->with('success','Link Added');
    }

    public function book_link_delete($id)
    {
        BookLink::findOrFail($id)->delete();
        return back()->with('success','Link Deleted');
    }

    // Blog Area
    public function blog_add()
    {   $blog = Blog::all();
        return view('admin.components.blog_add' , [
            'blogs' => $blog
        ]);
    }

    public function blog_add_store(Request $request)
    {
        $request->validate([
            'blog_title' => 'required|string|max:255',
            'blog_description' => 'required|string',
            'blog_img' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:3048',
        ]);

        $manager = new ImageManager(new Driver);
        $filename = null;

        if ($request->hasFile('blog_img')) {
            $image = $manager->read($request->file('blog_img'));
            $filename = 'blog_' . time() . '.jpg';
            $image->save(public_path('admin/img/' . $filename));
        }

        Blog::create([
            'blog_title' => $request->blog_title,
            'blog_description' => $request->blog_description,
            'blog_img' => $filename,
        ]);

        return back()->with('success','Blog Added Successfully');
    }

    public function blog_edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.components.blog_edit', compact('blog'));
    }

    public function blog_update(Request $request, $id)
    {
        $request->validate([
            'blog_title' => 'required|string|max:255',
            'blog_description' => 'required|string',
            'blog_img' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:3048',
        ]);

        $blog = Blog::findOrFail($id);

        $blog->blog_title = $request->blog_title;
        $blog->blog_description = $request->blog_description;

        $manager = new ImageManager(new Driver);

        if ($request->hasFile('blog_img')) {

            if ($blog->blog_img && file_exists(public_path('admin/img/'.$blog->blog_img))) {
                unlink(public_path('admin/img/'.$blog->blog_img));
            }

            $image = $manager->read($request->file('blog_img'));
            $filename = 'blog_' . time() . '.jpg';
            $image->save(public_path('admin/img/' . $filename));
            $blog->blog_img = $filename;
        }

        $blog->save();

        return redirect()->route('admin.blog.add')->with('success', 'Blog Updated Successfully!');
    }
}
