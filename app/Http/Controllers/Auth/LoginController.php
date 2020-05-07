<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Traits\JsonResponse;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        $validation = Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required|min:6',
        ]);

        if($validation->passes()){
            //attempt to log the user in
            $credentials = [
                'email'=>$request->email,
                'password'=>$request->password,
                'status'=>config('app.active'),
            ];

            if (Auth::guard('web')->attempt($credentials, $request->remember)) {
                if (Auth::user()->role == User::ROLE['Admin']) {
                    return JsonResponse::allResponse(
                        'success',
                        Response::HTTP_OK,
                        __('customer.Admin successfully logged in.'),
                        route('admin.dashboard')
                    );

                }else {
                    return JsonResponse::allResponse(
                        'success',
                        Response::HTTP_OK,
                        __('customer.User successfully logged in.'),
                        route('member.dashboard')
                    );
                }

            }else {
                return JsonResponse::allResponse('error', Response::HTTP_BAD_REQUEST, __('auth.failed'));
            }

        }{
            $errors = array_values($validation->errors()->getMessages());
            return JsonResponse::validationResponse($errors);
        }
    }
}
