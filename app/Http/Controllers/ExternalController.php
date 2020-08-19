<?php

namespace App\Http\Controllers;

use App\External_personnel;
use Illuminate\Http\Request;
use Validator;
use Alert;

class ExternalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.External');
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
            'EP_user' => 'required',
        ]);
        if (!$validator->fails()) {
            $External_personnel = new External_personnel;
            $External_personnel->EP_user = $request->input('EP_user');
            $External_personnel->EP_pass = \Hash::make($request->input('EP_pass'));
            $External_personnel->EP_name = $request->input('EP_name');
            $External_personnel->EP_position = $request->input('EP_position');
            $External_personnel->EP_tel = $request->input('EP_tel');
            $External_personnel->EP_institution = $request->input('EP_institution');
            $External_personnel->save();
            return redirect()->route('userexternal.create')->with('success', 'บันทึกสำเร็จ');
        } else if($validator=""){

            return redirect()->route('userexternal.create')->with('warning', 'บันทึกไม่สำเร็จ');
        }else{
            return redirect()->route('userexternal.create')->with('warning', 'บันทึกไม่สำเร็จ');
        }

        /*$this->Validator($request, [
            'Ep_user' => 'required',
            'Ep_pass' => 'required',
            'Ep_name' => 'required',
            'Ep_position' => 'required',
            'Ep_tel' => 'requird',
            'Ep_institution' => 'required'
        ]);
        return $request->all();
        $external = new External_personnel(
            [
                'Ep_user' => $request->get('Ep_user'),
                'Ep_pass' => $request->get('Ep_pass'),
                'Ep_name' => $request->get('Ep_name'),
                'Ep_position' => $request->get('Ep_position'),
                'Ep_tel' => $request->get('Ep_tel'),
                'Ep_institution' => $request->get('Ep_institution')
            ]
        );
        return $external;
        $external->save();
        return redirect()->route('Admin.External')->with('success', 'บันทึกสำเร็จ');*/
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
