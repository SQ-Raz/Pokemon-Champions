<?php include_once "../modal/modal.php"; ?>
<!-- Botones para controlar la música -->
<button id="play-button">Reproducir Música</button>
<button id="stop-button" style="display: none;">Detener Música</button>
<link rel="stylesheet" href="../cuerpo/cuerpo.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<script src="../cuerpo/cuerpo.js" defer></script>

<div id="contenedor" class="contenedor"></div>
<div class="containerSpinner">
<div id="spinner" style="display: none;" class="spinner" role="status"></div>
</div>

<form id="formulario" method="POST">
    <i id="anterior" name="anterior" class="fas fa-arrow-circle-left izquierda"></i>
    <i id="siguiente" name="siguiente" class="fas fa-arrow-circle-right derecha"></i>
</form>



<!-- Elemento de audio -->
<audio id="background-music" src="../cuerpo/musica.mp3"></audio>

