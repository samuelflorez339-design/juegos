<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Juego Atrapa el Cuadro</title>

<style>
body {
    text-align: center;
    font-family: Arial;
    
}

#game {
    width: 400px;
    height: 400px;
    border: 2px solid black;
    margin: auto;
    position: relative;
}

#target {
    width: 50px;
    height: 50px;
    background: red;
    position: absolute;
    cursor: pointer;
}
</style>

</head>
<body>

<h2>🎮 Atrapa el cuadro</h2>

Nombre: <input type="text" id="jugador">
<br><br>

<div id="game">
    <div id="target"></div>
</div>

<h3>Puntos: <span id="score">0</span></h3>

<button onclick="guardar()">Guardar Puntaje</button>
<a href="ranking.php">Ver Ranking</a>

<script>
let score = 0;
let target = document.getElementById("target");

function mover() {
    let x = Math.random() * 350;
    let y = Math.random() * 350;
    target.style.left = x + "px";
    target.style.top = y + "px";
}

target.onclick = function() {
    score++;
    document.getElementById("score").innerText = score;
    mover();
};

setInterval(mover, 800);

function guardar() {
    let jugador = document.getElementById("jugador").value;

    fetch("guardar.php", {
        method: "POST",
        headers: {"Content-Type": "application/x-www-form-urlencoded"},
        body: "jugador=" + jugador + "&puntos=" + score
    }).then(() => {
        alert("Puntaje guardado");
    });
}
</script>

</body>
</html>