<?php

namespace App\Http\Controllers;
use App\MAdminSuper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class CAdminS extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = MAdminSuper::all();
        //if(!Session::get('loginadmindpm')){
        //    return redirect('loginadmindpm')->with('alert','Kamu harus login dulu');
        //}
        //else{
        return view ('vadminsuper',compact('data'));
        //}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // if(!Session::get('loginadmindpm')){
       //     return redirect('loginadmindpm')->with('alert','Kamu harus login dulu');
       // }
       // else{
        return view ('inputadminsuper');
    //}
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new MAdminSuper();
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        //$data->name = $request->name;
        $data->save();
        return redirect()->route('vadminsuper.index')->with('alert-success','Data berhasil ditambah!');
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
        $data = MAdminSuper::where('id',$id)->get();
        return view('updateadmins',compact('data'));
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
        $data = MAdminSuper::where('id',$id)->first();
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        //$data->name = $request->name;
        $data->save();
        return redirect()->route('vadminsuper.index')->with('alert-success','Data berhasil diubah!');
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
            $data = MAdminSuper::where('username',$username)->first();
            if($data){ 
                if(Hash::check($password, $data->password)){
                    Session::put('usernname',$data->username);
                    Session::put('loginadmindpm',TRUE);
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
