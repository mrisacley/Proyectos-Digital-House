<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"> <!-- favicon !! -->
</head>
<body>
    <div class="container">
        <?php include_once "nav.php" ?>
        <main>
            <div class="tituloPrincipal">
                <h1>BIENVENIDO!</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore deserunt, laborum nesciunt adipisci cupiditate alias eius nihil consectetur. Vel asperiores recusandae placeat, aliquid sunt quae quibusdam quo a perferendis alias?</p>
            </div>
            <div id="nobroken">
                <section id="nobroken"class="categorias">
                    <article class="titulo">
                        <h2>Categorías</h2>
                    </article>
                    <article class="categoria">
                        <ul>
                            <li><a href="Geo.php">Geografía</a></li>
                            <li><a href="music.php">Música</a></li>
                            <li><a href="cine.php">Cine</a></li>
                            <li><a href="depo.php">Deportes</a></li>
                            <li><a href="history.html">Historia</a></li>
                        </ul>
                    </article>
                    <article class="boton">
                        <a class="btn btn-outline-dark" href="#" role="button">Ver más</a>
                    </article>
                </section>
                <section class="ranking">
                    <article class="titulo">
                        <img src="img/podium.png" width="30" height="30" alt="">
                        <h2>Ranking </h2>
                    </article>
                    <article class="posiciones">
                        <ol>
                            <li><img src="img/1puesto.png" alt=""><a href="profile.php">Usuario 1</a></li>
                            <li><img src="img/2puesto.png" alt=""><a href="profile.php">Usuario 2</a></li>
                            <li><img src="img/3puesto.png" alt=""><a href="profile.php">Usuario 3</a></li>
                            <li><img src="img/laurel.png" alt=""><a href="profile.php">Usuario 4</a></li>
                            <li><img src="img/laurel.png" alt=""><a href="profile.php">Usuario 5</a></li>
                        </ol>
                    </article>
                    <article class="boton">
                        <a class="btn btn-outline-dark" href="ranking.php" role="button">Ver más</a>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</html>
