<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;
use App\Models\User;

class IncidentController extends Controller
{

    // 
    // Display Incident Form
    public function create() {
        return view('pages.create-incident');
    }

    // Store Incident
    public function store(Request $request) {

        $data = new Incident();

        $data -> issue = $request -> input('issue');
        $data -> issue_type = $request -> input('issue_type');
        $data -> reporter = $request -> input('reporter');
        $data -> urgency = $request -> input('urgency');
        $data -> from = $request -> input('from');
        $data -> description = $request -> input('description');
        $data -> statusCheck = "Submitted";
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
        $incident -> assigne_to = $request -> input('assigne_to');
        $incident -> statusCheck = "Pending";
        $incident -> update();
        return redirect('/dashboard');
    }

    // Display Assign To
    public function assignTo($id) {
        $incident = Incident::find($id);
        return view('pages.assign-to',compact('incident'));
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
}
