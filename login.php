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

$query = mysqli_query($conn, "SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if ($nr == 1) {
    header("Location: cita.php"); // Redirige a la página de bienvenida
    exit();
} else if ($nr == 0) {
    echo "No ingreso";
}

mysqli_close($conn);
?>
