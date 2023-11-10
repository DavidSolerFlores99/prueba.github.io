<?php
$filename = "usuarios.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $apellido = $_POST["apellido"];
    $nombre = $_POST["nombre"];
    $mail = $_POST["mail"];
    $curso = $_POST["curso"];
    $usuario = $_POST["usuario"];
    $password = $_POST["password"]; // Guardamos la contraseña en texto plano

    $data = "$apellido|$nombre|$mail|$curso|$usuario|$password\n";

    if (file_exists($filename)) {
        $existing_users = file_get_contents($filename);
        $existing_users = explode("\n", $existing_users);

        foreach ($existing_users as $user) {
            $fields = explode("|", $user);
            
            // Verificar si hay suficientes elementos en el array antes de acceder a $fields[4]
            if (isset($fields[4]) && $fields[4] == $usuario) {
                echo "<html><head><title>Error de Registro</title></head><body>";
                echo "<p>Nombre de usuario ya registrado. Por favor, elige otro. <a href='registro.html'>Volver al registro</a>.</p>";
                echo "</body></html>";
                exit(); // Importante salir del script después de mostrar el mensaje de error
            }
        }
    }

    file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);

    echo "<html><head><title>Registro Exitoso</title></head><body>";
    echo "<p>Registro exitoso. Ahora puedes <a href='inicio.html'>iniciar sesión</a>.</p>";
    echo "</body></html>";
}
?>
