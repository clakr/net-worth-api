<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use App\Http\Resources\SubCategoryResource;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subCategories = SubCategory::all()->load('category');
        $data = SubCategoryResource::collection($subCategories);

        return response([
            'data' => $data
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubCategoryRequest $request)
    {
        try {
            DB::beginTransaction();

            $subCategory = SubCategory::create([
                'name' => $request->input('name'),
                'category_id' => $request->input('categoryId'),
            ]);
            $data = new SubCategoryResource($subCategory);

            DB::commit();

            return response([
                'data' => $data
            ], Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            return response([
                'message' => $th->getMessage()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subcategory)
    {
        $subCategory = $subcategory->load('category');
        $data = new SubCategoryResource($subCategory);

        return response([
            'data' => $data
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubCategoryRequest $request, SubCategory $subcategory)
    {
        try {
            DB::beginTransaction();

            $subCategory = tap($subcategory)->update([
                'name' => $request->input('name'),
                'category_id' => $request->input('categoryId'),
            ]);
            $data = new SubCategoryResource($subCategory);

            DB::commit();

            return response([
                'data' => $data
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            return response([
                'message' => $th->getMessage()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subcategory)
    {
        try {
            DB::beginTransaction();

            $subcategory->delete();

            DB::commit();

            return response(status: Response::HTTP_NO_CONTENT);
        } catch (\Throwable $th) {
            return response([
                'message' => $th->getMessage()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }
}
