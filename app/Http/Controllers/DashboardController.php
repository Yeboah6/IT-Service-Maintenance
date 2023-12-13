<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;
use App\Models\Technicians;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
// use PharIo\Manifest\Author;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::id()) {
            $hardwareUser = Auth()->user()->email === "hardwareadmin@gmail.com";
            $softwareUser = Auth()->user()->email === "softwareadmin@gmail.com";
            $networkUser = Auth()->user()->email === "networkadmin@gmail.com";

            // Hardware Dashboard
            if ($hardwareUser) {
                $incident = Incident::where('issue_type', 'Hardware') -> get();
                $wordCount = Incident::where('issue_type', 'Hardware')->count();
                $technicians = Technicians::where('department', 'Hardware') -> count();
                $users = User::all() -> count();

                $resolved = Incident::where('issue_type', 'Hardware') -> where('statusCheck', 'resolved') -> count();
                $assignCount = Incident::where('issue_type', 'Hardware') -> where('statusCheck','pending') -> count();
                $assignResolved = $assignCount + $resolved;
                $unassigned = Incident::where('statusCheck', 'submitted') -> count();

                return view('Dashboards.Admin.dashboard', compact('incident', 'assignResolved', 'wordCount', 'assignCount', 'users', 'technicians', 'resolved', 'unassigned'));
            }

            // Software Dashboard
            else if ($softwareUser) {
                $incident = Incident::where('issue_type', 'Software') -> get();
                $wordCount = Incident::where('issue_type', 'Software')->count();
                $technicians = Technicians::where('department', 'Programming') -> count();
                $users = User::all() -> count();

                $resolved = Incident::where('issue_type', 'Software') -> where('statusCheck', 'resolved') -> count();
                $assignCount = Incident::where('issue_type', 'Software') -> where('statusCheck','pending') -> count();
                $assignResolved = $assignCount + $resolved;
                $unassigned = Incident::where('issue_type', 'Software') -> where('statusCheck', 'submitted') -> count();

                return view('Dashboards.Admin.dashboard', compact('incident', 'assignResolved', 'wordCount', 'assignCount', 'users', 'technicians', 'resolved', 'unassigned'));
             } 

             else if ($networkUser) {
                $incident = Incident::where('issue_type', 'Network') -> get();
                $wordCount = Incident::where('issue_type', 'Network')->count();
                $technicians = Technicians::where('department', 'Network') -> count();
                $users = User::all() -> count();

                $resolved = Incident::where('issue_type', 'Network') -> where('statusCheck', 'resolved') -> count();
                $assignCount = Incident::where('issue_type', 'Network') -> where('statusCheck','pending') -> count();
                $assignResolved = $assignCount + $resolved;
                $unassigned = Incident::where('issue_type', 'Network') -> where('statusCheck', 'submitted') -> count();

                return view('Dashboards.Admin.dashboard', compact('incident', 'assignResolved', 'wordCount', 'assignCount', 'users', 'technicians', 'resolved', 'unassigned'));
             }
             
             else {
                $incident = Incident::where('reporter', auth()->user()-> name) -> get();
                return view('Dashboards.User.User-dashboard', compact('incident'));
            }
        }
    }
}
