<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ScheduleInfo;
use App\Traits\JsonResponse;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class ScheduleInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.schedule.schedule');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function list()
    {
        $schedules = ScheduleInfo::where('schedule_status', '!=', config('app.delete'))->get();
        foreach ($schedules as $schedule) {
            $response[] = [
                'id' => encrypt($schedule->schedule_id),
                'title'=>$schedule->schedule_title,
                'start' => $schedule->schedule_date,
                'end' => $schedule->schedule_date,
//                'url' => route('admin.schedule.edit',$schedule->schedule_id),
                'className' =>  'bg-info'
            ];
        }

        return JsonResponse::collectionResponse('success', 200, $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'schedule_title'=> 'required',
            'schedule_date'=> 'required',
        ]);

        if ($validator->passes()) {
            try {
                DB::beginTransaction();

                $schedule = ScheduleInfo::create([
                    'schedule_title'=> $request->schedule_title,
                    'schedule_details'=> $request->schedule_details,
                    'schedule_date'=> $request->schedule_date,
                    'schedule_status'=> 1,
                ]);

                if (!empty($schedule)) {
                    DB::commit();
                    return JsonResponse::allResponse('success', Response::HTTP_OK, 'Schedule Added Successfully' ,route('admin.schedule.index'));
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $schedule = ScheduleInfo::where('schedule_id', $id)->firstOrFail();
        return view('admin.schedule.schedule', [
            'schedule'=>$schedule,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'schedule_title'=> 'required',
            'schedule_date'=> 'required',
        ]);

        if ($validator->passes()) {
            try {
                DB::beginTransaction();
                $schedule = ScheduleInfo::where('schedule_id', $id)->first();
                if(empty($schedule)){
                    throw new Exception('Invalid Schedule Information', 404);
                }
                $schedule = ScheduleInfo::where('schedule_id', $id)->update([
                    'schedule_title'=> $request->schedule_title,
                    'schedule_details'=> $request->schedule_details,
                    'schedule_date'=> $request->schedule_date,
                ]);

                if (!empty($schedule)) {
                    DB::commit();
                    return JsonResponse::allResponse('success', Response::HTTP_OK, 'Schedule Updated Successfully' ,route('admin.schedule.index'));
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $schedule = ScheduleInfo::where('schedule_id', $id)->first();
            if(empty($schedule)){
                throw new Exception('Invalid Schedule Information', 404);
            }
            $schedule = $schedule->update([
                'schedule_status'=> config('app.delete'),
            ]);

            if (!empty($schedule)) {
                DB::commit();
                return JsonResponse::allResponse('success', Response::HTTP_OK, 'Schedule Deleted Successfully' ,route('admin.schedule.index'));
            } else {
                throw new Exception('Invalid information', Response::HTTP_BAD_REQUEST);
            }

        }catch (\Exception $ex){
            DB::rollback();
            return JsonResponse::allResponse('error', $ex->getCode(), $ex->getMessage());
        }
    }
}
