<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::id()) {
            $user = Auth()->user()->email === "admin@gmail.com";
            if ($user) {
                $incident = Incident::all();
                return view('Dashboards.Admin.dashboard', compact('incident'));
            } else {
                $incident = Incident::all();
                return view('Dashboards.User.User-dashboard', compact('incident'));
            }
        }
    }
}
