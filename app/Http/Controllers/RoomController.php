<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\meeting_rooms;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meeting_rooms = meeting_rooms::all()->toArray();
        return view('Admin.meetingroom.room', compact('meeting_rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $meeting_rooms = meeting_rooms::all();
        return view('Admin.meetingroom.room')->with('meeting_rooms',$meeting_rooms);
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
                'MR_name' => 'required',
            ]);
            if (!$validator->fails()) {
                $meeting_rooms = new meeting_rooms;
                $meeting_rooms->MR_name = $request->input('MR_name');
                $meeting_rooms->save();
                return redirect()->route('room.create')->with('success', 'บันทึกสำเร็จ');
            } else {
                return redirect()->route('room.create')->with('warning', 'บันทึกไม่สำเร็จ');
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
        $meeting_rooms = meeting_rooms::all()->toArray();
        return view('Admin.meetingroom.room', compact('meeting_rooms'));
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
        

        $meeting_rooms = meeting_rooms::find($id);
        $meeting_rooms->MR_name = $request->get('mr_mane');
        
        $meeting_rooms->save();
        return redirect()->route('room.index')->with('success', 'แก้ไขข้อมูลสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meeting_rooms = ofmeeting_rooms::find($id);
        $meeting_rooms->delete();
        return redirect()->route('room.index')->with('success', 'ลบข้อมูลสำเร็จ');
    }
}
