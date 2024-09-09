@extends('layouts.app')
@section('content')
<!-- dodali smo dugme da nas vrati na prethodnu stranicu -->
<a href="/poslovi/public/post" class="btn btn-default"> Vrati se nazad</a>
<h1>{{$rez->name}} {{$rez->text}}</h1>
    <div>
        Datum objave:{{$rez->datum_objave}}
    </div>
    <!-- <div>
        Website: {{$rez->website}}
    </div>
    <div>
        ID profila: {{$rez->profile_id}}
    </div>
    <div>
        ID korisnika: {{$rez->user_id}}
     </div> -->
    <a href="/poslovi/public/post/{{$rez->id}}/edit" class="btn btn-defualt">Izmeni</a>
    {!!Form::open(['action'=>['App\Http\Controllers\PostController@destroy',$rez->id,
    'method'=>'POST','class'=>'pull-right']])!!}
    {!!Form::hidden('_method','DELETE')!!}
    {!!Form::submit('Izbriši',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
@endsection
