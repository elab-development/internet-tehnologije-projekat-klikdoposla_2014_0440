@extends('layouts.app')
@section('content')
    <h1>Kreiraj profil</h1>

    {!! Form::open(['action'=>['App\Http\Controllers\ProfileController@store'],'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('website','Website')}}

         {{Form::text('website','',['class'=>'form-control','placeholder'=>'website'])}}
    </div>
    <div class="form-group">
        {{Form::label('skills','Veštine')}}

         {{Form::text('skills','',['class'=>'form-control','placeholder'=>'skills'])}}
    </div>
    <div class="form-group">
         {{Form::label('company','Kompanija')}}

        {{Form::text('company','', ['class'=>'form-control','placeholder'=>'company'])}}
    </div>
    <div class="form-group">
         {{Form::label('location','Lokacija')}}

        {{Form::text('location','', ['class'=>'form-control','placeholder'=>'location'])}}
    </div>
    <div class="form-group">
        {{Form::label('bio','Biografija')}}

        {{Form::text('bio','', ['class'=>'form-control','placeholder'=>'bio'])}}
    </div>
    <div class="form-group">
        {{Form::label('status','Status')}}

        {{Form::text('status','', ['class'=>'form-control','placeholder'=>'status'])}}
    </div>
    <div class="form-group">
        {{Form::label('githubusername','Github')}}
        {{Form::text('githubusername','', ['class'=>'form-control','placeholder'=>'githubusername'])}}
    </div>
    <div class="form-group">
        {{Form::label('experience','Iskustvo')}}
        {{Form::text('experience','', ['class'=>'form-control','placeholder'=>'experience'])}}
    </div>
    <div class="form-group">
        {{Form::label('education','Obrazovanje')}}
        {{Form::text('education','', ['class'=>'form-control','placeholder'=>'education'])}}
    </div>
    {{Form::submit('Pošalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection
