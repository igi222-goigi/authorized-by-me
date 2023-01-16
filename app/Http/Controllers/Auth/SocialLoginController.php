<?php
  
namespace App\Http\Controllers\Auth;
  
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
  
class SocialLoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
      
            $user = Socialite::driver('google')->user();

            // dd($user);
       
            $finduser = User::where('social_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
                Session::put('user_2fa',auth()->user()->id);
                return redirect()->route('frontend.home');
       
            }else{
                $newUser = User::create([
                    'firstname' => $user->name,
                    'email' => $user->email,
                    'social_id'=> $user->id,
                    'social_type' => 'google',
                    'type' => 2,
                    'password' => Hash::make(rand(100000, 999999))
                ]);
      
                Auth::login($newUser);
                Session::put('user_2fa',auth()->user()->id);
                return redirect()->route('frontend.home');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        try {
      
            $user = Socialite::driver('facebook')->user();

            // dd($user);
       
            $finduser = User::where('social_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
                Session::put('user_2fa',auth()->user()->id);
                return redirect()->route('frontend.home');
       
            }else{
                $newUser = User::create([
                    'firstname' => $user->name,
                    'email' => $user->email,
                    'social_id'=> $user->id,
                    'social_type' => 'facebook',
                    'type' => 2,
                    'password' => Hash::make(rand(100000, 999999))
                ]);
      
                Auth::login($newUser);
                Session::put('user_2fa',auth()->user()->id);
                return redirect()->route('frontend.home');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }


}