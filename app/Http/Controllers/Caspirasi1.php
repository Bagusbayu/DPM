<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MAspirasi;
use App\Mcontact;
use App\Mvisit;

class Caspirasi1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d = Mcontact::all();
        $da = Mvisit::all();
        return view ('aspirasi_dpm',compact('d','da'));
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
        $data = new MAspirasi();
        $data->name = $request->name;
        $data->nim = $request->nim;
        $data->email = $request->email;
        $data->jurusan = $request->jurusan;
        $data->prodi = $request->prodi;
        $data->angkatan = $request->angkatan;
        $data->message = $request->message;
        $data->save();
        return redirect()->route('aspirasi_dpm.index')->with('alert-success','Data Diterima!');
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
