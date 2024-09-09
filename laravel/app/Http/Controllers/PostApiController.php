<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Http\Resources\PostResource;
//use App\Models\Roller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Post::all();

    }
    public function create()
    {
        return view('api.create');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $rez)
    {
        return new PostResource($rez);

    }
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
        $success= $r->save();
        return [
                 'success' => $success
            ];
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
        return view('api.edit')->with('rez',$rez);
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

        $rez = Post::find($id);
        $success= $rez->update($request->all());
        return [
             'success' => $success
        ];
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy($id)
    {
          $rez = Post::find($id);
          $success = $rez->destroy($id);

        return [
            'success' => $success
        ];
    }
    public function search($name)
    {
         return Post::where('name','like','%'.$name.'%')->get();
    }
}
