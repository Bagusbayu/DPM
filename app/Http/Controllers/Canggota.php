<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Manggota;

class Canggota extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Manggota::orderBy('id','desc')->paginate(10);
        return view ('vanggota',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('inputanggota');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**$this->validate($request, [
            'pict' => 'required',
        ]); */
        $data = new Manggota();
        //$data = new \App\File();
        $data->nama = $request->nama;
        $data->jurusan = $request->jurusan;
        $data->angkatan = $request->angkatan;
        $data->jabatan = $request->jabatan;
        $file = $request->file('pict');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$newName);
        $data->pict = $newName;
        $data->save();
        return redirect()->route('vanggota.index')->with('alert-success','Data berhasil ditambahkan!');
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
        
        $data = \App\Manggota::findOrFail($id);
        //$data = Manggota::where('id',$id)->get();
        return view('updateanggota',compact('data'));
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
        //$data = Manggota::where('id',$id)->first();
        $data = Manggota::findOrFail($id);
        if (empty($request->file('pict'))){
            $data->pict = $data->pict;
        }
        else{
            //$data = Manggota::where('id',$id)->first();
            unlink('uploads/file/'.$data->pict); //menghapus file lama
            $data->nama = $request->nama;
            $data->jurusan = $request->jurusan;
            $data->angkatan = $request->angkatan;
            $data->jabatan = $request->jabatan;
            $file = $request->file('pict');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('uploads/file',$newName);
            $data->pict = $newName;
        }
        $data->save();
        return redirect()->route('vanggota.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = \App\Manggota::findOrFail($id);
        $data->delete();
        return redirect()->route('vanggota.index')->with('alert-success','Data berhasil dihapus!');
    }
}
