<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function dropdownRole(){
        $role = ['admin', 'siswa'];
        return view('create', compact($role));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    /// load data siswa from database
    $datauser = User::get();
    /// return [1] ui location
    /// return [2] compact throw variable from $datasiswa
    return view('user/index', compact('datauser'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /// show data user within specific id
        $user = User::where('id', $id)->first();
        return view('user/edit_form', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /// route to edit user and route to form ubah
        $datauser = User::find($id);
        return view('user/edit_form', ['user' => $datauser]);
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
        /// edit data user in database
        $user = User::find($id);
        $user->name = $request->name;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /// delete data user in database
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
