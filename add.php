<?php
include_once 'crud.php';

$ci = trim($_POST['ci']);
$nombre = trim($_POST['nombre']);
$apellido = trim($_POST['apellido']);
$contraseña = trim($_POST['contrasena']);
$sexo = trim($_POST['sexo']);
$celular = trim($_POST['celular']);
$correo = trim($_POST['email']);
$carrera = trim($_POST['carrera']);
$nivelAcceso = trim($_POST['nivelAcceso']);

if (agregarUsuario($ci, $nombre, $apellido, $contraseña, $sexo, $celular, $correo, $carrera, $nivelAcceso)){
    echo "Usuario agregado correctamente";
    // Espera 3 segundos antes de redirigir
    echo '<script>window.setTimeout(function(){window.location.href = "home.php";}, 3000);</script>';
} else {
    echo "Error al agregar usuario";
}
?>