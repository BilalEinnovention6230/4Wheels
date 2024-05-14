<?php

namespace App\Http\Controllers;

use App\Models\InstantMaintenance;
use App\Models\MechanicRegistration;
use App\Models\profileModel;
use App\Models\User;
use Illuminate\Http\Request;

class InstantMaintenaceController extends Controller
{
    function maintlending() {
        return view('CarMaintnance/landingpage');
    }
    public function instantbooking(Request $req)
    {
        $data = new InstantMaintenance;
        $data->firstname = $req->fname;
        $data->lastname = $req->lname;
        $data->contact = $req->contact;
        $data->address = $req->address;
        $data->cartype = $req->cartype;
        $data->model = $req->model;
        $data->carissues = $req->carissues;
        $long = $req->longitude;
        $lati = $req->latitude; 
        $data->longitude = $req->longitude;
        $data->latitude = $req->latitude;
        // dd($long);
        // dd($lati);
        $data->save();
        $profile = new profileModel;
        $profile->email = auth()->user()->email;
        $profile->userid = auth()->user()->id;
        $profile->recordid = $data->id;
        $profile->tablename = "instantmaintenance";
        $profile->save();
        // dd($data);
        // dd('Reached before redirect'); // Add this line
        return redirect()->route('workshops', ['recordid' => $data->id]);
    }
    public function viewdetails($id)
    {
        $data = MechanicRegistration::findOrFail($id); // Fetch workshop details using the ID
        return view('CarMaintnance/workshopdetails', compact('data'));
    }
    public function signup(Request $req)
    {
        // $req->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'number' => 'required|string|max:11|numeric',
        //     'Address' => 'required|string|max:255',
        //     'password' => 'required|string|min:6|confirmed',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);
    
        $imageName = time() . '.' . $req->file('image')->extension();
    
        // Public Folder
        $imagePath = $req->file('image')->move(public_path('images'), $imageName);
        $relativeImagePath = str_replace(public_path(), '', $imagePath);
    
        User::create([
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'password' => \Hash::make($req->input('password')),
            'mobile_number' => $req->input('number'),
            'address' => $req->input('Address'),
            'image' => $relativeImagePath, // Store the image path in the 'image' column
        ]);
    
        return redirect('/');
    }
    
    public function Login(Request $req)
    {
        if (\Auth::attempt($req->only('email', 'password'))) {
            return redirect('WebsiteLandingPage');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }
    
}
