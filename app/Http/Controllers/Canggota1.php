<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manggota;

class Canggota1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Manggota::where('jabatan','=','Deputi I')->orWhere('jabatan','=','Ketua Umum')->orWhere('jabatan','=','Deputi II')->orWhere('jabatan','=','Sekretaris Umum')->orWhere('jabatan','=','Staf Ahli Sekretaris Umum')->orWhere('jabatan','=','Bendahara Umum')->get();
        return view ('struktur_dpm',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Manggota::where('struktur','=','Komisi I')->get();
        return view ('komisiI',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = Manggota::where('struktur','=','Komisi II')->get();
        return view ('komisiII',compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Manggota::where('struktur','=','Komisi III')->get();
        return view ('komisiIII',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $data = Manggota::where('struktur','=','Komisi IV')->get();
        return view ('komisiIV',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $data = Manggota::where('jurusan','=','keperawatan')->get();
        return view ('keperawatan',compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $data = Manggota::where('jurusan','=','kebidanan')->get();
        return view ('kebidanan',compact('data'));
    }
    public function destro()
    {
        $data = Manggota::where('jurusan','=','trr')->get();
        return view ('trr',compact('data'));
    }
    public function destr()
    {
        $data = Manggota::where('jurusan','=','rnik')->get();
        return view ('rnik',compact('data'));
    }
    public function dest()
    {
        $data = Manggota::where('jurusan','=','keperawatan gigi')->get();
        return view ('keperawatan gigi',compact('data'));
    }
    public function des()
    {
        $data = Manggota::where('jurusan','=','analis kesehatan')->get();
        return view ('analis kesehatan',compact('data'));
    }
    public function de()
    {
        $data = Manggota::where('jurusan','=','gizi')->get();
        return view ('gizi',compact('data'));
    }
    public function d()
    {
        $data = Manggota::where('jurusan','=','kesehatan lingkungan')->get();
        return view ('kesehatan lingkungan',compact('data'));
    }
}
