<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\TrainingVideo;
use App\Traits\JsonResponse;
use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function profile_page()
    {
        $member = User::where('user_id', \auth()->id())->with('avatar')->first();
        return view('member.profile', [
            'member'=>$member,
        ]);
    }

    public function live_class_room_page()
    {
        $classUrl = Setting::where('key_name', Setting::KeyList['class_url'])->value('setting_value');
        return view('member.class_room', [
            'classUrl'=>$classUrl
        ]);
    }

    public function training_room_page()
    {
        $trainingVideos = TrainingVideo::where('video_status', '!=', config('app.delete'))->latest()->paginate(15);
        return view('member.training_room', [
            'trainingVideos'=>$trainingVideos
        ]);
    }

    public function details_update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=> 'required|string|max:255',
            'phone_no'=>'required|string',
        ]);

        if ($validator->passes()) {
            try {
                DB::beginTransaction();

                $user = User::where('user_id', \auth()->id())
                    ->update([
                        'name'=>$request->name,
                        'phone_no'=>$request->phone_no,
                        'avatar_id'=> (!empty($request->attachment))? $request->attachment : Auth::user()->avatar_id,
                    ]);

                if (!empty($user)) {
                    DB::commit();
                    return JsonResponse::allResponse('success', Response::HTTP_OK, 'Details Updated Successfully' ,route('member.profile.page'));
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

    public function password_update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'password'=>'required|string|min:6|confirmed',
        ]);

        if ($validator->passes()) {
            try {
                DB::beginTransaction();

                $user = User::where('user_id', \auth()->id())
                    ->update([
                        'password'=>Hash::make($request->password),
                    ]);

                if (!empty($user)) {
                    DB::commit();
                    return JsonResponse::allResponse('success', Response::HTTP_OK, 'Password Updated Successfully' ,route('member.profile.page'));
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
