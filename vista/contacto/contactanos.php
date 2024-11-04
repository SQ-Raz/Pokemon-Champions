<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contactanos - Pokémon</title>
  <link rel="stylesheet" href="contactanos.css" />
  <link rel="stylesheet" href="../encabezado/encabezado.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet" />
</head>

<body>
  <header>
    <div id="logoEmpresa">
      <img id="logo" src="../logos/logo.png" alt="Logo Empresa">
    </div>
    <nav>
      <ul>
        <li><a href="../principal/principal.php">Inicio</a></li>
        <li><a href="../Acerca/acerca.php">Acerca de</a></li>
        <li><a href="contactanos.php">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <div class="body-form">
    <form>
      <h3 class="h3-form">Contáctanos</h3>
      <span class="line"></span>
      <p class="Coloca-email">Envíanos un mensaje</p>

      <div class="div-formulario">
        <label class="label-form" for="name">Nombre</label>
        <input type="text" name="name" placeholder="Tu nombre" id="name" class="input-form" required />

        <label class="label-form" for="email">Correo</label>
        <input type="email" name="email" placeholder="Tu correo" id="email" class="input-form" required />

        <label class="label-form" for="message">Mensaje</label>
        <textarea name="message" placeholder="Tu mensaje" id="message" class="input-form" rows="4" required></textarea>

        <div class="form-txt">
          <a href="#">Políticas de privacidad</a>
          <a href="#">Términos y condiciones</a>
        </div>
        <input class="btn" type="submit" value="Enviar mensaje" />
      </div>
    </form>
  </div>
</body>

</html>