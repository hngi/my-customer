<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user_id)
    {
        // logic here by @eni4sure
        try {

            // more on validation at http://laravel.com/docs/validation
            $rules = array(
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'phone_number' => 'required',
                'is_active' => 'required|boolean',
                'user_role' => 'required',
            );
            $validator = Validator::make(Input::all(), $rules);

            // process the update
            if ($validator->fails()) {

                return redirect()->back()->withErrors($validator)->withInput(Input::except('password'));
            } else {

                // update the db
                $user = User::find($user_id);
                $user->first_name = Input::get('first_name');
                $user->last_name = Input::get('last_name');
                $user->email = Input::get('email');
                $user->email_verified_at = Input::get('email_verified_at');
                $user->password = Input::get('password');
                $user->phone_number = Input::get('phone_number');
                $user->is_active = Input::get('is_active');
                $user->user_role = Input::get('user_role');
                $user->save();

                // redirect
                Session::flash('message', 'Profile Updated Successfully');
                Session::flash('message_type', 'alert-success');
                return redirect()->back();
            }
        } catch (\Exception $e) {

            return redirect('/');
        }
        // logic by @eni4sure ends here
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
