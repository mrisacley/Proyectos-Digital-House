<?php
  session_start();
  require_once 'clases/conexion.php';
  require_once 'clases/categorias.php';
  require_once "clases/pregunta.php";
  $objPregunta = new Pregunta;
  $todasPreguntas = $objPregunta->mostrarPreguntas();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <div class="container">
      <?php include_once "nav.php" ?>
        <main class="abm">
        <div class="arreglo"><section class="tabla">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Pregunta</th>
                    <th scope="col">Opcion Correcta</th>
                    <th scope="col">Opcion 1</th>
                    <th scope="col">Opcion 2</th>
                    <th scope="col">Opcion 3</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php foreach ($todasPreguntas as $preguntas) { ?>
                      <th scope="row"><?= $preguntas["id"];?></th>
                      <td><?= $preguntas["pregunta"];?></td>
                      <td><?= $preguntas["opcion_correcta"];?></td>
                      <td><?= $preguntas["opcion2"];?></td>
                      <td><?= $preguntas["opcion3"];?></td>
                      <td><?= $preguntas["opcion4"];?></td>
                    <?php } ?>
                  <tr>
                </tbody>
              </table>
              <div class="buttom">
                <button class="guardar"><a href="ModifPregunta.php">Modificar Pregunta</a></button>
                <input class="guardar"value="Regresar" onclick="history.back()" type="button">
              </div>
        </section></div>
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
