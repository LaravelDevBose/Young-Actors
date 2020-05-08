<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TrainingVideo;
use App\Traits\JsonResponse;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class TrainingVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $videos = TrainingVideo::where('video_status', '!=', config('app.delete'))->get();
        return view('admin.training_video.index', [
            'videos'=>$videos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'video_title'=> 'required',
            'video_url'=> 'required',
        ]);

        if ($validator->passes()) {
            try {
                DB::beginTransaction();

                $schedule = TrainingVideo::create([
                    'video_title'=> $request->video_title,
                    'video_url'=> $request->video_url,
                    'video_status'=> ($request->video_status)?? 2,
                ]);

                if (!empty($schedule)) {
                    DB::commit();
                    return JsonResponse::allResponse('success', Response::HTTP_OK, 'Training Video Added Successfully' ,route('admin.training_video.index'));
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
        $video = TrainingVideo::where('video_id', $id)->firstOrFail();
        $videos = TrainingVideo::where('video_status', '!=', config('app.delete'))->get();
        return view('admin.training_video.index', [
            'video'=>$video,
            'videos'=>$videos,
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
            'video_title'=> 'required',
            'video_url'=> 'required',
        ]);

        if ($validator->passes()) {
            try {
                DB::beginTransaction();
                $video = TrainingVideo::where('video_id', $id)->first();
                if(empty($video)){
                    throw new Exception('Invalid Training Video Information', 404);
                }
                $video = $video->update([
                    'video_title'=> $request->video_title,
                    'video_url'=> $request->video_url,
                    'video_status'=> ($request->video_status)?? 2,
                ]);

                if (!empty($video)) {
                    DB::commit();
                    return JsonResponse::allResponse('success', Response::HTTP_OK, 'Training Video Updated Successfully' ,route('admin.training_video.index'));
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
            $video = TrainingVideo::where('video_id', $id)->first();
            if(empty($video)){
                throw new Exception('Invalid Schedule Information', 404);
            }
            $video = $video->update([
                'video_status'=> config('app.delete'),
            ]);

            if (!empty($video)) {
                DB::commit();
                return JsonResponse::allResponse('success', Response::HTTP_OK, 'Training Video Deleted Successfully' ,route('admin.training_video.index'));
            } else {
                throw new Exception('Invalid information', Response::HTTP_BAD_REQUEST);
            }

        }catch (\Exception $ex){
            DB::rollback();
            return JsonResponse::allResponse('error', $ex->getCode(), $ex->getMessage());
        }
    }
}
