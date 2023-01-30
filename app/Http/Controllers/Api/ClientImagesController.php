<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ClientImage;
use Illuminate\Http\Request;

class ClientImagesController extends Controller
{
    public function index(Request $request){

        $data = ClientImage::where('is_active','active')->get();

        return response()->json(msgdata($request, success(), 'success', $data),success());

    }
}
