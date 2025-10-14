<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class TestimonyController extends Controller
{
    public function add_testimony(){
        return view('admin.add_testimony');
    }

    public function create_testimony(Request $request){
        $testimony = new Testimony();
        $testimony->name = $request->name;
        $testimony->email = $request->email;
        $testimony->message = $request->message;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');

            // Generate a unique filename
            $filename = Str::uuid().'.'.$file->getClientOriginalExtension();

            // Store the image in storage/app/public/doctors
            $path = $file->storeAs('testimonies', $filename, 'public');

            // Optionally delete the old image if it exists
            if ($testimony->photo && Storage::disk('public')->exists('testimonies/'.$testimony->photo)) {
                Storage::disk('public')->delete('testimonies/'.$testimony->photo);
            }

            // Save the filename in the database
            $testimony->photo = $filename;
        }
        $testimony->save();
         Alert::html(
            '<h3 style="color:black;">Testimony Created Successfully!</h3>',
            '<p style="color:black;">You have successfully created a testimony.</p>',
            'success'
        )->persistent();

        return redirect()->route('manage_testimony');
    }

    public function manage_testimony(){
        $testimonies = Testimony::all();
        return view('admin.manage_testimony', compact('testimonies'));
    }

    public function view_testimony($id){
        $testimony = Testimony::find($id);
        return view('admin.view_testimony', compact('testimony'));
    }

    public function edit_testimony($id){
        $testimony = Testimony::find($id);
        return view('admin.edit_testimony', compact('testimony'));
    }

    public function update_testimony(Request $request, $id){
        $testimony = Testimony::find($id);
        $testimony->name = $request->name;
        $testimony->email = $request->email;
        $testimony->message = $request->message;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');

            // Generate a unique filename
            $filename = Str::uuid().'.'.$file->getClientOriginalExtension();

            // Store the image in storage/app/public/doctors
            $path = $file->storeAs('testimonies', $filename, 'public');

            // Optionally delete the old image if it exists
            if ($testimony->photo && Storage::disk('public')->exists('testimonies/'.$testimony->photo)) {
                Storage::disk('public')->delete('testimonies/'.$testimony->photo);
            }

            // Save the filename in the database
            $testimony->photo = $filename;
        }
        $testimony->save();
         Alert::html(
            '<h3 style="color:black;">Testimony Updated Successfully!</h3>',
            '<p style="color:black;">You have successfully updated the testimony.</p>',
            'success'
        )->persistent();

        return redirect()->route('manage_testimony');
    }

    public function delete_testimony($id){
        $testimony = Testimony::find($id);
        $testimony->delete();
        Alert::html(
            '<h3 style="color:black;">Testimony Deleted Successfully!</h3>',
            '<p style="color:black;">You have successfully deleted this testimony.</p>',
            'success'
        )->persistent();

        return redirect()->back();
    }
}
