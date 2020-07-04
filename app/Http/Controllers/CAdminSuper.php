<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\MAdminSuper;

class CAdminSuper extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loginadmins');
    }
    public function loginPost(Request $request){
            $name = $request->name;
            $password = $request->password;
            $data = MAdminSuper::where('name',$name)->first();
            if($data){ 
                if(Hash::check($password, $data->password)){
                    Session::put('name',$data->name);
                    Session::put('email',$data->email);
                    Session::put('login',TRUE);
                    return redirect('vadminsuper');
                }
                else{
                    return redirect('loginadmins')->with('alert','Password atau Email, Salah !'.Hash::check($password,$data->password));
                }
            }
            else{
                return redirect('loginadmins')->with('alert','Password atau Email, Salah!');
            }
        }
    public function logout(){
            Session::flush();
            return redirect('loginadmins')->with('alert','Kamu sudah logout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
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
