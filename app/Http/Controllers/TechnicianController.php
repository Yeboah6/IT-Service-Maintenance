<?php

namespace App\Http\Controllers;

use App\Models\Technicians;
use Illuminate\Http\Request;

class TechnicianController extends Controller
{
    //

    public function technician() {
        $technician = Technicians::all();
        return view('pages.technicians', compact('technician'));
    }

    public function addTechnician() {
        return view('pages.add-technician');
    }

    public function addTechnicians(Request $request) {
        $technician = new Technicians();

        $technician -> name = $request -> input('name');
        $technician -> number = $request -> input('number');
        $technician -> email = $request -> input('email');
        $technician -> department = $request -> input('department');
        $technician -> status = "Available";

        $technician -> save();
        return redirect('/technicians');
    }

    public function deleteTechnician($id) {
        $technician = Technicians::findOrFail($id);

        $technician -> delete();
        return redirect('/technicians');
    }
}
