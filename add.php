<?php
include_once 'crud.php';

$ci = trim($_POST['ci']);
$nombre = trim($_POST['nombre']);
$apellido = trim($_POST['apellido']);
# incriptar contraseña sha1 
$contraseña = sha1(trim($_POST['contrasena']));
echo "<script>console.log('Contraseña: $contraseña');</script>";
$sexo = trim($_POST['sexo']);
$edad = trim($_POST['edad']);
$celular = trim($_POST['celular']);
$correo = trim($_POST['email']);
$carrera = trim($_POST['carrera']);
$nivelAcceso = trim($_POST['nivelAcceso']);

if (agregarUsuario($ci, $nombre, $apellido, $contraseña, $sexo, $edad, $celular, $correo, $carrera, $nivelAcceso)){
    echo "Usuario agregado correctamente";
    // Espera 3 segundos antes de redirigir
    echo '<script>window.setTimeout(function(){window.location.href = "listar.php";}, 3000);</script>';
} else {
    echo "Error al agregar usuario";
}
?>