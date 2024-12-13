@extends('layouts.app')
@section('content')
    <h1> Napiši objavu</h1>

    {!! Form::open(['action'=>['App\Http\Controllers\PostApiController@store'],'method'=>'POST']) !!}

  <div class="form-group">
    {{Form::label('name','Name')}}
     {{Form::text('name','',['class'=>'form-control','placeholder'=>'name'])}}
</div>
<div class="form-group">
     {{Form::label('text','Text')}}
    {{Form::text('text','', ['class'=>'form-control','placeholder'=>'text'])}}
</div>
    {{Form::label('datum_objave','Datum objave')}}
    {{ Form::date('datum_objave', '', ['class'=>'form-control','placeholder'=>'datum_objave'])}}
</div>
<!-- <div class="form-group">
    {{Form::label('brDana','Broj dana')}}
    {{Form::text('brDana','', ['class'=>'form-control','placeholder'=>'brDana'])}}
</div>
<div class="form-group">
    {{Form::label('kontakt','Kontakt')}}
    {{Form::text('kontakt','', ['class'=>'form-control','placeholder'=>'kontakt'])}}
</div> -->
<!-- <div class="form-group">
    {{Form::label('bicikla_id','Bicikla id')}}
    {{Form::text('bicikla_id','', ['class'=>'form-control','placeholder'=>'bicikla_id'])}}
</div> -->
<div class="form-group">
    {{Form::label('user_id','User id')}}
    {{Form::text('user_id','', ['class'=>'form-control','placeholder'=>'user_id'])}}
</div>
    {{Form::submit('Pošalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection
