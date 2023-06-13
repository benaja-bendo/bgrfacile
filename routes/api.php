<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/courses', \App\Http\Controllers\Api\CourseController::class);
Route::apiResource('/lessons', \App\Http\Controllers\Api\LessonController::class);
