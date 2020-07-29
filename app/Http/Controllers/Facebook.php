<?php

namespace App\Http\Controllers;

use Socialite;
use Illuminate\Http\Request;

class Facebook extends Controller
{
    public function toFacebook() {
        return Socialite::driver('facebook')->redirect();
    }
}
