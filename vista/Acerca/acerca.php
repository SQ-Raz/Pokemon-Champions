<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="acerca.css">
    <link rel="stylesheet" href="../encabezado/encabezado.css">

    <title>Pokémon Web</title>
</head>

<body>
    <header>
        <div id="logoEmpresa">
            <img id="logo" src="../logos/logo.png" alt="Logo Pokémon Web">
        </div>
        <nav>
            <ul>
                <li><a href="../principal/principal.php">Inicio</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="../contacto/contactanos.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__data">
                    <h3 class="home__subtitle">
                        ¡Atrápalos todos!
                    </h3>

                    <h1 class="home__title">
                        Bienvenidos a <br>
                        nuestra página de Pokémon
                    </h1>

                    <p class="home__description">
                        Explora el mundo de Pokémon junto a Razuk y Linda, desarrolladores apasionados por el diseño web y la programación.
                    </p>

                    <a href="#" class="button">
                        Comenzar <i class="ri-arrow-right-s-line"></i>
                    </a>
                </div>

                <img src="https://i.pinimg.com/736x/81/3f/69/813f691337e47b75429e49cddf5916cd.jpg" alt="home image" class="home__img">
            </div>
        </section>

        <!--==================== Nosotros ====================-->
        <section class="about" id="about">
            <div class="about__bg section">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title">
                            Sobre Nosotros
                        </h2>

                        <p class="about__description">
                            Somos Razuk y Linda, una dupla de desarrolladores web con una pasión compartida por la tecnología y el mundo de Pokémon.
                            Nos especializamos en la creación de sitios web interactivos, y en esta página queremos fusionar nuestros dotes de diseño y programación para ofrecerte una experiencia inmersiva en el universo Pokémon.
                        </p>
                    </div>

                    <img src="https://i.pinimg.com/736x/88/41/e3/8841e37e3f05009c506727cdd20ec3f7.jpg" alt="about image" class="about__img">
                </div>
            </div>
        </section>

        <!--==================== PASOS ====================-->
        <section class="steps" id="steps">
            <div class="steps__bg section">
                <h2 class="section__title">
                    Pasos en Nuestro Proceso de Desarrollo
                </h2>

                <div class="steps__container container grid">
                    <div class="steps__card">
                        <div class="steps__circle">
                            <img src="https://i.pinimg.com/736x/64/14/ea/6414eaf23c2438d4cae92eed0e9c9fbb.jpg" alt="steps image" class="steps__img">
                        </div>
                        <p class="steps__description">
                            Planeación: Definimos objetivos y estructuramos el contenido para un diseño visual efectivo y orientado a la experiencia de usuario.
                        </p>
                    </div>

                    <div class="steps__card">
                        <div class="steps__circle">
                            <img src="https://i.pinimg.com/736x/98/3d/ed/983ded9a1855695097f42540d3f60788.jpg" alt="steps image" class="steps__img">
                        </div>
                        <p class="steps__description">
                            Diseño: Creación de elementos visuales inspirados en el mundo Pokémon, con una estética amigable y accesible.
                        </p>
                    </div>

                    <div class="steps__card">
                        <div class="steps__circle">
                            <img src="https://i.pinimg.com/236x/19/c6/e2/19c6e240dff064405fd27bf5bf2ff287.jpg" alt="steps image" class="steps__img">
                        </div>
                        <p class="steps__description" style="font-weight: bold; margin-top: 10px;">
                            Derechos de autor © 2024 Razuk y Linda. Esta obra se encuentra protegida por derechos de autor. Se permite su uso personal y no comercial, siempre y cuando se otorgue el crédito correspondiente a los autores. Queda prohibido el uso comercial o la monetización de esta página sin el consentimiento explícito de los autores.
                        </p>

                    </div>

                </div>
            </div>
        </section>

    </main>

</body>

</html>