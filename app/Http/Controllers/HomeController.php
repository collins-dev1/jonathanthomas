<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ContactInfo;
use App\Models\Donation;
use App\Models\Gallery;
use App\Models\Partner;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $donation = Donation::count();
        $team = Team::count();
        $blog = Blog::count();
        $partner = Partner::count();
        $gallery = Gallery::count();
        $info = ContactInfo::count();
        $totalApprovedDonations = Donation::where('payment_status', 1)->sum('amount');
        return view('admin.dashboard', compact('donation', 'team', 'blog', 'partner', 'gallery', 'info', 'totalApprovedDonations'));
    }

    public function admin_profile(){
        return view('admin.admin_profile');
    }

    public function admin_setting(){
        return view('admin.admin_setting');
    }

    public function update_profile(Request $request, $id)
    {
        $profile = User::find($id);
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->save();
        Alert::html(
            '<h3 style="color:black;">Profile Updated Successfully!!!</h3>',
            '<p style="color:black;">You have successfully updated your profile.</p>',
            'success'
        )->persistent();

        return redirect()->route('admin_profile');
    }

    public function change_password()
    {
        return view('admin.update_password');
    }

    // Update the password
    public function update_password(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        // Check current password
        if (! Hash::check($request->current_password, $user->password)) {
            Alert::html(
                '<h3 style="color:black;">The current password is incorrect</h3>',
                '<p style="color:black;">You have current write an incorrect password!!!.</p>',
                'success'
            )->persistent();

            return redirect()->back();
        }

        // Update password
        $user->password = Hash::make($request->new_password);
        $user->save();

        Alert::html(
            '<h3 style="color:black;">Password Changed Successfully!!!</h3>',
            '<p style="color:black;">You have successfully updated your password!!!.</p>',
            'success'
        )->persistent();

        return redirect()->route('admin_profile');
    }
}
