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

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $offices = offices::all()->toArray();
        return view('Admin.usercontrol.office', compact('offices'));
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
            'OF_user' => 'required',
        ]);
        if (!$validator->fails()) {
            $Office = new offices;
            $Office->OF_user = $request->input('OF_user');
            $Office->OF_pass = Hash::make($request->input('OF_pass'));
            $Office->OF_name = $request->input('OF_name');
            $Office->OF_lname = $request->input('OF_lname');
            $Office->OF_rank = $request->input('OF_rank');
            $Office->OF_department = $request->input('OF_department');
            $Office->OF_institution = $request->input('OF_institution');
            $Office->OF_tel = $request->input('OF_tel');
            $Office->OF_email = $request->input('OF_email');
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
            'OF_user' => ['required'],
            'OF_pass' => ['required'],
            'OF_name' => ['required'],
            'OF_lname' => ['required'],
            'OF_rank' => ['required'],
            'OF_department' => ['required'],
            'OF_institution' => ['required'],
            'OF_tel' => ['required'],
            'OF_email' => ['required'],
            'OF_status' => ['required'],
        ]);
        

        $offices = offices::find($id);
        $offices->OF_user = $request->get('OF_user');
        $offices->OF_pass = $request->get('OF_pass');
        $offices->OF_name = $request->get('OF_name');
        $offices->OF_lname = $request->get('OF_lname');
        $offices->OF_rank = $request->get('OF_rank');
        $offices->OF_department = $request->get('OF_department');
        $offices->OF_institution = $request->get('OF_institution');
        $offices->OF_tel = $request->get('OF_tel');
        $offices->OF_email = $request->get('OF_email');
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
