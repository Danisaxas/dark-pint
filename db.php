<?php
// Configuración de la base de datos
$host = 'localhost';        // El servidor de la base de datos, típicamente 'localhost'
$dbname = 'nombre_base_datos'; // El nombre de la base de datos
$username = 'usuario';      // Tu usuario de la base de datos
$password = 'contraseña';   // La contraseña para acceder a la base de datos

// Crear la conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
