<?php

namespace App\Http\Controllers;

use App\Models\Technicians;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TechnicianController extends Controller
{

    // Display Technicians 
    public function technician() {
        $technician = Technicians::all();
        $check = DB::table('incident') -> join('technician', 'incident.statusCheck', 'technician.status') -> select('technician.status') -> get();

        return view('pages.technicians', compact('technician', 'check'));
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
