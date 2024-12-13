@extends('layouts.app')
@section('content')
    <h1> Izmeni objavu</h1>

    {!! Form::open(['action'=>['App\Http\Controllers\PostController@update',$rez->id],'method'=>'POST']) !!}
   <!--  ovo ispod je bootstrap -->
   <div class="form-group">
    {{Form::label('name','Naslov')}}

     {{Form::text('name',$rez->name,['class'=>'form-control','placeholder'=>'name'])}}
</div>
<div class="form-group">
     {{Form::label('text','Tekst')}}

    {{Form::text('text',$rez->text, ['class'=>'form-control','placeholder'=>'text'])}}
</div>
    {{Form::label('datum_objave','Datum objave')}}

    {{ Form::date('datum_objave', $rez->datum_objave, ['class'=>'form-control','placeholder'=>'datum_objave'])}}
</div>
<!-- <div class="form-group">
    {{Form::label('vreme','Vreme')}}

    {{Form::time('vreme', $rez->vreme, ['class'=>'form-control','placeholder'=>'vreme'])}}
</div>
<div class="form-group">
    {{Form::label('studio','Studio')}}

    {{Form::text('studio', $rez->studio, ['class'=>'form-control','placeholder'=>'studio'])}}
</div> -->
<div class="form-group">
    {{Form::label('profile_id','Profile id')}}

    {{Form::text('profile_id', $rez->profile_id, ['class'=>'form-control','placeholder'=>'profile_id'])}}
</div>
<div class="form-group">
    {{Form::label('user_id','User id')}}

    {{Form::text('user_id', $rez->user_id, ['class'=>'form-control','placeholder'=>'user_id'])}}
</div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Pošalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
