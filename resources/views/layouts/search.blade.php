@extends('layouts.main')



@section('content')


<div class="container">
<h1>AirPollution</h1>
<br/>
<form action='/search' method='GET'>
<div class="input-group mb-3">
    <input type="text" name="city" class="form-control" placeholder="Miasto" aria-label="Miasto" aria-describedby="button-addon2">
    <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Szukaj</button>
    </div>
    
  </div>
  <hr/>
  <a href="/allstations">
    <small>Wszystkie stacje</small>
    </a>
</form>
</div>
@endsection