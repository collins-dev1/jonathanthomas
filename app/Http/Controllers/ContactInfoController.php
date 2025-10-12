<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactInfoController extends Controller
{
    public function create_info(Request $request){
        $info = new ContactInfo();
        $info->name = $request->name;
        $info->email = $request->email;
        $info->phone = $request->phone;
        $info->subject = $request->subject;
        $info->message = $request->message;
        $info->save();
        Alert::html(
            '<h3 style="color:black;">Information Sent Successfully!</h3>',
            '<p style="color:black;">You have successfully sent your information wait for the response of the Administrator Thanks!!!.</p>',
            'success'
        )->persistent();

        return redirect()->back();
    }

    public function contact_information(){
        $infos = ContactInfo::all();
        return view('admin.manage_info', compact('infos'));
    }

    public function view_information($id){
        $info = ContactInfo::find($id);
        return view('admin.view_information', compact('info'));
    }

    public function delete_information($id){
        $info = ContactInfo::find($id);
        $info->delete();
        Alert::html(
            '<h3 style="color:black;">Information Deleted Successfully!</h3>',
            '<p style="color:black;">You have successfully deleted this information.</p>',
            'success'
        )->persistent();

        return redirect()->back();
    }
}
