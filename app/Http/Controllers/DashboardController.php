<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;

class DashboardController extends Controller
{
    public function dashboard() {
        $incident = Incident::all();
        return view('Dashboards.Admin.dashboard', compact('incident'));
    }

    public function userDashboard() {
        $incident = Incident::all();
        return view('Dashboards.User.User-dashboard', compact('incident'));
    }
}
