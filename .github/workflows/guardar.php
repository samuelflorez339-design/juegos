<?php
include("conexion.php");

$jugador = $_POST['jugador'];
$puntos = $_POST['puntos'];

$sql = "INSERT INTO puntajes(jugador, puntos)
        VALUES ('$jugador','$puntos')";

$conn->query($sql);
?>