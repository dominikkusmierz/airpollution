@extends('layouts.main')

@section('content')


<div class="container-sm">
    <h1 style="color:black;font-size:20px;padding-top:10px;">Wszystkie stacje:</h1>

    <ul class="list-group">
        @foreach($stations as $station)
        <a style="color:black; text-decoration:none" href="/station/{{$station->stationName}}/{{$station->id}}/">
         <li class="list-group-item">{{$station->stationName}}</li>
        </a>
        @endforeach
    </ul>
</div>

@endsection