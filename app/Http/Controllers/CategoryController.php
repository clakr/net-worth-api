<?php

namespace App\Http\Controllers;

use App\CategoryType;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
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
    // TODO: add match function to `CategoryType`
    public function store(StoreCategoryRequest $request)
    {
        try {
            DB::beginTransaction();

            $category = Category::create([
                'type' => $request->input('type') === 'expense' ? CategoryType::EXPENSE : CategoryType::INCOME,
                'name' => $request->input('name'),
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
            DB::beginTransaction();

            $category = tap($category)->update([
                'type' => $request->input('type') === 'expense' ? CategoryType::EXPENSE : CategoryType::INCOME,
                'name' => $request->input('name'),
            ]);
            $data = new CategoryController($category);

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

    // TODO: deleting category errors, sqlstate[23000]
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
