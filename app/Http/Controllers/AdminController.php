<?php

namespace App\Http\Controllers;

use App\admin;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['admin'] = DB::table('admin')->simplePaginate(10);
        return view('Admin.admincontrol.admin', $data)->render();
        if($request->ajax())
        {
            $data['admin'] = DB::table('admins')->simplePaginate(10);
            return view('Admin.admincontrol.admin', $data)->render();
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.admincontrol.insertadmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
        ]);
        if (!$validator->fails()) {
            $admin = new admin;
            $admin->username = $request->input('username');
            $admin->password = Hash::make($request->input('password'));
            $admin->name = $request->input('name');
            $admin->lname = $request->input('lname');
            $admin->rank = $request->input('rank');
            $admin->tel = $request->input('tel');
            $admin->email = $request->input('email');
            $admin->save();
            return redirect()->route('admin.create')->with('success', 'บันทึกสำเร็จ');
        } else {
            return redirect()->route('admin.create')->with('warning', 'บันทึกไม่สำเร็จ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = admin::find($id);
        return  view('Admin.admincontrol.editadmin', compact('admin', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
            'name' => ['required'],
            'lname' => ['required'],
            'rank' => ['required'],
            'tel' => ['required'],
            'email' => ['required'],
            
        ]);
        

        $admin = admin::find($id);
        $admin->username = $request->get('username');
        $admin->password = $request->get('password');
        $admin->name = $request->get('name');
        $admin->lname = $request->get('lname');
        $admin->rank = $request->get('rank');
        $admin->tel = $request->get('tel');
        $admin->email = $request->get('email');
        $admin->save();
        return redirect()->route('admin.index')->with('success', 'แก้ไขข้อมูลสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = admin::find($id);
        $admin->delete();
        return redirect()->route('admin.index')->with('success', 'ลบข้อมูลสำเร็จ');
    }
}
