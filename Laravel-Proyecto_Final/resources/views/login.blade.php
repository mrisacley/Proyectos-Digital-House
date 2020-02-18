@extends('layouts.plantilla')
@section('title','Ingresar')
@section('main')
    <div>
        <section class="categorias">
                <article class="titulo">
                        <h2>Ingresar</h2>
                </article>
                <form action="" method="post"><!--Aca empieza el formulario-->
                  @csrf
                    <article class="categoria">
                            <label for="user">Usuario Registrado</label>
                            <input id="user" type="text" placeholder="Ingrese su usuario" name="usuario" value="{{ old('usuario') }}">
                            @error('usuario')
                                <small id="emailHelp" class="form-text font-weight-bold font-italic text-danger">{{$message}}</small>
                            @enderror
                            <label for="pass">Contraseña</label>
                            <input id="pass" type="password" placeholder="Ingrese su contraseña" name="contraseña">
                            @error('contraseña')
                                <small id="emailHelp" class="form-text font-weight-bold font-italic text-danger">{{$message}}</small>
                            @enderror
                            <div class="alLado">
                                <input type="checkbox" name="recordar" id="recordar">
                                <label for="recordar">Recordarme</label>
                            </div>
                            <label for=""><a href="regis.php">Crear una cuenta</a></label>
                    </article>
                    <article class="boton">
                        <button type="submit" class="btn">Ingresar</button>
                    </article>
                </form>
        </section>
    </div>
@endsection