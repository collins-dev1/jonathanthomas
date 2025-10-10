<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Landing Pages
Route::get('about_us', [LandingPageController::class, 'about_us'])->name('about_us');
Route::get('gallery', [LandingPageController::class, 'gallery'])->name('gallery');
Route::get('contact_us', [LandingPageController::class, 'contact_us'])->name('contact_us');
Route::get('resources', [LandingPageController::class, 'resources'])->name('resources');
Route::get('donation', [LandingPageController::class, 'donation'])->name('donation');
