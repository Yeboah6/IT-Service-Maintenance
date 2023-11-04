<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechnicianController extends Controller
{
    //

    public function technician() {
        return view('pages.technicians');
    }

    public function addTechnician() {
        return view('pages.add-technician');
    }
}
