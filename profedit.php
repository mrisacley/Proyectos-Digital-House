<?php
  require_once "funciones.php";
  session_start();
  $usuarioLogeado;
  if($_SESSION){
    $users = file_get_contents("usuario.json");
    $users = explode(PHP_EOL, $users);
    array_pop($users);
    foreach($users as $user){
      $usuario = json_decode($user, true);
      if($_SESSION["userMail"] == $usuario["email"]){
        $usuarioLogeado = $usuario;
      }
    }
  }

  $erroresPerfil=[];

  if($_POST){
    $erroresPerfil = validarRegis($_POST);
    if (count($erroresPerfil) == 0){
      echo "todo bien";
      $users = file_get_contents("usuario.json");
      $users = explode(PHP_EOL, $users);
      array_pop($users);
      foreach($users as $user){
        $usuario = json_decode($user, true);
        if($_SESSION["userMail"] == $usuario["email"]){
          $usuario = [
            "nombre" => $_POST["usr"],
            "email" => $usuario["email"],
            "pass" => $usuario["pass"],
            "nick" => $_POST["nick"],
            "edad" => $_POST["edad"],
            "pais" => $_POST["pais"]
          ];
          $usuario = json_encode($usuario);
          $usuarioGuardado = file_put_contents("usuario.json", $usuario . PHP_EOL , FILE_APPEND);
          header("Location:profile.php");
          exit;
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
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
    <?php include_once "nav.php" ?>
<main class="profedit">
  <section class="edit">
    <article class="pic">
      <img src="img/uppic.png" alt="" width="200px" height="200px;">
      <button type="button" name="button">Modificar Imagen</button>
    </article>
    <article class="info">
      <form method="post">
          <label for="nickPublico"> Tu Nick Público:</label>
          <input type="text" name="nick" value="<?=$usuarioLogeado["nombre"]?>">
          <small class="text-danger"><?= (isset($erroresPerfil["nick"])) ? $erroresPerfil["nick"] : "" ?></small>
          <label for="nombre">Tu Nombre Público:</label>
          <input type="text" name="usr">
          <small class="text-danger"><?= (isset($erroresPerfil["usr"])) ? $erroresPerfil["usr"] : "" ?></small>
          <label for="edad">Fecha de Nacimiento:</label>
          <input type="date" name="date">
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
          <button type="submit">Guardar Cambios</button>
          <button type="submit" formaction="profile.php">Volver</button>
      </form>
    </article>
  </section>
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
