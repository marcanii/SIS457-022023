<?php
// Conexión a la base de datos (ajusta los valores según tu configuración)
include_once 'conexion.php';

// Función para agregar un nuevo usuario
// INSERT INTO persona (ci, nombres, apellidos, contraseña, sexo, celular, correo, carrera)
function agregarUsuario($ci, $nombre, $apellido, $contraseña, $sexo, $celular, $correo, $carrera, $nivelAcceso) {
    global $conn;
    // Insertar datos en la tabla 'persona'
    $sql = "INSERT INTO persona (ci, nombres, apellidos, contraseña, sexo, celular, correo, carrera)
    VALUES ('$ci', '$nombre', '$apellido', '$contraseña', '$sexo', '$celular', '$correo', '$carrera')";

    if (pg_query($conn, $sql)) {
        // Insertar datos en la tabla 'usuario'
        $sql = "INSERT INTO usuario (ci, nivel) VALUES ('$ci', '$nivelAcceso')";
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
function actualizarUsuario($ci, $nombre, $apellido, $contraseña, $sexo, $celular, $correo, $carrera, $nivelAcceso) {
    // Actualizar datos en la tabla 'persona'
    $sql = "UPDATE persona
            SET nombres='$nombre', apellidos='$apellido', contraseña='$contraseña', sexo='$sexo', celular='$celular', correo='$correo', carrera='$carrera'
            WHERE ci='$ci'";
    if ($conn->query($sql) === TRUE) {
        // Actualizar datos en la tabla 'usuario'
        $sql = "UPDATE usuario SET nivel='$nivelAcceso' WHERE ci='$ci'";
        if ($conn->query($sql) === TRUE) {
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
    // Buscar usuario en la tabla 'persona'
    $sql = "SELECT p.*, u.nivel_acceso FROM persona p
            INNER JOIN usuario u ON p.ci = u.ci
            WHERE p.ci='$personaId'";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

// Función para eliminar un usuario por ID
function eliminarUsuario($personaId) {
    // Eliminar usuario de la tabla 'usuario'
    $sql = "DELETE FROM usuario WHERE ci='$personaId'";
    if ($conn->query($sql) === TRUE) {
        // Eliminar persona de la tabla 'persona'
        $sql = "DELETE FROM persona WHERE ci='$personaId'";
        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

// Ejemplo de uso:
// if (agregarUsuario("Juan", "Pérez", "Admin")) {
//     echo "Usuario agregado correctamente.";
// } else {
//     echo "Error al agregar usuario.";
// }

// Cierre de la conexión
//$conn->close();
?>
