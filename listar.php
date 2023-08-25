<?php 
include_once 'crud.php';
// obten la lista de usuarios de la base de datos
$rows = listarUsuarios();
$users = pg_fetch_all($rows);
if($rows){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
    <!-- Agrega la referencia a Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="css/my_styles.css">
</head>
<body class="bg-dark">
    <div class="container mt-5 justify-content-center align-items-center">
        <h1 class="text-white">Listado de Usuarios</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>CI</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Sexo</th>
                    <th>Edad</th>
                    <th>Celular</th>
                    <th>Correo</th>
                    <th>Carrera</th>
                    <th>Nivel de Acceso</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($users as $row) {
                echo "<tr>";
                echo "<td>{$row['ci']}</td>";
                echo "<td>{$row['nombres']}</td>";
                echo "<td>{$row['apellidos']}</td>";
                echo "<td>{$row['sexo']}</td>";
                echo "<td>{$row['edad']}</td>";
                echo "<td>{$row['celular']}</td>";
                echo "<td>{$row['correo']}</td>";
                echo "<td>{$row['carrera']}</td>";
                echo "<td>{$row['nivel']}</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        <div class="">
            <a href="home.php" class="btn btn-primary mx-3">Volver</a>
            <a href="cerrar_sesion.php" class="btn btn-danger mx-3">Cerrar Sesión</a>
            <a href="delete.html" class="btn btn-danger mx-3">Eliminar</a>
            <a href="form_agregar.html" class="btn btn-primary mx-3">Agregar</a>
            <a href="read.html" class="btn btn-warning mx-3">Actualizar</a>
        </div>
    </div>
</body>
</html>

<?php }else{
    echo "No hay usuarios registrados";
}
?>