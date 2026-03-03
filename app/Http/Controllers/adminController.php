<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutDetails;
use App\Models\Home;
use App\Models\Book;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;


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
        $request->validate([
            'description' => 'required|string',
            'img' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:3048',
        ]);

        $home = Home::firstOrNew(['id' => 1]);

        $home->about_description = $request->description;

        $manager = new ImageManager(new Driver);

        // Image
        if ($request->hasFile('img')) {

            if ($home->about_img && file_exists(public_path('admin/img/'.$home->about_img))) {
                unlink(public_path('admin/img/'.$home->about_img));
            }

            $image = $manager->read($request->file('img'));

            $filename = 'about_'.time().'.jpg';

            $image->resize(800, null)
                ->save(public_path('admin/img/'.$filename));

            $home->about_img = $filename;
        }

        $home->save();

        return back()->with('success', 'About Updated Successfully!');
    }

    public function about_details()
    {
        $about_details = AboutDetails::all();

        return view('admin.components.about_details', compact('about_details'));
    }

    public function about_details_store(Request $request)
    {
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

        return back()->with('success', 'About Details Updated Successfully!');
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

        SocialMedia::updateOrInsert([
            'social_name' => $request->social_name,
            'social_link' => $request->social_link,
            'social_icon' => $request->social_icon,
        ]);

        return back()->with('success', 'Inserted Successfully');
    }

    public function book_author()
    {
        $book_author = Book::first();
        return view('admin.components.book_author', compact('book_author'));
    }

    public function book_author_store(Request $request)
    {
        $request->validate([
            'author_title' => 'required|string|max:255',
            'author_description' => 'required|string|max:255',
        ]);

        // dd($request->all());
        Book::updateOrInsert([
            'id' => 1,
        ], [
            'book_author_title' => $request->author_title,
            'book_author_des' => $request->author_description,
        ]);

        return back()->with('success', 'Book Author Info Updated Successfully!');

        // Handle book image upload
        // $bookImageName = null;
        // if ($request->hasFile('book_img')) {
        //     $bookImage = $request->file('book_img');
        //     $bookImageName = time() . '_' . $bookImage->getClientOriginalName();
        //     $bookImage->move(public_path('admin/img'), $bookImageName);
        // }

        // Save book details to the database
        // You can create a Book model and save the details there
        // For example:
        // Book::create([
        //     'author_title' => $request->author_title,
        //     'book_title' => $request->book_title,
        //     'description' => $request->description,
        //     'book_img' => $bookImageName,
        // ]);

    }

    function book_add()
    {
        return view('admin.components.book_add');
    }
}
