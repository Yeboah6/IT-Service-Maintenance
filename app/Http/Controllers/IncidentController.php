<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;

class IncidentController extends Controller
{
    // Display Create Incident
    public function create() {
        return view('pages.create-incident');
    }

    public function store(Request $request) {
        $data = new Incident;

        $data -> issue = $request -> input('issue');
        $data -> issue_type = $request -> input('issue_type');
        $data -> description = $request -> input('description');
        $data -> reporter = $request -> input('reporter');
        $data -> urgency = $request -> input('urgency');
        $data -> from = $request -> input('from');

        $data -> save();
        return redirect('/dashboard');
    }

    // Display View Incident
    public function view() {
        $data = Incident::all();
        return view('pages.view-incident', ['data' => $data]);
    }

    // Display User Account
    public function showUsers() {
        return view('pages.users');
    }
}
