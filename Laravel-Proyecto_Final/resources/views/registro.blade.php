@extends('layouts.plantilla')
@section('title','Crear cuenta')
@section('main')
    <div>
        <section class="categorias">
                <article class="titulo">
                    <h2>Registro</h2>
                </article>
                <form method="post" enctype="multipart/form-data">
                    <article class="categoria"><!--Aca empieza el formulario-->
                        <label for="usr">Nombre De Usuario</label>
                        <input id="usr"type="text" placeholder="Ingrese su nick" name="usr" value="">
                        <br><small id="emailHelp" class="form-text"></small>
                        <label for="email">Email</label>
                        <input id="email" type="email" placeholder="Ingrese su email" name="email" value="">
                        <br><small id="emailHelp" class="form-text"></small>
                        <label for="pass">Contraseña</label>
                        <input id="pass"type="password"placeholder="Ingrese su contraseña" name="pass">
                        <br><small id="emailHelp" class="form-text"></small>
                        <label for="passConf">Confirmar contraseña</label>
                        <input id="passConf"type="password"placeholder="Confirma la contraseña" name="repass">
                        <br><small id="emailHelp" class="form-text"></small>
                        <input type="file" name="avatar" id="avatar">
                        <div class="alLado">
                            <input type="checkbox" name="recordar" id="recordar">
                            <label for="recordar">Recordarme</label>
                        </div>
                        <label for=""><a href="login.php">¿Ya tenes una cuenta?</a></label>
                    </article>
                    <article class="boton">
                        <button type="submit" class="btn">Crear Cuenta</button>
                    </article>
                </form>
        </section>
    </div>
@endsection