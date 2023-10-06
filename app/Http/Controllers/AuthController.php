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

        validator(request() -> all(), [
            'name' => ['required'],
            'email' => ['required', 'unique'],
            'password' => ['required']
        ]) -> validate();
        // $data = request() -> validate([
            
        // ]);

        User::create($data);
        return redirect('/dashboard');
    }

    public function showLogin() {
        return view('auth.login');
    }

    public function login() {
        validator(request() ->all(), [
            'email' => ['email', 'required'],
            'password' => ['required']
        ]) -> validate();

        if (auth() -> attempt(request() -> only(['email', 'password']))) {
            return redirect('/dashboard');
        }

        return redirect() -> back();
    }

    public function logout() {
        auth() -> logout();

        return redirect('/login');
    }
}