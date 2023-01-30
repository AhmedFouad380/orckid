<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::get('sliders',[\App\Http\Controllers\Api\SliderController::class,'index']);
    Route::get('projects',[\App\Http\Controllers\Api\ProjectsController::class,'index']);
    Route::get('client_mages',[\App\Http\Controllers\Api\ClientImagesController::class,'index']);
    Route::get('about',[\App\Http\Controllers\Api\AboutController::class,'index']);
    Route::get('Setting',[\App\Http\Controllers\Api\SettingController::class,'index']);
