<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});


// Admin Dashboard
Route::get('admin/dashboard', function() {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/admin/home/page', [adminController::class, 'home_page'])->name('home.page');
Route::post('/admin/home/page/store', [adminController::class, 'home_store'])->name('admin.home.store');

// About
Route::get('/admin/about/page', [adminController::class, 'about_page'])->name('about.page');
Route::post('/admin/about/page/store', [adminController::class, 'about_store'])->name('admin.about.store');
Route::get('/admin/about/page/details', [adminController::class, 'about_details'])->name('about.page.details');
Route::post('/admin/about/page/details/store', [adminController::class, 'about_details_store'])->name('about.details.store');
Route::get('/admin/about/page/profiles', [adminController::class, 'about_profile'])->name('about_profile');

Route::get('/admin/about/page/details/delete/{id}', [adminController::class, 'about_details_delete'])->name('about.details.delete');
Route::get('/admin/about/page/details/edit/{id}', [adminController::class, 'about_details_edit'])->name('about.details.edit');
// Route::post('/about/page/details/update/{id}', [adminController::class, 'about_details_update'])->name('about.details.update');
Route::put('/about-details-update/{id}', [adminController::class, 'about_details_update'])->name('about_details_update');

// Social Media
Route::get('/admin/add/social/media',[adminController::class, 'social_media'])->name('social_media');
Route::post('/admin/add/social/media/store',[adminController::class, 'social_media_store'])->name('social_media.store');
Route::get('/admin/social/media/edit/{id}', [adminController::class, 'social_media_edit'])->name('social_media.edit');
Route::put('/admin/social/media/update/{id}', [adminController::class, 'social_media_update'])->name('social_media.update');
Route::delete('/admin/social/media/delete/{id}', [adminController::class, 'social_media_delete'])->name('social_media.delete');

// book area
Route::get('/admin/add/author',[adminController::class, 'book_author'])->name('admin.book.author');
Route::post('/admin/add/book/store', [adminController::class , 'book_author_store'])->name('admin.book.author.store');
Route::get('/admin/book/add/' , [adminController::class, 'book_add'])->name('admin.book.add');
Route::post('/admin/book/add/store', [adminController::class, 'book_add_store'])->name('admin.book.store');
// Route::get('/admin/book/edit/{id}', [adminController::class, 'book_edit'])->name('admin.book.edit');
// Route::put('/admin/book/update/{id}', [adminController::class, 'book_update'])->name('admin.book.update');
Route::delete('/admin/book/delete/{id}', [adminController::class, 'book_delete'])->name('admin.book.delete');

Route::get('/admin/book/{id}/links',[adminController::class,'book_links'])->name('book_links');
Route::post('/admin/book/link/store',[adminController::class,'book_link_store'])->name('book_link_store');
Route::get('/admin/book/link/delete/{id}', [adminController::class, 'book_link_delete'])->name('book_links_delete');



// Blog area 
Route::get('/admin/blog/add', [adminController::class, 'blog_add'])->name('admin.blog.add');
Route::post('/admin/blog/add/store', [adminController::class, 'blog_add_store'])->name('admin.blog.store');
Route::get('/admin/blog/edit/{id}', [adminController::class, 'blog_edit'])->name('admin.blog.edit');
Route::put('/admin/blog/update/{id}', [adminController::class, 'blog_update'])->name('admin.blog.update');
Route::delete('/admin/blog/delete/{id}', [adminController::class, 'blog_delete'])->name('admin.blog.delete');




// ===========================================================
// Frontend Sections 
// ===========================================================
Route::get('/', [frontendController::class, 'index'])->name('index');
Route::get('/about', [frontendController::class, 'about'])->name('about');
Route::get('/book', [frontendController::class, 'book'])->name('book');
Route::get('/blog', [frontendController::class, 'blog'])->name('blog');
Route::get('/contact', [frontendController::class, 'contact'])->name('contact');


Route::get('/admin/blog/details/{id}', [frontendController::class, 'blog_details'])->name('admin.blog.detils');



require __DIR__.'/auth.php';


