<?php

use App\Http\Controllers\AuthedUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('/auth')->group(function () {
        Route::get('/',  [AuthedUserController::class, 'index']);
    });
});
