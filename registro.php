<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>

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
                echo "Nombre de usuario ya registrado. Por favor, elige otro.";
                exit();
            }
        }
    }

    file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);

    echo "Registro exitoso. Ahora puedes <a href='inicio.html'>iniciar sesión</a>.";
}
?>

</body>
</html>
