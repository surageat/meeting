<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\offices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data['offices'] = DB::table('offices')->simplePaginate(10);
            return view('Admin.usercontrol.office',$data)->render();
        }
        //
        $data['offices'] = DB::table('offices')->simplePaginate(10);
        return view('Admin.usercontrol.office',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.usercontrol.addoffice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'username' => 'required',
        ]);
        if (!$validator->fails()) {
            $Office = new offices;
            $Office->username = $request->input('username');
            $Office->password = Hash::make($request->input('password'));
            $Office->name = $request->input('name');
            $Office->OF_lname = $request->input('OF_lname');
            $Office->OF_rank = $request->input('OF_rank');
            $Office->OF_department = $request->input('OF_department');
            $Office->OF_institution = $request->input('OF_institution');
            $Office->OF_tel = $request->input('OF_tel');
            $Office->email = $request->input('email');
            $Office->OF_status = $request->input('OF_status');
            $Office->save();
            return redirect()->route('offices.create')->with('success', 'บันทึกสำเร็จ');
        } else {
            return redirect()->route('offices.create')->with('warning', 'บันทึกไม่สำเร็จ');
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
        //
        $offices = offices::find($id);
        return  view('Admin.usercontrol.editoffice', compact('offices', 'id'));
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
        //
        //$this->validate($request, [
            $validatedData = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
            'name' => ['required'],
            'OF_lname' => ['required'],
            'OF_rank' => ['required'],
            'OF_department' => ['required'],
            'OF_institution' => ['required'],
            'OF_tel' => ['required'],
            'email' => ['required'],
            'OF_status' => ['required'],
        ]);
        

        $offices = offices::find($id);
        $offices->username = $request->get('username');
        $offices->password = $request->get('password');
        $offices->name = $request->get('name');
        $offices->OF_lname = $request->get('OF_lname');
        $offices->OF_rank = $request->get('OF_rank');
        $offices->OF_department = $request->get('OF_department');
        $offices->OF_institution = $request->get('OF_institution');
        $offices->OF_tel = $request->get('OF_tel');
        $offices->email = $request->get('email');
        $offices->OF_status = $request->get('OF_status');
        
        $offices->save();
        return redirect()->route('offices.index')->with('success', 'แก้ไขข้อมูลสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Office = offices::find($id);
        $Office->delete();
        return redirect()->route('offices.index')->with('success', 'ลบข้อมูลสำเร็จ');
    }

}
