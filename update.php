<?php
include_once 'crud.php';

$ci = trim($_POST['ci']);
$nombre = trim($_POST['nombre']);
$apellido = trim($_POST['apellido']);
$contraseña = trim($_POST['contrasena']);
$sexo = trim($_POST['sexo']);
$edad = trim($_POST['edad']);
$celular = trim($_POST['celular']);
$correo = trim($_POST['email']);
$carrera = trim($_POST['carrera']);
$nivelAcceso = trim($_POST['nivelAcceso']);

if(actualizarUsuario($ci, $nombre, $apellido, $contraseña, $sexo, $edad, $celular, $correo, $carrera, $nivelAcceso)){
    echo "Usuario actualizado correctamente";
    // Espera 3 segundos antes de redirigir
    echo '<script>window.setTimeout(function(){window.location.href = "listar.php";}, 3000);</script>';
} else {
    echo "Error al actualizar el usuario";
}
?>