<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class TeamController extends Controller
{
     public function add_team(){
        return view('admin.add_team');
    }

    public function create_team(Request $request){
        $team = new Team();
        $team->name = $request->name;
        $team->email = $request->email;
        $team->phone = $request->phone;
        $team->position = $request->position;
        $team->description = $request->description;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');

            // Generate a unique filename
            $filename = Str::uuid().'.'.$file->getClientOriginalExtension();

            // Store the image in storage/app/public/doctors
            $path = $file->storeAs('teams', $filename, 'public');

            // Optionally delete the old image if it exists
            if ($team->photo && Storage::disk('public')->exists('teams/'.$team->photo)) {
                Storage::disk('public')->delete('teams/'.$team->photo);
            }

            // Save the filename in the database
            $team->photo = $filename;
        }
        $team->save();
         Alert::html(
            '<h3 style="color:black;">Team Created Successfully!</h3>',
            '<p style="color:black;">You have successfully created your team.</p>',
            'success'
        )->persistent();

        return redirect()->route('manage_team');
    }

    public function manage_team(){
        $teams = Team::all();
        return view('admin.manage_team', compact('teams'));
    }

    public function team_information($id){
        $team = Team::find($id);
        return view('admin.team_information', compact('team'));
    }

    public function edit_team($id){
        $team = Team::find($id);
        return view('admin.edit_team', compact('team'));
    }

    public function update_team(Request $request, $id){
        $team = Team::find($id);
        $team->name = $request->name;
        $team->email = $request->email;
        $team->phone = $request->phone;
        $team->position = $request->position;
        $team->description = $request->description;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');

            // Generate a unique filename
            $filename = Str::uuid().'.'.$file->getClientOriginalExtension();

            // Store the image in storage/app/public/doctors
            $path = $file->storeAs('teams', $filename, 'public');

            // Optionally delete the old image if it exists
            if ($team->photo && Storage::disk('public')->exists('teams/'.$team->photo)) {
                Storage::disk('public')->delete('teams/'.$team->photo);
            }

            // Save the filename in the database
            $team->photo = $filename;
        }
        $team->save();
         Alert::html(
            '<h3 style="color:black;">Team Updated Successfully!</h3>',
            '<p style="color:black;">You have successfully updated this team member.</p>',
            'success'
        )->persistent();

        return redirect()->route('manage_team');
    }

    public function delete_team($id){
        $team = Team::find($id);
        $team->delete();
        Alert::html(
            '<h3 style="color:black;">Team Deleted Successfully!</h3>',
            '<p style="color:black;">You have successfully deleted this team member.</p>',
            'success'
        )->persistent();

        return redirect()->back();
    }
}
