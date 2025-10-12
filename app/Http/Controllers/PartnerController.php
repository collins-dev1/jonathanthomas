<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PartnerController extends Controller
{
    public function add_partner(){
        return view('admin.add_partners');
    }

    public function create_partner(Request $request){
        $partner = new Partner();
        $partner->name = $request->name;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');

            // Generate a unique filename
            $filename = Str::uuid().'.'.$file->getClientOriginalExtension();

            // Store the image in storage/app/public/doctors
            $path = $file->storeAs('partners', $filename, 'public');

            // Optionally delete the old image if it exists
            if ($partner->photo && Storage::disk('public')->exists('partners/'.$partner->photo)) {
                Storage::disk('public')->delete('partners/'.$partner->photo);
            }

            // Save the filename in the database
            $partner->photo = $filename;
        }
        $partner->save();
        Alert::html(
            '<h3 style="color:black;">Partner Created Successfully!</h3>',
            '<p style="color:black;">You have successfully added this Partner.</p>',
            'success'
        )->persistent();

        return redirect()->route('manage_partner');
    }

    public function manage_partner(){
        $partners = Partner::all();
        return view('admin.manage_partner', compact('partners'));
    }

    public function edit_partner($id){
        $partner = Partner::find($id);
        return view('admin.edit_partner', compact('partner'));
    }

    public function update_partner(Request $request, $id){
        $partner = Partner::find($id);
        $partner->name = $request->name;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');

            // Generate a unique filename
            $filename = Str::uuid().'.'.$file->getClientOriginalExtension();

            // Store the image in storage/app/public/doctors
            $path = $file->storeAs('partners', $filename, 'public');

            // Optionally delete the old image if it exists
            if ($partner->photo && Storage::disk('public')->exists('partners/'.$partner->photo)) {
                Storage::disk('public')->delete('partners/'.$partner->photo);
            }

            // Save the filename in the database
            $partner->photo = $filename;
        }
        $partner->save();
        Alert::html(
            '<h3 style="color:black;">Partner Updated Successfully!</h3>',
            '<p style="color:black;">You have successfully updated this Partner.</p>',
            'success'
        )->persistent();

        return redirect()->route('manage_partner');
    }

    public function delete_partner($id){
        $partner = Partner::find($id);
        $partner->delete();
        Alert::html(
            '<h3 style="color:black;">Partner Deleted Successfully!</h3>',
            '<p style="color:black;">You have successfully deleted this Partner.</p>',
            'success'
        )->persistent();

        return redirect()->back();
    }
}
