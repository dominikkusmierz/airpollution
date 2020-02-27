@extends('layouts.main')


@section('content')

<h1 style="color:black;font-size:40px;padding:40px;" align="center">Stacja: {{$name}}</h1>


<div class="container-sm" style="width:50vw;background:white;opacity:0.8;">
    <hr />

    @if($quality->so2IndexLevel)
    <b>Dwutlenek siarki:</b> {{$quality->so2IndexLevel->indexLevelName}} <small> - {{$quality->so2CalcDate}}</small>
    <hr />
    @endif

    @if($quality->no2IndexLevel)
    <b>Dwutlenek azotu:</b> {{$quality->no2IndexLevel->indexLevelName}} <small> - {{$quality->no2CalcDate}}</small>
    <hr />
    @endif

    @if($quality->coIndexLevel)
    <b>Tlenek węgla:</b> {{$quality->coIndexLevel->indexLevelName}} <small> - {{$quality->coCalcDate}}</small>
    <hr />
    @endif

    @if($quality->pm10IndexLevel)
    <b>Pył zawieszony PM10:</b> {{$quality->pm10IndexLevel->indexLevelName}} <small> -
        {{$quality->pm10CalcDate}}</small>
    <hr />
    @endif

    @if($quality->pm25IndexLevel)
    <b>Pył zawieszony PM25:</b> {{$quality->pm25IndexLevel->indexLevelName}} <small> -
        {{$quality->pm25CalcDate}}</small>
    <hr />
    @endif

    @if($quality->o3IndexLevel)
    <b>Ozon:</b> {{$quality->o3IndexLevel->indexLevelName}} <small> -
        {{$quality->o3CalcDate}}</small>
    <hr />
    @endif

    @if($quality->c6h6IndexLevel)
    <b>Benzen:</b> {{$quality->c6h6IndexLevel->indexLevelName}} <small> -
        {{$quality->c6h6CalcDate}}</small>
    <hr />
    @endif
    
    

</div>
@endsection