<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Incident;
use App\Models\Technicians;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class IncidentController extends Controller
{

    // Display Incident Form
    public function create() {
        $department = Department::all();
        return view('pages.create-incident', compact('department'));
    }

    // Store Incident
    public function store(Request $request) {

        $characters = 'TK';
        $pin = mt_rand(10, 99) . mt_rand(10, 99);
        $ticket = $characters. '' .$pin;

        $data = new Incident();
        $data -> issue = $request -> input('issue');
        $data -> issue_type = $request -> input('issue_type');
        $data -> reported_by = $request -> input('reported_by');
        $data -> urgency = $request -> input('urgency');
        $data -> from = $request -> input('from');
        $data -> description = $request -> input('description');
        $data -> number = $request -> input('number');
        $data -> service_number = $request -> input('service_number');
        $data -> reporter_name = $request -> input('reporter_name');
        $data -> statusCheck = "Submitted";
        $data -> ticket_no = $ticket; 
        $data -> save();
        return redirect('/dashboard');
    }

    // Display Assign To Page
    public function viewAssign() {
        if (Auth::id()) {
            $hardwareUser = Auth()->user()->email === "hardwareadmin@gmail.com";
            // $softwareUser = Auth()->user()->email === "softwareadmin@gmail.com";
            $networkUser = Auth()->user()->email === "networkadmin@gmail.com";

            if ($hardwareUser) {
                $incident = Incident::where('issue_type', 'Hardware') -> where('statusCheck', 'Submitted') -> get();
                return view('pages.assign-incident', compact('incident'));
            }
            else if ($networkUser) {
                $incident = Incident::where('issue_type', 'Network') -> where('statusCheck', 'Submitted') -> get();
                return view('pages.assign-incident', compact('incident'));
            }
        }
    }

    // Stores Assign To Using Update Procedure
    public function assign($id, Request $request) {
        $incident = Incident::find($id);
        
        $incident -> issue = $request -> input('issue');
        $incident -> issue_type = $request -> input('issue_type');
        $incident -> reported_by = $request -> input('reported_by');
        $incident -> urgency = $request -> input('urgency');
        $incident -> from = $request -> input('from');
        $incident -> description = $request -> input('description');
        $incident -> technician_id = $request -> input('assign_to');
        
        Technicians::where('id', $incident -> technician_id = $request -> input('assign_to'))
        ->update(['status' => 'Unavailable']);

        $incident -> statusCheck = 'Pending';
        $incident -> update();
        return redirect('/dashboard');
    }

    // Display Assign To
    public function assignTo($id) {
        if (Auth::id()) {

            $hardwareUser = Auth()->user()->email === "hardwareadmin@gmail.com";
            $networkUser = Auth()->user()->email === "networkadmin@gmail.com";

            if ($hardwareUser) {
                $incident = Incident::find($id);
                $technician = Technicians::where('cell', 'Tech Cell') -> where('status', 'Available') -> get();
                return view('pages.assign-to',compact('incident', 'technician'));
            } elseif ($networkUser) {
                $incident = Incident::find($id);
                $technician = Technicians::where('cell', 'Network Cell') -> where('status', 'Available') -> get();
                return view('pages.assign-to',compact('incident', 'technician'));
            }
        }
    }

    // Display Users
    public function viewusers() {
        $user = User::all();
        return view('pages.user', compact('user'));
    }

    // Dislpay Report and Search Function
    public function report(Request $request) {
        if (Auth::id()) {
    
            $hardwareUser = Auth()->user()->email === "hardwareadmin@gmail.com";
            $networkUser = Auth()->user()->email === "networkadmin@gmail.com";

            if ($hardwareUser) {
                $technician = Technicians::where('cell', 'Tech Cell') -> get();

                $search = $request -> input('issueType');
                $tech = $request -> input('technician');
                $reportedBy = $request -> input('reported_by');

                    $issueType = Incident::query()
                        -> where('issue_type', 'LIKE', "%{$search}%")
                        -> where('issue_type', 'Hardware')
                        -> where('technician_id', 'LIKE', "%{$tech}%")
                        -> where('reported_by', 'LIKE', "%{$reportedBy}%")
                        -> get();
                    return view('pages.report', compact('issueType', 'technician'));

            } elseif ($networkUser) {

                $technician = Technicians::where('cell', 'Network Cell') -> get();

                $search = $request -> input('issueType');
                $tech = $request -> input('technician');
                $reportedBy = $request -> input('reported_by');
    
                $issueType = Incident::query()
                        -> where('issue_type', 'LIKE', "%{$search}%")
                        -> where('reported_by', 'LIKE', "%{$reportedBy}%")
                        -> where('issue_type', 'Network')
                        -> where('technician_id', 'LIKE', "%{$tech}%")
                        -> get();
                return view('pages.report', compact('issueType', 'technician'));
            }
        }
    }

    // Delete Incidents
    public function delete($id) {
        $incident = Incident::findOrFail($id);

        $incident -> delete();
        return redirect('/dashboard');
    }
 
    // Delete Users
    public function deleteUser($id) {
        $user = Incident::findOrFail($id);

        $user -> delete();
        return redirect('/users');
    }

    // Display Pending Incidents
    public function pending() {
        if (Auth::id()) {

            $hardwareUser = Auth()->user()->email === "hardwareadmin@gmail.com";
            $networkUser = Auth()->user()->email === "networkadmin@gmail.com";

            if ($networkUser) {
                $pending = Incident::where('issue_type', 'Network') -> where('statusCheck', 'pending') -> get();
                $techName = Technicians::where('cell', 'Network Cell') -> get();
                return view('pages.pending-incident', compact('pending', 'techName'));
            }
            else if ($hardwareUser) {
                $pending = Incident::where('issue_type', 'Hardware') -> where('statusCheck', 'pending') -> get();
                $techName = Technicians::where('cell', 'Tech Cell') -> get();
                return view('pages.pending-incident', compact('pending', 'techName'));
            }
        }
    }

    // Resolved Incidents
    public function resolved() {
        if (Auth::id()) {
            $hardwareUser = Auth()->user()->email === "hardwareadmin@gmail.com";
            // $softwareUser = Auth()->user()->email === "softwareadmin@gmail.com";
            $networkUser = Auth()->user()->email === "networkadmin@gmail.com";

            if ($hardwareUser) {
                $techName = Technicians::where('cell', 'Tech Cell') -> get();
                $resolved = Incident::where('issue_type', 'Hardware') -> where('statusCheck', 'resolved') -> get();
                return view('pages.resolved-incident', compact('resolved', 'techName'));
            }

            else if ($networkUser) {
                $techName = Technicians::where('cell', 'Network Cell') -> get();
                $resolved = Incident::where('issue_type', 'Network') -> where('statusCheck', 'resolved') -> get();
                return view('pages.resolved-incident', compact('resolved', 'techName'));
            }
        }
    }

    // pending To Done Function
    public function pendingToDone($id) {
        if (Auth::id()) {
            $hardwareUser = Auth()->user()->email === "hardwareadmin@gmail.com";
            $networkUser = Auth()->user()->email === "networkadmin@gmail.com";
            if ($hardwareUser) {}
        $pending = Incident::findOrFail($id);

        $pending -> statusCheck = "Resolved";

        Technicians::where('id', $pending -> technician_id)
        ->update(['status' => 'Available']);

        $pending -> update();
        return redirect('/pending-incident');
        }
    }

    // User Pending Function
    public function userPending() {
        $incident = Incident::where('reported_by', auth()->user()-> name) -> where('statusCheck','pending') -> get();
        return view('pages.user-pending', compact('incident'));
    }

    // User Resolved Function
    public function userResolved() {
        $incident = Incident::where('reported_by', auth()->user()-> name) -> where('statusCheck','resolved') -> get();
        return view('pages.user-resolved', compact('incident'));
    }

    // View Department Function
    public function department() {
        $department = Department::all();
        return view('pages.department', compact('department'));
    }

    // View Add Department Function
    public function addDepartment() {
        return view('pages.add-department');
    }

    // Store Department Function
    public function addDepartments(Request $request) {
        $department = new Department();

        $department -> department = $request -> input("department");
        $department -> cell = $request -> input("cell");

        $department -> save();
        return redirect('/department');
    }

    // View More Function
    public function viewMore($id) {
        if (Auth::id()) {
            $hardwareUser = Auth()->user()->email === "hardwareadmin@gmail.com";
            $networkUser = Auth()->user()->email === "networkadmin@gmail.com";
            if ($hardwareUser) {
                $incident = Incident::find($id);
                $name = Technicians::where('cell', 'Tech Cell') -> get();
                return view('pages.view-more', compact('incident', 'name'));
            }
            elseif($networkUser) {
                $incident = Incident::find($id);
                $name = Technicians::where('cell', 'Network Cell') -> get();
                return view('pages.view-more', compact('incident', 'name'));
            } 
            else {
                $incident = Incident::find($id);
                $name = Technicians::all();
                return view('pages.view-more', compact('incident', 'name'));
            }
        }
    }

    // Search By Ticket Function
    public function searchDisplay(Request $request) {
        if (Auth::id()) {
            $hardwareUser = Auth()->user()->email === "hardwareadmin@gmail.com";
            $networkUser = Auth()->user()->email === "networkadmin@gmail.com";

            if($hardwareUser) {
                $ticket = $request -> input('ticketNo');
        $techName = Technicians::all();

        $displaySearch = Incident::query()
            -> where('ticket_no', 'LIKE', "%{$ticket}%")
            -> where('issue_type','Hardware')
            -> get();
        return view('pages.display-search', compact('displaySearch', 'techName'));
            } 
            elseif ($networkUser) {
                $ticket = $request -> input('ticketNo');
                $techName = Technicians::all();

        $displaySearch = Incident::query()
            -> where('ticket_no', 'LIKE', "%{$ticket}%")
            -> where('issue_type','Network')
            -> get();
        return view('pages.display-search', compact('displaySearch', 'techName'));
        }
        else {
            $ticket = $request -> input('ticketNo');
            $techName = Technicians::all();

        $displaySearch = Incident::query()
            -> where('ticket_no', 'LIKE', "%{$ticket}%")
            // -> where('issue_type','Network')
            -> get();
        return view('pages.display-search', compact('displaySearch', 'techName'));
            }
        }
    }

    public function requestItem() {
        return view('pages.request-item');
    }
}
