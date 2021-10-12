@extends('poll')

@section('text')
  <input id="fullName" name="fullName" type="text" class="form-control" placeholder="Nombre..." value="{{ old('fullName') }}">
@endsection

@section('gender')
  <div class="radio">
    <label class="radio-inline">
      <input id="genderMen" name="gender" type="radio" value="Hombre" checked> Hombre
    </label>
    <label class="radio-inline">
      <input id="genderWoman" name="gender" type="radio" value="Mujer"> Mujer
    </label>
  </div>
@endsection

@section('hobby')
  <div class="radio">
    <label class="radio-inline">
      <input id="hobbyNone" name="hobby" type="radio" value="Ninguno" onChange="offQuestion4(this);" checked> Ninguno
    </label>
    <label class="radio-inline">
      <input id="hobbySport" name="hobby" type="radio" value="Deporte" onChange="onQuestion4(this);"> Deporte
    </label>
    <label class="radio-inline">
      <input id="hobbyMusical" name="hobby" type="radio" value="Musical" onChange="onQuestion4(this);"> Musical
    </label>
    <label class="radio-inline">
      <input id="hobbyCook" name="hobby" type="radio" value="Cocina" onChange="onQuestion4(this);"> Cocina
    </label>
    <label class="radio-inline">
      <input id="hobbyBunk" name="hobby" type="radio" value="Literario" onChange="onQuestion4(this);"> Literario
    </label>
    <label class="radio-inline">
      <input id="hobbyCrafts" name="hobby" type="radio" value="Manualidades" onChange="onQuestion4(this);"> Manualidades
    </label>
    <label class="radio-inline">
      <input id="hobbyGames" name="hobby" type="radio" value="Juegos" onChange="onQuestion4(this);"> Juegos
    </label>
    <label class="radio-inline">
      <input id="hobbyModeling" name="hobby" type="radio" value="Modelismo" onChange="onQuestion4(this);"> Modelismo
    </label>
    <label class="radio-inline">
      <input id="hobbyDance" name="hobby" type="radio" value="Baile" onChange="onQuestion4(this);"> Baile
    </label>
    <label class="radio-inline">
      <input id="hobbyCinema" name="hobby" type="radio" value="Cine" onChange="onQuestion4(this);"> Cine
    </label>
    <label class="radio-inline">
      <input id="hobbyOther" name="hobby" type="radio" value="Otro" onChange="onQuestion4(this);"> Otro
    </label>
  </div>
@endsection

@section('number')
  <input id="hrsHobby" name="hrsHobby" type="number" class="form-control" placeholder="Horas de hobby..." value="{{ old('content') }}">
@endsection