<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;
use Illuminate\Support\Str;
use DB; 
use Carbon\Carbon; 
use App\Models\User; 
use Mail; 
use Hash;


class ForgotPasswordController extends Controller
{
    public function index(){
        $settings = Settings::first();
        return view('users.auth.forgetPassword', compact('settings'));
    }

    public function submitForgetPasswordForm(Request $request)
      {
          $request->validate([
              'email' => 'required|email|exists:users',
          ]);
  
          $token =Str::random(64);
  
          DB::table('password_resets')->insert([
              'email' => $request->email, 
              'token' => $token, 
              'created_at' => Carbon::now()
            ]);
  
          Mail::send('emails.forgetPassword', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('Reset Password');
          });
  
          return back()->with('success', 'We have e-mailed your password reset link!');
      }

    public function showResetPasswordForm($token) {
        $settings = Settings::first(); 
        return view('users.auth.forgetPasswordLink', compact('settings', 'token'));
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        // dd($request->all());

        $updatePassword = DB::table('password_resets')
                            ->where([
                              'email' => $request->email, 
                              'token' => $request->token
                            ])
                            ->first();

        // dd($updatePassword);

        if(!$updatePassword){
            return back()->with('error', 'Invalid token!');
        }

        $user = User::where('email', $request->email)
                    ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email'=> $request->email])->delete();
        return redirect()->route('user.login')->with('loginSuccess', 'Your password has been changed!');
    }

}
