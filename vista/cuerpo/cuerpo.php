<?php include_once "../modal/modal.php"; ?>
<!-- Botones para controlar la música -->
<button id="play-button">Reproducir Música</button>
<button id="stop-button" style="display: none;">Detener Música</button>
<link rel="stylesheet" href="../cuerpo/cuerpo.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<script src="../cuerpo/cuerpo.js" defer></script>

<div id="contenedor" class="contenedor"></div>

<form id="formulario" method="POST">
    <i id="anterior" name="anterior" class="fas fa-arrow-circle-left izquierda"></i>
    <i id="siguiente" name="siguiente" class="fas fa-arrow-circle-right derecha"></i>
</form>



<!-- Elemento de audio -->
<audio id="background-music" src="../cuerpo/musica.mp3"></audio>

<script>
    // Obtener elementos de audio y botones
    const audio = document.getElementById('background-music');
    const playButton = document.getElementById('play-button');
    const stopButton = document.getElementById('stop-button');

    // Función para reproducir música
    function playMusic() {
        audio.play();
        playButton.style.display = 'none'; // Ocultar botón de reproducir
        stopButton.style.display = 'inline'; // Mostrar botón de detener
    }

    // Función para detener música
    function stopMusic() {
        audio.pause();
        audio.currentTime = 0; // Reiniciar la música al inicio
        stopButton.style.display = 'none'; // Ocultar botón de detener
        playButton.style.display = 'inline'; // Mostrar botón de reproducir
    }

    // Añadir eventos de clic a los botones
    playButton.addEventListener('click', playMusic);
    stopButton.addEventListener('click', stopMusic);

    // Reproducir música al hacer clic en el contenedor
    document.getElementById('contenedor').addEventListener('click', playMusic);
</script>
