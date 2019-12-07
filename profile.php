<?php 
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
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
      <?php include_once "nav.php" ?>
        <main>
            <div class="pref">
              <section class="profile">
                <article class="profpic">
                  <a href="profedit.php"><img alt="imagen de perfil" src="<?=(isset($usuarioLogeado["avatar"])) ? $usuarioLogeado["avatar"] : 'img/uppic.png'?>" alt="" width="210px" height="210px"></a>
                </article>
                <article class="profinfo">
                  <a href="profedit.php">Editar Perfil</a>
                  <p class="campos">Nick: <?= (isset($usuarioLogeado["nick"])) ? $usuarioLogeado["nick"] : ""?></p>
                  <p class="campos">Nombre Público: <?=$usuarioLogeado["nombre"]?></p>
                  <p class="campos"><?= (isset($usuarioLogeado["edad"])) ? $usuarioLogeado["edad"] : "Edad"?></p>
                  <p class="campos">País: <?= (isset($usuarioLogeado["pais"])) ? $usuarioLogeado["pais"] : ""?> </p>
                  <p class="campos">Usuario desde: 01/01/19</p>
                  <p class="campos">Ranking actual: #0</p>
                  <p class="campos">Mejor Ranking: #0</p>
                  <ul>
                    <li>
                      <img src="img/good.png" alt="">
                      <p>00</p>
                    </li>
                    <li>
                      <img src="img/wrong.png" alt="">
                      <p>00</p>
                    </li>
                    <li>
                      <img src="img/timeout.png" alt="">
                      <p>00</p>
                    </li>
                  </ul>
                  <p class="campos">Tiempo Jugado: 00:00</p>
                  <img class="separador" src="img/linea.png" alt="" width="200px" height="10px">
                  <form action="sub_quest.php">
                    <button type="submit" name="button">Sugerir Pregunta</button>
                  </form>
                  <img class="separador" src="img/linea.png" alt="" width="200px" height="10px">
                  <form class="" action="abm.php" method="post">
                    <button type="submit" name="button">Administrar</button>
                  </form>
                </article>
              </section>
              <section class="perfeed">
                <article class="feed">
                  <div>Ejemplo_Posicion_Actividad Reciente</div>
                  <div>Ejemplo_Posicion_Comunidad</div>
                  <div>Ejemplo_Posicion_Logros</div>
                  <!-- <ul>
                    <li>
                      Actividad reciente

                    </li>
                    <li>Comunidad</li>
                    <li>Logros</li>
                  </ul> -->
                </article>
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
