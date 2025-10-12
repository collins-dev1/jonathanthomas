<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DonationController extends Controller
{
    public function manage_donation(){
        $donates = Donation::all();
        return view('admin.manage_donation', compact('donates'));
    }

    public function create_donation(Request $request){
        $donate = new Donation();
        $donate->name = $request->name;
        $donate->email = $request->email;
        $donate->address = $request->address;
        $donate->phone = $request->phone;
        $donate->purpose = $request->purpose;
        $donate->amount = $request->amount;
        $donate->save();
        Alert::html(
            '<h3 style="color:black;">Submitted Successfully!</h3>',
            '<p style="color:black;">You have successfully submitted your donation.</p>',
            'success'
        )->persistent();

        return redirect()->back();
    }

    public function donation_details($id){
        $donate = Donation::find($id);
        return view('admin.donation_details', compact('donate'));
    }

    public function delete_donation($id){
        $donate = Donation::find($id);
        $donate->delete();
        Alert::html(
            '<h3 style="color:black;">Donated Deleted Successfully!</h3>',
            '<p style="color:black;">You have successfully deleted the donation.</p>',
            'success'
        )->persistent();

        return redirect()->back();
    }

    public function approve($id){
        $donate = Donation::find($id);
        $donate->payment_status = '1';
        $donate->save();
        Alert::html(
            '<h3 style="color:black;">Payment Approved Successfully!</h3>',
            '<p style="color:black;">You have successfully approved this Payment.</p>',
            'success'
        )->persistent();

        return redirect()->back();
    }

    public function unapprove($id){
        $donate = Donation::find($id);
        $donate->payment_status = '0';
        $donate->save();
        Alert::html(
            '<h3 style="color:black;">Payment UnApproved Successfully!</h3>',
            '<p style="color:black;">You have successfully unapproved this Payment.</p>',
            'success'
        )->persistent();

        return redirect()->back();
    }
}
