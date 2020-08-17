<?php

namespace App\Http\Controllers;

use App\External_personnel;
use Illuminate\Http\Request;

class ExternalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.External');
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
        $this->validate($request, [
            'Ep_user' => 'required',
            'Ep_pass' => 'required',
            'Ep_name' => 'required',
            'Ep_position' => 'required',
            'Ep_tel' => 'requird',
            'Ep_institution' => 'required'
        ]);
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
        $external->save();
        return redirect()->route('Admin.External')->with('success', 'บันทึกสำเร็จ');
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
