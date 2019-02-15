<?php

namespace App\Http\Controllers;

use App\UserRegister;
use Illuminate\Http\Request;
use DB;
class UserRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user_registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
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
        $data = request()->all();
        //dd($data);
        $user = UserRegister::create($data);
        //dd($user->dist);
        $joinId = $user->dist."0".$user->id;
       // dd($joinId);
        $data1['joidId'] = $joinId;
        $userIdUdpade = UserRegister::find($user->id);
        $t=$userIdUdpade->fill($data1)->save();
        return back(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserRegister  $userRegister
     * @return \Illuminate\Http\Response
     */
    public function show(UserRegister $userRegister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserRegister  $userRegister
     * @return \Illuminate\Http\Response
     */
    public function edit(UserRegister $userRegister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserRegister  $userRegister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserRegister $userRegister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserRegister  $userRegister
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserRegister $userRegister)
    {
        //
    }
}
