<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;
use App\Models\User;

class IncidentController extends Controller
{
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

        $data -> save();
        return redirect('/create-incident');
        // $data = request() -> validate([
        //     'issue' => ['required'],
        //     'issue_type' => ['required'],
        //     'reporter' => ['required'],
        //     'urgency' => ['required'],
        //     'from' => ['required'],
        //     'description' => ['required'],

        // ]);

        // Incident::create($data);
        // return redirect('/create-incident');
    }


    public function viewAssign() {
        $incident = Incident::all();
        return view('pages.assign-incident', compact('incident'));
    }

    public function assigneTo() {
        return view('pages.assign-to');
    }

    public function viewusers() {
        $user = User::all();
        return view('pages.user', compact('user'));
    }

    public function report() {
        return view('pages.report');
    }
}
