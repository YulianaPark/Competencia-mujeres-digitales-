<?php
$host = 'localhost'; // Cambia esto si tu host es diferente
$user = 'tu_usuario'; // Tu usuario de MariaDB
$password = ''; // Deja vacío si no hay contraseña
$dbname = 'sistema_de_salud'; // El nombre de la base de datos

// Crear conexión
$mysqli = new mysqli($host, $user, $password, $dbname);

// Verificar conexión
if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
} else {
    echo "Conexión exitosa a la base de datos.";
}

// Cerrar conexión
$mysqli->close();
?>