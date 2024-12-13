<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rez = Post::all();
        return view('rez.index')->with('rez',$rez);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rez.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'name'=>'required',
            'text'=>'required',
            'datum_objave'=>'required',
            //'vreme'=>'required',
            //'studio'=>'required',
            'profile_id'=>'required',
            'user_id'=>'required',

     ]);
        $r = new Post();
        $r->name = $request->input('name');
        $r->text = $request->input('text');
        $r->datum_objave = $request->input('datum_objave');
        //$r->vreme = $request->input('vreme');
        //$r->studio = $request->input('studio');
        $r->profile_id = $request->input('profile_id');
        $r->user_id = $request->input('user_id');
        $r->save();

        return redirect('/post')->with('success','Objava je kreirana!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rez = Post::find($id);
        return view('rez.show')->with('rez',$rez);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rez = Post::find($id);
        return view('rez.edit')->with('rez',$rez);
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

        $r = Post::find($id);
        $r->name = $request->input('name');
        $r->text = $request->input('text');
        $r->datum_objave = $request->input('datum_objave');
        //$r->vreme = $request->input('vreme');
        //$r->studio = $request->input('studio');
        $r->profile_id = $request->input('profile_id');
        $r->user_id = $request->input('user_id');
        $r->save();

        return redirect('/post')->with('success','Objava je izmenjena!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rez = Post::find($id);
        $rez->delete();
        return redirect('/post')->with('success','Objava je izbrisana!');
    }
}
