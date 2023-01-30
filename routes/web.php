<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::post('store_contact',[\App\Http\Controllers\Api\ContactController::class,'store']);

Route::get('/login', function () {
    return view('auth.login');
});
Route::post('Login', [\App\Http\Controllers\frontController::class, 'login']);
Route::post('logout', [\App\Http\Controllers\frontController::class, 'logout']);

Route::get('/', function () {
    return view('front.index');
});
Route::group(['middleware' => ['admin']], function () {
    Route::get('/Dashboard', function () {
        return view('Admin.index');
    });

    Route::get('Admin_setting', [\App\Http\Controllers\Admin\AdminController::class, 'index']);
    Route::get('Admin_datatable', [\App\Http\Controllers\Admin\AdminController::class, 'datatable'])->name('Admin.datatable.data');
    Route::get('delete-Admin', [\App\Http\Controllers\Admin\AdminController::class, 'destroy']);
    Route::post('store-Admin', [\App\Http\Controllers\Admin\AdminController::class, 'store']);
    Route::get('Admin-edit/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'edit']);
    Route::post('update-Admin', [\App\Http\Controllers\Admin\AdminController::class, 'update']);
    Route::get('/add-button-Admin', function () {
        return view('admin/Admin/button');
    });

    Route::get('About_setting', [\App\Http\Controllers\Admin\AboutController::class, 'index']);
    Route::post('update-About', [\App\Http\Controllers\Admin\AboutController::class, 'update']);

    Route::get('General_Setting', [\App\Http\Controllers\Admin\SettingController::class, 'index']);
    Route::post('Update_General_Setting', [\App\Http\Controllers\Admin\SettingController::class, 'update']);


    Route::get('Slider_setting', [\App\Http\Controllers\Admin\SliderController::class, 'index']);
    Route::get('Slider_datatable', [\App\Http\Controllers\Admin\SliderController::class, 'datatable'])->name('Slider.datatable.data');
    Route::get('delete-Slider', [\App\Http\Controllers\Admin\SliderController::class, 'destroy']);
    Route::post('store-Slider', [\App\Http\Controllers\Admin\SliderController::class, 'store']);
    Route::get('Slider-edit/{id}', [\App\Http\Controllers\Admin\SliderController::class, 'edit']);
    Route::post('update-Slider', [\App\Http\Controllers\Admin\SliderController::class, 'update']);
    Route::get('/add-button-Slider', function () {
        return view('admin/Slider/button');
    });

    Route::get('Projects_setting', [\App\Http\Controllers\Admin\ProjectController::class, 'index']);
    Route::get('Projects_datatable', [\App\Http\Controllers\Admin\ProjectController::class, 'datatable'])->name('Projects.datatable.data');
    Route::get('delete-Projects', [\App\Http\Controllers\Admin\ProjectController::class, 'destroy']);
    Route::post('store-Projects', [\App\Http\Controllers\Admin\ProjectController::class, 'store']);
    Route::get('Projects-edit/{id}', [\App\Http\Controllers\Admin\ProjectController::class, 'edit']);
    Route::post('update-Projects', [\App\Http\Controllers\Admin\ProjectController::class, 'update']);
    Route::get('/add-button-Projects', function () {
        return view('admin/Projects/button');
    });

    Route::get('Services_setting', [\App\Http\Controllers\Admin\ServiceController::class, 'index']);
    Route::get('Service_datatable', [\App\Http\Controllers\Admin\ServiceController::class, 'datatable'])->name('Service.datatable.data');
    Route::get('delete-Service', [\App\Http\Controllers\Admin\ServiceController::class, 'destroy']);
    Route::post('store-Service', [\App\Http\Controllers\Admin\ServiceController::class, 'store']);
    Route::get('Service-edit/{id}', [\App\Http\Controllers\Admin\ServiceController::class, 'edit']);
    Route::post('update-Service', [\App\Http\Controllers\Admin\ServiceController::class, 'update']);
    Route::get('/add-button-Service', function () {
        return view('admin/Service/button');
    });

    Route::get('ClientImages_setting', [\App\Http\Controllers\Admin\ClientImagesController::class, 'index']);
    Route::get('ClientImages_datatable', [\App\Http\Controllers\Admin\ClientImagesController::class, 'datatable'])->name('ClientImages.datatable.data');
    Route::get('delete-ClientImages', [\App\Http\Controllers\Admin\ClientImagesController::class, 'destroy']);
    Route::post('store-ClientImages', [\App\Http\Controllers\Admin\ClientImagesController::class, 'store']);
    Route::get('ClientImages-edit/{id}', [\App\Http\Controllers\Admin\ClientImagesController::class, 'edit']);
    Route::post('update-ClientImages', [\App\Http\Controllers\Admin\ClientImagesController::class, 'update']);
    Route::get('/add-button-ClientImages', function () {
        return view('admin/ClientImages/button');
    });

    Route::get('Messages_setting', [\App\Http\Controllers\Admin\MessagesController::class, 'index']);
    Route::get('Messages_datatable', [\App\Http\Controllers\Admin\MessagesController::class, 'datatable'])->name('Messages.datatable.data');
    Route::get('delete-Messages', [\App\Http\Controllers\Admin\MessagesController::class, 'destroy']);
    Route::post('store-Messages', [\App\Http\Controllers\Admin\MessagesController::class, 'store']);
    Route::get('/add-button-Messages', function () {
        return view('Admin/Message/button');
    });


});



Route::get('lang/{lang}', function ($lang) {

    if (session()->has('lang')) {
        session()->forget('lang');
    }
    if ($lang == 'en') {
        session()->put('lang', 'en');
    } else {
        session()->put('lang', 'ar');
    }


    return back();
});
