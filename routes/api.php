<?php

use App\Http\Controllers\AuthedUserController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('auth')->group(function () {
        Route::get('/',  [AuthedUserController::class, 'index']);
    });


    Route::apiResource('users', UserController::class);
    Route::prefix('users')->group(function () {
        Route::get('{user}/net-worth', [UserController::class, 'getNetWorth']);
        Route::get('{user}/transactions', [UserController::class, 'getTransactions']);
        Route::post('{user}/transactions', [UserController::class, 'storeTransaction']);
    });
});
