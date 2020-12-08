<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manggota;
use App\Mcontact;
use App\Mvisit;

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

        $d = Mcontact::all();
        $da = Mvisit::all();
        return view ('struktur_dpm',compact('data','d','da'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Manggota::where('struktur','=','Komisi I')->get();
        $d = Mcontact::all();
        $da = Mvisit::all();
        return view ('komisiI',compact('data','d','da'));
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
        $d = Mcontact::all();
        $da = Mvisit::all();
        return view ('komisiII',compact('data','d','da'));
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
        $d = Mcontact::all();
        $da = Mvisit::all();
        return view ('komisiIII',compact('data','d','da'));
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
        $d = Mcontact::all();
        $da = Mvisit::all();
        return view ('komisiIV',compact('data','d','da'));
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
        $d = Mcontact::all();
        $da = Mvisit::all();
        return view ('keperawatan',compact('data','d','da'));
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
        $d = Mcontact::all();
        $da = Mvisit::all();
        return view ('kebidanan',compact('data','d','da'));
    }
    public function destro()
    {
        $data = Manggota::where('jurusan','=','trr')->get();
        $d = Mcontact::all();
        $da = Mvisit::all();
        return view ('trr',compact('data','d','da'));
    }
    public function destr()
    {
        $data = Manggota::where('jurusan','=','rnik')->get();
        $d = Mcontact::all();
        $da = Mvisit::all();
        return view ('rnik',compact('data','d','da'));
    }
    public function dest()
    {
        $data = Manggota::where('jurusan','=','keperawatan gigi')->get();
        $d = Mcontact::all();
        $da = Mvisit::all();
        return view ('keperawatan gigi',compact('data','d','da'));
    }
    public function des()
    {
        $data = Manggota::where('jurusan','=','analis kesehatan')->get();
        $d = Mcontact::all();
        $da = Mvisit::all();
        return view ('analis kesehatan',compact('data','d','da'));
    }
    public function de()
    {
        $data = Manggota::where('jurusan','=','gizi')->get();
        $d = Mcontact::all();
        $da = Mvisit::all();
        return view ('gizi',compact('data','d','da'));
    }
    public function d()
    {
        $data = Manggota::where('jurusan','=','kesehatan lingkungan')->get();
        $d = Mcontact::all();
        $da = Mvisit::all();
        return view ('kesehatan lingkungan',compact('data','d','da'));
    }
}
