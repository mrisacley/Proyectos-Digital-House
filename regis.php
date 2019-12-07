<?php

require_once "funciones.php";
session_start();

$erroresRegis=[];
$usuario=[];

if ($_POST){
    $erroresRegis = validarRegis($_POST);
    if (count($erroresRegis) == 0){
        $usuario = [
            "nombre" => $_POST["usr"],
            "email" => $_POST["email"],
            "pass" => password_hash($_POST["pass"], PASSWORD_DEFAULT)
        ];
    if($_FILES["avatar"]["error"] === UPLOAD_ERR_OK){
              $avtName = $_FILES["avatar"]["name"];
              $archivo = $_FILES["avatar"]["tmp_name"];
              $ext = pathinfo($avtName, PATHINFO_EXTENSION);
              $subirA = dirname(__FILE__);
              $subirA = $subirA . "/avatar/";
              $subirA = $subirA . uniqid();
              $subirA = $subirA . ".jpg";
              move_uploaded_file($archivo,$subirA);
              $usuario["avatar"] = $subirA;
    }
        $_SESSION["userMail"] = $usuario["email"];
        crearCookie($_POST,$usuario);
        $usuario = json_encode($usuario);
        $usuarioGuardado = file_put_contents("usuario.json", $usuario . PHP_EOL , FILE_APPEND);
        header("location: profile.php");
        exit;
    };
};

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Cuenta</title>
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
                                <h2>Registro</h2>
                        </article>
                        <form method="post" enctype="multipart/form-data">
                            <article class="categoria"><!--Aca empieza el formulario-->
                                    <label for="usr">Nombre De Usuario</label>
                                    <input id="usr"type="text" placeholder="Ingrese su nick" name="usr" value="<?=persistencia($erroresRegis,"usr")?>">
                                    <br><small id="emailHelp" class="form-text"><?= (isset($erroresRegis["usr"])) ? $erroresRegis["usr"] : "" ?></small>
                                    <label for="email">Email</label>
                                    <input id="email" type="email" placeholder="Ingrese su email" name="email" value="<?=persistencia($erroresRegis,"email")?>">
                                    <br><small id="emailHelp" class="form-text"><?= (isset($erroresRegis["email"])) ? $erroresRegis["email"] : "" ?></small>
                                    <label for="pass">Contraseña</label>
                                    <input id="pass"type="password"placeholder="Ingrese su contraseña" name="pass">
                                    <br><small id="emailHelp" class="form-text"><?= (isset($erroresRegis["pass"])) ? $erroresRegis["pass"] : "" ?></small>
                                    <label for="passConf">Confirmar contraseña</label>
                                    <input id="passConf"type="password"placeholder="Confirma la contraseña" name="repass">
                                    <br><small id="emailHelp" class="form-text"><?= (isset($erroresRegis["repass"])) ? $erroresRegis["repass"] : "" ?></small>
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
        </main>
        <footer>
            <section class="FAQ"><a href="FAQ.php">Preguntas Frecuentes</a></section>
            <section class="contacto"><a href="contact.php">Contáctanos</a></section>
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
