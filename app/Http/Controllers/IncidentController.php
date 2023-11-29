<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Incident;
use App\Models\Technicians;
use App\Models\User;

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
        // generate a pin based on 2 * 7 digits + a random character
        $pin = mt_rand(10000, 99999)
        . mt_rand(10000, 99999)
        . $characters[rand(0, strlen($characters) - 1)];

        // shuffle the result
        $string = str_shuffle($pin);

        $data = new Incident();

        $data -> issue = $request -> input('issue');
        $data -> issue_type = $request -> input('issue_type');
        $data -> reporter = $request -> input('reporter');
        $data -> urgency = $request -> input('urgency');
        $data -> from = $request -> input('from');
        $data -> description = $request -> input('description');
        $data -> statusCheck = "Submitted";
        $data -> ticket_no = $string;
        $data -> save();
        return redirect('/dashboard');
    }

    // Display Assign To Page
    public function viewAssign() {
        $incident = Incident::all();
        return view('pages.assign-incident', compact('incident'));
    }

    // Stores Assign To Using Update Procedure
    public function assign($id, Request $request) {
        $incident = Incident::find($id);

        $incident -> issue = $request -> input('issue');
        $incident -> issue_type = $request -> input('issue_type');
        $incident -> reporter = $request -> input('reporter');
        $incident -> urgency = $request -> input('urgency');
        $incident -> from = $request -> input('from');
        $incident -> description = $request -> input('description');
        $incident -> assign_to = $request -> input('assign_to');
        $incident -> statusCheck = "Pending";
        $incident -> update();
        return redirect('/dashboard');
    }

    // Display Assign To
    public function assignTo($id) {
        $incident = Incident::find($id);
        $technician = Technicians::all();
        return view('pages.assign-to',compact('incident', 'technician'));
    }

    // Display Users
    public function viewusers() {
        $user = User::all();
        return view('pages.user', compact('user'));
    }

    // Dislpay Report
    public function report() {
        return view('pages.report');
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

    // Pending Incidents
    public function pending() {
        $pending = Incident::where('statusCheck', 'pending') -> get();
        return view('pages.pending-incident', compact('pending'));
    }

    // Resolved Incidents
    public function resolved() {
        $resolved = Incident::where('statusCheck', 'resolved') -> get();
        return view('pages.resolved-incident', compact('resolved'));
    }

    // pending To Done Function
    public function pendingToDone($id) {
        $pending = Incident::findOrFail($id);

        $pending -> statusCheck = "Resolved";
        $pending -> update();
        return redirect('/pending-incident');
    }

    // User Pending Function
    public function userPending() {
        $userPending = Incident::where('statusCheck','pending') -> get();
        return view('pages.user-pending');
    }

    // User Resolved Function
    public function userResolved() {
        return view('pages.user-resolved');
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
}
