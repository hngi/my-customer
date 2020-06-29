<?php

namespace App\Http\Controllers;

use App\OTP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VerifyController extends Controller
{
    /**
     * Display a verify page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.activate.activate');
    }

    /**
     * Verifies an OTP CODE.
     *
     * @return \Illuminate\Http\Response
     */
    public function verify(Request $request)
    {
        /* $validation = Validator::make(request()->all(), [
             'token' => 'required|numeric|digits:6',
         ])->validate();*/

        $user_id = Auth::id();
        // $user_id = 1;
        $token = $request->input('token');
        $otp = OTP::where('user_ref_code', '=', $user_id)->where('otp_code', '=', $token)->get();
        if (sizeof($otp) > 0) {
            $otp[0]->activated_at = now();
            $otp[0]->save();

            $user = User::find(Auth::id());
            $user->is_active = 1;
            $user->save();
            return redirect('/');
        } else {
            return back()->withError('OTP Token not found');
        }

    }


}
