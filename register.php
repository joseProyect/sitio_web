<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "prueba";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die("No hay conexión: " . mysqli_connect_error());
}

$nombre = $_POST["Usuario"];
$pass = $_POST["Password"];
$confirm_pass = $_POST["ConfirmPassword"];

if ($pass === $confirm_pass) {
    $query = mysqli_query($conn, "INSERT INTO login (usuario, password) VALUES ('".$nombre."', '".$pass."')");
    if ($query) {
        header("Location: cita.php"); // Redirige a la página de bienvenida
        exit();
    } else {
        echo "Error al registrar usuario: " . mysqli_error($conn);
    }
} else {
    echo "Las contraseñas no coinciden";
}

mysqli_close($conn);
?>
