<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comments;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['comments'] = DB::table('comments')->simplePaginate(10);
        return view('user.commentscontrol.comments', $data);
        if($request->ajax())
        {
            $data['comments'] = DB::table('comments')->simplePaginate(10);
        return view('user.commentscontrol.comments', $data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        
        return view('user.commentscontrol.insertcomments');
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
                'C_meet' => 'required',
               
            ]);
            if (!$validator->fails()) {
                $comments = new comments;
                $comments->C_meet = $request->input('C_meet');
                $comments->Meet_id = $request->input('Meet_id');
                $comments->OF_id = $request->input('OF_id');
                $comments->save();
                return redirect()->route('comments.create')->with('success', 'บันทึกสำเร็จ');
            } else {
                return redirect()->route('comments.create')->with('warning', 'บันทึกไม่สำเร็จ');
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
        $comments = comments::find($id);
        return  view('user.commentscontrol.editcomments', compact('comments', 'id'));
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
                'C_meet' => 'required',
                'Meet_id' => 'required',
                'OF_id' => 'required',

        ]);
        $comments = comments::find($id);
        $comments->C_meet = $request->get('C_meet');
        $comments->Meet_id = $request->get('Meet_id');
        $comments->OF_id = $request->get('OF_id');
        $comments->id = $id;
        $comments->save();
        return redirect()->route('comments.index')->with('success', 'แก้ไขข้อมูลสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comments = comments::find($id);
        $comments->delete();
        return redirect()->route('comments.index')->with('success', 'ลบข้อมูลสำเร็จ',true);
    }
}

