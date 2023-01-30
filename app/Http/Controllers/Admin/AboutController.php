<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Projects;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AboutController extends Controller
{

    public function index()
    {
        $employee = About::findOrFail(1);
        return view('admin.About.index', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $this->validate(request(), [
            'ar_title' => 'required|string',
            'en_title' => 'required|string',
            'ar_description' => 'required|string',
            'en_description' => 'required|string',

        ]);


        $user = About::whereId($request->id)->first();
        $user->ar_title=$request->ar_title;
        $user->en_title=$request->en_title;
        $user->ar_description=$request->ar_description;
        $user->en_description=$request->en_description;
        if($request->image){
            $user->image=$request->image;
        }
        $user->save();

        return redirect(url('About_setting'))->with('message', 'تم التعديل بنجاح ');
    }

}
