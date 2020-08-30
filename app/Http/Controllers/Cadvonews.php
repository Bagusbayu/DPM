<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Madvonews;

class Cadvonews extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Madvonews::orderBy('id','desc')->paginate(10);
        return view ('vadvonews',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('inputadvo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Madvonews();
        $data->judul = $request->judul;
        //$data->file = $request->file;
        $file = $request->file('file');
        $ext = $file->getClientOriginalName();
        //$ext = $file->getClientOriginalExtension();
        //$newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$ext);
        $data->file = $ext;
        
        $file = $request->file('pict');
        $exts = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$exts;
        $file->move('uploads/file',$newName);
        $data->pict = $newName;
        $data->save();
        return redirect()->route('vadvonews.index')->with('alert-success','Data berhasil ditambahkan!');
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
        $data = \App\Madvonews::findOrFail($id);
        //$data = Madvonews::where('id',$id)->get();
        return view('updateadvo ',compact('data'));
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
        $data = Madvonews::findOrFail($id);
        if (empty($request->file('file'))){
            $data->file = $data->file;
        }
        else{
            //$data = Madvonews::where('id',$id)->first();
            unlink('uploads/file/'.$data->file); //menghapus file lama
            $data->judul = $request->judul;
            $file = $request->file('file');
            $ext = $file->getClientOriginalName();
            //$newName = rand(100000,1001238912).".".$ext;
            $file->move('uploads/file',$ext);
            $data->file = $ext;
            $file = $request->file('pict');
            $exts = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$exts;
            $file->move('uploads/file',$newName);
            $data->pict = $newName;
        }
        $data->save();
        return redirect()->route('vadvonews.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = \App\Madvonews::findOrFail($id);
        $data->delete();
        return redirect()->route('vadvonews.index')->with('alert-success','Data berhasil dihapus!');
    }
}
