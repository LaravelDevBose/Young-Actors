<?php

namespace App\Http\Controllers;

use App\Models\TrainingVideo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::user()->role == User::ROLE['Admin']) {
            return redirect()->route('admin.dashboard');
        }else {
            return redirect()->route('member.dashboard');
        }

    }

    public function admin_dashboard(){

        return view('admin.dashboard');
    }

    public function member_dashboard(){
        $trainingVideo = TrainingVideo::where('video_status', '!=', config('app.delete'))->first();
        return view('member.dashboard', [
            'trainingVideo'=>$trainingVideo
        ]);
    }
}
