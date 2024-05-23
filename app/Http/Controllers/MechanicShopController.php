<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\AcceptedOrders;
use App\Models\InstantMaintenance;
use App\Models\MechanicRegistration;

class MechanicShopController extends Controller
{
    public function shop()
    {
        return view('MechanicRegistration/Register');
    }
    public function mechaniclogin(Request $req)
    {
        return view('login&signup/MechanicLogin');
    }
    public function mechanicdashboard($id)
    {
        $data = InstantMaintenance::all();
        $accepted = AcceptedOrders::where('shopid', $id)->get();
        $user = MechanicRegistration::find($id);
        // dd($data);
        return view('MechanicRegistration/MechanicDashboard', compact('data', 'user', 'accepted'));
    }
    public function deletebooking($user_id, $item_id)
    {
        // Find and delete the record by ID
        $recordToMove = InstantMaintenance::findOrFail($item_id);
        AcceptedOrders::create([
            'shopid' => $user_id,
            'booking_id' => $item_id,
            'firstname' => $recordToMove->firstname,
            'lastname' => $recordToMove->lastname,
            'contact' => $recordToMove->contact,
            'address' => $recordToMove->address,
            'cartype' => $recordToMove->cartype,
            'model' => $recordToMove->model,
            'carissues' => $recordToMove->carissues,
            'longitude' => $recordToMove->longitude,
            'latitude' => $recordToMove->latitude,
            // Add more columns as needed
        ]);
        $recordToMove->delete();
        return redirect()->back()->with('success', 'Record moved and deleted successfully.');
    }

    public function loginsucces(Request $req)
    {
        // return $request;
        $contact = $req->contact;
        $password = $req->password;

        // Retrieve a user by their contact number
        $user = MechanicRegistration::where('contact', $contact)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }

        // Check if the provided password matches the password in the database (no hashing)
        if ($password !== $user->password) {
            return redirect()->back()->with('error', 'Incorrect password');
        }

        // Redirect to the mechanicdashboard route with the user's ID as a parameter
        return redirect()->route('mechanicdashboard', ['id' => $user->id]);
    }

    public function register(Request $req)
    {
        // return $req;
        $data = new User;
        $data->name = $req->Wname;
        $data->email = $req->email;
        $data->mobile_number = $req->Contact;
        $data->address = $req->Address;
        $data->password = bcrypt($req->password);
        $data->save();

        if($req->hasFile('image')){
            $imageName = time() . '.' . $req->image->extension();
            // Public Folder
            $image = $req->image->move(public_path('images'), $imageName);
            $relativeImagePath = str_replace(public_path(), '', $image);
            $data->image = $relativeImagePath;
        }
        $data->save();
        return redirect()->route('/');
    }
    public function register_mechanic(Request $req)
    {
        // return $req;
        $data = new MechanicRegistration;
        $data->Wname = $req->Wname;
        $data->Address = $req->Address;
        $data->Service = $req->Service;
        $data->Specialization = $req->Specialization;
        $data->Contact = $req->Contact;
        $data->cloestime = $req->cloestime;
        $data->detail = $req->detail;
        $data->closeday = $req->closeday;
        // $data->name = $req->name;
        $data->password = $req->password;
        $data->latitude = $req->latitude;
        $data->longitude = $req->longitude;
        $data->save();
        // $req->validate([
        //     'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        // ]);

        if($req->hasFile('image')){
            $imageName = time() . '.' . $req->image->extension();
            // Public Folder
            $image = $req->image->move(public_path('images'), $imageName);
            $relativeImagePath = str_replace(public_path(), '', $image);
            $data->image = $relativeImagePath;
        }
        $data->save();
        return redirect()->route('mechaniclogin');
    }
    public function workshops($recordid)
    {
        $accepted = AcceptedOrders::where('booking_id', $recordid)->first();
        $data = "";
        if ($accepted) {
            $data = MechanicRegistration::where('id', $accepted->shopid)->first();

            if ($data) {
                // The request is accepted, load the workshop data
                return view('CarMaintnance/acceptedordershop', compact('data', 'recordid'));
            }

        }

        // The request is in progress or not found, set a message and redirect back

        return view('CarMaintnance/acceptedordershop', compact('data', 'recordid'));
    }
    function deletemyadd($recordid)  {
        $data =AcceptedOrders::where('booking_id', $recordid)->first();
        $data->delete();
        return redirect()->route('Maintanance');
    }

}
