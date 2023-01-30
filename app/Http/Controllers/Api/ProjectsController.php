<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public function index(Request $request){

        $data = Projects::where('is_active','active')->paginate(6);

        return response()->json(msgdata($request, success(), 'success', $data),success());

    }
}
