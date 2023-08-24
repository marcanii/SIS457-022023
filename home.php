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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">

    <style>
        .bg-custom {
            background-color: #171b177a;
        }
        .bg-icon-custom{
            background-color: #5cd2c6;
        }
        .color-text-custom{
            color: #5cd2c6;
        }
        .bg-btn-custom{
            background-color: #5cd2c6;
            margin-left: 10px;
        }
        .bg-btn-custom:hover{
            background-color: #8ecbcf;
        }
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg border-body">
        <div class="container">
            <a class="navbar-brand color-letra-navbar" href=""><?php echo $_SESSION['nombres'].' '.$_SESSION['apellidos'];?></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link color-letra-navbar" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-letra-navbar" href="#">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-letra-navbar" href="#">Acerca de Mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-letra-navbar" href="#">Contacto</a>
                    </li>
                </ul>
                <form class="d-flex ms-auto" role="search">
                    <input class="form-control bg-light" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn bg-btn-custom" type="submit">Buscar</button>
                </form>
                <form action="cerrar_sesion.php" class="d-flex ms-auto">
                    <button class="btn bg-btn-custom" type="submit">Cerrar Sesión</button>
                </form>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white py-5 bg-header">
        <div class="container text-center">
            <h1>Mi Portafolio</h1>
            <p>¡Bienvenido a mi portafolio! Aquí puedes ver algunos de mis proyectos y aprender más sobre mí.</p>
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center">Mis Proyectos Destacados</h2>
            <!-- Aquí puedes agregar tus proyectos -->
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="imagen-proyecto-1.jpg" class="card-img-top" alt="Proyecto 1">
                        <div class="card-body">
                            <h5 class="card-title">Proyecto 1</h5>
                            <p class="card-text">Descripción breve del proyecto.</p>
                            <a href="#" class="btn btn-primary">Ver Detalles</a>
                        </div>
                    </div>
                </div>
                <!-- Agrega más proyectos similares aquí -->
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            &copy; 2023 Mi Portafolio
        </div>
    </footer>

    <!-- Enlace a Bootstrap JS (opcional, para ciertas funcionalidades) -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
