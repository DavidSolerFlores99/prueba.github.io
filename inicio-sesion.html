<?php
$filename = "usuarios.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    if (file_exists($filename)) {
        $existing_users = file_get_contents($filename);
        $existing_users = explode("\n", $existing_users);

        foreach ($existing_users as $user) {
            $fields = explode("|", $user);

            if (isset($fields[4]) && isset($fields[5]) && $fields[4] == $usuario && $fields[5] == $password) {
                // Inicio de sesión exitoso
                session_start();
                $_SESSION['usuario'] = $usuario; // Guardar el nombre de usuario en la sesión
                header("Location: pagina-restringida.php"); // Redirigir a la página restringida
                exit();
            }
        }
    }

    echo "Nombre de usuario o contraseña incorrectos. <a href='inicio.html'>Intentar de nuevo</a>.";
}
?>
