@extends('layouts.app')
@section('content')
    <h1>Objave</h1>
     @if(count($rez)>0)
    @foreach ($rez as $r)
        <div class="well">
            <h3> <a href = "/poslovi/public/post/{{$r->id}}">Prikaži objavu: {{$r->name}}</a> </h3>
            <p> Datum objave: {{$r->datum_objave}}</p>
</div>
    @endforeach
    @endif
@endsection
