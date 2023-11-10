<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    // Redirigir si el usuario no ha iniciado sesión
    header("Location: inicio.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Restringida</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h1>
    <p>Contenido de la página restringida.</p>
    <a href="cerrar-sesion.php">Cerrar Sesión</a>
</body>
</html>
