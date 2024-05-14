<?php

namespace App\Http\Controllers;
use App\Models\CarInsurance;
use App\Models\profileModel;

use Illuminate\Http\Request;

class CarInsuranceController extends Controller
{
    public function car_insurance(Request $req)
    {
        // $req->validate([
        //     'Fname' => 'required',
        //     'Lname' => 'required',
        //     'CurrentAddress' => 'required',
        //     'ParmanentAdress' => 'required',
        //     'cnic' => 'required|numeric|decimal(13)',
        //     'Country' => 'required',
        //     'Postcode' => 'required|numeric',
        //     'TelephoneNumber' => 'required|numeric',
        //     'Make' => 'required',
        //     'CarModels' => 'required',
        //     'Year' => 'required|numeric',
        //     'EstimateCarPrice' => 'required|numeric',
        // ]);
        
        
        $data = new CarInsurance;
        $data->Fname = $req->Fname ;
        $data->Lname = $req->Lname ;
        $data->CurrentAddress = $req->CurrentAddress ;
        $data->ParmanentAdress = $req->ParmanentAdress ;
        $data->CNICnumber = $req->cnic ;
        $data->County = $req->Country ;
        $data->Postcode = $req->Postcode ;
        $data->TelephoneNumber = $req->TelephoneNumber ;
        $data->Make = $req->Make ;
        $data->CarModels = $req->CarModels ;
        $data->Year = $req->Year ;
        $data->EstimateCarPrice = $req->EstimateCarPrice ;
        $data->save();
        $profile = new profileModel;
        $profile->email =auth()->user()->email;
        $profile->userid =auth()->user()->id;
        $profile->recordid =$data->id;
        $profile->tablename = "insuranceform";
        $profile->save();
        return redirect('Insurance');
    }
}
