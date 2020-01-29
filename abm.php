<?php
    session_start();
    require_once 'clases/conexion.php';
    require_once 'clases/categorias.php';
    $objCate = new Categoria;
    $categorias = $objCate->verCategoria();
?>
<!DOCTYPE html>
<html lang="es">
<head>
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
          <section class="modif">
                <h3>Seleccione categoria a trabajar</h3>
                <div><form class="abm" action="agregar.php" method="get">
                  <div class="form-check">
                    <?php foreach ($categorias as $categoria){ ?>
                      <input class="form-check-input" type="radio" name="exampleRadios" value="<?= $categoria["nombre"]?>" checked>
                      <label class="" for="exampleRadios1">
                        <?= $categoria["nombre"] ?>
                      </label>
                    <?php } ?>
                  </div>
                  <div class="buttom">
                    <input type="submit" value="Agregar" class="redirect">
                    <input type="submit" value="Explorar" formaction="modificar.php" class="redirect">
                  </div>
                </form></div>
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
