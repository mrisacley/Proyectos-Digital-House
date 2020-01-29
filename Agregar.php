<?php
    session_start();
    require_once 'clases/conexion.php';
    require_once 'clases/categorias.php';
    require_once "clases/pregunta.php";
    if($_POST){
        $objPregunta = new Pregunta;
        $newQuestion = $objPregunta->agregarPregunta();
        header("location:modificar.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar pregunta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
    <?php include_once "nav.php" ?>
        <main>
            <div class="agreg">
            <section class="agreg">
            <h2>Agregar Pregunta</h2>
                <article class="agreg">
                    <div class="asd">   
                        <form action=""method="POST">
                            <label for="">Valor</label><input type="text" name="puntuacion" class="ancho">
                            <label for="">Pregunta</label><input type="text" name="pregunta" class="ancho">
                            <label for="">Opcion Correcta</label><input type="text" name="opcion_correcta"class="ancho">
                            <label for="">Opcion 1</label><input type="text" name="opcion2"class="ancho">
                            <label for="">Opcion 2</label><input type="text" name="opcion3"class="ancho">
                            <label for="">Opcion 3</label><input type="text" name="opcion4"class="ancho">
                            <div class="buttom">
                                <input class="guardar"value="Guardar"type="submit">
                                <input class="guardar"value="Regresar" formaction="abm.php"type="submit">
                            </div>
                        </form>
                    </div> 
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
