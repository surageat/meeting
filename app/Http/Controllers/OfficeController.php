<?php

namespace App\Http\Controllers;
use App\offices;
use Illuminate\Http\Request;
use Validator;
use Alert;

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
        $offices=offices::all()->toArray();
        return view('Admin.usercontrol.office',compact('offices'));

        
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
            $Office->OF_pass = \Hash::make($request->input('OF_pass'));
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
        $external_personnel = External_personnel::find($id);
        return  view('Admin.external.Editexternal',compact('external_personnel','id'));
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
         $this->Validator($request, 
        [
            'Ep_user' => 'required',
            'Ep_pass' => 'required',
            'Ep_name' => 'required',
            'Ep_position' => 'required',
            'Ep_tel' => 'requird',
            'Ep_institution' => 'required'
        ]);
        $external_personnel = External_personnel::find($id);
        $external_personnel->EP_user=$request->get('EP_user');
        $external_personnel->EP_pass=\Hash::make($request->get('EP_pass'));
        $external_personnel->EP_name=$request->get('EP_name');
        $external_personnel->EP_position=$request->get('EP_possition');
        $external_personnel->EP_tel=$request->get('EP_tel');
        $external_personnel->EP_institution=$request->get('EP_institution');
        $external_personnel->save();
        return redirect()->route('userexternal.create')->with('success', 'แก้ไขข้อมูลสำเร็จ');
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
