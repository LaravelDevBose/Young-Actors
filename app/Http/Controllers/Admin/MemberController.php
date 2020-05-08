<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $members = User::where('role', User::ROLE['Member'])->where('status', '!=', config('app.delete'))->latest()->get();
        return view('admin.member.index', [
            'members'=>$members,
        ]);
    }
}
