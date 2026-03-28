<?php
$host = "mysql-florezapi.alwaysdata.net";
$user = "florezapi";
$password = "florez12";
$db = "florezapi_juego";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
