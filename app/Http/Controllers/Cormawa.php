<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\MOrmawa;

class Cormawa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = MOrmawa::all();
        if(!Session::get('loginadmindpm')){
            return redirect('loginadmindpm')->with('alert','Kamu harus login dulu');
        }
        else{
        return view ('vormawa',compact('data'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('inputormawa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048|dimensions:max_width=800,max_height=494',
        ]);
        $data = new MOrmawa();
        $data->nama = $request->nama;
        $data->deskripsi = $request->deskripsi;
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$newName);
        $data->file = $newName;
        $data->save();
        return redirect()->route('vormawa.index')->with('alert-success','Data berhasil ditambahkan!');
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
        $data = \App\MOrmawa::findOrFail($id);
        //$data = MOrmawa::where('id',$id)->get();
        return view('updateormawa',compact('data'));
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
        $data = MOrmawa::findOrFail($id);
        if (empty($request->file('file'))){
            $data->file = $data->file;
        }
        else{
            //$data = MOrmawa::where('id',$id)->first();
            unlink('uploads/file/'.$data->file); //menghapus file lama
            $data->nama = $request->nama;
            $data->deskripsi = $request->deskripsi;
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('uploads/file',$newName);
            $data->file = $newName;
        }
        $data->save();
        return redirect()->route('vormawa.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = \App\MOrmawa::findOrFail($id);
        $data->delete();
        return redirect()->route('vormawa.index')->with('alert-success','Data berhasil dihapus!');
    }
}
