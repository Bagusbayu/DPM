<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Mphukum;

class Cphukum extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mphukum::all();
        return view ('vphukum',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('inputphukum');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Mphukum();
        $data->nama = $request->nama;
        //$data->file = $request->file;
        $file = $request->file('file');
        $ext = $file->getClientOriginalName();
        //$ext = $file->getClientOriginalExtension();
        //$newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$ext);
        $data->file = $ext;
        $data->save();
        return redirect()->route('vphukum.index')->with('alert-success','Data berhasil ditambahkan!');
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
        
        $data = \App\Mphukum::findOrFail($id);
        //data = Mphukum::where('id',$id)->get();
        return view('updatephukum ',compact('data'));
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
        $data = Mphukum::findOrFail($id);
        $data->nama = $request->nama;
        if (empty($request->file('file'))){
            $data->file = $data->file;
        }
        else{
            unlink('uploads/file/'.$data->file); //menghapus file lama
            
            $file = $request->file('file');
            $ext = $file->getClientOriginalName();
            //$newName = rand(100000,1001238912).".".$ext;
            $file->move('uploads/file',$ext);
            $data->file = $ext;
        }
        $data->save();
        return redirect()->route('vphukum.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = \App\Mphukum::findOrFail($id);
        $data->delete();
        return redirect()->route('vphukum.index')->with('alert-success','Data berhasil dihapus!');
    }
}
