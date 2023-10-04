<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncidentController extends Controller
{

    // Display Dashboard
    public function index() {
        return view('dashboard');
    }
    
    // Display Create Incident
    public function create() {
        return view('pages.create-incident');
    }

    // Display View Incident
    public function view() {
        return view('pages.view-incident');
    }

    // Display User Account
    public function showUsers() {
        return view('pages.users');
    }

    // Display User Dashboard
    public function userDashboard() {
        return view('pages.user-dashboard');
    }
}
