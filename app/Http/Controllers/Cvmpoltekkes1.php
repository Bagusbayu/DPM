<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mvmpoltekkes;
use App\Mcontact;
use App\Mvisit;

class Cvmpoltekkes1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mvmpoltekkes::all();
        $d = Mcontact::all();
        $da = Mvisit::all();
        return view ('vm_poltekes',compact('data','d','da'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Mcontact::all();
        return view ('vcontact',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Mcontact();
        $data->contact = $request->contact;
        $data->save();
        return redirect()->back()->with('alert-success','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Mvisit::all();
        return view ('visit',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data = new Mvisit();
        $data->visit = $request->visit;
        $data->save();
        return redirect()->back()->with('alert-success','Data berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $data = \App\Mvisit::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('alert-success','Data berhasil dihapus!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = \App\Mcontact::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('alert-success','Data berhasil dihapus!');
    }
}
