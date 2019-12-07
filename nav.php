<header>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php"> <img src="img/icon2.png" width="35" height="35" alt=""></a>
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <?php if (!$_SESSION):?>
                <li class="nav-item">
                    <a class="nav-link" href="regis.php">Registro</a>
                </li>
                <?php endif; ?>
                <?php if (!$_SESSION):?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <?php endif; ?>
                <?php if ($_SESSION): ?>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Perfil</a>
                </li>
                <?php endif; ?>
                <?php if ($_SESSION): ?>
                <li class="nav-item">
                    <a class="nav-link" href="logOut.php">Cerrar Sesión</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>