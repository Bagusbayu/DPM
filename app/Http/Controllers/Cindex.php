<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mvmpoltekkes;
use App\Madvonews;
use App\Manggota;
use App\MOrmawa;

class Cindex extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iya = Madvonews::orderBy('id','desc')->paginate(2);
        $oke = Manggota::orderBy('id','asc')->paginate(3);
        $apa = MOrmawa::orderBy('id','desc')->paginate(6);
        $data = Mvmpoltekkes::all();
        return view ('index',compact('data','iya','oke','apa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$data = Mvmpoltekkes::all();
        //return view ('vm_poltekkes',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
