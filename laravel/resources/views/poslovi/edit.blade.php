@extends('layouts.app')
@section('content')
    <h1> Izmeni podatke </h1>

    {!! Form::open(['action'=>['App\Http\Controllers\ProfileController@update',$r->id],'method'=>'POST']) !!}
   <!--  ovo ispod je bootstrap -->
   <div class="form-group">
    {{Form::label('website','Website')}}

     {{Form::text('website',$r->website,['class'=>'form-control','placeholder'=>'website'])}}
</div>
<div class="form-group">
    {{Form::label('skills','Veštine')}}

     {{Form::text('skills',$r->skills,['class'=>'form-control','placeholder'=>'skills'])}}
</div>
<div class="form-group">
     {{Form::label('company','Kompanija')}}

    {{Form::text('company',$r->company, ['class'=>'form-control','placeholder'=>'company'])}}
</div>
<div class="form-group">
     {{Form::label('location','Lokacija')}}

    {{Form::text('location',$r->location, ['class'=>'form-control','placeholder'=>'location'])}}
</div>
<div class="form-group">
    {{Form::label('bio','Biografija')}}

    {{Form::text('bio',$r->bio, ['class'=>'form-control','placeholder'=>'bio'])}}
</div>
<div class="form-group">
    {{Form::label('status','Status')}}

    {{Form::text('status',$r->status, ['class'=>'form-control','placeholder'=>'status'])}}
</div>
<div class="form-group">
    {{Form::label('githubusername','Github')}}

   {{Form::text('githubusername',$r->githubusername, ['class'=>'form-control','placeholder'=>'githubusername'])}}
</div>
<div class="form-group">
    {{Form::label('experience','Iskustvo')}}

   {{Form::text('experience',$r->experience, ['class'=>'form-control','placeholder'=>'experience'])}}
</div>
<div class="form-group">
    {{Form::label('education','Obrazovanje')}}

   {{Form::text('education',$r->education, ['class'=>'form-control','placeholder'=>'education'])}}
</div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Pošalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
