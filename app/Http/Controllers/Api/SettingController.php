<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(Request $request){

        $data = Setting::findOrFail(1);

        return response()->json(msgdata($request, success(), 'success', $data),success());

    }
}
