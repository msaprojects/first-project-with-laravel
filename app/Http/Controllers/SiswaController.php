<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /// load data siswa from database
        $datasiswa = Siswa::get();
        /// return [1] ui location
        /// return [2] compact throw variable from $datasiswa
        // return view('siswa/index', compact('datasiswa'));
        return view('siswa/index', ['siswa' => $datasiswa]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /// route to form add siswa
        return view('siswa/add_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /// process add data siswa to database
        /// insert value to model
        Siswa::create([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'tanggal_lahir' => $request->tanggal_lahir
        ]);
        /// redirecting after store data to database
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /// show data siswa within specific id
        $siswa = Siswa::where('nis', $id)->first();
        return view('siswa/detail_siswa', ['siswa' => $siswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /// route to edit siswa and route to form ubah
        $datasiswa = Siswa::find($id);
        return view('siswa/edit_form', ['siswa' => $datasiswa]);
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
        /// edit data siswa in database
        $siswa = Siswa::find($id);
        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->save();
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /// delete data siswa in database
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}
