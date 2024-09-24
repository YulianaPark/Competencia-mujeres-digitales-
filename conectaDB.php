<?php
function conectaDB() {
    $host = "localhost";  // Cambia esto por tu host (generalmente 'localhost')
    $user = "root";        // Cambia esto por tu usuario (generalmente 'root' en entornos locales)
    $pass = "";            // Cambia esto por tu contraseña
    $dbname = "sistema_de_salud";    // Cambia esto por tu base de datos

    // Crear la conexión
    $conn = new mysqli($host, $user, $pass, $dbname);

    // Verificar la conexión
    if ($conn->connect_errno) {
        // Mostrar el error específico de conexión
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    return $conn;
}
?>
