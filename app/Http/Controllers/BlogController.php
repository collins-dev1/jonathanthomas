<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    public function add_blog(){
        return view('admin.add_blog');
    }

    public function create_blog(Request $request){
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');

            // Generate a unique filename
            $filename = Str::uuid().'.'.$file->getClientOriginalExtension();

            // Store the image in storage/app/public/doctors
            $path = $file->storeAs('blogs', $filename, 'public');

            // Optionally delete the old image if it exists
            if ($blog->photo && Storage::disk('public')->exists('blogs/'.$blog->photo)) {
                Storage::disk('public')->delete('blogs/'.$blog->photo);
            }

            // Save the filename in the database
            $blog->photo = $filename;
        }
        $blog->save();
        Alert::html(
            '<h3 style="color:black;">Blog Created Successfully!</h3>',
            '<p style="color:black;">You have successfully created this blog.</p>',
            'success'
        )->persistent();

        return redirect()->route('manage_blog');
    }

    public function manage_blog(){
        $blogs = Blog::all();
        return view('admin.manage_blog', compact('blogs'));
    }

    public function view_blog($id){
        $blog = Blog::find($id);
        return view('admin.view_blog', compact('blog'));
    }

    public function edit_blog($id){
        $blog = Blog::find($id);
        return view('admin.edit_blog', compact('blog'));
    }

    public function update_blog(Request $request, $id){
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->description = $request->description;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');

            // Generate a unique filename
            $filename = Str::uuid().'.'.$file->getClientOriginalExtension();

            // Store the image in storage/app/public/doctors
            $path = $file->storeAs('blogs', $filename, 'public');

            // Optionally delete the old image if it exists
            if ($blog->photo && Storage::disk('public')->exists('blogs/'.$blog->photo)) {
                Storage::disk('public')->delete('blogs/'.$blog->photo);
            }

            // Save the filename in the database
            $blog->photo = $filename;
        }
        $blog->save();
        Alert::html(
            '<h3 style="color:black;">Blog Updated Successfully!</h3>',
            '<p style="color:black;">You have successfully updated this blog.</p>',
            'success'
        )->persistent();

        return redirect()->route('manage_blog');
    }

    public function delete_blog($id){
        $blog = Blog::find($id);
        $blog->delete();
        Alert::html(
            '<h3 style="color:black;">Blog Deleted Successfully!</h3>',
            '<p style="color:black;">You have successfully Deleted this blog.</p>',
            'success'
        )->persistent();

        return redirect()->back();
    }
}
