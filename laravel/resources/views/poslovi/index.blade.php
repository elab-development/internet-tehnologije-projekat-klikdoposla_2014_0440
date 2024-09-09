@extends('layouts.app')
@section('content')
    <h1>Developeri</h1>
    <p> Pretraži i poveži se sa developerima</p>
     @if(count($r)>0)
    @foreach ($r as $r1)
        <div class="well">
            <h3> <a href = "/poslovi/public/profile/{{$r1->id}}">Pogledaj profil: {{$r1->id}}</a> </h3>
</div>
    @endforeach
    @endif
@endsection
