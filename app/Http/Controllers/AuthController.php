<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function show() {
        return view('auth.register');
    }

    public function store(Request $request) {
        $data = request() -> validate([
            'name' => ['string', 'required'],
            'email' => ['required', 'unique'],
            'password' => ['required']
        ]);

        User::create($data);
        return redirect('/dashboard');
    }

    public function showLogin() {
        return view('auth.login');
    }

    public function login(Request $request) {
        validator(request() -> all(), [
            'email' => ['required', 'email'],
            'password' => ['required']
        ]) -> validate();

        if (auth() -> attempt(request() -> only(['email', 'password']))) {
            return redirect('/dashboard');
        } else {

            return redirect() -> back();
        }
    }
}