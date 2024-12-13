<?php

namespace App\Http\Controllers;

use App\Models\Profile;

use Illuminate\Http\Request;

class ProfileController extends Controller
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
        $r = Profile::all();
        return view('poslovi.index')->with('r',$r);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('poslovi.create');
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
            'website'=>'required',
            'status'=>'required',
            'skills'=>'required',
            'company'=>'required',
            'location'=>'required',
            'bio'=>'required',
            'githubusername'=>'required',
            'experience'=>'required',
            'education'=>'required',
     ]);
        $r = new Profile();
        $r->website = $request->input('website');
        $r->status = $request->input('status');
        $r->skills = $request->input('skills');
        $r->company = $request->input('company');
        $r->location = $request->input('location');
        $r->bio = $request->input('bio');
        $r->githubusername = $request->input('githubusername');
        $r->experience = $request->input('experience');
        $r->education = $request->input('education');
        $r->save();
        return redirect('/profile')->with('success','Profil je uspešno kreiran!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $r = Profile::find($id);
        return view('poslovi.show')->with('r',$r);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $r = Profile::find($id);
        return view('poslovi.edit')->with('r',$r);
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
        $r = Profile::find($id);
        $r->website = $request->input('website');
        $r->status = $request->input('status');
        $r->skills = $request->input('skills');
        $r->company = $request->input('company');
        $r->location = $request->input('location');
        $r->bio = $request->input('bio');
        $r->githubusername = $request->input('githubusername');
        $r->experience = $request->input('experience');
        $r->education = $request->input('education');
        $r->save();
        return redirect('/profile')->with('success','Profil je uspešno izmenjen!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b = Profile::find($id);
        $b->delete();
        return redirect('/profile')->with('success','Profil je uspešno obrisan!');
    }
}
