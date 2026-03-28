<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Ranking</title>
</head>
<body>

<h2>🏆 Ranking de jugadores</h2>

<table border="1">
<tr>
    <th>Jugador</th>
    <th>Puntos</th>
</tr>

<?php
$sql = "SELECT * FROM puntajes ORDER BY puntos DESC";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    echo "<tr>
        <td>{$row['jugador']}</td>
        <td>{$row['puntos']}</td>
    </tr>";
}
?>

</table>

<a href="index.php">Volver</a>

</body>
</html>