<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trivia de Geografía</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/preguntas.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
        <?php include_once "nav.php" ?>
        <main>
                <div class="tituloPrincipal"></div>
                <div><section class="preguntas">
                    <form action=".php"
                    method="POST">
                    <h2>Geografía</h2>
                        <article class="group">
                        <div class="pregunta">
                            <img id="geo"src="img/geo.png" alt="imagen sobre pregunta">
                            <label for="oscarsfem">1. ¿Cuál es la capital de Eslovaquia?</label>
                        </div>
                        <div class="respuestas">
                            <label for="Zagreb"><input type="radio" name="capEslov" id="Zagreb" value="Zagreb">Zagreb</label>
                            <label for="Bucarest"><input type="radio" name="capEslov" id="Bucarest" value="Bucarest">Bucarest</label>
                            <label for="Budapest"><input type="radio" name="capEslov" id="Budapest" value="Budapest">Budapest</label>
                            <label for="Bratislava"><input type="radio" name="capEslov" id="Bratislava" value="Bratislava">Bratislava</label>
                        </div>
                        </article>
                        <article class="group">
                            <div class="pregunta">
                                <img id="geo"src="img/geo.png" alt="imagen sobre pregunta">
                                <label for="oscarsfem">1. ¿Cuál es la capital de Eslovaquia?</label>
                            </div>
                            <div class="respuestas">
                                <label for="Zagreb"><input type="radio" name="capEslov" id="Zagreb" value="Zagreb">Zagreb</label>
                                <label for="Bucarest"><input type="radio" name="capEslov" id="Bucarest" value="Bucarest">Bucarest</label>
                                <label for="Budapest"><input type="radio" name="capEslov" id="Budapest" value="Budapest">Budapest</label>
                                <label for="Bratislava"><input type="radio" name="capEslov" id="Bratislava" value="Bratislava">Bratislava</label>
                            </div>
                        </article>
                        <article class="boton">
                            <button type="submit" class="btn btn-outline-dark">Enviar</button>
                        </article>
                    </form>
                </section></div>
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
