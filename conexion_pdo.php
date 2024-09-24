<?php
$host = 'localhost'; // Cambia esto si tu host es diferente
$dbname = 'sistema_de_salud'; // El nombre de la base de datos
$user = 'root'; // Usuario por defecto si no tienes otro configurado
$password = ''; // Deja vacío si no hay contraseña

try {
    $dsn = "mysql:host=$host;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password);

    // Establecer el modo de error de PDO a excepción
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

// Cerrar conexión
$pdo = null;
?>