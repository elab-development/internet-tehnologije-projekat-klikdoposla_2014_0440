@extends('layouts.app')
@section('content')
    <h1> Izmeni objavu </h1>

    {!! Form::open(['action'=>['App\Http\Controllers\PostApiController@update',$rez->id],'method'=>'POST']) !!}
   <!--  ovo ispod je bootstrap -->
   <div class="form-group">
    {{Form::label('name','Name')}}

     {{Form::text('name',$rez->name,['class'=>'form-control','placeholder'=>'name'])}}
</div>
<div class="form-group">
     {{Form::label('text','Text')}}

    {{Form::text('text',$rez->text, ['class'=>'form-control','placeholder'=>'text'])}}
</div>
    {{Form::label('datum_objave','Datum objave')}}

    {{ Form::date('datum_objave', $rez->datum_objave, ['class'=>'form-control','placeholder'=>'datum_objave'])}}
</div>
<!-- <div class="form-group">
    {{Form::label('brDana','Broj dana')}}

    {{Form::text('brDana',$rez->brDana, ['class'=>'form-control','placeholder'=>'brDana'])}}
</div>
<div class="form-group">
    {{Form::label('kontakt','Kontakt')}}

    {{Form::text('kontakt',$rez->kontakt, ['class'=>'form-control','placeholder'=>'kontakt'])}}
</div>-->
<!-- <div class="form-group">
    {{Form::label('user_id','User id')}}

    {{Form::text('user_id',$rez->user_id, ['class'=>'form-control','placeholder'=>'user_id'])}}
</div> -->
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
