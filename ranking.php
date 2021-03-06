<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ranking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
    <?php include_once "nav.php" ?>
        <main>
            <div class="tituloPrincipal">
                <h1>Ranking</h1>
            </div>
            <div><section class="tabla">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Puntuación</th>
                            <th scope="col">Mejor categoría</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td> <a href="profile.php"> Usuario 1 </a></td>
                            <td>1000</td>
                            <td>Historia</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><a href="profile.php">Usuario 2</a></td>
                            <td>890</td>
                            <td>Cine</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td><a href="profile.php">Usuario 3</a></td>
                            <td>780</td>
                            <td>Música</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td><a href="profile.php">Usuario 4</a></td>
                            <td>670</td>
                            <td>Música</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td><a href="profile.php">Usuario 5</a></td>
                            <td>550</td>
                            <td>Geografía</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td><a href="profile.php">Usuario 6</a></td>
                            <td>340</td>
                            <td>Historia</td>
                        </tr>
                    </tbody>
                </table>
            </div></section>
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
