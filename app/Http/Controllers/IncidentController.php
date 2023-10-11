<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncidentController extends Controller
{
    public function create() {
        return view('pages.create-incident');
    }

    public function viewIncident() {
        return view('pages.view-incident');
    }

    public function viewusers() {
        return view('pages.user');
    }

    public function report() {
        return view('pages.report');
    }
}
