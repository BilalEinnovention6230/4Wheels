<?php

namespace App\Http\Controllers;
use App\Models\InsuranceCompany;

use Illuminate\Http\Request;

class InsuranceCompanyController extends Controller
{
    public function company_register(Request $req)
    {
        $req->validate([
            'CompanyName' => 'required',
            'CompanyObjective' => 'required',
            'CompanyTagLine' => 'required',
            'CompanyRate' => 'required|numeric',
            'Company_Owner_Name' => 'required',
            'Company_Contact_Number' => 'required|numeric|digits:11',
            'Landline_Number' => 'required|numeric|digits:11',
            'Working_Gmail' => 'required|email|unique:icompany registration', // Replace space with underscore
            'Facebook_Link' => 'required',
            'InstaGramm_Link' => 'required',
            'UploadLogo' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);
        
        $data = new InsuranceCompany;
       $data->CompanyName =  $req->CompanyName ;
       $data->CompanyObjective =  $req->CompanyObjective ;
       $data->CompanyTagLine =  $req->CompanyObjective  ;
       $data->CompanyTagLine =  $req->CompanyTagLine ;
       $data->CompanyRate =  $req->CompanyRate ;
       $data->Company_Owner_Name =  $req->Company_Owner_Name ;
       $data->Company_Contact_Number =  $req->Company_Contact_Number ;
       $data->Landline_Number =  $req->Landline_Number ;
       $data->Working_Gmail =  $req->Working_Gmail ;
       $data->Facebook_Link =  $req->Facebook_Link ;
       $data->InstaGramm_Link =  $req->InstaGramm_Link ;
       $data->save();
    $imageName = time().'.'.$req->UploadLogo->extension();

    // Public Folder
    $image = $req->UploadLogo->move(public_path('images'), $imageName);
    $relativeImagePath = str_replace(public_path(), '', $image);
    $data->UploadLogo= $relativeImagePath;
    $data->save();
    
return redirect('Insurance');
    //    $data->UploadLogo =  $req->UploadLogo ;
    }
    public function Insurance()
    {
        $data= InsuranceCompany::all();
        return view('Car Insurance\insurance_company', compact('data'));
    }
    public function ContactUs(string $id)
    {
        $contactpage= InsuranceCompany::find($id);
        // return $contactpage;
        return view('Car Insurance\insurance_contact_us', compact('contactpage'));
    }
    // public function validation(Request $req)
    // {
    //     $req->validate([
    //         'CompanyName' =>'required',
    //         'CompanyObjective' =>'required',
    //         'CompanyObjective ' =>'required',
    //         'CompanyTagLine' =>'required',
    //         'CompanyRate' =>'required|numeric',
    //         'Company_Owner_Name' =>'required',
    //         'Company_Contact_Number' =>'required|numeric|digits:11',
    //         'Landline_Number' =>'required|numeric|digits:11',
    //         'Working_Gmail' =>'required|email|unique:icompany registration',
    //         'Facebook_Link' =>'required',
    //         'InstaGramm_Link' =>'required',
    //         'UploadLogo' => 'required|image|mimes:png,jpg,jpeg|max:2048'
    //     ]);
    //     return view('Car Insurance\insurance_company');
    // }
} 
