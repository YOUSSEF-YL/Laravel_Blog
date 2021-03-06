<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $user = User::find($id)->first();
        return view('my_account')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $user = User::find($id);
        //dd($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function storimag(string $request)
    {
      

       // 
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image.*' => 'mimes:jpeg,png,jpg,gif,svg',
        ]);

       


        $file = $request->file('image') ;
        $fileName =  time() .'_' . $file->getClientOriginalName() ;
        $destinationPath = public_path().'/uploads/profile' ;
        $file->move($destinationPath,$fileName);

        $imag =  time() .'_' . $file->getClientOriginalName() ;
       

        $user = User::where('id',$id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'lastname' => $request->input('lastname'),
            'username' => $request->input('username'),
            'image' =>  $imag,
           // 'image'image
           
        ]);
        
        
        return redirect('/index');
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
