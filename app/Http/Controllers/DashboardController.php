<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;

class DashboardController extends Controller
{
    public function adminView() {
        $data = Incident::all();
        return view('layouts.view', ['data' => $data]);
    }
}
