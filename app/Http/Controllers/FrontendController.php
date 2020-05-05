<?php

namespace App\Http\Controllers;

use App\Traits\JsonResponse;
use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class FrontendController extends Controller
{
    public function index(){

    }

    public function contact_us()
    {

    }

    public function payment()
    {
        return view('frontend.payment');
    }

    public function order(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=> 'required|string|max:255',
            'email'=> 'required|string|email|max:255|unique:users',
            'user_name'=> 'required|string|max:255|user_name|unique:users',
            'phoneNo'=>'required|string',
            'password'=>'required|string|min:6|confirmed',
            'country'=>'required|string',
            'state'=>'required|string',
            'address'=>'required|string',
            'city'=>'required|string',
            'postal_code'=>'required|string',
            'payment_token'=>'required|string',
            'amount'=>'required',

        ]);

        if ($validator->passes()) {
            try {
                DB::beginTransaction();

                $user = User::create([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'user_name'=>$request->user_name,
                    'phoneNo'=>$request->phoneNo,
                    'password'=>Hash::make($request->password),
                    'role'=> User::ROLE['Member'],
                    'status'=>config('app.active'),
                ]);

                if (!empty($user)) {
                    DB::commit();
                    return JsonResponse::allResponse('success', Response::HTTP_OK,
                        __('admin.Category Updated Succesfully'), route('admin.category.index'));
                } else {
                    throw new Exception('Invalid information', Response::HTTP_BAD_REQUEST);
                }

            }catch (\Exception $ex){
                DB::rollback();
                return JsonResponse::allResponse('error', $ex->getCode(), $ex->getMessage());
            }
        }else {
            $errors = array_values($validator->errors()->getMessages());
            return JsonResponse::validationResponse($errors);
        }
    }
}
