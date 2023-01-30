<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Auth;
class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.Service.index');
    }
    public function datatable(Request $request)
    {
        $data = Service::orderBy('id', 'desc');

        return DataTables::of($data)
            ->addColumn('checkbox', function ($row) {
                $checkbox = '';
                $checkbox .= '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="' . $row->id . '" />
                                </div>';
                return $checkbox;
            })
            ->AddColumn('title', function ($row) {
                if(Session()->get('lang') == 'ar'){
                    return  $row->ar_title;
                }else{
                    return  $row->en_title;
                }
            })

            ->AddColumn('description', function ($row) {
                if(Session()->get('lang') == 'ar'){
                    return  $row->ar_description;
                }else{
                    return  $row->en_description;
                }
            })

            ->editColumn('is_active', function ($row) {
                $is_active = '<div class="badge badge-light-success fw-bolder">Active</div>';
                $not_active = '<div class="badge badge-light-danger fw-bolder">inactive</div>';
                if ($row->is_active == 'active') {
                    return $is_active;
                } else {
                    return $not_active;
                }
            })

            ->addColumn('actions', function ($row) {
                $actions = ' <a href="' . url("Service-edit/" . $row->id) . '" class="btn btn-active-light-info">Edit <i class="bi bi-pencil-fill"></i>  </a>';
                return $actions;

            })
            ->rawColumns(['actions', 'checkbox', 'name', 'is_active','branch'])
            ->make();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'ar_title' => 'required|string',
            'en_title' => 'required|string',
            'ar_description' => 'required|string',
            'en_description' => 'required|string',
            'is_active' => 'nullable|string',

        ]);


        $user = new Service;
        $user->ar_title=$request->ar_title;
        $user->en_title=$request->en_title;
        $user->ar_description=$request->ar_description;
        $user->en_description=$request->en_description;
        $user->user_id=Auth::guard('web')->id();
        $user->is_active=$request->is_active;
        if($request->image){
            $user->image=$request->image;
        }
        $user->save();

        return redirect()->back()->with('message', 'تم الاضافة بنجاح ');


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Service::findOrFail($id);
        return view('admin.Service.edit', compact('employee'));
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
            'is_active' => 'nullable|string',

        ]);


        $user = Service::whereId($request->id)->first();
        $user->ar_title=$request->ar_title;
        $user->en_title=$request->en_title;
        $user->ar_description=$request->ar_description;
        $user->en_description=$request->en_description;
        if($request->image){
            $user->image=$request->image;
        }
        $user->user_id=Auth::guard('web')->id();
        $user->is_active=$request->is_active;
        $user->save();

        return redirect(url('Services_setting'))->with('message', 'تم التعديل بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            Service::whereIn('id', $request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed']);
        }
        return response()->json(['message' => 'Success']);
    }
}
