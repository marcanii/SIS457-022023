<?php
include_once 'conexion.php';
$correo = trim($_POST['correo']);
$contrasena = trim($_POST['contrasena']);

$query = "SELECT persona.nombres, persona.apellidos, usuario.nivel
FROM persona INNER JOIN usuario ON persona.ci = usuario.ci
WHERE correo = '$correo' AND contraseña = '$contrasena'";

$result = pg_query($conn, $query);
$row = pg_fetch_assoc($result);
if($row > 0){
    session_start();
    $_SESSION['correo'] = $correo;
    $_SESSION['contrasena'] = $contrasena;
    $_SESSION['nombres'] = $row['nombres'];
    $_SESSION['apellidos'] = $row['apellidos'];
    //echo "Bienvenido";
    header("Location: home.php");
}
?>