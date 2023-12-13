<?php

namespace App\Http\Controllers;

use App\Models\Technicians;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TechnicianController extends Controller
{

    // Display Technicians
    public function technician() {
        if (Auth::id()) {
            $hardwareUser = Auth()->user()->email === "hardwareadmin@gmail.com";
            $softwareUser = Auth()->user()->email === "softwareadmin@gmail.com";
            $networkUser = Auth()->user()->email === "networkadmin@gmail.com";

            if ($hardwareUser) {
                $technician = Technicians:: where('department', 'Hardware') -> get();
                return view('pages.technicians', compact('technician'));
            }

            else if ($networkUser) {
                $technician = Technicians:: where('department', 'Network Cell') -> get();
                return view('pages.technicians', compact('technician'));
            }
        
        // $check = DB::table('incident') -> join('technician', 'incident.assign_to', 'technician.name') -> where('incident.assign_to', '=', 'technician.name') -> update(['technician.status' => 'Unavailable']) -> get();
        // if ($check == "technician.name") {
        //     $technician -> status = "Unavailable";
        // }
        // $technician -> $check = "Unavailable";

        }
    }

    // Add Technician Page
    public function addTechnician() {
        return view('pages.add-technician');
    }

    // Store Technician 
    public function addTechnicians(Request $request) {
        $technician = new Technicians();

        $technician -> service_number = $request -> input('service_number');
        $technician -> name = $request -> input('name');
        $technician -> number = $request -> input('number');
        $technician -> email = $request -> input('email');
        $technician -> department = $request -> input('department');
        $technician -> status = "Available";

        $technician -> save();
        return redirect('/technicians');
    }

    // Delete Technician 
    public function deleteTechnician($id) {
        $technician = Technicians::findOrFail($id);

        $technician -> delete();
        return redirect('/technicians');
    }
}
