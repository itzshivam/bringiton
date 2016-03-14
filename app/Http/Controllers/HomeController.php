<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Auth;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user=Auth::user();
         $info=DB::table('password_resets')->where('email','shivamyadav1995d@gmail.com')->first();
        return view('home',compact('user','info'));
    }
}
