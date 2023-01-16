<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/dashboard')
                ->with('success', 'You have Successfully loggedin');
        }

        return redirect()->route("backend.login")->with('login_error', 'Oppes! You have entered invalid credentials');
    }

    public function dashboard()
    {

        return view('admin.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('backend.login');
    }
}
