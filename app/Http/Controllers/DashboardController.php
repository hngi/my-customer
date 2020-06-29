<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware(['auth','verified']);
    }

    public function home(){
        return view('backend.dashboard');
    }
}
