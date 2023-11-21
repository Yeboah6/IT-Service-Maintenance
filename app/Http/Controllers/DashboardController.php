<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;
use App\Models\Technicians;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::id()) {
            $user = Auth()->user()->email === "hardwareadmin@gmail.com";
            if ($user) {
                $incident = Incident::all();
                $wordCount = Incident::all()->count();
                $technicians = Technicians::all() -> count();
                $assignCount = Incident::where('assign_to') -> count();
                $users = User::all() -> count();
                // $display = Incident::find(1) -> technician;
                return view('Dashboards.Admin.dashboard', compact('incident', 'wordCount', 'assignCount', 'users', 'technicians'));
            } else {
                $incident = Incident::all();
                return view('Dashboards.User.User-dashboard', compact('incident'));
            }
        }
    }
} 

