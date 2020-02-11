@extends('layouts.plantilla')
@section('title','Ingresar')
@section('main')
    <div>
        <section class="categorias">
                <article class="titulo">
                        <h2>Ingresar</h2>
                </article>
                <form action="" method="post"><!--Aca empieza el formulario-->
                    <article class="categoria">
                            <small id="emailHelp" class="form-text font-weight-bold font-italic"></small>
                            <label for="user">Email Registrado</label>
                            <input id="user" type="text" placeholder="Ingrese su email" name="email">
                            <br><small id="emailHelp" class="form-text"></small>
                            <label for="pass">Contraseña</label>
                            <input id="pass" type="password" placeholder="Ingrese su contraseña" name="pass">
                            <br><small id="emailHelp" class="form-text"></small>
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