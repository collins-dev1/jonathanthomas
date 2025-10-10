<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    // About us
    public function about_us(){
        return view('about');
    }

    // Gallery
    public function gallery(){
        return view('gallery');
    }

    // Contact Us
    public function contact_us(){
        return view('contact');
    }

    // Resources
    public function resources(){
        return view('resources');
    }

    // Donation
    public function donation(){
        return view('donate');
    }
}
