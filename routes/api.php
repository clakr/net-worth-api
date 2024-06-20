<?php

use App\Http\Controllers\AuthedUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('auth')->group(function () {
        Route::get('/',  [AuthedUserController::class, 'index']);
    });


    Route::prefix('users')->group(function () {
        Route::get('{user}/net-worth', [UserController::class, 'getNetWorth']);
    });
    Route::apiResource('users', UserController::class);

    Route::apiResource('categories', CategoryController::class);

    Route::apiResource('subcategories', SubCategoryController::class);

    Route::prefix('transactions')->group(function () {
        Route::get('sum', [TransactionController::class, 'getSum']);
    });
    Route::apiResource('transactions', TransactionController::class);
});
