<?php

namespace App\Http\Controllers;

use App\Models\profileModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelCarRegistration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CarRegistration extends Controller
{
    public function Carselling()
    {
        return view('car dealer/car_sell');
    }
    public function car_buy()
    {
        $data = ModelCarRegistration::all();
        return view('car dealer/car_buy', compact('data'));

    }
    public function storeImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        // Public Folder
        $request->image->move(public_path('images'), $imageName);

        // //Store in Storage Folder
        // $request->image->storeAs('images', $imageName);

        // // Store in S3
        // $request->image->storeAs('images', $imageName, 's3');

        //Store IMage in DB

        return back()->with('success', 'Image uploaded Successfully!')
            ->with('image', $imageName);
    }
    public function booking(Request $request)
    {
        $advertisement = new ModelCarRegistration;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $advertisement->image1 = str_replace('public/', '', $imagePath);
        }
        $advertisement->save();

        // dd($advertisement);

        // dd($request->all());

        // if($request->hasfile('brandicon'))
        // {
        //     $file = $request->file('brandicon');
        //     $extention = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$extention;
        //     $file->move('uploads/students/', $filename);
        //     // $data->brand_icon = $filename;
        // }
        // else
        // {
        //     echo "Upload picture failder";
        // }
    }

    public function bookingcreated(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'carRegistratoin' => 'required',
            'CarName' => 'required',
            'askingprice' => 'required|numeric',
            'description' => 'required',
            'partexchange' => 'required|',
            'Milage' => 'required',
            'modelYear' => 'required|numeric',
            'Doors' => 'required',
            'GearBox' => 'required',
            'engintype' => 'required',
            'colour' => 'required',
            'PistonHead' => 'required',
            'Aspiration' => 'required',
            'enginesize' => 'required',
            'Cylinder' => 'required',
            'FuelConsumption' => 'required',
            'Health' => 'required',
            'noCylinder' => 'required',
            'Owners' => 'required',
            'topspeed' => 'required|numeric',
            'Drivenwheels' => 'required',
            'fullname' => 'required',
            'lastname' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'town' => 'required',
            'country' => 'required',
            'Postcode' => 'required|numeric|digits:6',
            'Telephone' => 'required|numeric|digits:11',
        ]);
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = new ModelCarRegistration;
        $data->RegistrrationNumber = $req->carRegistratoin;
        $data->CarName = $req->CarName;
        $data->CarPrice = $req->askingprice;
        $data->cardesc = $req->description;
        $data->PartExchange = $req->partexchange;
        $data->CarMilage = $req->Milage;
        $data->years = $req->modelYear;
        $data->CarDoor = $req->Doors;
        $data->GearBox = $req->GearBox;
        $data->EnginType = $req->engintype;
        $data->CarColor = $req->colour;
        $data->EngiPosition = $req->PistonHead;
        $data->Aspiration = $req->Aspiration;
        $data->EngineSize = $req->enginesize;
        $data->CylinderLayout = $req->Cylinder;
        $data->FuelConsumption = $req->FuelConsumption;
        $data->Health = $req->Health;
        $data->Cylinder = $req->noCylinder;
        $data->Owners = $req->Owners;
        $data->TopSpeed = $req->topspeed;
        $data->DrivenWheels = $req->Drivenwheels;
        $data->Fname = $req->fullname;
        $data->Lname = $req->lastname;
        $data->Address1 = $req->address1;
        $data->Address2 = $req->address2;
        $data->City = $req->town;
        $data->County = $req->country;
        $data->PostCode = $req->Postcode;
        $data->TelephoneNumber = $req->Telephone;
        $data->save();
        $imageFields = [];
        for ($i = 1; $i <= 9; $i++) {
            if ($req->hasFile("image$i")) {
                $imageName = time() . "_$i." . $req->file("image$i")->extension();
                $relativeImagePath = "images/$imageName";
                $req->file("image$i")->move(public_path('images'), $imageName);
                $imageFields["image$i"] = $relativeImagePath;
                $data->update(["image$i"=>$imageFields["image$i"]]);
            }
        }
        if (auth()->check()) {
            $profile = new profileModel;
            $profile->email =auth()->user()->email;
            $profile->userid =auth()->user()->id;
            $profile->recordid =$data->id;
            $profile->tablename = "car registration";
            $profile->save();
        } else {
            return redirect()->back()->with('error','Your Are Not Login');
        }
        return redirect()->route('car_buy')->with('success','Car post is Created Successfully ');

    }


    public function carname(Request $req)
    {
        $filter = $req->Car_Name;
        $data = DB::table('car registration')->where('CarName', $filter)->get();
        // dd($data);
        return view('car dealer/car_buy', compact('data'));
    }

    public function city(Request $req)
    {
        $filter = $req->cities;
        $data = DB::table('car registration')->where('City', $filter)->get();
        // dd($data);
        return view('car dealer/car_buy', compact('data'));
    }
    public function provinc(Request $req)
    {
        $filter = $req->province;
        // $data = DB::table('car registration')->where('City', $filter)->get();
        dd($filter);
        // return view('car dealer/car_buy', compact('data'));
    }
    public function pricerange(Request $req)
    {
        $filter1 = $req->input('price1');
        $filter2 = $req->input('price-from');
        $data = DB::table('car registration')
            ->whereBetween('CarPrice', [$filter1, $filter2])
            ->get();

        // dd($data);

        return view('car dealer/car_buy', compact('data'));
    }
    public function years(Request $req)
    {
        $filter1 = $req->input('start-year');
        $filter2 = $req->input('end-year');
        $data = DB::table('car registration')
            ->whereBetween('years', [$filter1, $filter2])
            ->get();

        // dd($data);

        return view('car dealer/car_buy', compact('data'));
    }
    public function millage(Request $req)
    {
        $filter1 = $req->input('start-millage');
        $filter2 = $req->input('end-millage');
        $data = DB::table('car registration')
            ->whereBetween('CarMilage', [$filter1, $filter2])
            ->get();

        // dd($filter2);

        return view('car dealer/car_buy', compact('data'));
    }
    public function TransmissionType(Request $req)
    {
        $filter1 = $req->input('Transmission');
        $data = DB::table('car registration')
            ->where('GearBox', [$filter1])
            ->get();

        // dd($filter2);

        return view('car dealer/car_buy', compact('data'));
    }
    public function colour(Request $req)
    {
        $filter1 = $req->input('car-color');
        $data = DB::table('car registration')
            ->where('CarColor', [$filter1])
            ->get();

        // dd($filter2);

        return view('car dealer/car_buy', compact('data'));
    }
    public function Engine(Request $req)
    {
        $filter1 = $req->input('engine_type');
        $data = DB::table('car registration')
            ->where('EnginType', [$filter1])
            ->get();

        // dd($filter2);

        return view('car dealer/car_buy', compact('data'));
    }
    public function cardata()
    {
        $data = ModelCarRegistration::all();
        return view('WebsiteLandingPage', compact('data'));

    }
    public function postadd($id)
    {
        $data = ModelCarRegistration::findOrFail($id);
        return view('car dealer\PostedAdd_buyCar', compact('data'));

    }
}
