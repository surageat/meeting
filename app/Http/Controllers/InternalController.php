<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Internal_personnel;
use Validator;
use Alert;

class InternalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Internal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
         [
            'IP_user' => 'required',
        ]);
        if(!$validator->fails()){
            $Internal_personnel= new Internal_personnel;
            $Internal_personnel->IP_user =$request->input('IP_user');
            $Internal_personnel->IP_pass =\Hash::make($request->input('IP_pass'));
            $Internal_personnel->IP_name =$request->input('IP_name');
            $Internal_personnel->IP_lname =$request->input('IP_lname');
            $Internal_personnel->IP_position =$request->input('IP_position');
            $Internal_personnel->IP_faculty =$request->input('IP_faculty');
            $Internal_personnel->IP_department =$request->input('IP_department');
            $Internal_personnel->IP_institution =$request->input('IP_institution');
            $Internal_personnel->IP_tel =$request->input('IP_tel');
            $Internal_personnel->ip_email =$request->input('IP_email');
            $Internal_personnel->save(); 
        return redirect()->route('userinternal.create')->with('success', 'บันทึกสำเร็จ');
        } else {
            return redirect()->route('userinternal.create')->with('warning', 'บันทึกไม่สำเร็จ');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}