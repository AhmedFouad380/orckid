<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $Setting = Setting::findOrFail(1);
        return view('admin.Setting.index', compact('Setting'));
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
            'ar_name' => 'required|string',
            'en_name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',

        ]);


        $user = Setting::whereId($request->id)->first();
        $user->ar_name=$request->ar_name;
        $user->en_name=$request->en_name;
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->facebook=$request->facebook;
        $user->twitter=$request->twitter;
        $user->instagram=$request->instagram;
        $user->linked_in=$request->linked_in;
        $user->lat=$request->lat;
        $user->lng=$request->lng;
        $user->image=$request->image;
        $user->save();

        return redirect(url('General_Setting'))->with('message', 'تم التعديل بنجاح ');
    }
}
