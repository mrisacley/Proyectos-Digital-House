<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trivia de Música</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/preguntas.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
        <header>
        <?php include_once "nav.php" ?>
        </header>
        <main>
            <div class="tituloPrincipal"></div>
            <div><section class="preguntas">
                <form action=".php"
                        method="POST">
                        <h2>Música</h2>
                            <article class="group">
                            <div class="pregunta">
                                <img id="music"src="img/music.png" alt="imagen sobre pregunta">
                                <label for="oscarsfem">1. ¿Quién de los siguientes artistas es "El rey del Rock"?</label>
                            </div>
                            <div class="respuestas">
                                <label for="MJackson"><input type="radio" name="reyDelRock" id="MJackson" value="MJackson">Michael Jackson</label>
                                <label for="EPresley"><input type="radio" name="reyDelRock" id="EPresley" value="EPresley">Elvis Presley</label>
                                <label for="FMercury"><input type="radio" name="reyDelRock" id="FMercury" value="FMercury">Freddie Mercury</label>
                                <label for="PMcCartney"><input type="radio" name="reyDelRock" id="PMcCartney" value="PMcCartney">Paul McCartney</label>
                            </div>
                            </article>
                            <article class="group">
                                <div class="pregunta">
                                    <img id="music"src="img/music.png" alt="imagen sobre pregunta">
                                    <label for="oscarsfem">1. ¿Quién de los siguientes artistas es "El rey del Rock"?</label>
                                </div>
                                <div class="respuestas">
                                    <label for="MJackson"><input type="radio" name="reyDelRock" id="MJackson" value="MJackson">Michael Jackson</label>
                                    <label for="EPresley"><input type="radio" name="reyDelRock" id="EPresley" value="EPresley">Elvis Presley</label>
                                    <label for="FMercury"><input type="radio" name="reyDelRock" id="FMercury" value="FMercury">Freddie Mercury</label>
                                    <label for="PMcCartney"><input type="radio" name="reyDelRock" id="PMcCartney" value="PMcCartney">Paul McCartney</label>
                                </div>
                            </article>
                            <article class="boton">
                                <button type="submit" class="btn btn-outline-dark">Enviar</button>
                            </article>
                </form>
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
