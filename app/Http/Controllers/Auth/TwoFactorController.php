<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;
use Session;
use App\Models\User;
use App\Models\UserCode;

class TwoFactorController extends Controller
{
    public function index()
    {
        // dd(Session::has('user_2fa'));
        $settings = Settings::first();
        return view('users.auth.2fa', compact('settings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code'=>'required',
        ]);
        $find = UserCode::where('user_id',auth()->user()->id)
                        ->where('code',$request->code)
                        ->where('updated_at','>=',now()->subMinutes(2))
                        ->first();
        if (!is_null($find)) {
            Session::put('user_2fa',auth()->user()->id);
            return redirect()->route('frontend.home');
        }
        return back()->with('error', 'You entered wrong code.');
    }

    public function resend()
    {
        auth()->user()->generateCode();
        return back()->with('success', 'We sent you code on your email.');
    }
}
