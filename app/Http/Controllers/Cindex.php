<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mvmpoltekkes;
use App\Madvonews;
use App\Manggota;
use App\MOrmawa;
use App\Mpemira;
use App\Maktivitas;
use App\Mvmdpm;



class Cindex extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iya = Maktivitas::orderBy('id','desc')->paginate(3);
        $oke = Manggota::orderBy('id','asc')->paginate(3);
        $apa = MOrmawa::orderBy('id','desc')->paginate(6);
        $data = Mvmpoltekkes::all();
        $oi = Mvmdpm::all();
        $bos = Maktivitas::orderBy('id','desc')->paginate(1);
        $war = Maktivitas::orderBy('id','desc')->paginate(3);
        $gas = Maktivitas::orderBy('id','desc')->paginate(2);
        $war = Madvonews::orderBy('id','desc')->paginate(3);
        return view ('index',compact('data','iya','oke','apa','bos','war','gas','oi'));
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
