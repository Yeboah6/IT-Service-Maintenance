<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;

class DashboardController extends Controller
{
    public function adminView() {
        $data = Incident::all();
        return view('Dashboards.Admin-Dashboard.view', ['data' => $data]);
    }

        // Display User Dashboard
        public function userDashboard() {
            return view('Dashboards.User-Dashboard.user-dashboard');
        }
} 
