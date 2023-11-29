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
                $users = User::all() -> count();

                $resolved = Incident::where('statusCheck', 'resolved') -> count();
                $assignCount = Incident::where('statusCheck','pending') -> count();
                $unassigned = Incident::where('statusCheck', 'submitted') -> count();

                return view('Dashboards.Admin.dashboard', compact('incident', 'wordCount', 'assignCount', 'users', 'technicians', 'resolved', 'unassigned'));
            } else {
                $incident = Incident::where('reporter', auth()->user()-> name) -> get();
                return view('Dashboards.User.User-dashboard', compact('incident'));
            }
        }
    }
}
