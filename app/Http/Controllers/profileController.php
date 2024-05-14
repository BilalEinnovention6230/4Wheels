<?php

namespace App\Http\Controllers;

use App\Models\CarInsurance;
use App\Models\InstantMaintenance;
use App\Models\ModelCarRegistration;
use App\Models\profileModel;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function Profile(Request $req)
    {
        $carRegistrationData = profileModel::where('tablename', 'car registration')->get();
        $insuranceData = profileModel::where('tablename', 'insuranceform')->get();
        $instantmaintenanceData = profileModel::where('tablename', 'instantmaintenance')->get();

        $carRegistrationIds = $carRegistrationData->pluck('recordid');
        $insuranceIds = $insuranceData->pluck('recordid');
        $instantmaintenanceIds = $instantmaintenanceData->pluck('recordid');

        $carRegistrations = ModelCarRegistration::whereIn('id', $carRegistrationIds)->get();
        $insuranceAdds = CarInsurance::whereIn('id', $insuranceIds)->get();
        $maintenanceAdds = instantmaintenance::whereIn('id', $instantmaintenanceIds)->get();

        return view('login&signup/profile', compact('carRegistrations', 'insuranceAdds', 'maintenanceAdds'));
    }

    public function delete($id)
    {
        // Find the profileModel record by ID
        $record = profileModel::where('recordid', $id)->first(); // Use first() to fetch the record

        if ($record && $record->tablename === "car registration") {
            // Find the associated ModelCarRegistration record by recordid
            $carRegistration = ModelCarRegistration::findOrFail($record->recordid);

            // Delete both records
            $carRegistration->delete();
            $record->delete();

            return redirect()->back()->with('success', 'Record deleted successfully');
        } else {
            if ($record && $record->tablename === "insuranceform") {
                // Find the associated ModelCarRegistration record by recordid
                $carRegistration = CarInsurance::findOrFail($record->recordid);

                // Delete both records
                $carRegistration->delete();
                $record->delete();

                return redirect()->back()->with('success', 'Record deleted successfully');
            } else {
                if ($record && $record->tablename === "instantmaintenance") {
                    // Find the associated ModelCarRegistration record by recordid
                    $carRegistration = CarInsurance::findOrFail($record->recordid);

                    // Delete both records
                    $carRegistration->delete();
                    $record->delete();
                    return redirect()->back()->with('success', 'Record deleted successfully');
                } else {
                    // Handle other cases or errors
                    return redirect()->back()->with('error', 'Record deletion failed');
                }
            }

        }
    }

}
