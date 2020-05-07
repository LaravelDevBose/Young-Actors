<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::where('category_status', 1)->latest()->get();
        return view('admin.categories.index', [
            'categories'=>$categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create_update');
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
            'category_name'=> 'required',
            'attachment'=> 'required',
            'category_des'=> 'required',
        ]);

        if ($validator->passes()) {
            try {
                DB::beginTransaction();

                $category = Category::create([
                    'category_name'=> $request->category_name,
                    'category_image'=> $request->attachment,
                    'category_des'=> $request->category_des,
                    'category_status'=> ($request->category_status)?? 2,
                ]);

                if ($category) {
                    DB::commit();
                    return JsonResponse::allResponse('success', Response::HTTP_OK,
                        __('admin.Category Create Successfully'), route('admin.category.index'));
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.create_update', [
            'category'=>$category
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
            'category_name'=> 'required',
            'category_des'=> 'required',
        ]);

        if ($validator->passes()) {
            try {
                DB::beginTransaction();
                $category = Category::find($id);
                $category = $category->update([
                    'category_name'=> $request->category_name,
                    'category_image'=> $request->attachment??$category->category_image,
                    'category_des'=> $request->category_des,
                    'category_status'=> ($request->category_status)?? 2,
                ]);

                if ($category) {
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
