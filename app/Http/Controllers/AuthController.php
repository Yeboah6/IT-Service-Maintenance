<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function show() {
        return view('auth.register');
    }

    public function store(Request $request) {
        $data = request() -> validate([
            'name' => ['string'],
            'email' => ['required'],
            'password' => ['required']
        ]);

        User::create($data);
        return redirect('/dashboard');
    }

    public function showLogin() {
        return view('auth.login');
    }
}