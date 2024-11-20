<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="carrucel.css">
    <link rel="stylesheet" href="menu.css">
    <title>Tienda de Juegos</title>
</head>
<body>
    <?php
$servidor = "localhost";
$usuario = "root"; // Cambiar si tu usuario es diferente
$password = ""; // Cambiar si tienes contraseña
$base_datos = "tienda_juegos";

// Conexión a la base de datos
$conn = new mysqli($servidor, $usuario, $password, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>