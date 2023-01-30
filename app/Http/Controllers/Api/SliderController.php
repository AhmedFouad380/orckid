<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(Request $request){

        $data = Slider::where('is_active','active')->get();

        return response()->json(msgdata($request, success(), 'success', $data),success());

    }

}
