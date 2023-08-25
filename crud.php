<?php
// Conexión a la base de datos (ajusta los valores según tu configuración)
include_once 'conexion.php';
// Función para agregar un nuevo usuario
// INSERT INTO persona (ci, nombres, apellidos, contraseña, sexo, celular, correo, carrera)
function agregarUsuario($ci, $nombre, $apellido, $contraseña, $sexo, $edad, $celular, $correo, $carrera, $nivelAcceso) {
    global $conn;
    // Insertar datos en la tabla 'persona'
    $sql = "INSERT INTO persona (ci, nombres, apellidos, contraseña, sexo, edad, celular, correo, carrera)
    VALUES ($ci, '$nombre', '$apellido', '$contraseña', '$sexo', $edad, $celular, '$correo', '$carrera')";

    if (pg_query($conn, $sql)) {
        // Insertar datos en la tabla 'usuario'
        $sql = "INSERT INTO usuario (ci, nivel) VALUES ('$ci', $nivelAcceso)";
        if (pg_query($conn, $sql)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

// Función para actualizar un usuario
function actualizarUsuario($ci, $nombre, $apellido, $contraseña, $sexo, $edad, $celular, $correo, $carrera, $nivelAcceso) {
    global $conn;
    // Actualizar datos en la tabla 'persona'
    $sql = "UPDATE persona
            SET nombres='$nombre', apellidos='$apellido', contraseña='$contraseña', sexo='$sexo', edad=$edad, celular='$celular', correo='$correo', carrera='$carrera'
            WHERE ci=$ci";
    if (pg_query($conn, $sql)) {
        // Actualizar datos en la tabla 'usuario'
        $sql = "UPDATE usuario SET nivel=$nivelAcceso WHERE ci='$ci'";
        if (pg_query($conn, $sql)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

// Función para buscar un usuario por ID
function buscarUsuario($personaId) {
    global $conn;
    // Buscar usuario en la tabla 'persona'
    $sql = "SELECT p.*, u.nivel FROM persona p
            INNER JOIN usuario u ON p.ci = u.ci
            WHERE p.ci=$personaId";

    $result = pg_query($conn, $sql);
    $row = pg_fetch_assoc($result);
    if ($row > 0) {
        return $row;
    } else {
        return null;
    }
}

// Función para eliminar un usuario por ID
function eliminarUsuario($personaId) {
    global $conn;
    // Eliminar usuario de la tabla 'usuario'
    $sql = "DELETE FROM usuario WHERE ci='$personaId'";
    if (pg_query($conn, $sql)) {
        // Eliminar persona de la tabla 'persona'
        $sql = "DELETE FROM persona WHERE ci='$personaId'";
        if (pg_query($conn, $sql)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

// función para listar los usuarios
function listarUsuarios() {
    global $conn;
    // Buscar usuarios en la tabla 'persona'
    $sql = "SELECT p.*, u.nivel FROM persona p
            INNER JOIN usuario u ON p.ci = u.ci";

    $result = pg_query($conn, $sql);
    $row = pg_fetch_assoc($result);
    if ($row > 0) {
        return $result;
    } else {
        return null;
    }
}
?>
