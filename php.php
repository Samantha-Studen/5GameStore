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
    <?php include 'conexion.php'; ?>

    <header>
        <h1>5GAME STORE</h1>
    </header>

    <section>
        <div class="style.css">
           <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificamos si el formulario envió datos del producto
    if (isset($_POST['producto'])) {
        $productoSeleccionado = $_POST['producto'];
        echo "Agregaste este producto a tu carrito: " . htmlspecialchars($productoSeleccionado);
    } else {
        echo "No has seleccionado ningún producto.";
    }
} else {
    echo "No se recibió ningún formulario.";
}
?>


        </div>
    </section>

    <footer><p>© 2024 Tienda de Videojuegos. Todos los derechos reservados.</p></footer>
</body>
</html>
