<?php

namespace App\Http\Controllers;

use App\Models\Department;
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
            $receptionist = Auth()->user()->email === "receptionist@gmail.com";
            $networkUser = Auth()->user()->email === "networkadmin@gmail.com";

            // Hardware Dashboard 
            if ($hardwareUser) {
                $incident = Incident::orderBy('created_at', 'desc') -> where('issue_type', 'Hardware') -> get();

                $wordCount = Incident::where('issue_type', 'Hardware')->count();
                $technicians = Technicians::where('cell', 'Tech Cell') -> count();
                $techName = Technicians::where('cell', 'Tech Cell') -> get();
                $technician = Technicians::where('status', 'Unavailable') -> where('cell', 'Tech Cell') -> count();
                $users = User::all() -> count();

                $resolved = Incident::where('issue_type', 'Hardware') -> where('statusCheck', 'resolved') -> count();
                $assignCount = Incident::where('issue_type', 'Hardware') -> where('statusCheck','pending') -> count();
                $assignResolved = $assignCount + $resolved;
                $unassigned = Incident::where('issue_type', 'Hardware') -> where('statusCheck', 'submitted') -> count();

                return view('Dashboards.Admin.dashboard', compact('incident', 'technician','techName', 'assignResolved', 'wordCount', 'assignCount', 'users', 'technicians', 'resolved', 'unassigned'));
            }
             else if ($networkUser) {
                $incident = Incident::orderBy('created_at', 'desc') -> where('issue_type', 'Hardware') -> get();

                // $incident = Incident::where('issue_type', 'Network') -> get();

                $wordCount = Incident::where('issue_type', 'Network')->count();
                $technicians = Technicians::where('cell', 'Network Cell') -> count();
                $techName = Technicians::where('cell', 'Network Cell') -> get();
                $technician = Technicians::where('status', 'Unavailable') -> where('cell', 'Network Cell') -> count();
                $users = User::all() -> count();

                $resolved = Incident::where('issue_type', 'Network') -> where('statusCheck', 'Resolved') -> count();
                $assignCount = Incident::where('issue_type', 'Network') -> where('statusCheck','Pending') -> count();
                $assignResolved = $assignCount + $resolved;
                $unassigned = Incident::where('issue_type', 'Network') -> where('statusCheck', 'submitted') -> count();

                return view('Dashboards.Admin.dashboard', compact('incident', 'techName', 'assignResolved', 'wordCount', 'assignCount', 'users', 'technicians', 'technician', 'resolved', 'unassigned'));
             }

            // Software Dashboard
            // else if ($softwareUser) {
            //     $incident = Incident::where('issue_type', 'Software') -> get();
            //     $wordCount = Incident::where('issue_type', 'Software')->count();
            //     $technicians = Technicians::where('cell', 'Programming') -> count();
            //     $users = User::all() -> count();

            //     $resolved = Incident::where('issue_type', 'Software') -> where('statusCheck', 'resolved') -> count();
            //     $assignCount = Incident::where('issue_type', 'Software') -> where('statusCheck','pending') -> count();
            //     $assignResolved = $assignCount + $resolved;
            //     $unassigned = Incident::where('issue_type', 'Software') -> where('statusCheck', 'submitted') -> count();

            //     return view('Dashboards.Admin.dashboard', compact('incident', 'assignResolved', 'wordCount', 'assignCount', 'users', 'technicians', 'resolved', 'unassigned'));
            //  } 
             
             else {
                $incident = Incident::all();
                // $incidentDetails = Incident::all();
                return view('Dashboards.User.User-dashboard', compact('incident'));
            }
        }
    }
}
