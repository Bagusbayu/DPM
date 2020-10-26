<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mvmdpm;
use App\Mpvmdpm;

class Cvmdpm1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mvmdpm::all();
        return view ('vm_dm',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload()
    {
        $data = Mpvmdpm::all();
        return view ('photovmdpm',compact('data'));
    }

    /**public function create()
    {
        $data = Mpvmdpm::all();
        return view ('photovmdpm',compact('data'));
    }**/ 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Mpvmdpm();
        //$data = new \App\File();
        $file = $request->file('photo');
        $ext = $file->getClientOriginalName();
        //$ext = $file->getClientOriginalExtension();
        //$newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$ext);
        $data->photo = $ext;
        $data->save();
        return redirect()->back()->with('alert-success','Data berhasil ditambahkan!');
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
        $data = \App\Mpvmdpm::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('alert-success','Data berhasil dihapus!');
    }
}
