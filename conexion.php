<?php
// Datos de conexión a la base de datos PostgreSQL
$host = "localhost"; // Por lo general, "localhost" si está en el mismo servidor
$port = "5432"; // Puerto predeterminado de PostgreSQL
$dbname = "bd_sis427";
$user = "postgres";
$password = "root";

// Cadena de conexión
$conn_string = "host=$host port=$port dbname=$dbname user=$user password=$password";

// Establecer la conexión
$conn = pg_connect($conn_string);

// Verificar si la conexión se realizó con éxito
if (!$conn) {
    die("Error de conexión: " . pg_last_error());
}

//echo "Conexión exitosa a la base de datos PostgreSQL!";
?>