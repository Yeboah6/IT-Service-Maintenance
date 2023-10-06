<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbardController extends Controller
{
    // Display Dashboard
    public function __invoke() {
        return view('dashboard', [
            'user' => auth() -> user()
        ]);
    }
}
