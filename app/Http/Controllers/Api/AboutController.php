<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request){

        $data = About::findOrFail(1);

        return response()->json(msgdata($request, success(), 'success', $data),success());

    }
}
