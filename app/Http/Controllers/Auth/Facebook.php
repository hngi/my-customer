<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use Exception;
use App\User;use Socialite;
use Illuminate\Http\Request;

class Facebook extends Controller
{
    public function toFacebook() {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback() {
         try {
            $user = Socialite::driver('facebook')->user();
            $finduser = User::where('facebook_id', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser);
                return redirect('/');
            } else {
                $newUser = User::create(['first_name' => $user->user['first_name'], 'last_name' => $user->user['last_name'], 'email' => $user->email, 'facebook_id' => $user->id]);
                Auth::login($newUser);
                return redirect()->back();
            }
        }
        catch(Exception $e) {
            return redirect('auth/facebook');
        }
    }
}
