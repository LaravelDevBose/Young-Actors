<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Traits\JsonResponse;
use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $notifications = Notification::where('status', '!=' , config('app.delete'))->latest()->get();
        return view('admin.notification.index', [
            'notifications'=>$notifications
        ]);

    }

    public function email_notify_create_page()
    {
        $members = User::where('role', User::ROLE['Member'])->where('status', '!=', config('app.delete'))->latest()->get();
        return view('admin.notification.email_page', [
            'members'=>$members
        ]);
    }

    public function notify_store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title'=> 'required',
            'body_text'=> 'required',
            'userIds'=> 'required|array',
        ]);

        if ($validator->passes()) {
            try {
                DB::beginTransaction();

                $notifyArray = [];
                foreach ($request->userIds as $key=> $id){
                    $user = User::find($id);
                    if(!empty($user)){
                        array_push($notifyArray, [
                            'user_id'=>$id,
                            'title'=>$request->title,
                            'body_text'=>$request->body_text,
                            'channel'=>$request->channel,
                            'send_address'=>($request->channel == Notification::Channels['Email'])? $user->email: $user->phone_no,
                            'status'=> Notification::StatusList['Waiting'],
                        ]);
                    }

                }
                $notify = Notification::insert($notifyArray);

                if (!empty($notify)) {
                    DB::commit();
                    return JsonResponse::allResponse('success', Response::HTTP_OK, 'Notification Added Successfully' ,route('admin.notify.index'));
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
