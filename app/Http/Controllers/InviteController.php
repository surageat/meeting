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
use App\offices;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;



class InviteController extends Controller
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
            )->simplePaginate(8);
        }
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
            )->simplePaginate(8);
            return view('Admin.invitecontrol.invite', $data)->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['Meeting'] = meetings::get();
        $data['offices'] = offices::get();
 
        return view('Admin.invitecontrol.addinvite', $data);
        // dd($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
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
