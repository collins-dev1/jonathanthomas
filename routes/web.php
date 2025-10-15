<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonyController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\Blog;
use App\Models\Partner;
use App\Models\Testimony;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $blogs = Blog::orderBy('created_at','desc')->limit(3)->get();
    $partners = Partner::all();
    $testimonies = Testimony::all();
    return view('index', compact('blogs', 'partners', 'testimonies'));
});

// Landing Pages
Route::get('about_us', [LandingPageController::class, 'about_us'])->name('about_us');
Route::get('gallery', [LandingPageController::class, 'gallery'])->name('gallery');
Route::get('contact_us', [LandingPageController::class, 'contact_us'])->name('contact_us');
Route::get('blog', [LandingPageController::class, 'blog'])->name('blog');
Route::get('donation', [LandingPageController::class, 'donation'])->name('donation');
Route::post('create_donation', [DonationController::class, 'create_donation'])->name('create_donation');
Route::post('create_info', [ContactInfoController::class, 'create_info'])->name('create_info');
Route::get('/blog_information/{id}', [BlogController::class, 'blog_information'])->name('blog_information');

Auth::routes();

Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/manage_donation', [DonationController::class, 'manage_donation'])->name('manage_donation');
    Route::get('/donation_details/{id}', [DonationController::class, 'donation_details'])->name('donation_details');
    Route::get('/delete_donation/{id}', [DonationController::class, 'delete_donation'])->name('delete_donation');
    Route::get('/approve/{id}', [DonationController::class, 'approve'])->name('approve');
    Route::get('/unapprove/{id}', [DonationController::class, 'unapprove'])->name('unapprove');
    Route::get('/add_team', [TeamController::class, 'add_team'])->name('add_team');
    Route::post('/create_team', [TeamController::class, 'create_team'])->name('create_team');
    Route::get('/manage_team', [TeamController::class, 'manage_team'])->name('manage_team');
    Route::get('team_information/{id}', [TeamController::class, 'team_information'])->name('team_information');
    Route::get('edit_team/{id}', [TeamController::class, 'edit_team'])->name('edit_team');
    Route::post('update_team/{id}', [TeamController::class, 'update_team'])->name('update_team');
    Route::get('delete_team/{id}', [TeamController::class, 'delete_team'])->name('delete_team');
    Route::get('/add_blog', [BlogController::class, 'add_blog'])->name('add_blog');
    Route::post('create_blog', [BlogController::class, 'create_blog'])->name('create_blog');
    Route::get('/manage_blog', [BlogController::class, 'manage_blog'])->name('manage_blog');
    Route::get('view_blog/{id}', [BlogController::class, 'view_blog'])->name('view_blog');
    Route::get('edit_blog/{id}', [BlogController::class, 'edit_blog'])->name('edit_blog');
    Route::post('update_blog/{id}', [BlogController::class, 'update_blog'])->name('update_blog');
    Route::get('delete_blog/{id}', [BlogController::class, 'delete_blog'])->name('delete_blog');
    Route::get('add_partner', [PartnerController::class, 'add_partner'])->name('add_partner');
    Route::post('create_partner', [PartnerController::class, 'create_partner'])->name('create_partner');
    Route::get('manage_partner', [PartnerController::class, 'manage_partner'])->name('manage_partner');
    Route::get('edit_partner/{id}', [PartnerController::class, 'edit_partner'])->name('edit_partner');
    Route::post('update_partner/{id}', [PartnerController::class, 'update_partner'])->name('update_partner');
    Route::get('delete_partner/{id}', [PartnerController::class, 'delete_partner'])->name('delete_partner');
    Route::get('add_gallery', [GalleryController::class, 'add_gallery'])->name('add_gallery');
    Route::post('create_gallery', [GalleryController::class, 'create_gallery'])->name('create_gallery');
    Route::get('manage_gallery', [GalleryController::class, 'manage_gallery'])->name('manage_gallery');
    Route::get('delete_gallery/{id}', [GalleryController::class, 'delete_gallery'])->name('delete_gallery');
    Route::get('contact_information', [ContactInfoController::class, 'contact_information'])->name('contact_information');
    Route::get('view_information/{id}', [ContactInfoController::class, 'view_information'])->name('view_information');
    Route::get('delete_information/{id}', [ContactInfoController::class, 'delete_information'])->name('delete_information');
    Route::get('add_testimony', [TestimonyController::class, 'add_testimony'])->name('add_testimony');
    Route::post('create_testimony', [TestimonyController::class, 'create_testimony'])->name('create_testimony');
    Route::get('manage_testimony', [TestimonyController::class, 'manage_testimony'])->name('manage_testimony');
    Route::get('/view_testimony/{id}', [TestimonyController::class, 'view_testimony'])->name('view_testimony');
    Route::get('/edit_testimony/{id}', [TestimonyController::class, 'edit_testimony'])->name('edit_testimony');
    Route::post('update_testimony/{id}', [TestimonyController::class, 'update_testimony'])->name('update_testimony');
    Route::get('delete_testimony/{id}', [TestimonyController::class, 'delete_testimony'])->name('delete_testimony');
});
