<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\MAdminDPM;

class CAdminDPM extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = MAdminDPM::all();
        return view ('vadmindpm',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('inputadmindpm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new MAdminDPM();
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect()->route('vadmindpm.index')->with('alert-success','Data berhasil ditambah!');
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
        $data = MAdminDPM::where('id',$id)->get();
        return view('updateadmindpm',compact('data'));
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
        $data = MAdminDPM::where('id',$id)->first();
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect()->route('vadmindpm.index')->with('alert-success','Data berhasil diubah!');
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

     public function login(){
        return view('loginadmindpm');
    }
     public function loginPost(Request $request){
            $username = $request->username;
            $password = $request->password;
            $data = MAdminDPM::where('username',$username)->first();
            if($data){ 
                if(Hash::check($password, $data->password)){
                    Session::put('usernname',$data->username);
                    Session::put('login',TRUE);
                    return redirect('vadminsuper');
                }
                else{
                    return redirect('loginadmindpm')->with('alert','Password atau Email, Salah !'.Hash::check($password,$data->password));
                }
            }
            else{
                return redirect('loginadmindpm')->with('alert','Password atau Email, Salah!');
            }
        }
    public function logout(){
            Session::flush();
            return redirect('loginadmindpm')->with('alert','Kamu sudah logout');
    }
}
