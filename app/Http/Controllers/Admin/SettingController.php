<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Traits\JsonResponse;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class SettingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function setting_page(){
        $classUrl = Setting::where('key_name', Setting::KeyList['class_url'])->value('setting_value');
        return view('admin.setting.setting_page',[
            'classUrl'=>$classUrl,
        ]);
    }

    public function update_class_url(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'class_url'=> 'required',
        ]);

        if ($validator->passes()) {
            try {
                DB::beginTransaction();

                $classUrl = Setting::updateOrCreate(
                    ['key_name'=> Setting::KeyList['class_url']],
                    ['setting_value'=> $request->class_url]
                );

                if (!empty($classUrl)) {
                    DB::commit();
                    return JsonResponse::allResponse('success', Response::HTTP_OK, 'Class Url Publish Successfully' ,route('admin.setting.page'));
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
