<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $data = CategoryResource::collection($categories);

        return response([
            'data' => $data
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        try {
            $validated = $request->validated();

            DB::beginTransaction();

            $category = Category::create([
                'name' => $validated['name'],
            ]);
            $data = new CategoryResource($category);

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
    public function show(Category $category)
    {
        $data = new CategoryResource($category);

        return response([
            'data' => $data
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        try {
            $validated = $request->validated();

            DB::beginTransaction();

            $user = tap($category)->update([
                'name' => $validated['name'],
            ]);
            $data = new CategoryController($user);

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
    public function destroy(Category $category)
    {
        try {
            DB::beginTransaction();

            $category->delete();

            DB::commit();

            return response(status: Response::HTTP_NO_CONTENT);
        } catch (\Throwable $th) {
            return response([
                'message' => $th->getMessage()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }
}
