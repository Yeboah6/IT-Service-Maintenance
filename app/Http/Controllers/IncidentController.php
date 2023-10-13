<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;

class IncidentController extends Controller
{
    public function create() {
        return view('pages.create-incident');
    }

    public function store() {
        $data = request() -> validate([
            'issue' => ['required'],
            'issue_type' => ['required'],
            'reporter' => ['required'],
            'urgency' => ['required'],
            'from' => ['required'],
            'description' => ['required'],

        ]);

        Incident::create($data);
        return redirect('/create-incident');
    } 

    public function viewIncident() {
        return view('pages.view-incident');
    }

    public function viewusers() {
        return view('pages.user');
    }

    public function report() {
        return view('pages.report');
    }
}
