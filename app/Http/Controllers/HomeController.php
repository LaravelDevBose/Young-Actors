<?php

namespace App\Http\Controllers;

use App\User;
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
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {

    }

    public function admin_dashboard(){

        return view('admin.dashboard');
    }

    public function member_dashboard(){
        return view('member.dashboard');
    }

    public function customer_dashboard(){
        return view('customer.dashboard');
    }
}
