<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
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
        return view('user.profile');
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
        $offices = profile::find($id);
        return  view('user.profile', compact('offices', 'id'));
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
        $validatedData = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
            'name' => ['required'],
            'OF_lname' => ['required'],
            'OF_rank' => ['required'],
            'OF_department' => ['required'],
            'OF_institution' => ['required'],
            'OF_tel' => ['required'],
            'email' => ['required'],
            
        ]);
        
        $offices = profile::find($id);
        $offices->username = $request->get('username');
        $offices->password = $request->get('password');
        $offices->name = $request->get('name');
        $offices->OF_lname = $request->get('OF_lname');
        $offices->OF_rank = $request->get('OF_rank');
        $offices->OF_department = $request->get('OF_department');
        $offices->OF_institution = $request->get('OF_institution');
        $offices->OF_tel = $request->get('OF_tel');
        $offices->email = $request->get('email');
        
        $offices->save();
        return redirect()->route('profile.create')->with('success', 'แก้ไขข้อมูลสำเร็จ');
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
