<?php

require_once "funciones.php";
session_start();

$erroresLogin = [];
$usuarios = [];

if ($_POST){
    $erroresLogin = validarRegis($_POST);
    $users = file_get_contents("usuario.json");
    $users = explode(PHP_EOL, $users);
    array_pop($users);
    foreach($users as $user){
        $usuario = json_decode($user, true);
        if($usuario["email"] == $_POST["email"]){
            if(password_verify($_POST["pass"] , $usuario["pass"])){
                $_SESSION["userMail"] = $usuario["email"];
                crearCookie($_POST,$usuario);
                header("location:index.php");
                exit;
            }
        } elseif(!empty($_POST["usr"]) && !empty($_POST["pass"])){
            if ($usuario["nombre"] != $_POST["usr"] || !password_verify($_POST["pass"], $usuario["pass"])) {
                $erroresLogin["datosIncorrectos"] = "Los datos ingresados son incorrectos";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingresar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
        <?php include_once "nav.php" ?>
        <main>
            <div>
                <section class="categorias">
                        <article class="titulo">
                                <h2>Ingresar</h2>
                        </article>
                        <form action="" method="post"><!--Aca empieza el formulario-->
                            <article class="categoria">
                                    <small id="emailHelp" class="form-text font-weight-bold font-italic"><?= (isset($erroresLogin["datosIncorrectos"])) ? $erroresLogin["datosIncorrectos"] : "" ?></small>
                                    <label for="user">Email Registrado</label>
                                    <input id="user" type="text" placeholder="Ingrese su email" name="email">
                                    <br><small id="emailHelp" class="form-text"><?= (isset($erroresLogin["email"])) ? $erroresLogin["email"] : "" ?></small>
                                    <label for="pass">Contraseña</label>
                                    <input id="pass" type="password" placeholder="Ingrese su contraseña" name="pass">
                                    <br><small id="emailHelp" class="form-text"><?=(isset($erroresLogin["pass"])) ? $erroresLogin["pass"] : "" ?></small>
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
        </main>
        <footer>
            <section class="FAQ"><a href="FAQ.html">Preguntas Frecuentes</a></section>
            <section class="contacto"><a href="contact.html">Contáctanos</a></section>
            <section class="redes">
                <h6>Encuéntranos en:</h6>
                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            </section>
        </footer>
    </div>
</body>
<!--aca termina el codigo -->
<script src="https://kit.fontawesome.com/67f61afa3e.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
