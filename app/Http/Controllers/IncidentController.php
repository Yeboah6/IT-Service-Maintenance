<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncidentController extends Controller
{

    public function index() {
        return view('dashboard');
    }
    
    public function create() {
        return view('pages.create-incident');
    }

    public function view() {
        return view('pages.view-incident');
    }
}
