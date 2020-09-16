<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use App\meeting_rooms;
use App\Providers\RouteServiceProvider;
use App\meetings;
use App\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;



class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['Meeting'] = DB::table('meetings')
            ->join('admin', 'meetings.admin_id', 'admin.id')
            ->join('meeting_rooms', 'meetings.MR_id', 'meeting_rooms.id')
            ->select(
                'meetings.id',
                'meetings.Meet_heading',
                'meetings.Meet_date',
                'meetings.Meet_no',
                'meetings.Meet_time',
                'meetings.Meet_place',
                'meetings.Meet_table',
                'admin.name',
                'meeting_rooms.MR_name'
            )->get();
            // echo $Data;
            // $Meeting = array(
            //     'data' => $data
            // );
              
        // dd($data);
        return view('Admin.meetingcontrol.meeting', $data);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data['admin'] = admin::get();
        $data['meeting_rooms'] = meeting_rooms::get();
        // dd($data);
        return view('Admin.meetingcontrol.addmeeting', $data);
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
            'Meet_heading' => 'required',
        ]);
        if (!$validator->fails()) {
            $Meetings = new meetings;

            $Meetings->Meet_heading = $request->input('Meet_heading');
            $Meetings->Meet_date = $request->input('Meet_date');
            $Meetings->Meet_no = $request->input('Meet_no');
            $Meetings->Meet_time = $request->input('Meet_time');
            $Meetings->Meet_place = $request->input('Meet_place');
            $Meetings->Meet_table = $request->input('Meet_table');
            $Meetings->admin_id = $request->input('admin_id');
            $Meetings->MR_id = $request->input('MR_id');
            $Meetings->save();
            return redirect()->route('meeting.create')->with('success', 'บันทึกสำเร็จ');
        } else {
            return redirect()->route('meeting.create')->with('warning', 'บันทึกไม่สำเร็จ');
        }

        // $Meeting = new meetings([
        //     'Meet_heading' => $request->get('Meet_heading'),
        //     'Meet_date'=> $request->get('Meet_date'),
        //     'Meet_no' => $request->get('Meet_no'),
        //     'Meet_time'  => $request->get('Meet_time'),
        //     'Meet_place'  => $request->get('Meet_place'),
        //     'Meet_table'  => $request->get('Meet_table'),
        //     'OF_id' => $request->get('OF_id'),
        //     'MR_id'  => $request->gett('MR_id')


        // ]);
        //     $Meeting->save();
        //     return redirect()->route('meetings.create')->with('success', 'บันทึกสำเร็จ');


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
       
        $data['Meeting'] = meetings::find($id);
        $data['admin'] = admin::get();
        $data['meeting_rooms'] = meeting_rooms::get();
        // dd($data);
        return view('Admin.meetingcontrol.editmeeting',  $data);
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
                'MR_name' => ['required'],    
            ]);
            $meeting = meetings::find($id);
            $meeting->Meet_heading = $request->get('Meet_heading');
            $meeting->Meet_date = $request->get('Meet_date');
            $meeting->Meet_no = $request->get('Meet_no');
            $meeting->Meet_time = $request->get('Meet_time');
            $meeting->Meet_place = $request->get('Meet_place');
            $meeting->Meet_table = $request->get('Meet_table');
            $meeting->admin_id = $request->get('admin_id');
            $meeting->MR_id = $request->get('MR_id');
            $meeting->save();
            return redirect()->route('meeting.index')->with('success', 'แก้ไขข้อมูลสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meeting = meetings::find($id);
        $meeting->delete();
        return redirect()->route('meeting.index')->with('success', 'ลบข้อมูลสำเร็จ');
    }
}
