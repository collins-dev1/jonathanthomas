<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Partner;
use App\Models\Team;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    // About us
    public function about_us(){
        $teams = Team::all();
        $partners = Partner::all();
        return view('about', compact('teams', 'partners'));
    }

    // Gallery
    public function gallery(){
        $gallerys = Gallery::all();
        return view('gallery', compact('gallerys'));
    }

    // Contact Us
    public function contact_us(){
        $partners = Partner::all();
        return view('contact', compact('partners'));
    }

    // Resources
    public function blog(){
        $partners = Partner::all();
        $blogs = Blog::all();
        return view('blog', compact('partners', 'blogs'));
    }

    // Donation
    public function donation(){
        return view('donate');
    }
}
