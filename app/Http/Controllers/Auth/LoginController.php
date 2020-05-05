<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        if ($request->expectsJson()) {
            return response()->json([
                'status' => 'error',
                'message' => __('These credentials do not match our records.'),
            ]);
        } else {
            return $this->sendFailedLoginResponse($request);
        }
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        if ($request->ajax() || $request->wantsJson()) {
            if (Auth::user()->role == User::ROLE['Admin']) {
                return response()->json([
                    'status' => 'success',
                    'message' => __('customer.Admin successfully logged in.'),
                    'url' => route("admin.dashboard")
                ]);
            } else if(Auth::user()->role == User::ROLE['Member']){
                return response()->json([
                    'status' => 'success',
                    'message' =>__('customer.User successfully logged in.'),
                    'url' => route( 'member.dashboard')
                ]);
            }else {
                return response()->json([
                    'status' => 'success',
                    'message' =>__('customer.User successfully logged in.'),
                    'url' => route( 'home')
                ]);
            }

        }

        return $this->authenticated($request, $this->guard()->user())
            ?: redirect()->intended($this->redirectPath());
    }
}
