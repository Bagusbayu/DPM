<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Mpemira;

class Cpemira extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mpemira::all();
        return view ('vpemira',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('inputpemira');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = new Mpemira();
        $data->komisi = $request->komisi;
        $data->bpp = $request->bpp;
        $data->about = $request->about;
        $data->save();
        return redirect()->route('vpemira.index')->with('alert-success','Data berhasil ditambahkan!');
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
        //$data = \App\Mpemira::findOrFail($id);
        $data = Mpemira::where('id',$id)->get();
        return view('updatepmira ',compact('data'));
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
        $data = Mpemira::where('id',$id)->first();
        $data->bpp = $request->bpp;
        $data->komisi = $request->komisi;
        $data->about = $request->about;
        $data->save();
        return redirect()->route('vpemira.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = \App\Mpemira::findOrFail($id);
        $data->delete();
        return redirect()->route('vpemira.index')->with('alert-success','Data berhasil dihapus!');
    }
}
