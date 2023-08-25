<?php
include_once 'crud.php';

$id = $_POST['ci'];
if(eliminarUsuario($id)){
    echo "Usuario eliminado correctamente";
    // Espera 3 segundos antes de redirigir
    echo '<script>window.setTimeout(function(){window.location.href = "listar.php";}, 3000);</script>';
} else {
    echo "Error al eliminar el usuario";
}
?>