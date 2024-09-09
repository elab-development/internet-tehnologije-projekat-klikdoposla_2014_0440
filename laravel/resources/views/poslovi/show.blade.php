@extends('layouts.app')
@section('content')
<a href="/poslovi/public/profile" class="btn btn-default"> Vrati se nazad</a>
<h1> Podaci:</h1>
    <div> Website: {{$r->website}} </div>
    <div> Veštine: {{$r->skills}} </div>
    <div> Kompanija: {{$r->company}} </div>
    <div> Lokacija: {{$r->location}} </div>
    <div> Biografija: {{$r->bio}} </div>
    <div> Status: {{$r->status}} </div>
    <div> Github: {{$r->githubusername}} </div>
    <div> Iskustvo: {{$r->experience}} </div>
    <div> Obrazovanje: {{$r->education}} </div>
    <a href="/poslovi/public/profile/{{$r->id}}/edit" class="btn btn-defualt">Izmeni</a>
    {!!Form::open(['action'=>['App\Http\Controllers\ProfileController@destroy',$r->id,
    'method'=>'POST','class'=>'pull-right']])!!}
    {!!Form::hidden('_method','DELETE')!!}
    {!!Form::submit('Izbriši',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
@endsection
