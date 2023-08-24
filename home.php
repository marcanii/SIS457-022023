<?php
// Iniciar la sesión
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Portafolio</title>
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="css/my_styles.css">
    
</head>
<body>
    <div class="position-absolute w-50" style="opacity: 0.1; left: 5%">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
        <path fill="#363753"
            d="M32.5,-57.5C40.2,-51.9,43.2,-39.3,50.7,-28.5C58.3,-17.8,70.4,-8.9,76.5,3.5C82.7,16,82.8,32,74.6,41.5C66.3,51,49.6,54,35.8,58.8C21.9,63.5,11,70.1,-1.1,71.9C-13.1,73.7,-26.2,70.9,-40.6,66.4C-55,62,-70.8,56,-76,44.7C-81.3,33.3,-75.9,16.7,-69.4,3.8C-62.8,-9.1,-55,-18.2,-49.3,-28.7C-43.7,-39.3,-40.1,-51.4,-32.3,-56.9C-24.4,-62.5,-12.2,-61.6,0.1,-61.7C12.4,-61.9,24.8,-63.2,32.5,-57.5Z"
            transform="translate(100 220)" />
        </svg>
    </div>
    <nav class="navbar navbar-expand-lg border-body bg-dark">
        <div class="container">
            <a class="navbar-brand text-white"><?php echo $_SESSION['nombres'].' '.$_SESSION['apellidos'];?></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-nav" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nav" href="#">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nav" href="#">Acerca de Mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nav" href="#">Contacto</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto d-flex ms-auto">
                    <li class="nav-item">
                        <a href="cerrar_sesion.php" class="btn bg-btn-custom text-white">Cerrar Sesión</a>
                    </li>
                    <?php
                    if($_SESSION['nivel'] == 0){ // 0 es admin y 1 es usuario?>
                    <li>
                        <a href="javascript:cargarContenido('admin.php')" class="btn bg-btn-custom text-white">Admin Panel</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="p-5 text-center mb-5 text-white justify-content-center align-items-center main-custom" id="contenido">
        <div class="bienvenido">
            <h1 class="mb-3">¡Bienvenido!</h1>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis vel, minus aut maiores laborum
            libero deleniti saepe natus alias. Quaerat veniam ipsum rerum debitis libero est eos aut
            reprehenderit cupiditate!
            </p>
        </div>
    </div>

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            &copy; 2023 Mi Portafolio
        </div>
    </footer>

    <!-- Enlace a Bootstrap JS (opcional, para ciertas funcionalidades) -->
    <script src="./js/bootstrap/bootstrap.min.js"></script>
    <script src="js/my_script.js"></script>
</body>
</html>
