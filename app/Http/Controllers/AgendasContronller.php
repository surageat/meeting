<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\meeting_agendas;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;


class AgendasContronller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $meeting_agendas = meeting_agendas::get();
        return view('Admin.agendacontrol.agenda', compact('meeting_agendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.agendacontrol.insertagenda')->with('meeting_agendas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $validator = Validator::make($request->all(), [
                'MA_agenda' => 'required',
            ]);
            if (!$validator->fails()) {
                $meeting_agendas = new meeting_agendas;
                $meeting_agendas->MA_agenda = $request->input('MA_agenda');
                $meeting_agendas->MA_details = $request->input('MA_details');
                $meeting_agendas->save();
                return redirect()->route('agenda.create')->with('success', 'บันทึกสำเร็จ');
            } else {
                return redirect()->route('agenda.create')->with('warning', 'บันทึกไม่สำเร็จ');
            }
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
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
  
    {
        $data['meeting_agendas'] = meeting_agendas::find($id);
        return view('Admin.agendacontrol.editagenda',  $data);
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
            'MA_agenda' => ['required'],    
        ]);
        $meeting_agendas = meeting_agendas::find($id);
        $meeting_agendas->MA_agenda = $meeting_agendas->get('MA_agenda');
        $meeting_agendas->MA_details = $meeting_agendas->get('MA_details');
        $meeting_agendas->save();
        return redirect()->route('agenda.index')->with('success', 'แก้ไขข้อมูลสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meeting_agendas = meeting_agendas::find($id);
        $meeting_agendas->delete();
        return redirect()->route('agenda.index')->with('success', 'ลบข้อมูลสำเร็จ');
    }
}
