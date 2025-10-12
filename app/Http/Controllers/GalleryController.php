<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    public function add_gallery(){
        return view('admin.add_gallery');
    }

    public function create_gallery(Request $request){
        $gallery = new Gallery();
         if ($request->hasFile('photo')) {
            $file = $request->file('photo');

            // Generate a unique filename
            $filename = Str::uuid().'.'.$file->getClientOriginalExtension();

            // Store the image in storage/app/public/doctors
            $path = $file->storeAs('gallerys', $filename, 'public');

            // Optionally delete the old image if it exists
            if ($gallery->photo && Storage::disk('public')->exists('gallerys/'.$gallery->photo)) {
                Storage::disk('public')->delete('gallerys/'.$gallery->photo);
            }

            // Save the filename in the database
            $gallery->photo = $filename;
        }
        $gallery->save();
         Alert::html(
            '<h3 style="color:black;">Photo Uploaded Successfully!</h3>',
            '<p style="color:black;">You have successfully uploaded your photo to the gallery page.</p>',
            'success'
        )->persistent();

        return redirect()->back();
    }

    public function manage_gallery(){
        $gallerys = Gallery::all();
        return view('admin.manage_gallery', compact('gallerys'));
    }

    public function delete_gallery($id){
        $gallery = Gallery::find($id);
        $gallery->delete();
        Alert::html(
            '<h3 style="color:black;">Photo Deleted Successfully!</h3>',
            '<p style="color:black;">You have successfully deleted your photo from the gallery page.</p>',
            'success'
        )->persistent();

        return redirect()->back();
    }
}
