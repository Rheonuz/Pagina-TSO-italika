<?php
$host = "localhost";
$user = "dev_user";
$pass = "MxRon4ldoxM";
$db = "italika_db";

$conexion = mysqli_connect($host, $user, $pass, $db);
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
