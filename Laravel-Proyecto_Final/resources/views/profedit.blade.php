@extends('layouts.plantilla')
@section('title',"Perfil")
@section('main')
<div class="agreg">
  <section class="agreg">

    <article class="pic">
      <img src="img/uppic.png" width="200px" height="200px;">
      <button type="button" name="button">Modificar Imagen</button>
    </article>
    <article class="agreg">
      <div class="asd">
      <form method="post">
        @csrf
          <label for="nickPublico"> Tu Nick Público:</label>
          <input type="text" name="usuario" value="">
          <label for="edad">Fecha de Nacimiento:</label>
          <input type="date" name="date" value="">
          <label for="pais">Pais:</label>
          <select class="paises" name="pais" id="pais">
            <option value="">--Seleccione--</option>
            <option value="Chile">Chile</option>
            <option value="Argentina">Argentina</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Bolivia">Bolivia</option>
          </select>
          <br>
          <input type="submit" name="" value="Guardar cambios">
          <a href="/perfil">Volver</a>
      </form>
        </div>
    </article>
  </section>
  </div>
@endsection
