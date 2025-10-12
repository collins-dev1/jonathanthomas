<?php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\TeamController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Landing Pages
Route::get('about_us', [LandingPageController::class, 'about_us'])->name('about_us');
Route::get('gallery', [LandingPageController::class, 'gallery'])->name('gallery');
Route::get('contact_us', [LandingPageController::class, 'contact_us'])->name('contact_us');
Route::get('blog', [LandingPageController::class, 'blog'])->name('blog');
Route::get('donation', [LandingPageController::class, 'donation'])->name('donation');
Route::post('create_donation', [DonationController::class, 'create_donation'])->name('create_donation');

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
});
